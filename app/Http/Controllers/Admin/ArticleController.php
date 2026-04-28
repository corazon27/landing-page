<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $query = Article::query();

        // Fitur Search Server-side
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                ->orWhere('content', 'like', "%{$search}%");
            });
        }

        // Gunakan paginate() bukan get(). 
        // Ini krusial agar server hanya mengambil 10 baris data saja.
        $articles = $query->latest()->paginate(10)->withQueryString();

        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255|unique:articles,title',
            'content' => 'required',
            'status' => 'required|in:draft,published',
            'published_at' => 'required|date',
            'thumbnail' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $thumbnailPath = $request->hasFile('thumbnail') 
            ? $request->file('thumbnail')->store('thumbnails', 'public') 
            : null;

        $slug = Str::slug($request->title);
        $count = Article::where('slug', 'LIKE', "{$slug}%")->count();
        $finalSlug = $count ? "{$slug}-" . ($count + 1) : $slug;

        Article::create([
            'title' => $request->title,
            'slug' => $finalSlug,
            'content' => $request->content,
            'thumbnail' => $thumbnailPath,
            'status' => $request->status,
            'views' => 0,
            'published_at' => $request->published_at ?? now(),
        ]);

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil diterbitkan!');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        // 1. Validasi Input
        // 'unique:articles,title,' . $id berguna agar Laravel mengizinkan judul yang sama 
        // HANYA jika itu milik artikel ini sendiri (saat tidak ganti judul).
        $request->validate([
            'title' => 'required|max:255|unique:articles,title,' . $id,
            'status' => 'required|in:draft,published',
            'published_at' => 'required|date',
            'content' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // 2. Logika Update Slug (Hanya jika judul berubah)
        if ($article->title !== $request->title) {
            $slug = Str::slug($request->title);
            
            // Cari apakah ada slug serupa milik ARTIKEL LAIN
            $count = Article::where('slug', 'LIKE', "{$slug}%")
                            ->where('id', '!=', $id)
                            ->count();
            
            $article->slug = $count ? "{$slug}-" . ($count + 1) : $slug;
        }

        // 3. Update Data Teks
        $article->title = $request->title;
        $article->content = $request->content;
        $article->status = $request->status;
        $article->published_at = $request->published_at;

        // 4. Logika Ganti Thumbnail
        if ($request->hasFile('thumbnail')) {
            // Hapus thumbnail lama dari folder storage agar tidak menumpuk sampah
            if ($article->thumbnail && Storage::disk('public')->exists($article->thumbnail)) {
                Storage::disk('public')->delete($article->thumbnail);
            }
            
            // Simpan thumbnail baru
            $path = $request->file('thumbnail')->store('thumbnails', 'public');
            $article->thumbnail = $path;
        }

        $article->save();

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil diperbarui!');
    }

    // Fungsi upload gambar CKEditor tetap sama
    public function uploadEditorImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            try {
                $file = $request->file('upload');
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('articles', $filename, 'public');

                return response()->json([
                    'uploaded' => 1,
                    'fileName' => $filename,
                    'url' => asset('storage/' . $path)
                ]);
            } catch (\Exception $e) {
                return response()->json([
                    'uploaded' => 0,
                    'error' => ['message' => 'Gagal upload: ' . $e->getMessage()]
                ]);
            }
        }
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);

        // Hapus file fisik agar tidak memenuhi hosting
        if ($article->thumbnail && Storage::disk('public')->exists($article->thumbnail)) {
            Storage::disk('public')->delete($article->thumbnail);
        }

        $article->delete();

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil dihapus!');
    }
}
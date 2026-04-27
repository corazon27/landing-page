<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        // Menggunakan latest() agar artikel terbaru (berdasarkan created_at) muncul di atas
        $articles = Article::latest()->get();
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'status' => 'required|in:draft,published',
            'published_at' => 'required|date', 
            'thumbnail' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $thumbnailPath = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        Article::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'thumbnail' => $thumbnailPath,
            'status' => $request->status,
            'published_at' => $request->published_at, 
            'views' => 0,
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

        // 1. Validasi Input (Tambahkan published_at)
        $request->validate([
            'title' => 'required|max:255',
            'status' => 'required|in:draft,published',
            'published_at' => 'required|date', // Tambahkan ini
            'content' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // 2. Update data teks & status
        $article->title = $request->title;
        $article->content = $request->content;
        $article->status = $request->status;
        $article->published_at = $request->published_at; // Baris krusial untuk jadwal
        $article->slug = Str::slug($request->title);

        // 3. Logika ganti thumbnail
        if ($request->hasFile('thumbnail')) {
            if ($article->thumbnail) {
                Storage::disk('public')->delete($article->thumbnail);
            }
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
}
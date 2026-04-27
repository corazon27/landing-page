<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $articles = \App\Models\Article::latest()->get();
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        // 1. Validasi Input
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|in:draft,published',
        ]);

        // 2. Olah Gambar Thumbnail (Jika ada)
        $thumbnailPath = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        // 3. Simpan ke Database
        Article::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title), // Otomatis buat URL dari judul
            'content' => $request->content,
            'thumbnail' => $thumbnailPath,
            'status' => $request->status,
            'views' => 0,
        ]);

        // 4. Kembali ke daftar dengan pesan sukses
        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil diterbitkan!');
    }

    public function uploadEditorImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            try {
                $file = $request->file('upload');
                $filename = time() . '_' . $file->getClientOriginalName();
                
                // Simpan file
                $path = $file->storeAs('articles', $filename, 'public');

                // WAJIB: Gunakan format JSON ini agar CKEditor mengenalinya
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
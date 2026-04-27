<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Ambil artikel yang sudah diterbitkan dan jadwalnya sudah lewat
        $articles = Article::where('status', 'published')
            ->where('published_at', '<=', now())
            ->latest('published_at') // Urutkan berdasarkan tanggal terbit terbaru
            ->paginate(9); // Gunakan pagination agar rapi

        return view('front.artikel.index', compact('articles'));
    }

    public function show($slug)
    {
        // Cari artikel berdasarkan slug yang statusnya sudah terbit
        $article = Article::where('slug', $slug)
            ->where('status', 'published')
            ->where('published_at', '<=', now())
            ->firstOrFail();

        // Opsional: Tambah jumlah view setiap kali artikel dibuka
        $article->increment('views');

        return view('front.artikel.show', compact('article'));
    }
}
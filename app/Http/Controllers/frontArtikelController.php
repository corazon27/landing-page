<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Str;

class frontArtikelController extends Controller
{
    public function index(Request $request)
    {
        // Mulai query dengan filter status wajib
        $query = Article::where('status', 'published');

        // Logika Pencarian yang aman (Wrapped in a function)
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                ->orWhere('content', 'like', "%{$search}%");
            });
        }

        // Ambil data
        $articles = $query->latest()->paginate(6)->withQueryString();
        
        $popularArticles = Article::where('status', 'published')
                            ->orderBy('views', 'desc')
                            ->take(5)
                            ->get();
                            
        $latestArticles = Article::where('status', 'published')
                            ->latest()
                            ->take(5)
                            ->get();

        return view('front.artikel.index', compact('articles', 'popularArticles', 'latestArticles'));
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        
        // Tambahkan view count secara sederhana
        $article->increment('views');

        return view('front.artikel.show', compact('article'));
    }
}
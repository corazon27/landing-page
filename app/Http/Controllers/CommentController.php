<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Menyimpan komentar dari pengunjung (Front-end)
     */
    public function store(Request $request, $articleId)
    {
        // 1. Cek Honeypot (Perangkap Bot)
        if ($request->filled('honeypot')) {
            return back()->with('error', 'Aktivitas mencurigakan terdeteksi.');
        }

        // 2. Validasi Input
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:100',
            'comment' => 'required|string|min:5|max:1000',
        ]);

        // 3. Simpan dengan status is_approved = false (Moderasi)
        Comment::create([
            'article_id' => $articleId,
            'name' => strip_tags($validated['name']),
            'email' => $validated['email'],
            'comment' => strip_tags($validated['comment']),
            'is_approved' => false, 
        ]);

        return back()->with('success', 'Komentar Anda terkirim dan sedang menunggu moderasi admin.');
    }

    /**
     * Menampilkan daftar komentar di Dashboard Admin
     */
    public function index()
    {
        // Mengambil komentar terbaru, termasuk data artikel terkait
        $comments = Comment::with('article')->latest()->paginate(10);
        
        return view('admin.comments.index', compact('comments'));
    }

    /**
     * Menyetujui komentar (Moderasi Admin)
     */
    public function approve($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->update(['is_approved' => true]);

        return back()->with('success', 'Komentar berhasil disetujui dan kini tampil di publik.');
    }

    /**
     * Menghapus komentar spam
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return back()->with('success', 'Komentar berhasil dihapus.');
    }
}
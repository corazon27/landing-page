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
        if ($request->filled('honeypot')) {
            return back()->with('error', 'Aktivitas mencurigakan terdeteksi.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:100',
            'comment' => 'required|string|min:5|max:1000',
            'parent_id' => 'nullable|exists:comments,id', // Validasi parent_id jika ada
        ]);

        $comment = Comment::create([
            'article_id' => $articleId,
            'parent_id' => $request->parent_id,
            'name' => $request->name,
            'email' => $request->email,
            'comment' => strip_tags($request->comment),
            'is_approved' => true, // Sesuaikan dengan logika moderasi Anda
        ]);

        // Jika request datang dari AJAX
        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Komentar berhasil dikirim!',
                'data' => [
                    'name' => $comment->name,
                    'comment' => $comment->comment,
                    'parent_id' => $comment->parent_id,
                    'created_at' => $comment->created_at->diffForHumans(),
                    'initial' => strtoupper(substr($comment->name, 0, 1))
                ]
            ]);
        }

        return back()->with('success', 'Komentar/balasan Anda sedang menunggu moderasi admin.');
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
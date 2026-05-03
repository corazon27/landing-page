@extends('components.layout.admin')

@section('title', 'Kelola Komentar')
@section('header', 'Manajemen Komentar')

@section('content')
<div class="container mx-auto px-6 py-8">
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-bold text-slate-800">Kelola Komentar</h2>
    </div>

    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
        {{ session('success') }}
    </div>
    @endif

    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
        <table class="w-full text-left border-collapse">
            <thead class="bg-slate-50 border-b border-slate-100">
                <tr>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-700">Pengirim</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-700">Komentar</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-700">Artikel</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-700">Status</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-700">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($comments as $comment)
                <tr class="hover:bg-slate-50 transition">
                    <td class="px-6 py-4">
                        <div class="text-sm font-bold text-slate-800">{{ $comment->name }}</div>
                        <div class="text-xs text-slate-500">{{ $comment->email }}</div>
                    </td>
                    <td class="px-6 py-4">
                        <p class="text-sm text-slate-600 line-clamp-2 w-64">{{ $comment->comment }}</p>
                    </td>
                    <td class="px-6 py-4">
                        <span class="text-xs font-medium px-2 py-1 bg-slate-100 rounded-md text-slate-600">
                            {{ $comment->article->title }}
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        @if($comment->is_approved)
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Disetujui
                        </span>
                        @else
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                            Pending
                        </span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2">
                            @if(!$comment->is_approved)
                            <form action="{{ route('admin.comments.approve', $comment->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit"
                                    class="text-xs bg-emerald-500 hover:bg-emerald-600 text-white px-3 py-1.5 rounded-lg transition">
                                    Setujui
                                </button>
                            </form>
                            @endif

                            <form action="{{ route('admin.comments.destroy', $comment->id) }}" method="POST"
                                onsubmit="return confirm('Hapus komentar ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-xs bg-rose-500 hover:bg-rose-600 text-white px-3 py-1.5 rounded-lg transition">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-10 text-center text-slate-500 italic">
                        Belum ada komentar yang masuk.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <div class="px-6 py-4 bg-slate-50">
            {{ $comments->links() }}
        </div>
    </div>
</div>
@endsection
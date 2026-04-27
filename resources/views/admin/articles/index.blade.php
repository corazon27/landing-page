@extends('components.layout.admin')

@section('title', 'Kelola Artikel')
@section('header', 'Manajemen Artikel & Konten SEO')

@section('content')
<div class="flex justify-between items-center mb-6">
    <div>
        <h2 class="text-2xl font-bold text-slate-800">Daftar Artikel</h2>
        <p class="text-slate-500 text-sm">Gunakan artikel sebagai pancingan pengunjung dari Search Engine.</p>
    </div>
    <a href="{{ route('admin.articles.create') }}"
        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-xl font-bold transition flex items-center gap-2">
        <i class="fas fa-plus"></i> Tulis Artikel Baru
    </a>
</div>

<div class="bg-white rounded-[2rem] shadow-sm border border-slate-200 overflow-hidden">
    <table class="w-full text-left">
        <thead class="bg-slate-50 border-b border-slate-200">
            <tr>
                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase">Judul Artikel</th>
                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase text-center">Status</th>
                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase text-center">Views</th>
                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase text-right">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
            @forelse($articles as $article)
            <tr class="hover:bg-slate-50 transition">
                <td class="px-6 py-4">
                    <p class="font-semibold text-slate-800">{{ $article->title }}</p>
                    <p class="text-xs text-slate-400">/{{ $article->slug }}</p>
                </td>
                <td class="px-6 py-4 text-center">
                    <span
                        class="px-3 py-1 rounded-full text-[10px] font-bold {{ $article->status == 'published' ? 'bg-green-100 text-green-700' : 'bg-amber-100 text-amber-700' }}">
                        {{ strtoupper($article->status) }}
                    </span>
                </td>
                <td class="px-6 py-4 text-center text-slate-500 text-sm">
                    <i class="fas fa-eye mr-1"></i> {{ $article->views }}
                </td>
                <td class="px-6 py-4 text-right space-x-2">
                    <button class="text-blue-600 hover:bg-blue-50 p-2 rounded-lg transition"><i
                            class="fas fa-edit"></i></button>
                    <button class="text-red-600 hover:bg-red-50 p-2 rounded-lg transition"><i
                            class="fas fa-trash"></i></button>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="px-6 py-12 text-center text-slate-400">
                    <i class="fas fa-newspaper text-4xl mb-3 block opacity-20"></i>
                    Belum ada artikel. Mulai buat "pancingan" konten sekarang!
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
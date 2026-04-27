@extends('components.layout.admin')

@section('title', 'Tulis Artikel Baru')
@section('header', 'Buat Konten Pancingan SEO')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="mb-6">
        <a href="{{ route('admin.articles.index') }}"
            class="text-slate-500 hover:text-blue-600 transition flex items-center gap-2 text-sm font-medium">
            <i class="fas fa-arrow-left"></i> Kembali ke Daftar
        </a>
    </div>

    <div class="bg-white rounded-[2.5rem] shadow-sm border border-slate-100 p-10">
        <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Judul Artikel</label>
                    <input type="text" name="title" required
                        placeholder="Contoh: 5 Alasan UMKM Butuh Website Landing Page"
                        class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-blue-500 outline-none transition">
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Gambar Utama (Thumbnail)</label>
                    <div class="w-full p-4 bg-slate-50 border-2 border-dashed border-slate-200 rounded-2xl text-center">
                        <input type="file" name="thumbnail"
                            class="text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        <p class="text-xs text-slate-400 mt-2">Format: JPG, PNG (Maks 2MB)</p>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Isi Artikel</label>
                    <textarea id="editor" name="content"></textarea>
                </div>

                <div class="flex items-center justify-between pt-6 border-t border-slate-100">
                    <div class="flex items-center gap-4">
                        <label class="text-sm font-bold text-slate-700">Status:</label>
                        <select name="status"
                            class="bg-slate-50 border border-slate-200 rounded-xl px-4 py-2 text-sm font-semibold outline-none">
                            <option value="draft">Simpan Draft</option>
                            <option value="published">Langsung Terbitkan</option>
                        </select>
                    </div>
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-xl font-bold shadow-lg shadow-blue-200 transition">
                        Simpan Artikel
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
<script>
ClassicEditor
    .create(document.querySelector('#editor'))
    .catch(error => {
        console.error(error);
    });
</script>

<style>
.ck-editor__human-interface {
    border-radius: 1rem !important;
    overflow: hidden;
}

.ck-content {
    min-height: 300px;
}
</style>
@endsection
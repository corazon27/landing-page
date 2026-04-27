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
            <div class="space-y-8">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Judul Artikel</label>
                    <input type="text" name="title" required placeholder="Contoh: 5 Tips Memulai Bisnis Affiliate"
                        class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-blue-500 outline-none transition">
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Gambar Utama (Thumbnail)</label>
                    <div
                        class="flex flex-col items-center justify-center w-full p-6 bg-slate-50 border-2 border-dashed border-slate-200 rounded-2xl">
                        {{-- Tempat Preview Muncul --}}
                        <div id="image-preview-container" class="hidden mb-4">
                            <img id="image-preview" src="#" alt="Preview"
                                class="max-h-64 rounded-xl shadow-md border-4 border-white">
                        </div>

                        <div id="upload-placeholder" class="text-center">
                            <i class="fas fa-cloud-upload-alt text-4xl text-slate-300 mb-2"></i>
                            <p class="text-sm text-slate-500">Klik untuk unggah atau drag gambar ke sini</p>
                        </div>

                        <input type="file" name="thumbnail" id="thumbnail-input" accept="image/*"
                            class="mt-4 text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Isi Artikel</label>
                    <div class="prose max-w-none">
                        <textarea id="editor" name="content"></textarea>
                    </div>
                </div>

                <div class="flex items-center justify-between pt-8 border-t border-slate-100">
                    <div class="flex items-center gap-4">
                        <label class="text-sm font-bold text-slate-700">Status:</label>
                        <select name="status"
                            class="bg-slate-50 border border-slate-200 rounded-xl px-4 py-2 text-sm font-semibold outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="draft">Simpan Draft</option>
                            <option value="published">Langsung Terbitkan</option>
                        </select>
                    </div>
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-10 py-4 rounded-2xl font-bold shadow-lg shadow-blue-200 transition-all hover:-translate-y-1">
                        Simpan & Publikasikan
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- Script untuk Preview Gambar & CKEditor Full --}}
<script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
<script>
// 1. Logika Preview Gambar
const thumbnailInput = document.getElementById('thumbnail-input');
const imagePreview = document.getElementById('image-preview');
const previewContainer = document.getElementById('image-preview-container');
const uploadPlaceholder = document.getElementById('upload-placeholder');

thumbnailInput.onchange = evt => {
    const [file] = thumbnailInput.files;
    if (file) {
        imagePreview.src = URL.createObjectURL(file);
        previewContainer.classList.remove('hidden');
        uploadPlaceholder.classList.add('hidden');
    }
}

// 2. Logika CKEditor dengan Fitur Gambar
ClassicEditor
    .create(document.querySelector('#editor'), {
        ckfinder: {
            // URL ini harus sesuai dengan name route di web.php
            uploadUrl: "{{ route('admin.articles.upload', ['_token' => csrf_token()]) }}"
        },
        // Tambahkan ini agar toolbar lebih lengkap
        toolbar: [
            'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList',
            'blockQuote', 'insertTable', 'imageUpload', 'undo', 'redo'
        ]
    })
    .then(editor => {
        // Menambahkan plugin SimpleUpload atau menggunakan Base64 adapter
        // Untuk pemula, Base64 paling disarankan karena tidak perlu buat controller baru untuk upload
    })
    .catch(error => {
        console.error(error);
    });
</script>

<style>
/* Styling agar editor terlihat luas dan modern */
.ck-editor__editable {
    min-height: 400px;
    border-radius: 0 0 1.5rem 1.5rem !important;
    background-color: #f8fafc !important;
    /* slate-50 */
}

.ck-toolbar {
    border-radius: 1.5rem 1.5rem 0 0 !important;
    background-color: #fff !important;
    border-bottom: 1px solid #e2e8f0 !important;
}

.ck.ck-editor__main>.ck-editor__editable:not(.ck-focused) {
    border-color: #e2e8f0;
}
</style>
@endsection
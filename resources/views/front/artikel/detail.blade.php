<x-layout.app>
    {{-- Header & Breadcrumbs Section --}}
    <section class="pt-24 pb-12 bg-slate-50 border-b border-slate-100">
        <div class="max-w-4xl mx-auto px-6 md:px-10 text-center">

            {{-- Navigasi Breadcrumbs 3 Level --}}
            <nav class="flex justify-center mb-8" aria-label="Breadcrumb" data-aos="fade-down">
                <ol
                    class="inline-flex items-center bg-white/80 backdrop-blur-sm px-6 py-2.5 rounded-full border border-slate-200/60 shadow-sm">
                    <li class="inline-flex items-center">
                        <a href="/"
                            class="text-[10px] md:text-xs font-semibold text-slate-500 hover:text-blue-600 transition flex items-center">
                            <i class="fas fa-home mr-2"></i> Beranda
                        </a>
                    </li>

                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-[8px] text-slate-300 mx-3 md:mx-4"></i>
                            <a href="{{ route('front.artikel.index') }}"
                                class="text-[10px] md:text-xs font-semibold text-slate-500 hover:text-blue-600 transition">
                                Daftar Artikel
                            </a>
                        </div>
                    </li>

                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-[8px] text-slate-300 mx-3 md:mx-4"></i>
                            <span
                                class="text-[10px] md:text-xs font-bold text-blue-600 tracking-wide truncate max-w-[150px] md:max-w-none">
                                {{ $article->title }}
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>

            {{-- Metadata Artikel --}}
            <div class="flex items-center justify-center gap-4 mb-6 text-xs font-bold text-blue-600 uppercase tracking-widest"
                data-aos="fade-up">
                <span>{{ $article->category->name ?? 'Edukasi' }}</span>
                <span class="w-1.5 h-1.5 rounded-full bg-slate-300"></span>
                <span class="text-slate-500">{{ $article->created_at->format('d M Y') }}</span>
            </div>

            {{-- Judul Utama Artikel --}}
            <h1 class="text-3xl md:text-5xl font-black text-slate-900 leading-tight" data-aos="fade-up"
                data-aos-delay="100">
                {{ $article->title }}
            </h1>
        </div>
    </section>

    {{-- Konten Utama --}}
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-6 md:px-10">

            {{-- Gambar Utama (Featured Image) --}}
            <div class="rounded-[32px] md:rounded-[48px] overflow-hidden mb-12 shadow-2xl shadow-blue-900/10"
                data-aos="zoom-in">
                <img src="{{ asset('storage/app/public/articles' . $article->image) }}" alt="{{ $article->title }}"
                    class="w-full h-auto object-cover">
            </div>

            {{-- Isi Artikel --}}
            <div class="prose prose-slate prose-lg max-w-none 
                        prose-headings:font-black prose-headings:text-slate-900 
                        prose-p:leading-relaxed prose-p:text-slate-600
                        prose-strong:text-slate-900 prose-a:text-blue-600" data-aos="fade-up">

                {!! $article->content !!}

            </div>

            <hr class="my-16 border-slate-100">

            {{-- Penulis & Share --}}
            <div
                class="flex flex-col md:flex-row justify-between items-center gap-8 bg-slate-50 p-8 rounded-[32px] border border-slate-100">
                <div class="flex items-center">
                    <div
                        class="w-14 h-14 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl mr-4 shadow-lg shadow-blue-200">
                        <i class="fas fa-user-nib"></i>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500 font-bold uppercase tracking-wider">Penulis</p>
                        <h4 class="text-lg font-black text-slate-900">Admin Cakra Inovasi</h4>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <p class="text-sm font-bold text-slate-500">Bagikan:</p>
                    <a href="#"
                        class="w-10 h-10 rounded-xl bg-white border border-slate-200 flex items-center justify-center text-slate-600 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-xl bg-white border border-slate-200 flex items-center justify-center text-slate-600 hover:bg-blue-400 hover:text-white hover:border-blue-400 transition">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Artikel Terkait (Opsional) --}}
    <section class="py-20 bg-slate-50">
        <div class="max-w-6xl mx-auto px-10">
            <h3 class="text-2xl font-black text-slate-900 mb-10 text-center">Baca Artikel Lainnya</h3>
            <div class="grid md:grid-cols-3 gap-8">
                {{-- Di sini Anda bisa melooping artikel lainnya --}}
            </div>
        </div>
    </section>
</x-layout.app>
<x-layout.app>

    <section class="relative pt-20 pb-16 bg-slate-50 overflow-hidden">
        {{-- Elemen Dekoratif Ornamen (Opsional agar tidak sepi) --}}
        <div class="absolute top-0 left-0 w-full h-full opacity-40 pointer-events-none">
            <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-100 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 -right-24 w-72 h-72 bg-indigo-50 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 relative z-10">
            {{-- Navigasi Breadcrumbs di atas --}}
            <nav class="flex justify-center mb-6" aria-label="Breadcrumb" data-aos="fade-down">
                <ol
                    class="inline-flex items-center bg-white/80 backdrop-blur-sm px-6 py-2.5 rounded-full border border-slate-200/60 shadow-sm">
                    <li class="inline-flex items-center">
                        <a href="/"
                            class="text-xs font-semibold text-slate-500 hover:text-blue-600 transition flex items-center">
                            <i class="fas fa-home mr-2.5"></i> Beranda
                        </a>
                    </li>

                    <li aria-current="page">
                        <div class="flex items-center">
                            {{-- Menggunakan mx-4 agar jarak ikon pas dan tidak rapat --}}
                            <i class="fas fa-chevron-right text-[9px] text-slate-300 mx-4"></i>
                            <span class="text-xs font-bold text-blue-600 tracking-wide">Daftar Artikel</span>
                        </div>
                    </li>
                </ol>
            </nav>

            {{-- Konten Utama Header --}}
            <div class="text-center">
                <span
                    class="inline-block px-4 py-1.5 mb-4 text-xs font-extrabold tracking-widest text-blue-600 uppercase bg-blue-100/50 rounded-full">
                    Knowledge Base
                </span>
                <h1 class="text-4xl md:text-5xl font-black text-slate-900 mb-6 tracking-tight leading-tight">
                    Blog & <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-500">Edukasi</span>
                </h1>
                <p class="text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
                    Temukan tips bisnis, tutorial web, dan berita terbaru seputar dunia digital untuk membantu UMKM Anda
                    naik kelas.
                </p>
            </div>
        </div>
    </section>

    <div class="max-w-7xl mx-auto px-4 pb-20">

        <div class="flex flex-col lg:flex-row gap-12">



            <div class="hidden lg:block lg:w-16 pt-3">
                <div class="sticky top-28 flex flex-col gap-4 items-center">

                    {{-- Facebook --}}
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                        target="_blank"
                        class="w-12 h-12 flex items-center justify-center rounded-2xl bg-white border border-slate-100 text-slate-400 hover:bg-[#1877F2] hover:text-white hover:border-[#1877F2] hover:-translate-y-1 transition-all duration-300 shadow-sm"
                        title="Share to Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    {{-- X (Twitter) --}}
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode('Cek artikel menarik ini!') }}"
                        target="_blank"
                        class="w-12 h-12 flex items-center justify-center rounded-2xl bg-white border border-slate-100 text-slate-400 hover:bg-black hover:text-white hover:border-black hover:-translate-y-1 transition-all duration-300 shadow-sm"
                        title="Share to X">
                        <i class="fab fa-x-twitter"></i>
                    </a>

                    {{-- WhatsApp --}}
                    <a href="https://api.whatsapp.com/send?text={{ urlencode('Cek artikel menarik di sini: ' . request()->fullUrl()) }}"
                        target="_blank"
                        class="w-12 h-12 flex items-center justify-center rounded-2xl bg-white border border-slate-100 text-slate-400 hover:bg-[#25D366] hover:text-white hover:border-[#25D366] hover:-translate-y-1 transition-all duration-300 shadow-sm"
                        title="Share to WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                    </a>

                    {{-- Tombol Salin Link Otomatis --}}
                    <button onclick="copyToClipboard('{{ request()->fullUrl() }}')"
                        class="w-12 h-12 flex items-center justify-center rounded-2xl bg-white border border-slate-100 text-slate-400 hover:bg-slate-800 hover:text-white hover:-translate-y-1 transition-all duration-300 shadow-sm"
                        title="Copy Link">
                        <i class="fas fa-link"></i>
                    </button>
                </div>
            </div>

            <div class="flex-1 pt-3">
                <div class="flex flex-col gap-8"> {{-- Jarak antar card --}}
                    @forelse($articles as $article)
                    {{-- Penambahan class bg-white, border, shadow, dan overflow-hidden untuk ketegasan --}}
                    <article
                        class="group bg-white border border-slate-100 rounded-[2.5rem] p-6 shadow-sm hover:shadow-xl hover:border-blue-100 transition-all duration-500 flex flex-col md:flex-row gap-8">

                        {{-- Bagian Thumbnail --}}
                        <div
                            class="md:w-72 h-52 flex-shrink-0 overflow-hidden rounded-[2rem] relative shadow-inner bg-slate-50">
                            <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition duration-700">

                            {{-- Floating Badge --}}
                            <div class="absolute top-4 left-4">
                                <span
                                    class="bg-white/90 backdrop-blur-sm text-blue-700 text-[10px] font-black px-3 py-1 rounded-full uppercase tracking-wider shadow-sm">
                                    EDUKASI TEKNOLOGI
                                </span>
                            </div>
                        </div>

                        {{-- Bagian Konten --}}
                        <div class="flex flex-col justify-center flex-1">
                            <div
                                class="flex items-center gap-3 mb-3 text-slate-400 text-[11px] font-bold uppercase tracking-widest">
                                <span class="flex items-center gap-1.5">
                                    <i class="far fa-calendar-alt text-blue-500"></i>
                                    {{ $article->published_at->format('d M, Y') }}
                                </span>
                                <span class="w-1 h-1 bg-slate-200 rounded-full"></span>
                                <span class="flex items-center gap-1.5">
                                    <i class="far fa-eye text-blue-500"></i>
                                    {{ number_format($article->views) }} Baca
                                </span>
                            </div>

                            <h2
                                class="text-2xl font-black text-slate-800 mb-3 group-hover:text-blue-600 transition leading-tight">
                                <a href="{{ route('front.artikel.detail', $article->slug) }}">
                                    {{ $article->title }}
                                </a>
                            </h2>

                            <p class="text-slate-500 text-sm leading-relaxed mb-6 line-clamp-2">
                                {{ Str::limit(strip_tags($article->content), 140) }}
                            </p>

                            {{-- Penulis Section --}}
                            <div class="flex items-center gap-3 pt-4 border-t border-slate-50 mt-auto">
                                <div
                                    class="w-8 h-8 rounded-full bg-blue-600 flex items-center justify-center text-white shadow-lg shadow-blue-100">
                                    <i class="fas fa-user-check text-[10px]"></i>
                                </div>
                                <div class="flex flex-col">
                                    <span
                                        class="text-[9px] text-slate-400 font-bold uppercase tracking-tighter">Verified
                                        Author</span>
                                    <span class="text-xs font-bold text-slate-700 leading-none">Admin Cakra</span>
                                </div>
                            </div>
                        </div>
                    </article>

                    @empty
                    {{-- State Kosong Tetap Menggunakan Card --}}
                    <div class="bg-white border-2 border-dashed border-slate-100 rounded-[3rem] p-20 text-center">
                        <p class="text-slate-400 font-medium italic">Belum ada artikel yang dipublikasikan.</p>
                    </div>
                    @endforelse
                </div>

                <div class="mt-16">
                    {{ $articles->links() }}
                </div>
            </div>


            <div class="lg:w-80 space-y-8 pt-3"> {{-- Mengurangi space-y agar lebih kompak --}}

                {{-- Widget: Cari Artikel --}}
                <div
                    class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-[0_10px_30px_rgba(0,0,0,0.02)]">
                    <h3 class="text-lg font-black text-slate-800 mb-6 flex items-center gap-2">
                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                        Cari Artikel
                    </h3>
                    <form action="{{ route('front.artikel.index') }}" method="GET" class="relative group">
                        <input type="text" name="search" value="{{ request('search') }}"
                            class="w-full bg-slate-50 border-2 border-transparent rounded-2xl py-3.5 pl-5 pr-12 focus:bg-white focus:border-blue-500 focus:ring-0 transition-all duration-300 text-sm font-medium "
                            placeholder="Ketik sesuatu...">

                        <div class="absolute right-2 top-1.5 flex items-center gap-1">
                            {{-- Fitur Bersihkan Pencarian (Reset) --}}
                            @if(request('search'))
                            <a href="{{ route('front.artikel.index') }}"
                                class="w-8 h-8 flex items-center justify-center text-slate-300 hover:text-red-500 transition-colors"
                                title="Bersihkan Pencarian">
                                <i class="fas fa-times-circle"></i>
                            </a>
                            @endif

                            <button type="submit"
                                class="w-8 h-8 flex items-center justify-center text-slate-400 group-focus-within:text-blue-600 transition-colors cursor-pointer group">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>

                {{-- Widget: Artikel Terbaru (Added) --}}
                <div
                    class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-[0_10px_30px_rgba(0,0,0,0.02)]">
                    <h3 class="text-lg font-black text-slate-800 mb-6 flex items-center gap-2">
                        <span class="w-1.5 h-6 bg-indigo-500 rounded-full"></span>
                        Terbaru
                    </h3>
                    <div class="flex flex-col gap-5">
                        @foreach($latestArticles as $latest) {{-- Pastikan variabel ini dikirim dari Controller --}}
                        <a href="{{ route('front.artikel.detail', $latest->slug) }}"
                            class="group flex items-center gap-4">
                            <div class="relative flex-shrink-0">
                                <div class="w-14 h-14 rounded-2xl overflow-hidden shadow-sm">
                                    <img src="{{ asset('storage/' . $latest->thumbnail) }}"
                                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                                </div>
                                <span class="absolute -top-1 -right-1 flex h-3 w-3">
                                    <span
                                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                                    <span
                                        class="relative inline-flex rounded-full h-3 w-3 bg-blue-500 border-2 border-white"></span>
                                </span>
                            </div>
                            <div class="flex flex-col">
                                <h4
                                    class="text-[13px] font-bold text-slate-700 group-hover:text-blue-600 leading-snug line-clamp-2 transition">
                                    {{ $latest->title }}
                                </h4>
                                <p class="text-[10px] text-slate-400 font-medium mt-1 uppercase tracking-wider">
                                    {{ $latest->published_at->diffForHumans() }}
                                </p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>

                {{-- Widget: Terpopuler --}}
                <div
                    class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-[0_10px_30px_rgba(0,0,0,0.02)]">
                    <h3 class="text-lg font-black text-slate-800 mb-6 flex items-center gap-2">
                        <span class="w-1.5 h-6 bg-orange-500 rounded-full"></span>
                        Terpopuler
                    </h3>
                    <div class="flex flex-col gap-6">
                        @foreach($popularArticles as $index => $pop)
                        <a href="{{ route('front.artikel.detail', $pop->slug) }}" class="flex gap-4 group items-start">
                            {{-- Ranking Number --}}
                            <div
                                class="text-2xl font-black text-slate-100 group-hover:text-blue-50 transition-colors mt-1">
                                0{{ $index + 1 }}
                            </div>
                            <div class="flex flex-col">
                                <h4
                                    class="text-sm font-bold text-slate-700 group-hover:text-blue-600 leading-snug line-clamp-2 transition">
                                    {{ $pop->title }}
                                </h4>
                                <div class="flex items-center gap-2 mt-2">
                                    <span
                                        class="text-[10px] font-extrabold text-blue-500/70">{{ number_format($pop->views) }}
                                        VIEWS</span>
                                    <span class="w-1 h-1 bg-slate-200 rounded-full"></span>
                                    <span
                                        class="text-[10px] text-slate-400 font-bold uppercase">{{ $pop->published_at->format('M d') }}</span>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>

    </div>



    {{-- CSS Khusus untuk Teks Vertikal di Sidebar Kiri --}}

    <style>
    .vertical-text {

        writing-mode: vertical-rl;

        text-orientation: mixed;

        transform: rotate(180deg);

    }
    </style>

</x-layout.app>
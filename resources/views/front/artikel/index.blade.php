<x-layout.app>

    <section class="pt-18 pb-20 bg-gradient-to-b from-blue-50 to-white overflow-hidden">

        <div class="bg-slate-50 border-b border-slate-100 py-12 mb-12">

            <div class="max-w-7xl mx-auto px-4 text-center">

                <h1 class="text-4xl font-extrabold text-slate-800 mb-4">Blog & Edukasi</h1>

                <p class="text-slate-500 max-w-2xl mx-auto">Temukan tips bisnis, tutorial web, dan berita terbaru
                    seputar

                    dunia digital untuk membantu UMKM Anda naik kelas.</p>

            </div>

        </div>
    </section>


    <div class="max-w-7xl mx-auto px-4 pb-20">

        <div class="flex flex-col lg:flex-row gap-12">



            <div class="hidden lg:block lg:w-16">

                <div class="sticky top-28 flex flex-col gap-4 items-center">

                    <p class="text-[10px] font-bold text-slate-400 uppercase vertical-text mb-4">Share</p>

                    <a href="#"
                        class="w-12 h-12 flex items-center justify-center rounded-2xl bg-white border border-slate-200 text-slate-600 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition shadow-sm">

                        <i class="fab fa-facebook-f"></i>

                    </a>

                    <a href="#"
                        class="w-12 h-12 flex items-center justify-center rounded-2xl bg-white border border-slate-200 text-slate-600 hover:bg-pink-600 hover:text-white hover:border-pink-600 transition shadow-sm">

                        <i class="fab fa-instagram"></i>

                    </a>

                    <a href="#"
                        class="w-12 h-12 flex items-center justify-center rounded-2xl bg-white border border-slate-200 text-slate-600 hover:bg-green-500 hover:text-white hover:border-green-500 transition shadow-sm">

                        <i class="fab fa-whatsapp"></i>

                    </a>

                </div>

            </div>



            <div class="flex-1">

                <div class="flex flex-col gap-10">

                    @forelse($articles as $article)

                    <article class="flex flex-col md:flex-row gap-8 group">

                        <div class="md:w-72 h-52 flex-shrink-0 overflow-hidden rounded-[2rem] shadow-md">

                            <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                        </div>



                        <div class="flex flex-col justify-center">

                            <div class="flex items-center gap-3 mb-3">

                                <span
                                    class="bg-blue-100 text-blue-700 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">Update

                                    Bisnis</span>

                                <span class="text-slate-400 text-xs">

                                    <i class="far fa-calendar-alt mr-1"></i>

                                    {{ $article->published_at->format('d M, Y') }}

                                </span>

                            </div>



                            <h2 class="text-2xl font-bold text-slate-800 mb-4 group-hover:text-blue-600 transition">

                                <a href="{{ route('front.artikel.show', $article->slug) }}">{{ $article->title }}</a>

                            </h2>



                            <p class="text-slate-500 leading-relaxed mb-4 line-clamp-2">

                                {{ Str::limit(strip_tags($article->content), 160) }}

                            </p>



                            <div class="flex items-center gap-4">

                                <div class="flex items-center gap-2">

                                    <div
                                        class="w-6 h-6 bg-slate-200 rounded-full flex items-center justify-center text-[10px]">

                                        <i class="fas fa-user text-slate-400"></i>

                                    </div>

                                    <span class="text-xs font-medium text-slate-600">Admin Cakra</span>

                                </div>

                                <span class="text-xs text-slate-400"><i class="far fa-eye mr-1"></i>

                                    {{ number_format($article->views) }} Baca</span>

                            </div>

                        </div>

                    </article>

                    @empty

                    <div class="text-center py-20 bg-slate-50 rounded-[3rem] border-2 border-dashed border-slate-200">

                        <p class="text-slate-400">Belum ada artikel yang ditemukan.</p>

                    </div>

                    @endforelse

                </div>



                <div class="mt-16">

                    {{ $articles->links() }}

                </div>

            </div>



            <div class="lg:w-80 space-y-10">

                <div class="bg-white p-8 rounded-[2rem] border border-slate-100 shadow-sm">

                    <h3 class="text-lg font-bold text-slate-800 mb-6 flex items-center gap-2">

                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>

                        Cari Artikel

                    </h3>

                    <form action="{{ route('front.artikel.index') }}" method="GET" class="relative">

                        <input type="text" name="search" value="{{ request('search') }}"
                            class="w-full bg-slate-50 border-none rounded-2xl py-3 px-5 focus:ring-2 focus:ring-blue-500"
                            placeholder="Ketik sesuatu...">

                        <button type="submit" class="absolute right-4 top-3.5 text-slate-400">

                            <i class="fas fa-search cursor-pointer group-hover:text-blue-600"></i>

                        </button>

                    </form>

                </div>



                <div class="bg-white p-8 rounded-[2rem] border border-slate-100 shadow-sm">

                    <h3 class="text-lg font-bold text-slate-800 mb-6 flex items-center gap-2">

                        <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>

                        Terpopuler

                    </h3>

                    <div class="flex flex-col gap-6">

                        @foreach($popularArticles as $pop)

                        <a href="{{ route('front.artikel.show', $pop->slug) }}" class="flex gap-4 group">

                            <div class="w-16 h-16 rounded-xl overflow-hidden flex-shrink-0 shadow-sm">

                                <img src="{{ asset('storage/' . $pop->thumbnail) }}" class="w-full h-full object-cover">

                            </div>

                            <div class="flex flex-col justify-center">

                                <h4
                                    class="text-sm font-bold text-slate-700 group-hover:text-blue-600 leading-snug line-clamp-2 transition">

                                    {{ $pop->title }}

                                </h4>

                                <span
                                    class="text-[10px] text-slate-400 mt-1 uppercase">{{ $pop->published_at->format('M d') }}</span>

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
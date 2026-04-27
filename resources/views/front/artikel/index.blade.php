<x-layout.app>
    {{-- Hero Section Artikel --}}
    <section class="pt-32 pb-20 bg-gradient-to-b from-blue-50 to-white overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="max-w-3xl" data-aos="fade-up">
                <span
                    class="px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-bold tracking-wider uppercase">
                    Wawasan & Berita
                </span>
                <h1 class="text-5xl md:text-6xl font-black text-slate-900 mt-6 leading-tight">
                    Update Terbaru dari <span class="text-blue-600">Cakra Blog</span>
                </h1>
                <p class="text-lg text-slate-600 mt-6 leading-relaxed">
                    Temukan tips bisnis, tutorial web development, dan berita terbaru seputar teknologi untuk
                    mengakselerasi bisnis UMKM Anda.
                </p>
            </div>
        </div>
    </section>

    {{-- Daftar Artikel Grid --}}
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            @if($articles->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach($articles as $article)
                <article
                    class="group bg-white rounded-[2.5rem] border border-slate-100 shadow-sm hover:shadow-2xl hover:shadow-blue-100 transition-all duration-500 overflow-hidden flex flex-col"
                    data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                    {{-- Thumbnail --}}
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}"
                            class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                        <div class="absolute top-4 left-4">
                            <span
                                class="bg-white/90 backdrop-blur-md px-4 py-2 rounded-2xl text-xs font-bold text-slate-800 shadow-sm">
                                {{ $article->published_at->format('d M Y') }}
                            </span>
                        </div>
                    </div>

                    {{-- Konten Card --}}
                    <div class="p-8 flex flex-col flex-grow">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-xs font-bold text-blue-600 uppercase tracking-widest">Artikel</span>
                            <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                            <span class="text-xs text-slate-500"><i class="far fa-eye mr-1"></i> {{ $article->views }}
                                Views</span>
                        </div>

                        <h3
                            class="text-2xl font-bold text-slate-900 mb-4 group-hover:text-blue-600 transition-colors line-clamp-2">
                            <a href="{{ route('artikel.show', $article->slug) }}">
                                {{ $article->title }}
                            </a>
                        </h3>

                        <div class="text-slate-600 text-sm line-clamp-3 mb-6 flex-grow">
                            {!! Str::limit(strip_tags($article->content), 120) !!}
                        </div>

                        <div class="pt-6 border-t border-slate-50">
                            <a href="{{ route('artikel.show', $article->slug) }}"
                                class="flex items-center gap-2 text-blue-600 font-bold group/btn">
                                Baca Selengkapnya
                                <i class="fas fa-arrow-right transition-transform group-hover/btn:translate-x-2"></i>
                            </a>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="mt-20 flex justify-center">
                {{ $articles->links() }}
            </div>
            @else
            <div class="text-center py-20 bg-slate-50 rounded-[3rem] border-2 border-dashed border-slate-200">
                <img src="{{ asset('images/empty-state.png') }}" class="w-48 mx-auto mb-6 opacity-50" alt="Kosong">
                <h3 class="text-xl font-bold text-slate-800">Belum ada artikel</h3>
                <p class="text-slate-500 mt-2">Nantikan update menarik dari kami segera!</p>
            </div>
            @endif
        </div>
    </section>
</x-layout.app>
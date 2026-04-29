<x-layout.app>
    {{-- Header Section --}}
    <section class="pt-28 pb-20 bg-[#FFF0F0] border-b border-rose-100">
        <div class="max-w-6xl mx-auto px-6 md:px-10">
            {{-- Breadcrumbs --}}
            <nav class="flex text-sm font-medium mb-6 uppercase tracking-wider text-rose-400 justify-center">
                <a href="/" class="hover:text-rose-600">Home</a>
                <span class="mx-3">/</span>
                <a href="{{ route('front.artikel.index') }}" class="hover:text-rose-600">Artikel</a>
                <span class="mx-3">/</span>
                <span class="text-rose-300 truncate max-w-[200px] md:max-w-md">{{ $article->title }}</span>
            </nav>

            {{-- Judul Utama --}}
            <h1 class="text-2xl md:text-4xl font-bold text-slate-800 text-center leading-snug uppercase tracking-tight">
                {{ $article->title }}
            </h1>
        </div>
    </section>

    {{-- Main Content Section --}}
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 md:px-12">
            <div class="flex flex-col lg:flex-row gap-16">

                {{-- Kiri: Konten Artikel --}}
                <div class="lg:w-2/3">
                    {{-- Featured Image --}}
                    <div class="rounded-2xl overflow-hidden mb-10 shadow-sm border border-slate-100">
                        <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}"
                            class="w-full h-auto object-cover max-h-[500px]">
                    </div>

                    {{-- Isi Konten --}}
                    <div class="prose prose-slate prose-lg max-w-none 
                                prose-headings:text-slate-800 prose-headings:font-bold
                                prose-p:text-slate-600 prose-p:leading-relaxed
                                prose-strong:text-slate-800 prose-a:text-rose-500">
                        {!! $article->content !!}
                    </div>

                    <hr class="my-12 border-slate-100">

                    {{-- Next/Previous Post (Gambar 2) --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
                        <div
                            class="p-6 bg-slate-50 rounded-xl border border-slate-100 hover:bg-rose-50 transition group cursor-pointer">
                            <p class="text-rose-400 text-[10px] font-bold uppercase mb-2">Previous Post</p>
                            <h4
                                class="text-sm font-bold text-slate-700 group-hover:text-rose-600 transition line-clamp-2">
                                Judul Artikel Sebelumnya</h4>
                        </div>
                        <div
                            class="p-6 bg-slate-50 rounded-xl border border-slate-100 text-right hover:bg-rose-50 transition group cursor-pointer">
                            <p class="text-rose-400 text-[10px] font-bold uppercase mb-2">Next Post</p>
                            <h4
                                class="text-sm font-bold text-slate-700 group-hover:text-rose-600 transition line-clamp-2">
                                Judul Artikel Selanjutnya</h4>
                        </div>
                    </div>

                    {{-- Author Box (Gambar 2) --}}
                    <div class="bg-[#F4F9F9] p-10 rounded-2xl text-center border border-slate-50 mb-16">
                        <div class="w-24 h-24 bg-slate-200 rounded-full mx-auto mb-4 overflow-hidden">
                            <img src="https://ui-avatars.com/api/?name=Admin+Cakra&background=random"
                                class="w-full h-full object-cover">
                        </div>
                        <h4 class="text-xl font-bold text-slate-800">Admin Cakra Inovasi</h4>
                        <p class="text-slate-500 text-sm mt-1 italic">Penulis Konten Digital</p>
                    </div>

                    {{-- Related Posts (Gambar 3) --}}
                    <div class="mb-16">
                        <h3 class="text-xl font-bold text-slate-800 mb-8 pb-2 border-b-2 border-rose-100 inline-block">
                            Related Posts</h3>
                        <div class="space-y-8">
                            {{-- Contoh Item Related Post --}}
                            @for ($i = 0; $i < 3; $i++) <div class="flex gap-6 items-start group">
                                <div
                                    class="w-24 h-24 md:w-40 md:h-28 flex-shrink-0 rounded-xl overflow-hidden shadow-sm">
                                    <img src="https://placehold.co/400x300"
                                        class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                </div>
                                <div>
                                    <h4
                                        class="text-base md:text-lg font-bold text-slate-800 leading-tight group-hover:text-rose-500 transition">
                                        Tips dan trik meningkatkan performa website Anda dengan Laravel
                                    </h4>
                                    <p class="text-sm text-slate-500 mt-2 line-clamp-2 hidden md:block">Deskripsi
                                        singkat artikel terkait yang memberikan insight mendalam bagi pembaca...</p>
                                    <a href="#"
                                        class="text-rose-400 text-xs font-bold uppercase mt-3 inline-block hover:text-rose-600">Read
                                        More</a>
                                </div>
                        </div>
                        @endfor
                    </div>
                </div>

                {{-- Comment Section (Gambar 4) --}}
                <div class="bg-white p-8 rounded-2xl border border-slate-100 shadow-sm">
                    <h3 class="text-xl font-bold text-slate-800 mb-8">Leave a Comment!</h3>
                    <form action="#" class="space-y-6">
                        <textarea placeholder="YOUR MESSAGE*" rows="5"
                            class="w-full p-4 bg-slate-50 border-slate-100 rounded-lg focus:ring-rose-500 focus:border-rose-500"></textarea>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <input type="text" placeholder="NAME*"
                                class="w-full p-4 bg-slate-50 border-slate-100 rounded-lg focus:ring-rose-500">
                            <input type="email" placeholder="EMAIL*"
                                class="w-full p-4 bg-slate-50 border-slate-100 rounded-lg focus:ring-rose-500">
                        </div>
                        <input type="text" placeholder="WEBSITE"
                            class="w-full p-4 bg-slate-50 border-slate-100 rounded-lg focus:ring-rose-500">
                        <button type="submit"
                            class="bg-rose-500 hover:bg-rose-600 text-white font-bold py-4 px-10 rounded-full transition shadow-lg shadow-rose-200">
                            Post Comment
                        </button>
                    </form>
                </div>
            </div>

            {{-- Kanan: Sidebar --}}
            <div class="lg:w-1/3">
                <aside class="sticky top-24 space-y-10">
                    {{-- Search Box --}}
                    <div class="bg-white p-8 rounded-2xl border border-slate-100 shadow-sm">
                        <h3 class="text-sm font-bold text-slate-800 mb-6 border-l-4 border-blue-500 pl-3">Cari Artikel
                        </h3>
                        <div class="relative">
                            <input type="text" placeholder="Ketik sesuatu..."
                                class="w-full py-3 pl-4 pr-12 bg-slate-50 border-slate-100 rounded-full focus:ring-rose-500 focus:border-rose-500">
                            <button class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>

                    {{-- Social Media --}}
                    <div class="bg-white p-8 rounded-2xl border border-slate-100 shadow-sm">
                        <h3 class="text-sm font-bold text-slate-800 mb-6">Social Media</h3>
                        <div class="flex gap-4">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                                class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-rose-500 hover:text-white transition"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-rose-500 hover:text-white transition"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-rose-500 hover:text-white transition"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-rose-500 hover:text-white transition"><i
                                    class="fab fa-youtube"></i></a>
                        </div>
                    </div>

                    {{-- Popular Posts --}}
                    <div class="bg-white p-8 rounded-2xl border border-slate-100 shadow-sm">
                        <h3 class="text-sm font-bold text-slate-800 mb-6">Popular Posts</h3>
                        {{-- Item popular bisa Anda looping di sini --}}
                        <div class="w-full aspect-video rounded-xl bg-slate-200 mb-4 overflow-hidden">
                            <img src="https://placehold.co/600x400" class="w-full h-full object-cover">
                        </div>
                    </div>
                </aside>
            </div>

        </div>
        </div>
    </section>

    {{-- Sticky Floating Social (Kiri) --}}
    <div class="fixed left-6 top-2/3 -translate-y-1/2 hidden xl:flex flex-col gap-4">
        <a href="#"
            class="w-10 h-10 bg-white border border-slate-100 rounded shadow-sm flex items-center justify-center text-slate-500 hover:text-rose-500 transition"><i
                class="fab fa-facebook-f"></i></a>
        <a href="#"
            class="w-10 h-10 bg-white border border-slate-100 rounded shadow-sm flex items-center justify-center text-slate-500 hover:text-rose-500 transition"><i
                class="fab fa-instagram"></i></a>
        <a href="#"
            class="w-10 h-10 bg-white border border-slate-100 rounded shadow-sm flex items-center justify-center text-slate-500 hover:text-rose-500 transition"><i
                class="fab fa-whatsapp"></i></a>
    </div>

    {{-- Back to Top Button --}}
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
        class="fixed right-8 bottom-28 w-12 h-12 bg-rose-500 text-white rounded-full shadow-lg flex items-center justify-center hover:bg-rose-600 transition z-[9998] cursor-pointer">
        <i class="fas fa-chevron-up"></i>
    </button>
</x-layout.app>
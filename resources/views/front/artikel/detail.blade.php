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

                {{-- Kiri: Konten Artikel (Membuka kolom 2/3) --}}
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

                    {{-- Next/Previous Post --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
                        @if($previous)
                        <a href="{{ route('front.artikel.detail', $previous->slug) }}"
                            class="p-6 bg-slate-50 rounded-xl border border-slate-100 hover:bg-rose-50 transition group cursor-pointer block">
                            <p class="text-rose-400 text-[10px] font-bold uppercase mb-2">Previous Post</p>
                            <h4
                                class="text-sm font-bold text-slate-700 group-hover:text-rose-600 transition line-clamp-2">
                                {{ $previous->title }}
                            </h4>
                        </a>
                        @else
                        <div class="p-6 bg-slate-50/50 rounded-xl border border-dashed border-slate-200 opacity-60">
                            <p class="text-slate-400 text-[10px] font-bold uppercase mb-2">Previous Post</p>
                            <h4 class="text-sm font-bold text-slate-400 italic">Ini adalah artikel pertama</h4>
                        </div>
                        @endif

                        @if($next)
                        <a href="{{ route('front.artikel.detail', $next->slug) }}"
                            class="p-6 bg-slate-50 rounded-xl border border-slate-100 text-right hover:bg-rose-50 transition group cursor-pointer block">
                            <p class="text-rose-400 text-[10px] font-bold uppercase mb-2">Next Post</p>
                            <h4
                                class="text-sm font-bold text-slate-700 group-hover:text-rose-600 transition line-clamp-2">
                                {{ $next->title }}
                            </h4>
                        </a>
                        @else
                        <div
                            class="p-6 bg-slate-50/50 rounded-xl border border-dashed border-slate-200 text-right opacity-60">
                            <p class="text-slate-400 text-[10px] font-bold uppercase mb-2">Next Post</p>
                            <h4 class="text-sm font-bold text-slate-400 italic">Belum ada artikel baru</h4>
                        </div>
                        @endif
                    </div>

                    {{-- Author Box --}}
                    <div class="bg-[#F4F9F9] p-10 rounded-2xl text-center border border-slate-50 mb-16">
                        <div class="w-24 h-24 bg-slate-200 rounded-full mx-auto mb-4 overflow-hidden">
                            <img src="{{ asset('images/logo-cakra.png') }}" class="w-full h-full object-cover">
                        </div>
                        <h4 class="text-xl font-bold text-slate-800">Admin Cakra Inovasi</h4>
                        <p class="text-slate-500 text-sm mt-1 italic">Penulis Konten Digital</p>
                    </div>

                    <hr class="my-12 border-slate-100">

                    {{-- Related Posts --}}
                    <div class="mb-16">
                        <h3 class="text-xl font-bold text-slate-800 mb-8 pb-2 border-b-2 border-rose-100 inline-block">
                            Related Posts</h3>
                        <div class="space-y-8">
                            @forelse ($related_posts as $related)
                            <div class="flex gap-6 items-start group">
                                <div
                                    class="w-24 h-24 md:w-40 md:h-28 flex-shrink-0 rounded-xl overflow-hidden shadow-sm bg-slate-100">
                                    <img src="{{ asset('storage/' . $related->thumbnail) }}" alt="{{ $related->title }}"
                                        class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                </div>
                                <div>
                                    <a href="{{ route('front.artikel.detail', $related->slug) }}">
                                        <h4
                                            class="text-base md:text-lg font-bold text-slate-800 leading-tight group-hover:text-rose-500 transition">
                                            {{ $related->title }}
                                        </h4>
                                    </a>
                                    <p class="text-sm text-slate-500 mt-2 line-clamp-2 hidden md:block">
                                        {{ Str::limit(strip_tags($related->content), 120) }}
                                    </p>
                                    <a href="{{ route('front.artikel.detail', $related->slug) }}"
                                        class="text-rose-400 text-xs font-bold uppercase mt-3 inline-block hover:text-rose-600 transition">
                                        Read More
                                    </a>
                                </div>
                            </div>
                            @empty
                            <div class="p-8 border-2 border-dashed border-slate-100 rounded-2xl text-center">
                                <p class="text-slate-400 italic">Belum ada artikel terkait lainnya untuk saat ini.</p>
                            </div>
                            @endforelse
                        </div>
                    </div>

                    <hr class="my-12 border-slate-100">

                    {{-- Comment Section --}}
                    <div class="bg-white p-8 rounded-2xl border border-slate-100 shadow-sm">
                        <h3 class="text-xl font-bold text-slate-800 mb-8">Tulis Komentar</h3>

                        @if(session('success'))
                        <div class="p-4 mb-4 text-green-700 bg-green-100 rounded-lg">{{ session('success') }}</div>
                        @endif

                        @if($errors->any())
                        <div class="p-4 mb-4 text-red-700 bg-red-100 rounded-lg">
                            <ul class="list-disc pl-5">
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form action="{{ route('comments.store', $article->id) }}" method="POST" class="space-y-6">
                            @csrf
                            <div class="hidden">
                                <input type="text" name="honeypot" tabindex="-1" autocomplete="off">
                            </div>

                            <div>
                                <label for="comment" class="block text-sm font-medium text-slate-700 mb-2">Komentar Anda
                                    *</label>
                                <textarea id="comment" name="comment" required placeholder="Tulis pesan Anda di sini..."
                                    rows="5"
                                    class="w-full p-4 bg-slate-50 border border-slate-100 rounded-lg focus:ring-2 focus:ring-rose-500 outline-none transition"></textarea>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-slate-700 mb-2">Nama Lengkap
                                        *</label>
                                    <input type="text" id="name" name="name" required placeholder="Contoh: Budi"
                                        class="w-full p-4 bg-slate-50 border border-slate-100 rounded-lg focus:ring-2 focus:ring-rose-500 outline-none transition">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-slate-700 mb-2">Email
                                        *</label>
                                    <input type="email" id="email" name="email" required placeholder="budi@email.com"
                                        class="w-full p-4 bg-slate-50 border border-slate-100 rounded-lg focus:ring-2 focus:ring-rose-500 outline-none transition">
                                </div>
                            </div>

                            <button type="submit"
                                class="bg-rose-500 hover:bg-rose-600 text-white font-bold py-4 px-10 rounded-full transition shadow-lg active:scale-95 cursor-pointer">
                                Kirim Komentar
                            </button>
                        </form>
                    </div>

                    {{-- Diskusi --}}
                    <div class="mt-12 mb-16 space-y-8">
                        <h3 class="text-2xl font-bold text-slate-800">
                            Diskusi ({{ $article->comments->count() }})
                        </h3>

                        <div class="space-y-6">
                            @forelse($article->comments as $comment)
                            <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
                                <div class="flex items-center gap-3 mb-4">
                                    <div
                                        class="w-10 h-10 bg-rose-500 rounded-full flex items-center justify-center text-white font-bold">
                                        {{ strtoupper(substr($comment->name, 0, 1)) }}
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-slate-800">{{ $comment->name }}</h4>
                                        <p class="text-xs text-slate-500">{{ $comment->created_at->diffForHumans() }}
                                        </p>
                                    </div>
                                </div>
                                <p class="text-slate-600 leading-relaxed">{{ $comment->comment }}</p>
                            </div>
                            @empty
                            <p class="text-slate-500 italic text-center py-8">Belum ada komentar.</p>
                            @endforelse
                        </div>
                    </div>
                </div> {{-- TUTUP KOLOM KIRI (lg:w-2/3) DI SINI --}}

                {{-- Kanan: Sidebar --}}
                <div class="lg:w-1/3">
                    <aside class="sticky top-24 space-y-10">
                        {{-- Search Box --}}
                        <div class="bg-white p-8 rounded-2xl border border-slate-100 shadow-sm">
                            <h3 class="text-sm font-bold text-slate-800 mb-6 border-l-4 border-blue-500 pl-3">Cari
                                Artikel</h3>
                            <form action="{{ route('front.artikel.index') }}" method="GET" class="relative group">
                                <input type="text" name="search" value="{{ request('search') }}"
                                    class="w-full bg-slate-50 border-2 border-transparent rounded-2xl py-3.5 pl-5 pr-12 focus:bg-white focus:border-blue-500 outline-none transition-all text-sm font-medium"
                                    placeholder="Ketik sesuatu...">
                                <button type="submit"
                                    class="absolute right-4 top-4 text-slate-400 group-focus-within:text-blue-600 transition-colors">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>

                        {{-- Social Media --}}
                        <div class="bg-white p-8 rounded-2xl border border-slate-100 shadow-sm">
                            <h3 class="text-sm font-bold text-slate-800 mb-6">Social Media Kami</h3>
                            <div class="flex gap-4">
                                <a href="https://www.facebook.com/cakrainovasidigital" target="_blank"
                                    class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-blue-500 hover:text-white transition"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/cakrainovasidigital.id/" target="_blank"
                                    class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-rose-500 hover:text-white transition"><i
                                        class="fab fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/cakra-inovasi-digital-9141943b3/" target="_blank"
                                    class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-blue-500 hover:text-white transition"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a href="#"
                                    class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 hover:bg-red-500 hover:text-white transition"><i
                                        class="fab fa-youtube"></i></a>
                            </div>
                        </div>

                        {{-- Popular Posts --}}
                        {{-- Popular Posts --}}
                        <div class="bg-white p-8 rounded-2xl border border-slate-100 shadow-sm">
                            <h3 class="text-sm font-bold text-slate-800 mb-6 border-l-4 border-rose-500 pl-3">Artikel
                                Terpopuler</h3>
                            <div class="space-y-6">
                                @forelse ($popularArticles as $index => $pop)
                                <div class="flex gap-4 items-center group">
                                    {{-- Thumbnail Kecil --}}
                                    <div
                                        class="w-20 h-20 flex-shrink-0 rounded-xl overflow-hidden bg-slate-100 border border-slate-50">
                                        <img src="{{ asset('storage/' . $pop->thumbnail) }}" alt="{{ $pop->title }}"
                                            class="w-full h-full object-cover group-hover:scale-110 transition duration-300">
                                    </div>

                                    {{-- Info Artikel --}}
                                    <div class="flex-1">
                                        <a href="{{ route('front.artikel.detail', $pop->slug) }}">
                                            <h4
                                                class="text-xs font-bold text-slate-800 leading-snug group-hover:text-rose-500 transition line-clamp-2">
                                                {{ $pop->title }}
                                            </h4>
                                        </a>
                                        <div
                                            class="flex items-center gap-2 mt-2 text-[10px] text-slate-400 font-medium">
                                            <span class="flex items-center gap-1">
                                                <i class="far fa-eye text-rose-400"></i>
                                                {{ number_format($pop->views) }} views
                                            </span>
                                            <span>•</span>
                                            <span>{{ $pop->created_at->format('d M Y') }}</span>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <p class="text-xs text-slate-400 italic">Belum ada artikel populer.</p>
                                @endforelse
                            </div>
                        </div>
                    </aside>
                </div> {{-- TUTUP KOLOM KANAN --}}

            </div> {{-- TUTUP FLEX --}}
        </div> {{-- TUTUP CONTAINER --}}
    </section>

    {{-- Sticky Floating Social (Kiri) --}}
    @php
    $shareUrl = urlencode(request()->fullUrl());
    $shareText = urlencode($article->title);
    @endphp

    <div class="fixed left-6 top-2/3 -translate-y-1/2 hidden xl:flex flex-col gap-4">
        <!-- Facebook -->
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}" target="_blank"
            class="w-10 h-10 bg-white border border-slate-100 rounded shadow-sm flex items-center justify-center text-slate-500 hover:text-blue-500 transition">
            <i class="fab fa-facebook-f"></i>
        </a>

        <!-- WhatsApp -->
        <a href="https://api.whatsapp.com/send?text={{ $shareText }}%20{{ $shareUrl }}" target="_blank"
            class="w-10 h-10 bg-white border border-slate-100 rounded shadow-sm flex items-center justify-center text-slate-500 hover:text-green-500 transition">
            <i class="fab fa-whatsapp"></i>
        </a>

        <!-- Twitter (X) -->
        <a href="https://twitter.com/intent/tweet?text={{ $shareText }}&url={{ $shareUrl }}" target="_blank"
            class="w-10 h-10 bg-white border border-slate-100 rounded shadow-sm flex items-center justify-center text-slate-500 hover:text-blue-500 transition">
            <i class="fab fa-twitter"></i>
        </a>

        <!-- Copy Link -->
        <button onclick="copyToClipboard('{{ request()->fullUrl() }}')"
            class="w-10 h-10 bg-white border border-slate-100 rounded shadow-sm flex items-center justify-center text-slate-500 hover:text-rose-500 transition hover:-translate-y-1 transition-all duration-300 shadow-sm cursor-pointer"
            title="Copy Link">
            <i class="fas fa-link"></i>
        </button>
    </div>

    {{-- Back to Top Button --}}
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
        class="fixed right-8 bottom-28 w-12 h-12 bg-rose-500 text-white rounded-full shadow-lg flex items-center justify-center hover:bg-rose-600 transition z-[9998] cursor-pointer">
        <i class="fas fa-chevron-up"></i>
    </button>

</x-layout.app>
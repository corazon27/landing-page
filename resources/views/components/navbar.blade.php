{{--
    ============================================================
    KOMPONEN: x-navbar
    OPTIMASI:
    - [KRITIS]   Menu layanan mobile TIDAK lagi hardcode duplikat
                 — sekarang pakai $layananMenu yang sama (DRY)
    - [KRITIS]   Tambah aria-label="Navigasi utama" pada <nav>
    - [PERFORMA] Logo pakai width/height eksplisit → cegah CLS
    - [PERFORMA] Tambah fetchpriority="high" pada logo (LCP)
    - [FIX]      Active state "/" pakai request()->is('') bukan '/'
                 agar tidak conflik dengan sub-path
    - [CLEAN]    $layananMenu didefinisikan sekali, dipakai 2x
    ============================================================
--}}
@php
/**
* Single source of truth untuk menu layanan.
* Desktop dropdown & mobile accordion sama-sama pakai array ini.
*/
$layananMenu = [
['href' => '/layanan/web-ecommerce', 'label' => 'Website E-commerce'],
['href' => '/layanan/web-perusahaan', 'label' => 'Website Company Profile'],
['href' => '/layanan/web-katalog-produk', 'label' => 'Website Katalog Produk'],
['href' => '/layanan/web-toko', 'label' => 'Website Toko Online / POS'],
['href' => '/layanan/web-rental', 'label' => 'Website Rental'],
['href' => '/layanan/web-fnb', 'label' => 'Website F&B'],
];
@endphp

<nav x-data="{ mobileOpen: false, layananOpen: false }" aria-label="Navigasi utama"
    class="fixed w-full z-50 bg-white/90 backdrop-blur-md border-b border-slate-100 shadow-sm">

    <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">

        {{-- Logo --}}
        <a href="{{ url('/') }}" class="flex items-center gap-3 hover:opacity-85 transition-opacity"
            aria-label="Cakra Inovasi Digital — Beranda">
            {{--
                width & height eksplisit → browser tahu ukuran sebelum gambar dimuat
                → mencegah Cumulative Layout Shift (CLS)
                fetchpriority="high" → bantu LCP karena logo adalah elemen atas fold
            --}}
            <img src="{{ asset('images/logo-cakra.png') }}" alt="Logo Cakra Inovasi Digital" width="48" height="48"
                fetchpriority="high" class="h-12 w-auto">
            <div class="text-xl font-bold tracking-tight text-slate-900 leading-tight">
                Cakra <span class="text-blue-600">Inovasi Digital</span>
            </div>
        </a>

        {{-- Desktop Menu --}}
        <div class="hidden md:flex items-center gap-8 text-sm font-medium">
            <ul class="flex items-center gap-8" role="list">

                <li>
                    {{-- Fix: request()->is('') lebih tepat untuk root "/" --}}
                    <a href="/"
                        class="{{ request()->routeIs('front.home') || request()->is('') ? 'text-blue-600 font-bold' : 'text-slate-600' }} hover:text-blue-600 transition-colors"
                        {{ request()->routeIs('front.home') ? 'aria-current=page' : '' }}>
                        Beranda
                    </a>
                </li>

                {{-- Dropdown Layanan --}}
                <li class="relative group flex items-center h-20">
                    <button type="button"
                        class="flex items-center gap-1.5 {{ request()->is('layanan*') ? 'text-blue-600 font-bold' : 'text-slate-600' }} hover:text-blue-600 transition-colors cursor-pointer"
                        aria-haspopup="true" :aria-expanded="false">
                        Layanan
                        <i class="fa-solid fa-chevron-down text-[10px] transition-transform duration-200 group-hover:rotate-180"
                            aria-hidden="true"></i>
                    </button>

                    <div class="absolute top-[72px] left-0 w-64 bg-white border border-slate-100 rounded-xl shadow-xl py-2 z-50
                                opacity-0 invisible translate-y-2
                                group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
                                transition-all duration-200" role="menu">
                        @foreach($layananMenu as $item)
                        <a href="{{ $item['href'] }}" role="menuitem" class="block px-4 py-2.5 text-xs text-slate-600
                                      hover:bg-blue-50 hover:text-blue-600
                                      {{ !$loop->last ? 'border-b border-slate-50' : '' }}
                                      {{ request()->is(ltrim($item['href'], '/')) ? 'text-blue-600 bg-blue-50 font-bold' : '' }}
                                      uppercase font-bold tracking-wider transition-colors">
                            {{ $item['label'] }}
                        </a>
                        @endforeach
                    </div>
                </li>

                <li>
                    <a href="/affiliate"
                        class="{{ request()->is('affiliate') ? 'text-blue-600 font-bold' : 'text-slate-600' }} hover:text-blue-600 transition-colors"
                        {{ request()->is('affiliate') ? 'aria-current=page' : '' }}>
                        Program Affiliate
                    </a>
                </li>

                <li>
                    <a href="/portofolio"
                        class="{{ request()->is('portofolio') ? 'text-blue-600 font-bold' : 'text-slate-600' }} hover:text-blue-600 transition-colors"
                        {{ request()->is('portofolio') ? 'aria-current=page' : '' }}>
                        Portofolio
                    </a>
                </li>

                <li>
                    <a href="{{ route('front.artikel.index') }}"
                        class="{{ request()->is('artikel*') ? 'text-blue-600 font-bold' : 'text-slate-600' }} hover:text-blue-600 transition-colors"
                        {{ request()->is('artikel*') ? 'aria-current=page' : '' }}>
                        Artikel
                    </a>
                </li>

            </ul>

            <a href="/hubungi-kami"
                class="bg-slate-900 text-white px-5 py-2.5 rounded-lg font-semibold text-sm hover:bg-blue-600 transition-colors duration-200 whitespace-nowrap">
                Hubungi Kami
            </a>
        </div>

        {{-- Hamburger Button (Mobile) --}}
        <button type="button" @click="mobileOpen = !mobileOpen"
            class="md:hidden text-slate-700 hover:text-blue-600 transition-colors focus:outline-none cursor-pointer"
            :aria-expanded="mobileOpen" aria-label="Toggle menu navigasi">
            <i class="fa-solid text-2xl" :class="mobileOpen ? 'fa-xmark' : 'fa-bars'" aria-hidden="true"></i>
        </button>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="mobileOpen" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="md:hidden bg-white border-t border-slate-100 shadow-lg overflow-y-auto max-h-[80vh]"
        @click.outside="mobileOpen = false" role="dialog" aria-label="Menu navigasi mobile">

        <div class="px-6 py-5 flex flex-col space-y-1">

            <a href="/" class="py-2.5 text-sm font-medium rounded-lg px-3
                      {{ request()->routeIs('front.home') || request()->is('') ? 'text-blue-600 bg-blue-50 font-bold' : 'text-slate-700 hover:bg-slate-50' }}
                      transition-colors">
                Beranda
            </a>

            {{-- Accordion Layanan Mobile — sekarang pakai $layananMenu yang sama --}}
            <div>
                <button type="button" @click="layananOpen = !layananOpen" class="w-full flex items-center justify-between py-2.5 px-3 text-sm font-medium rounded-lg
                               {{ request()->is('layanan*') ? 'text-blue-600 font-bold' : 'text-slate-700 hover:bg-slate-50' }}
                               transition-colors cursor-pointer" :aria-expanded="layananOpen">
                    Layanan
                    <i class="fa-solid fa-chevron-down text-xs transition-transform duration-200"
                        :class="layananOpen ? 'rotate-180' : ''" aria-hidden="true"></i>
                </button>

                <div x-show="layananOpen" x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="opacity-0 -translate-y-1"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="mt-1 ml-3 pl-3 border-l-2 border-blue-100 flex flex-col space-y-1">

                    {{-- Gunakan $layananMenu yang sama — tidak duplikat --}}
                    @foreach($layananMenu as $item)
                    <a href="{{ $item['href'] }}" class="py-2 px-2 text-sm text-slate-600 hover:text-blue-600
                                  {{ request()->is(ltrim($item['href'], '/')) ? 'text-blue-600 font-semibold' : '' }}
                                  transition-colors">
                        {{ $item['label'] }}
                    </a>
                    @endforeach
                </div>
            </div>

            <a href="/affiliate" class="py-2.5 text-sm font-medium rounded-lg px-3
                      {{ request()->is('affiliate') ? 'text-blue-600 bg-blue-50 font-bold' : 'text-slate-700 hover:bg-slate-50' }}
                      transition-colors">
                Program Affiliate
            </a>

            <a href="/portofolio" class="py-2.5 text-sm font-medium rounded-lg px-3
                      {{ request()->is('portofolio') ? 'text-blue-600 bg-blue-50 font-bold' : 'text-slate-700 hover:bg-slate-50' }}
                      transition-colors">
                Portofolio
            </a>

            <a href="{{ route('front.artikel.index') }}" class="py-2.5 text-sm font-medium rounded-lg px-3
                      {{ request()->is('artikel*') ? 'text-blue-600 bg-blue-50 font-bold' : 'text-slate-700 hover:bg-slate-50' }}
                      transition-colors">
                Artikel
            </a>

            <div class="pt-2">
                <a href="/hubungi-kami"
                    class="block w-full text-center bg-slate-900 text-white px-5 py-3 rounded-lg font-semibold text-sm hover:bg-blue-600 transition-colors duration-200">
                    Hubungi Kami
                </a>
            </div>

        </div>
    </div>
</nav>
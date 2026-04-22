<nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
        <div class="flex items-center gap-3 text-xl font-bold tracking-tight text-slate-900">
            <img src="{{ asset('images/logo-cakra.png') }}" alt="Logo Cakra" class="h-12 w-auto">
            <div class="text-xl font-bold tracking-tight text-slate-900">
                Cakra <span class="text-blue-600">Inovasi Digital</span>
            </div>
        </div>

        <div class="hidden md:flex items-center space-x-8 text-sm font-medium">
            <ul class="flex items-center space-x-8">
                <li><a href="/"
                        class="{{ request()->is('/') ? 'text-blue-600 font-bold' : 'text-slate-600' }} hover:text-blue-600 transition">Beranda</a>
                </li>
                <!-- <li><a href="/tentang"
                        class="{{ request()->is('tentang') ? 'text-blue-600 font-bold' : 'text-slate-600' }} hover:text-blue-600 transition">Tentang</a>
                </li> -->

                <li class="relative group flex items-center h-20">
                    <button
                        class="flex items-center gap-1 {{ request()->is('layanan*') ? 'text-blue-600 font-bold' : 'text-slate-600' }} hover:text-blue-600 transition font-medium outline-none">
                        Layanan
                        <i
                            class="fa-solid fa-chevron-down text-[10px] transition-transform duration-200 group-hover:rotate-180"></i>
                    </button>

                    <div
                        class="absolute top-[70px] left-0 w-64 bg-white border border-slate-100 rounded-xl shadow-xl py-2 z-50 opacity-0 invisible translate-y-2 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-300">
                        <a href="/layanan/web-perusahaan"
                            class="block px-4 py-3 text-xs text-slate-600 hover:bg-blue-50 hover:text-blue-600 border-b border-slate-50 last:border-0 uppercase font-bold tracking-wider">Web
                            Perusahaan (Company Profile)</a>
                        <a href="/layanan/web-toko"
                            class="block px-4 py-3 text-xs text-slate-600 hover:bg-blue-50 hover:text-blue-600 border-b border-slate-50 last:border-0 uppercase font-bold tracking-wider">Web
                            Toko (Point of Sale)</a>
                        <a href="/layanan/web-katalog-produk"
                            class="block px-4 py-3 text-xs text-slate-600 hover:bg-blue-50 hover:text-blue-600 border-b border-slate-50 last:border-0 uppercase font-bold tracking-wider">Web
                            Katalog Produk</a>
                        <a href="/layanan/web-rental-mobil"
                            class="block px-4 py-3 text-xs text-slate-600 hover:bg-blue-50 hover:text-blue-600 border-b border-slate-50 last:border-0 uppercase font-bold tracking-wider">Web
                            Rental Mobil</a>
                        <a href="/layanan/web-portal-berita"
                            class="block px-4 py-3 text-xs text-slate-600 hover:bg-blue-50 hover:text-blue-600 border-b border-slate-50 last:border-0 uppercase font-bold tracking-wider">Web
                            Portal Berita</a>
                        <a href="/layanan/web-fnb"
                            class="block px-4 py-3 text-xs text-slate-600 hover:bg-blue-50 hover:text-blue-600 last:border-0 uppercase font-bold tracking-wider">Web
                            F&B</a>
                    </div>
                </li>

                <li><a href="/affiliate"
                        class="{{ request()->is('affiliate') ? 'text-blue-600 font-bold' : 'text-slate-600' }} hover:text-blue-600 transition">Program
                        Affiliate</a>
                </li>

                <li><a href="/portofolio"
                        class="{{ request()->is('portofolio') ? 'text-blue-600 font-bold' : 'text-slate-600' }} hover:text-blue-600 transition">Portofolio
                        Kami</a>
                </li>
                <li><a href="{{ route('faq') }}"
                        class="{{ request()->routeIs('faq') ? 'text-blue-600 font-bold' : 'text-slate-600' }} hover:text-blue-600 transition">Tanya
                        Jawab</a></li>

                <li><a href="/portofolio"
                        class="{{ request()->is('portofolio') ? 'text-blue-600 font-bold' : 'text-slate-600' }} hover:text-blue-600 transition">Artikel</a>
                </li>
            </ul>

            <a href="https://wa.me/6282242453204" target="_blank"
                class="bg-[#1a202c] text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-600 transition ml-4">
                Hubungi Kami
            </a>
        </div>

        <div class="md:hidden flex items-center">
            <button id="hamburger" class="text-slate-900 focus:outline-none">
                <i class="fa-solid fa-bars text-2xl" id="nav-icon"></i>
            </button>
        </div>
    </div>

    <div id="mobile-menu"
        class="hidden md:hidden bg-white border-b border-slate-100 px-6 py-6 shadow-xl overflow-y-auto max-h-[80vh]">
        <div class="flex flex-col space-y-4">
            <a href="/"
                class="{{ request()->is('/') ? 'text-blue-600 font-bold' : 'text-slate-600 font-medium' }}">Beranda</a>
            <a href="/tentang"
                class="{{ request()->is('tentang') ? 'text-blue-600 font-bold' : 'text-slate-600 font-medium' }}">Tentang</a>

            <div class="flex flex-col">
                <button id="mobile-dropdown-btn"
                    class="flex items-center justify-between w-full {{ request()->is('layanan*') ? 'text-blue-600 font-bold' : 'text-slate-600 font-medium' }}">
                    Layanan
                    <i class="fa-solid fa-chevron-down text-xs transition-transform" id="mobile-dropdown-icon"></i>
                </button>
                <div id="mobile-dropdown-menu"
                    class="hidden flex flex-col space-y-3 mt-3 pl-4 border-l-2 border-slate-100">
                    <a href="/layanan/web-perusahaan" class="text-slate-500 text-sm">Web Perusahaan</a>
                    <a href="/layanan/web-toko" class="text-slate-500 text-sm">Web Toko</a>
                    <a href="/layanan/web-sales-motor" class="text-slate-500 text-sm">Web Sales Motor</a>
                    <a href="/layanan/web-sales-barang" class="text-slate-500 text-sm">Web Sales Barang</a>
                    <a href="/layanan/web-portal-berita" class="text-slate-500 text-sm">Web Portal Berita</a>
                    <a href="/layanan/web-fnb" class="text-slate-500 text-sm">Web F&B</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
// Script untuk Hamburger Menu (Buka/Tutup Menu Utama Mobile)
const btn = document.getElementById('hamburger');
const menu = document.getElementById('mobile-menu');
const icon = document.getElementById('nav-icon');

btn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
    if (menu.classList.contains('hidden')) {
        icon.classList.replace('fa-xmark', 'fa-bars');
    } else {
        icon.classList.replace('fa-bars', 'fa-xmark');
    }
});

// Script untuk Dropdown Desktop
const dropdownBtn = document.getElementById('dropdown-btn');
const dropdownMenu = document.getElementById('dropdown-menu');
const dropdownIcon = document.getElementById('dropdown-icon');

dropdownBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    dropdownMenu.classList.toggle('hidden');
    dropdownIcon.classList.toggle('rotate-180');
});

// Tutup dropdown desktop jika klik di luar menu
window.addEventListener('click', () => {
    if (!dropdownMenu.classList.contains('hidden')) {
        dropdownMenu.classList.add('hidden');
        dropdownIcon.classList.remove('rotate-180');
    }
});

// Script untuk Accordion Layanan Mobile
const mobileDropdownBtn = document.getElementById('mobile-dropdown-btn');
const mobileDropdownMenu = document.getElementById('mobile-dropdown-menu');
const mobileDropdownIcon = document.getElementById('mobile-dropdown-icon');

mobileDropdownBtn.addEventListener('click', () => {
    mobileDropdownMenu.classList.toggle('hidden');
    mobileDropdownIcon.classList.toggle('rotate-180');
});
</script>
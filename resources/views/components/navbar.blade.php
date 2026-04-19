<nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
        <div class="flex items-center gap-3 text-xl font-bold tracking-tight text-slate-900">
            <img src="{{ asset('images/logo-cakra.png') }}" alt="Logo Cakra" class="h-20 w-auto">
            <div class="text-xl font-bold tracking-tight text-slate-900">
                Cakra <span class="text-blue-600">Inovasi Digital</span>
            </div>
        </div>

        <div class="hidden md:flex items-center space-x-8 text-sm font-medium">
            <ul class="flex space-x-8">
                <li><a href="/"
                        class="{{ request()->is('/') ? 'text-blue-600 font-bold' : 'text-slate-600' }} hover:text-blue-600 transition">Beranda</a>
                </li>
                <li><a href="/tentang"
                        class="{{ request()->is('tentang') ? 'text-blue-600 font-bold' : 'text-slate-600' }} hover:text-blue-600 transition">Tentang</a>
                </li>
                <li><a href="/layanan"
                        class="{{ request()->is('layanan') ? 'text-blue-600 font-bold' : 'text-slate-600' }} hover:text-blue-600 transition">Layanan</a>
                </li>
                <li><a href="/portofolio"
                        class="{{ request()->is('portofolio') ? 'text-blue-600 font-bold' : 'text-slate-600' }} hover:text-blue-600 transition">Portofolio</a>
                </li>
                <li><a href="{{ route('faq') }}"
                        class="{{ request()->routeIs('faq') ? 'text-blue-600 font-bold' : 'text-slate-600' }} hover:text-blue-600 transition">Tanya
                        Jawab</a></li>
            </ul>
            <a href="https://wa.me/6282242453204?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20tertarik%20untuk%20tanya-tanya%20tentang%20solusi%20digital%20untuk%20bisnis%20saya.%20Boleh%20diskusi%20sebentar%3F"
                target="_blank"
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

    <div id="mobile-menu" class="hidden md:hidden bg-white border-b border-slate-100 px-6 py-6 shadow-xl">
        <div class="flex flex-col space-y-4">
            <a href="/"
                class="{{ request()->is('/') ? 'text-blue-600 font-bold' : 'text-slate-600 font-medium' }} hover:text-blue-600 transition">
                Beranda
            </a>
            <a href="/tentang"
                class="{{ request()->is('tentang') ? 'text-blue-600 font-bold' : 'text-slate-600 font-medium' }} hover:text-blue-600 transition">
                Tentang
            </a>
            <a href="/layanan"
                class="{{ request()->is('layanan') ? 'text-blue-600 font-bold' : 'text-slate-600 font-medium' }} hover:text-blue-600 transition">
                Layanan
            </a>
            <a href="/portofolio"
                class="{{ request()->is('portofolio') ? 'text-blue-600 font-bold' : 'text-slate-600 font-medium' }} hover:text-blue-600 transition">
                Portofolio
            </a>
            <a href="{{ route('faq') }}"
                class="{{ request()->routeIs('faq') ? 'text-blue-600 font-bold' : 'text-slate-600 font-medium' }} hover:text-blue-600 transition">
                Tanya Jawab
            </a>

            <hr class="border-slate-100 my-2">

            <a href="https://wa.me/6282242453204?text=Halo%20Abadi%20Tekno..."
                class="bg-blue-600 text-white text-center py-4 rounded-2xl font-bold shadow-lg shadow-blue-100">
                Hubungi Kami
            </a>
        </div>
    </div>
</nav>

<script>
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
</script>
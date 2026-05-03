<x-layout.app>

    {{-- ============================================================
     SEO: Meta per halaman (dikirim ke x-layout.app)
============================================================ --}}
    @php
    $title = 'Jasa Pembuatan Website Profesional untuk UMKM | Cakra Inovasi Digital';
    $metaDescription= 'Cakra Inovasi Digital — jasa pembuatan website profesional, toko online, company profile, dan
    kasir digital untuk UMKM. Harga transparan, teknologi modern, support purna jual.';
    $metaKeywords = 'jasa pembuatan website, website UMKM, toko online, company profile, kasir digital, web developer
    Sukoharjo, Jawa Tengah';
    $ogType = 'website';
    @endphp

    {{-- ============================================================
     SEO: FAQ Schema JSON-LD via component x-faq-schema
     Data array ini single source of truth — dipakai sekaligus
     untuk Schema JSON-LD (SEO) dan rendering accordion Alpine.js
============================================================ --}}
    @php
    $faqsData = [
    [
    'question' => 'Bagaimana tahapan pengerjaan proyek website di Cakra Inovasi Digital?',
    'answer' => 'Kami bekerja melalui 5 tahap: (1) Konsultasi kebutuhan dan deal kontrak, (2) Pembuatan konsep desain
    visual, (3) Proses coding sistem, (4) Testing dan revisi, (5) Go-Live dan pelatihan admin.',
    ],
    [
    'question' => 'Apa saja yang saya dapatkan setelah website selesai dibuat?',
    'answer' => 'Anda mendapatkan akses penuh Dashboard Admin, domain (.com/.id) dan hosting aktif 1 tahun, sertifikat
    SSL (HTTPS), dan video panduan operasional sistem.',
    ],
    [
    'question' => 'Bagaimana sistem pembayaran jasa pembuatan website?',
    'answer' => 'Kami menggunakan sistem 3 termin: DP saat deal kontrak, termin progres setelah desain disetujui, dan
    pelunasan setelah website selesai dan siap dipublish.',
    ],
    [
    'question' => 'Apakah ada layanan after sales setelah website jadi?',
    'answer' => 'Ya. Kami memberikan garansi perbaikan bug/error, konsultasi teknis gratis, pemantauan server dan
    backup, serta update panduan fitur baru.',
    ],
    [
    'question' => 'Berapa kali revisi yang dapat dilakukan?',
    'answer' => 'Revisi minor pada tahap desain dapat dilakukan hingga deal. Pada tahap coding, revisi mencakup
    perubahan fungsi dan konten (bukan perombakan struktur).',
    ],
    [
    'question' => 'Apakah website bisa diakses dan dikelola dari HP atau tablet?',
    'answer' => 'Sangat bisa. Sistem berbasis web responsif yang dapat diakses via Android dan iOS, mendukung laptop, PC
    kasir, serta printer thermal Bluetooth maupun USB.',
    ],
    [
    'question' => 'Apakah saya bisa update konten website sendiri setelah website jadi?',
    'answer' => 'Ya. Kami menyediakan Dashboard Admin yang user-friendly sehingga Anda bisa menambah artikel, galeri,
    atau mengubah harga layanan kapan saja tanpa keahlian teknis.',
    ],
    [
    'question' => 'Bagaimana jika saya atau karyawan kesulitan menggunakan sistem?',
    'answer' => 'Kami menyediakan video tutorial lengkap, konsultasi teknis gratis, dan buku panduan PDF untuk
    memastikan tim Anda bisa mengoperasikan sistem dengan lancar.',
    ],
    ];
    @endphp

    @push('schema')
    <x-faq-schema :faqs="$faqsData" />
    @endpush

    {{-- ================================================================
     SECTION 1: HERO
     SEO: Hanya ada 1 <h1> di seluruh halaman, mengandung keyword utama
================================================================ --}}
    <section class="pt-36 pb-20 bg-white overflow-hidden">
        <div class="max-w-6xl mx-auto px-6 lg:px-10">
            <div class="flex flex-col md:flex-row items-center gap-12">

                {{-- Kolom Teks --}}
                <div class="md:w-1/2" data-aos="fade-right">
                    <span
                        class="bg-blue-50 text-blue-700 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                        Teman Tumbuh UMKM Indonesia
                    </span>

                    {{-- H1 — 1 per halaman, mengandung keyword utama --}}
                    <h1 class="text-4xl lg:text-5xl font-extrabold mt-5 mb-5 leading-tight text-slate-900">
                        Jasa Pembuatan Website<br>
                        <span class="text-blue-600">Profesional untuk UMKM</span>
                    </h1>

                    <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                        Capek urus catatan manual yang sering selisih? Mau punya toko online tapi bingung mulainya?
                        <strong>Cakra Inovasi Digital</strong> hadir untuk mendampingi UMKM go-digital — simpel,
                        transparan, dan harga bersahabat.
                    </p>

                    <div class="flex flex-wrap gap-4">
                        <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20konsultasi%20gratis%20soal%20pembuatan%20website%20untuk%20bisnis%20saya."
                            target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center gap-2 bg-blue-600 text-white px-8 py-4 rounded-2xl font-bold hover:bg-blue-700 transition shadow-lg shadow-blue-200">
                            <i class="fa-brands fa-whatsapp"></i>
                            Konsultasi Gratis via WhatsApp
                        </a>
                        <a href="#layanan"
                            class="bg-white border-2 border-slate-200 text-slate-700 px-8 py-4 rounded-2xl font-bold hover:bg-slate-50 transition">
                            Lihat Layanan Kami
                        </a>
                    </div>

                    {{-- Trust Badges --}}
                    <div class="mt-8 flex flex-wrap items-center gap-5 text-sm text-slate-500">
                        <span class="flex items-center gap-1.5">
                            <i class="fa-solid fa-shield-check text-blue-500"></i> Garansi Support
                        </span>
                        <span class="flex items-center gap-1.5">
                            <i class="fa-solid fa-tags text-blue-500"></i> Harga Transparan
                        </span>
                        <span class="flex items-center gap-1.5">
                            <i class="fa-solid fa-mobile-screen text-blue-500"></i> Responsif di HP
                        </span>
                    </div>
                </div>

                {{-- Kolom Visual --}}
                <div class="md:w-1/2" data-aos="fade-left">
                    <div class="relative">
                        <div
                            class="aspect-square bg-gradient-to-br from-blue-50 to-slate-100 rounded-[40px] flex items-center justify-center p-10">
                            <div class="text-center">
                                {{-- Stats visual --}}
                                <div class="grid grid-cols-2 gap-4 mb-6">
                                    <div class="bg-white rounded-2xl p-5 shadow-sm border border-slate-100 text-left">
                                        <p class="text-3xl font-extrabold text-blue-600">50+</p>
                                        <p class="text-xs text-slate-500 mt-1">Proyek Selesai</p>
                                    </div>
                                    <div class="bg-white rounded-2xl p-5 shadow-sm border border-slate-100 text-left">
                                        <p class="text-3xl font-extrabold text-emerald-600">98%</p>
                                        <p class="text-xs text-slate-500 mt-1">Klien Puas</p>
                                    </div>
                                    <div class="bg-white rounded-2xl p-5 shadow-sm border border-slate-100 text-left">
                                        <p class="text-3xl font-extrabold text-orange-500">3+</p>
                                        <p class="text-xs text-slate-500 mt-1">Tahun Pengalaman</p>
                                    </div>
                                    <div class="bg-white rounded-2xl p-5 shadow-sm border border-slate-100 text-left">
                                        <p class="text-3xl font-extrabold text-purple-600">24/7</p>
                                        <p class="text-xs text-slate-500 mt-1">Website Online</p>
                                    </div>
                                </div>
                                <p class="text-slate-500 text-sm font-medium italic">"Partner diskusi, bukan sekadar
                                    vendor."</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ================================================================
     SECTION 2: LAYANAN
     SEO: <h2> sebagai sub-heading utama, <h3> untuk tiap kartu layanan
================================================================ --}}
    <section id="layanan" class="py-20 bg-slate-50">
        <div class="max-w-6xl mx-auto px-6 lg:px-10">

            <div class="text-center mb-16" data-aos="fade-up">
                <span
                    class="text-blue-600 font-bold bg-blue-50 px-4 py-1.5 rounded-full text-xs uppercase tracking-wider">Solusi
                    Digital untuk Bisnis Anda</span>
                <h2 class="text-3xl md:text-4xl font-extrabold mt-5 mb-4 text-slate-900">Layanan Pembuatan Website Kami
                </h2>
                <p class="text-slate-500 max-w-2xl mx-auto">Kami urus teknologinya, Anda fokus kembangkan usahanya.
                    Semua transparan dan tanpa biaya tersembunyi.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">

                <article class="p-8 rounded-3xl bg-blue-50/60 border border-blue-100 hover:shadow-lg transition group"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="text-4xl mb-5 group-hover:scale-110 transition-transform inline-block"
                        aria-hidden="true">🌐</div>
                    <h3 class="text-xl font-bold mb-3 text-slate-900">Website Toko Online & Company Profile</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-5">
                        Tampil profesional di Google dengan website yang cantik, mobile-friendly, dan membantu Anda
                        mendapatkan lebih banyak pelanggan baru.
                    </p>
                    <ul class="text-xs text-slate-500 space-y-2" aria-label="Keunggulan layanan website">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-blue-600"></i> Konsultasi
                            gratis tanpa syarat</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-blue-600"></i> Sudah
                            termasuk domain & hosting</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-blue-600"></i> SEO-ready
                            dari hari pertama</li>
                    </ul>
                </article>

                <article
                    class="p-8 rounded-3xl bg-emerald-50/60 border border-emerald-100 hover:shadow-lg transition group"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="text-4xl mb-5 group-hover:scale-110 transition-transform inline-block"
                        aria-hidden="true">🛠️</div>
                    <h3 class="text-xl font-bold mb-3 text-slate-900">Sistem & Aplikasi Khusus Bisnis</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-5">
                        Punya alur kerja unik? Kami bangun sistem yang mengikuti cara kerja bisnis Anda, bukan
                        sebaliknya.
                    </p>
                    <ul class="text-xs text-slate-500 space-y-2" aria-label="Keunggulan layanan sistem khusus">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-600"></i> Harga
                            sesuai budget UMKM</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-600"></i>
                            Didampingi hingga tim bisa pakai</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-600"></i> Bisa
                            dikembangkan seiring tumbuh</li>
                    </ul>
                </article>

                <article
                    class="p-8 rounded-3xl bg-orange-50/60 border border-orange-100 hover:shadow-lg transition group"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="text-4xl mb-5 group-hover:scale-110 transition-transform inline-block"
                        aria-hidden="true">📑</div>
                    <h3 class="text-xl font-bold mb-3 text-slate-900">Kasir Digital & Manajemen Stok</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-5">
                        Tinggalkan catatan manual yang rawan selisih. Pantau stok dan laporan penjualan harian dari HP
                        kapan saja, di mana saja.
                    </p>
                    <ul class="text-xs text-slate-500 space-y-2" aria-label="Keunggulan kasir digital">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-orange-600"></i> Laporan
                            otomatis real-time</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-orange-600"></i> Pantau
                            stok lewat HP</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-orange-600"></i> Support
                            QRIS & printer thermal</li>
                    </ul>
                </article>

            </div>

            {{-- Link ke halaman layanan lengkap --}}
            <div class="text-center mt-10" data-aos="fade-up">
                <a href="/layanan"
                    class="inline-flex items-center gap-2 text-blue-600 font-semibold hover:underline underline-offset-4 transition">
                    Lihat semua jenis layanan kami
                    <i class="fa-solid fa-arrow-right text-sm"></i>
                </a>
            </div>

        </div>
    </section>

    {{-- ================================================================
     SECTION 3: PORTOFOLIO
     SEO: <h2> heading, kartu pakai <article> + <h3>, siap untuk <img> asli
================================================================ --}}
    <section id="portofolio" class="py-24 bg-white relative overflow-hidden">
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-64 h-64 rounded-full bg-blue-100 opacity-40 blur-3xl pointer-events-none"
            aria-hidden="true"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-10 relative z-10">

            <div class="flex flex-col md:flex-row justify-between items-end mb-14 gap-6 border-b border-slate-200 pb-8">
                <div class="md:w-2/3" data-aos="fade-right">
                    <span class="text-blue-600 font-semibold tracking-wider uppercase text-sm mb-2 block">Hasil
                        Nyata</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">Portofolio Website yang Kami
                        Bangun</h2>
                    <p class="text-slate-600 leading-relaxed max-w-2xl">
                        Lihat bagaimana kami membantu para pemilik usaha bertransformasi digital — dari katalog produk
                        hingga sistem manajemen yang efisien.
                    </p>
                </div>
                <div data-aos="fade-left">
                    <a href="/portofolio"
                        class="group inline-flex items-center gap-2 px-6 py-3 bg-white border border-slate-300 rounded-full text-slate-700 font-semibold hover:border-blue-600 hover:text-blue-600 transition-all shadow-sm hover:shadow">
                        Lihat Semua Proyek
                        <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <article
                    class="group flex flex-col bg-white rounded-3xl p-4 shadow-sm hover:shadow-xl transition-all duration-500 border border-slate-100"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="aspect-video bg-slate-100 rounded-2xl mb-5 overflow-hidden relative">
                        {{-- Ganti div ini dengan <img> asli saat foto tersedia --}}
                        <div class="absolute inset-0 flex items-center justify-center text-slate-400 text-sm font-medium group-hover:scale-105 transition-transform duration-700"
                            aria-hidden="true">
                            Screenshot Website Company Profile
                        </div>
                        {{-- <img src="{{ asset('images/portofolio/company-profile.jpg') }}" alt="Screenshot website
                        company profile klien Cakra Inovasi Digital" class="w-full h-full object-cover
                        group-hover:scale-105 transition-transform duration-700"> --}}
                        <span
                            class="absolute top-3 left-3 bg-white/90 backdrop-blur text-slate-800 text-[10px] font-bold px-2.5 py-1 rounded-md shadow-sm">Website</span>
                    </div>
                    <div class="px-2 flex-grow">
                        <h3 class="text-lg font-bold text-slate-900 mb-2 group-hover:text-blue-600 transition-colors">
                            Website Company Profile Profesional</h3>
                        <p class="text-slate-500 text-sm mb-4 line-clamp-2">
                            Website perusahaan dengan galeri visual, halaman layanan, dan dashboard admin mandiri untuk
                            update konten sendiri.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-5">
                            <span
                                class="text-xs text-slate-500 bg-slate-100 px-2.5 py-1 rounded-full font-medium">Laravel</span>
                            <span
                                class="text-xs text-slate-500 bg-slate-100 px-2.5 py-1 rounded-full font-medium">Tailwind
                                CSS</span>
                            <span class="text-xs text-slate-500 bg-slate-100 px-2.5 py-1 rounded-full font-medium">12
                                Fitur</span>
                        </div>
                    </div>
                    <div class="px-2 pb-2">
                        <blockquote class="bg-blue-50 border border-blue-100 p-3 rounded-xl">
                            <p class="text-sm font-medium text-blue-700 italic">"Tampilan elegan dan galeri produk
                                sangat mudah di-update sendiri."</p>
                        </blockquote>
                    </div>
                </article>

                <article
                    class="group flex flex-col bg-white rounded-3xl p-4 shadow-sm hover:shadow-xl transition-all duration-500 border border-slate-100"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="aspect-video bg-emerald-50 rounded-2xl mb-5 overflow-hidden relative">
                        <div class="absolute inset-0 flex items-center justify-center text-emerald-400 text-sm font-medium group-hover:scale-105 transition-transform duration-700"
                            aria-hidden="true">
                            Screenshot Katalog Produk Digital
                        </div>
                        {{-- <img src="{{ asset('images/portofolio/katalog-produk.jpg') }}" alt="Screenshot katalog
                        produk digital dengan tombol WhatsApp" class="w-full h-full object-cover group-hover:scale-105
                        transition-transform duration-700"> --}}
                        <span
                            class="absolute top-3 left-3 bg-white/90 backdrop-blur text-slate-800 text-[10px] font-bold px-2.5 py-1 rounded-md shadow-sm">Katalog
                            Digital</span>
                    </div>
                    <div class="px-2 flex-grow">
                        <h3
                            class="text-lg font-bold text-slate-900 mb-2 group-hover:text-emerald-600 transition-colors">
                            Katalog Produk Digital + WhatsApp</h3>
                        <p class="text-slate-500 text-sm mb-4 line-clamp-2">
                            Katalog online responsif dengan kategori produk lengkap dan tombol direct-chat WhatsApp
                            untuk mempercepat closing.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-5">
                            <span
                                class="text-xs text-slate-500 bg-slate-100 px-2.5 py-1 rounded-full font-medium">WhatsApp
                                Link</span>
                            <span
                                class="text-xs text-slate-500 bg-slate-100 px-2.5 py-1 rounded-full font-medium">Mobile-First</span>
                        </div>
                    </div>
                    <div class="px-2 pb-2">
                        <blockquote class="bg-emerald-50 border border-emerald-100 p-3 rounded-xl">
                            <p class="text-sm font-medium text-emerald-700 italic">"Pelanggan bisa lihat koleksi barang
                                dari HP kapan saja."</p>
                        </blockquote>
                    </div>
                </article>

                <article
                    class="group flex flex-col bg-white rounded-3xl p-4 shadow-sm hover:shadow-xl transition-all duration-500 border border-slate-100"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="aspect-video bg-orange-50 rounded-2xl mb-5 overflow-hidden relative">
                        <div class="absolute inset-0 flex items-center justify-center text-orange-400 text-sm font-medium group-hover:scale-105 transition-transform duration-700"
                            aria-hidden="true">
                            Screenshot Sistem Kasir / POS
                        </div>
                        {{-- <img src="{{ asset('images/portofolio/pos-kasir.jpg') }}" alt="Screenshot sistem kasir
                        point of sale dengan manajemen stok real-time" class="w-full h-full object-cover
                        group-hover:scale-105 transition-transform duration-700"> --}}
                        <span
                            class="absolute top-3 left-3 bg-white/90 backdrop-blur text-slate-800 text-[10px] font-bold px-2.5 py-1 rounded-md shadow-sm">Kasir
                            / POS</span>
                    </div>
                    <div class="px-2 flex-grow">
                        <h3 class="text-lg font-bold text-slate-900 mb-2 group-hover:text-orange-600 transition-colors">
                            Sistem Kasir & Point of Sale (POS)</h3>
                        <p class="text-slate-500 text-sm mb-4 line-clamp-2">
                            Kasir digital modern dengan manajemen stok real-time, laporan keuangan harian, dan dukungan
                            QRIS.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-5">
                            <span
                                class="text-xs text-slate-500 bg-slate-100 px-2.5 py-1 rounded-full font-medium">Inventory
                                Real-time</span>
                            <span
                                class="text-xs text-slate-500 bg-slate-100 px-2.5 py-1 rounded-full font-medium">QRIS</span>
                        </div>
                    </div>
                    <div class="px-2 pb-2">
                        <blockquote class="bg-orange-50 border border-orange-100 p-3 rounded-xl">
                            <p class="text-sm font-medium text-orange-700 italic">"Dulu pusing stok hilang, sekarang
                                semua tercatat rapi."</p>
                        </blockquote>
                    </div>
                </article>

            </div>
        </div>
    </section>

    {{-- ================================================================
     SECTION 4: KEUNGGULAN
     SEO: <h2> heading utama, <h3> tiap keunggulan
================================================================ --}}
    <section id="keunggulan" class="py-24 bg-slate-900 text-white overflow-hidden relative">
        <div class="absolute top-0 left-0 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2 pointer-events-none"
            aria-hidden="true"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-emerald-600/10 rounded-full blur-3xl translate-x-1/3 translate-y-1/3 pointer-events-none"
            aria-hidden="true"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <div data-aos="fade-right">
                    <span class="text-blue-400 font-semibold tracking-wider uppercase text-sm mb-3 block">Kenapa Pilih
                        Kami?</span>
                    <h2 class="text-3xl lg:text-5xl font-extrabold mb-6 leading-tight">
                        Keunggulan Jasa Website<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-emerald-400">
                            Cakra Inovasi Digital
                        </span>
                    </h2>
                    <p class="text-slate-400 text-lg mb-8 leading-relaxed max-w-md">
                        Kami tidak sekadar membuat website. Kami membangun sistem digital yang dirancang khusus untuk
                        mempercepat pertumbuhan bisnis Anda.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 mt-8">
                        <a href="/hubungi-kami"
                            class="inline-flex items-center justify-center gap-2 px-8 py-3 bg-blue-600 hover:bg-blue-500 text-white font-bold rounded-full transition-all shadow-lg shadow-blue-500/30">
                            Mulai Konsultasi Gratis <i class="fa-solid fa-arrow-right text-sm"></i>
                        </a>
                        <a href="/tentang"
                            class="inline-flex items-center justify-center gap-2 px-8 py-3 border-2 border-blue-600 text-blue-400 hover:bg-blue-600 hover:text-white font-bold rounded-full transition-all">
                            Tentang Kami
                        </a>
                    </div>
                </div>

                <div class="grid sm:grid-cols-2 gap-6">

                    <div class="group p-6 bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-2xl hover:bg-slate-800 hover:border-blue-500/50 transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="w-12 h-12 bg-blue-500/10 text-blue-400 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform"
                            aria-hidden="true">
                            <i class="fa-solid fa-code text-xl"></i>
                        </div>
                        <h3 class="text-lg font-bold mb-2 text-slate-100">Teknologi Modern & Terkini</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            Dibangun dengan framework terkini — website Anda cepat, aman, dan mudah dikembangkan di masa
                            depan.
                        </p>
                    </div>

                    <div class="group p-6 bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-2xl hover:bg-slate-800 hover:border-emerald-500/50 transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="w-12 h-12 bg-emerald-500/10 text-emerald-400 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform"
                            aria-hidden="true">
                            <i class="fa-solid fa-mobile-screen text-xl"></i>
                        </div>
                        <h3 class="text-lg font-bold mb-2 text-slate-100">Desain Responsif di Semua Perangkat</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            Tampilan optimal di HP, tablet, maupun komputer — pelanggan Anda bisa mengakses dari
                            perangkat apapun.
                        </p>
                    </div>

                    <div class="group p-6 bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-2xl hover:bg-slate-800 hover:border-orange-500/50 transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="300">
                        <div class="w-12 h-12 bg-orange-500/10 text-orange-400 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform"
                            aria-hidden="true">
                            <i class="fa-solid fa-tags text-xl"></i>
                        </div>
                        <h3 class="text-lg font-bold mb-2 text-slate-100">Harga Transparan, Tanpa Biaya Tersembunyi</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            Investasi yang jelas sejak awal. Tidak ada kejutan biaya di tengah jalan — semua sudah
                            disepakati di kontrak.
                        </p>
                    </div>

                    <div class="group p-6 bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-2xl hover:bg-slate-800 hover:border-purple-500/50 transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="400">
                        <div class="w-12 h-12 bg-purple-500/10 text-purple-400 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform"
                            aria-hidden="true">
                            <i class="fa-solid fa-headset text-xl"></i>
                        </div>
                        <h3 class="text-lg font-bold mb-2 text-slate-100">Garansi Support Purna Jual</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            Kami tidak lepas tangan setelah serah terima. Dukungan teknis terus berjalan untuk menjaga
                            performa website Anda.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- ================================================================
     SECTION 5: TESTIMONI
     SEO: <h2> heading, region landmark
================================================================ --}}
    <section id="testimoni" class="py-24 bg-white overflow-hidden" x-data="testimonialData()"
        aria-label="Testimoni klien">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900">Cerita Nyata dari Klien Kami</h2>
                <p class="text-slate-500 mt-4 max-w-2xl mx-auto text-lg">Bukan sekadar testimoni — bukti nyata bahwa
                    kami serius mendampingi bisnis Anda tumbuh.</p>
            </div>

            <div class="relative">
                <div class="swiper testimonial-swiper">
                    <div class="swiper-wrapper">
                        <template x-for="item in testimonials" :key="item.id">
                            <div class="swiper-slide h-auto py-4 px-2">
                                <div
                                    :class="`p-8 rounded-3xl border h-full flex flex-col relative transition-all duration-300 shadow-sm hover:shadow-md ${item.bgColor} ${item.borderColor}`">
                                    <div :class="`text-4xl absolute top-4 right-6 opacity-20 ${item.quoteColor}`"
                                        aria-hidden="true">"</div>
                                    <p class="text-slate-700 italic leading-relaxed mb-8 flex-grow"
                                        x-text="item.content"></p>
                                    <div class="flex items-center gap-4 mt-auto border-t border-black/5 pt-6">
                                        <div :class="`w-12 h-12 rounded-full flex items-center justify-center font-bold text-white shadow-sm flex-shrink-0 ${item.avatarBg}`"
                                            x-text="item.initials" :aria-label="'Inisial ' + item.name"></div>
                                        <div class="overflow-hidden">
                                            <h3 class="font-bold text-slate-900 text-sm md:text-base truncate"
                                                x-text="item.name"></h3>
                                            <p class="text-xs text-slate-500 truncate" x-text="item.role"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
                <div class="testimonial-pagination flex justify-center gap-2 mt-10" role="tablist"
                    aria-label="Navigasi testimoni"></div>
            </div>
        </div>
    </section>

    {{-- ================================================================
     SECTION 6: TEKNOLOGI
     SEO: <h2> heading, img alt text pada setiap logo teknologi
================================================================ --}}
    <section id="teknologi" class="py-24 bg-slate-50 overflow-hidden">
        <div class="max-w-6xl mx-auto px-6 lg:px-10">

            <div class="text-center mb-14" data-aos="fade-up">
                <span
                    class="bg-blue-100 text-blue-700 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">Teknologi
                    Modern & Stabil</span>
                <h2 class="text-3xl md:text-4xl font-extrabold mt-5 mb-4 text-slate-900">
                    Stack Teknologi yang Kami Gunakan
                </h2>
                <p class="text-slate-500 max-w-2xl mx-auto">
                    Kombinasi teknologi terbaik untuk memastikan website Anda cepat, aman, dan mudah dikembangkan di
                    masa depan.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-4 md:gap-6" data-aos="fade-up"
                data-aos-delay="200">

                @php
                $techStack = [
                ['src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg', 'alt' =>
                'Laravel — PHP Framework', 'label' => 'Laravel', 'hover' => 'group-hover:text-red-600'],
                ['src' => 'https://upload.wikimedia.org/wikipedia/commons/d/d5/Tailwind_CSS_Logo.svg', 'alt' =>
                'Tailwind CSS — Utility CSS Framework', 'label' => 'Tailwind', 'hover' => 'group-hover:text-cyan-500'],
                ['src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/codeigniter/codeigniter-plain.svg', 'alt'
                => 'CodeIgniter — PHP Framework','label' => 'CodeIgniter', 'hover' => 'group-hover:text-orange-600'],
                ['src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg', 'alt' => 'React
                JS — JavaScript Library','label' => 'React JS', 'hover' => 'group-hover:text-cyan-400'],
                ['src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg', 'alt' =>
                'Node JS — JavaScript Runtime','label' => 'Node JS', 'hover' => 'group-hover:text-green-600'],
                ['src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg', 'alt' => 'MySQL
                — Relational Database', 'label' => 'MySQL', 'hover' => 'group-hover:text-blue-600'],
                ['src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg','alt'
                => 'JavaScript Modern (ES6+)', 'label' => 'JS Modern', 'hover' => 'group-hover:text-yellow-500'],
                ['src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg', 'alt' => 'PHP 8+ —
                Server Side Language','label' => 'PHP 8+', 'hover' => 'group-hover:text-indigo-600'],
                ];
                @endphp

                @foreach($techStack as $tech)
                <div
                    class="group p-5 bg-white rounded-[28px] shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 flex flex-col items-center justify-center border border-slate-100">
                    <img src="{{ $tech['src'] }}"
                        class="w-10 h-10 mb-3 grayscale group-hover:grayscale-0 transition-all" alt="{{ $tech['alt'] }}"
                        loading="lazy" width="40" height="40">
                    <span
                        class="text-[10px] font-bold text-slate-400 {{ $tech['hover'] }} transition-colors text-center leading-tight">{{ strtoupper($tech['label']) }}</span>
                </div>
                @endforeach

            </div>

            <div class="mt-14 p-8 bg-blue-600 rounded-[32px] text-white flex flex-col md:flex-row items-center justify-between gap-6"
                data-aos="zoom-in">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-white/20 rounded-2xl flex items-center justify-center text-2xl"
                        aria-hidden="true">🚀</div>
                    <div>
                        <h3 class="font-bold">Selalu Up-to-Date dengan Teknologi Terbaru</h3>
                        <p class="text-blue-100 text-sm">Kami memastikan sistem Anda menggunakan versi teknologi terkini
                            dan terpercaya.</p>
                    </div>
                </div>
                <a href="/portofolio"
                    class="whitespace-nowrap bg-white text-blue-600 px-6 py-3 rounded-xl font-bold text-sm hover:bg-blue-50 transition">
                    Lihat Hasil Kerja Kami
                </a>
            </div>

        </div>
    </section>

    {{-- ================================================================
     SECTION 7: FAQ
     SEO: <h2> heading, konten FAQ sudah diinjeksi Schema JSON-LD di atas
================================================================ --}}
    <section id="faq" class="py-24 bg-white" x-data="faqSection()">
        <div class="max-w-3xl mx-auto px-6">

            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">
                    Pertanyaan Seputar <span class="text-blue-600">Jasa Website Kami</span>
                </h2>
                <p class="text-slate-600">Semua yang perlu Anda ketahui sebelum memulai kerja sama bersama kami.</p>
            </div>

            <div class="space-y-3" itemscope itemtype="https://schema.org/FAQPage">
                <template x-for="faq in faqs" :key="faq.id">
                    <div class="border border-slate-200 rounded-2xl overflow-hidden shadow-sm transition-all duration-300"
                        :class="selected === faq.id ? 'border-blue-300 ring-1 ring-blue-100' : ''" itemscope
                        itemprop="mainEntity" itemtype="https://schema.org/Question">

                        <button @click="selected !== faq.id ? selected = faq.id : selected = null"
                            class="w-full flex items-center justify-between p-6 text-left bg-white hover:bg-slate-50 transition-colors"
                            :aria-expanded="selected === faq.id">
                            <span class="font-bold text-slate-900 pr-4"
                                :class="selected === faq.id ? 'text-blue-600' : ''" x-text="faq.question"
                                itemprop="name"></span>
                            <i class="fa-solid fa-chevron-down text-blue-600 transition-transform duration-300 shrink-0"
                                :class="selected === faq.id ? 'rotate-180' : ''"></i>
                        </button>

                        <div class="px-6 pb-6 text-sm text-slate-600 leading-relaxed" x-show="selected === faq.id"
                            x-collapse itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div x-html="faq.answer" itemprop="text"></div>
                        </div>

                    </div>
                </template>
            </div>

            <div class="mt-10 text-center" data-aos="fade-up">
                <p class="text-slate-500 text-sm mb-4">Masih ada pertanyaan lain?</p>
                <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ada%20pertanyaan%20seputar%20jasa%20website%20Anda."
                    target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 bg-emerald-500 text-white px-6 py-3 rounded-xl font-semibold hover:bg-emerald-600 transition text-sm">
                    <i class="fa-brands fa-whatsapp"></i>
                    Tanya Langsung via WhatsApp
                </a>
            </div>

        </div>
    </section>

    {{-- ================================================================
     SECTION 8: CTA AKHIR
     SEO: <h2> mengandung keyword, dilengkapi dengan kalimat nilai yang jelas
================================================================ --}}
    <section class="py-20 bg-slate-50" aria-label="Ajakan untuk memulai proyek website">
        <div class="max-w-7xl mx-auto px-6">
            <div data-aos="zoom-in" data-aos-duration="800"
                class="bg-blue-600 rounded-[2rem] p-12 lg:p-20 text-center relative overflow-hidden shadow-2xl">

                <div class="absolute inset-0 opacity-10" aria-hidden="true">
                    <div
                        class="absolute top-0 left-0 w-64 h-64 bg-white rounded-full -translate-x-1/2 -translate-y-1/2">
                    </div>
                    <div
                        class="absolute bottom-0 right-0 w-64 h-64 bg-white rounded-full translate-x-1/2 translate-y-1/2">
                    </div>
                </div>

                <div class="relative z-10 text-white">
                    <h2 class="text-3xl lg:text-5xl font-bold mb-4">Siap Punya Website Profesional untuk Bisnis Anda?
                    </h2>
                    <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">Konsultasi pertama gratis, tanpa syarat.
                        Ceritakan kebutuhan bisnis Anda dan kami siapkan solusinya.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20konsultasi%20gratis%20untuk%20pembuatan%20website%20bisnis%20saya."
                            target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center justify-center gap-2 px-10 py-4 bg-white text-blue-600 font-bold rounded-xl shadow-lg hover:bg-blue-50 transition text-base">
                            <i class="fa-brands fa-whatsapp text-emerald-500 text-lg"></i>
                            Mulai Konsultasi Sekarang
                        </a>
                        <a href="/portofolio"
                            class="inline-flex items-center justify-center gap-2 px-10 py-4 border-2 border-white/40 text-white font-bold rounded-xl hover:bg-white/10 transition text-base">
                            Lihat Portofolio Kami
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ================================================================
     SCRIPTS
================================================================ --}}
    @push('scripts')
    <script>
    const faqRichAnswers = {
        1: `Kami bekerja melalui 5 tahap profesional:
        <ul class="mt-3 space-y-2">
            <li class="flex items-center gap-2"><i class="fa-solid fa-1 text-[10px] bg-blue-100 text-blue-600 p-1 rounded"></i> Konsultasi kebutuhan & deal kontrak.</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-2 text-[10px] bg-blue-100 text-blue-600 p-1 rounded"></i> Pembuatan konsep desain visual.</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-3 text-[10px] bg-blue-100 text-blue-600 p-1 rounded"></i> Proses coding sistem.</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-4 text-[10px] bg-blue-100 text-blue-600 p-1 rounded"></i> Testing sistem & revisi.</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-5 text-[10px] bg-blue-100 text-blue-600 p-1 rounded"></i> Go-Live & pelatihan admin/kasir.</li>
        </ul>`,
        2: `<p class="mb-3 font-medium">Anda menerima paket siap operasional:</p>
        <ul class="space-y-2">
            <li class="flex items-start gap-3"><i class="fa-solid fa-check text-blue-600 mt-1"></i> <span>Akses penuh Dashboard Admin & Kasir.</span></li>
            <li class="flex items-start gap-3"><i class="fa-solid fa-check text-blue-600 mt-1"></i> <span>Domain (.com/.id) & Cloud Hosting aktif 1 tahun.</span></li>
            <li class="flex items-start gap-3"><i class="fa-solid fa-check text-blue-600 mt-1"></i> <span>Sertifikat keamanan SSL (HTTPS).</span></li>
            <li class="flex items-start gap-3"><i class="fa-solid fa-check text-blue-600 mt-1"></i> <span>Video panduan operasional sistem.</span></li>
        </ul>`,
        3: `<p class="mb-4 text-slate-700">Kami menggunakan sistem <strong>3 Termin</strong>:</p>
        <div class="space-y-4 pl-4 border-l-2 border-slate-100">
            <div><span class="font-bold block text-slate-900">1. Termin Awal (DP)</span><span class="text-xs">Saat deal proyek dan penandatanganan kontrak.</span></div>
            <div><span class="font-bold block text-slate-900">2. Termin Progres</span><span class="text-xs">Setelah desain disetujui dan masuk tahap coding.</span></div>
            <div><span class="font-bold block text-slate-900">3. Termin Pelunasan</span><span class="text-xs">Setelah website selesai dan siap dipublish.</span></div>
        </div>`,
        4: `<div class="grid grid-cols-1 md:grid-cols-2 gap-3">
            <div class="p-3 bg-slate-50 rounded-xl flex gap-3"><i class="fa-solid fa-shield-check text-blue-600"></i> <span>Garansi bug/error sistem.</span></div>
            <div class="p-3 bg-slate-50 rounded-xl flex gap-3"><i class="fa-solid fa-headset text-blue-600"></i> <span>Konsultasi teknis gratis.</span></div>
            <div class="p-3 bg-slate-50 rounded-xl flex gap-3"><i class="fa-solid fa-server text-blue-600"></i> <span>Pemantauan server & backup.</span></div>
            <div class="p-3 bg-slate-50 rounded-xl flex gap-3"><i class="fa-solid fa-circle-play text-blue-600"></i> <span>Update panduan fitur baru.</span></div>
        </div>`,
        5: `<ul class="space-y-3">
            <li class="flex items-start gap-3"><i class="fa-solid fa-palette text-blue-600 mt-1"></i> <span><strong>Tahap Desain:</strong> Revisi minor sepuasnya hingga deal.</span></li>
            <li class="flex items-start gap-3"><i class="fa-solid fa-code text-blue-600 mt-1"></i> <span><strong>Tahap Coding:</strong> Revisi fungsi/konten (bukan rombak struktur).</span></li>
        </ul>`,
        6: `<p><strong>Sangat bisa!</strong> Sistem berbasis web responsif:</p>
        <ul class="mt-3 space-y-2">
            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Akses via Android/iOS.</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Support Laptop/PC Kasir.</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Support Printer Thermal Bluetooth/USB.</li>
        </ul>`,
        7: `<p><strong>Sangat bisa!</strong> Kami menyediakan Dashboard Admin yang user-friendly sehingga Anda bisa menambah artikel, galeri, atau mengubah harga layanan kapan saja — tanpa keahlian teknis apapun.</p>`,
        8: `<ul class="space-y-2">
            <li class="flex items-center gap-2"><i class="fa-solid fa-video text-blue-500"></i> Video tutorial lengkap.</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-headset text-blue-500"></i> Konsultasi teknis gratis via WhatsApp.</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-book text-blue-500"></i> Buku panduan dalam format PDF.</li>
        </ul>`
    };

    function faqSection() {
        const rawFaqs = @json($faqsData);
        return {
            selected: null,
            faqs: rawFaqs.map((item, index) => ({
                id: index + 1,
                question: item.question,
                answer: faqRichAnswers[index + 1] ?? `<p>${item.answer}</p>`,
            }))
        }
    }
    </script>
    @endpush

    @push('scripts')
    <script>
    function testimonialData() {
        return {
            testimonials: [{
                    id: 1,
                    name: "Bu Hj. Nurhasanah",
                    role: "Pemilik Toko Berkah (POS)",
                    initials: "HN",
                    bgColor: "bg-blue-50/50",
                    borderColor: "border-blue-100",
                    quoteColor: "text-blue-400",
                    avatarBg: "bg-blue-500",
                    content: "Awalnya saya gaptek banget, takut pakai sistem kasir karena mikirnya bakal ribet. Tapi tim Cakra sabar banget ngajarin pelan-pelan sampai saya bisa operasikan sendiri."
                },
                {
                    id: 2,
                    name: "Kevin Sanjaya",
                    role: "CEO Start-up Lokal (Landing Page)",
                    initials: "KS",
                    bgColor: "bg-slate-50/50",
                    borderColor: "border-slate-100",
                    quoteColor: "text-slate-400",
                    avatarBg: "bg-slate-600",
                    content: "Landing page-nya kenceng dan clean. Conversion rate bisnis saya naik signifikan sejak pakai jasa Cakra Digital. Benar-benar paham cara bikin desain yang menjual."
                },
                {
                    id: 3,
                    name: "Siska Amelia",
                    role: "Owner Butik Siska (Katalog Digital)",
                    initials: "SA",
                    bgColor: "bg-orange-50/50",
                    borderColor: "border-orange-100",
                    quoteColor: "text-orange-400",
                    avatarBg: "bg-orange-500",
                    content: "Katalog digitalnya bikin jualan di WA jadi lebih profesional. Pelanggan tinggal pilih barang dari katalog, nggak perlu kirim foto manual satu-satu lagi."
                },
                {
                    id: 4,
                    name: "Maya Sartika",
                    role: "Catering Ibu Maya (E-commerce)",
                    initials: "MS",
                    bgColor: "bg-emerald-50/50",
                    borderColor: "border-emerald-100",
                    quoteColor: "text-emerald-400",
                    avatarBg: "bg-emerald-600",
                    content: "Website e-commerce-nya gampang dikelola sendiri, bahkan buat saya yang bukan orang IT. Pesanan masuk jadi lebih teratur dan pembayaran otomatisnya sangat membantu."
                },
                {
                    id: 5,
                    name: "Andi Wijaya",
                    role: "Distributor Material (Inventory POS)",
                    initials: "AW",
                    bgColor: "bg-blue-50/50",
                    borderColor: "border-blue-100",
                    quoteColor: "text-blue-400",
                    avatarBg: "bg-blue-600",
                    content: "Sistem stoknya real-time banget. Saya bisa pantau keluar masuk barang di gudang dari luar kota cuma modal HP saja. Sangat membantu kontrol bisnis jarak jauh."
                },
                {
                    id: 6,
                    name: "Mas Rian",
                    role: "Owner Laundry Express (Landing Page)",
                    initials: "RS",
                    bgColor: "bg-slate-50/50",
                    borderColor: "border-slate-100",
                    quoteColor: "text-slate-400",
                    avatarBg: "bg-slate-500",
                    content: "Cari vendor IT yang nggak 'nakutin' soal harga itu susah. Di sini saya dapat landing page berkualitas dengan budget yang bersahabat buat UMKM seperti saya."
                },
                {
                    id: 7,
                    name: "Bpk. Subagyo",
                    role: "Warung Makan Barokah (Katalog QR)",
                    initials: "BS",
                    bgColor: "bg-orange-50/50",
                    borderColor: "border-orange-100",
                    quoteColor: "text-orange-400",
                    avatarBg: "bg-orange-600",
                    content: "Menu katalog QR code-nya simpel, anti ribet buat pembeli. Saya nggak perlu cetak ulang buku menu tiap kali ada perubahan harga atau menu baru."
                },
                {
                    id: 8,
                    name: "Fandi Ahmad",
                    role: "Bengkel Motor Fandi (POS Service)",
                    initials: "FA",
                    bgColor: "bg-emerald-50/50",
                    borderColor: "border-emerald-100",
                    quoteColor: "text-emerald-400",
                    avatarBg: "bg-emerald-400",
                    content: "Data pelanggan jadi rapi. Dulu sering lupa jadwal servis rutin pelanggan, sekarang tinggal cek di sistem. Bengkel jadi terlihat lebih modern dan dipercaya."
                },
                {
                    id: 9,
                    name: "Ibu Ratna",
                    role: "Toko Sembako Jaya (POS Mobile)",
                    initials: "IR",
                    bgColor: "bg-blue-50/50",
                    borderColor: "border-blue-100",
                    quoteColor: "text-blue-400",
                    avatarBg: "bg-blue-400",
                    content: "Ditemenin sampai bisa pakai! Support-nya juara, kalau ada bingung soal input barang tinggal WA langsung dibantu sampai tuntas. Gak nyesel langganan di sini."
                },
                {
                    id: 10,
                    name: "Dewi Lestari",
                    role: "Home Industri Kerajinan (E-commerce)",
                    initials: "DL",
                    bgColor: "bg-emerald-50/50",
                    borderColor: "border-emerald-100",
                    quoteColor: "text-emerald-400",
                    avatarBg: "bg-emerald-500",
                    content: "Visual website e-commerce-nya bagus banget, sesuai ekspektasi saya yang peduli soal estetika. Sekarang produk kerajinan saya bisa menjangkau pembeli luar pulau."
                }
            ]
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        new Swiper('.testimonial-swiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false
            },
            pagination: {
                el: '.testimonial-pagination',
                clickable: true
            },
            breakpoints: {
                640: {
                    slidesPerView: 1.5
                },
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }
            }
        });
    });
    </script>
    @endpush

    @push('styles')
    <style>
    .testimonial-swiper {
        overflow: hidden !important;
    }

    .testimonial-swiper .swiper-slide {
        height: auto;
        display: flex;
    }

    .testimonial-pagination .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
        background: #cbd5e1;
        opacity: 1;
        border-radius: 50%;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .testimonial-pagination .swiper-pagination-bullet-active {
        background: #2563eb !important;
        width: 28px !important;
        border-radius: 12px !important;
    }
    </style>
    @endpush

</x-layout.app>
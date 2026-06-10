<x-layout.app>

    @php
    $title = 'Jasa Pembuatan Website Company Profile Profesional | Cakra Inovasi Digital';
    $metaDescription = 'Jasa pembuatan website company profile profesional — tampilkan kredibilitas bisnis Anda, raih
    kepercayaan klien baru, dan hadir di halaman pertama Google. Desain modern, SEO-ready, dashboard admin mandiri.
    Konsultasi gratis!';
    $metaKeywords = 'jasa website company profile, website perusahaan profesional, web developer company profile,
    website bisnis UMKM, jasa web developer Sukoharjo, Jawa Tengah, company profile online';
    $ogType = 'website';
    $canonicalUrl = url('/layanan/web-perusahaan');

    $faqsData = [
    ['question' => 'Apa perbedaan website company profile dengan website biasa?', 'answer' => 'Website company profile
    dirancang khusus untuk membangun kredibilitas dan kepercayaan — menampilkan profil perusahaan, layanan, portfolio,
    dan kontak secara profesional. Berbeda dengan toko online yang fokus pada transaksi, company profile fokus pada
    konversi prospek menjadi klien.'],
    ['question' => 'Apakah saya bisa update konten website sendiri?', 'answer' => 'Ya. Anda mendapatkan Dashboard Admin
    yang mudah digunakan untuk update artikel, galeri proyek, testimoni klien, daftar layanan, dan informasi lainnya
    kapan saja tanpa perlu bantuan developer.'],
    ['question' => 'Apakah website company profile bisa muncul di Google?', 'answer' => 'Ya. Setiap halaman dioptimasi
    dengan teknik SEO on-page lengkap — struktur heading, meta tag, schema markup, kecepatan loading, dan sitemap — agar
    bisnis Anda mudah ditemukan di Google.'],
    ['question' => 'Berapa lama pengerjaan website company profile?', 'answer' => 'Untuk paket Starter sekitar 7-10 hari
    kerja, paket Professional 10-14 hari kerja. Waktu bisa lebih cepat jika konten, foto, dan logo sudah disiapkan dari
    awal.'],
    ['question' => 'Apakah tampilan website bisa disesuaikan dengan identitas brand saya?', 'answer' => 'Tentu. Desain
    website akan mengikuti palet warna, font, dan gaya visual brand Anda. Kami akan konsultasikan konsep desain terlebih
    dahulu sebelum mulai pengerjaan.'],
    ['question' => 'Apakah ada fitur formulir kontak atau WhatsApp di website?', 'answer' => 'Ya. Semua paket sudah
    dilengkapi tombol WhatsApp langsung dan formulir kontak yang notifikasinya masuk ke email Anda. Paket Professional
    ke atas juga dilengkapi live chat widget.'],
    ['question' => 'Apakah website bisa tampil baik di HP?', 'answer' => 'Wajib. Semua website yang kami kerjakan
    menggunakan Mobile-First Design — tampilan dioptimasi terlebih dahulu untuk pengguna HP, baru kemudian untuk
    desktop. Mayoritas pengunjung website saat ini menggunakan HP.'],
    ['question' => 'Bagaimana dengan keamanan data dan website saya?', 'answer' => 'Kami memasang SSL Certificate
    (HTTPS) di semua paket, backup data berkala, dan menggunakan framework Laravel yang teruji keamanannya. Anda tidak
    perlu khawatir soal keamanan website.'],
    ];

    $paket = [
    [
    'nama' => 'Company Profile Starter',
    'tagline' => 'Untuk bisnis yang baru membangun presence online',
    'harga' => 'Rp 2jt',
    'harga_raw' => '2.000.000',
    'label' => null,
    'populer' => false,
    'wa_text' => 'Halo%20Cakra%2C%20saya%20tertarik%20Paket%20Company%20Profile%20Starter.',
    'btn_style' => 'border-2 border-blue-600 text-blue-600 hover:bg-blue-50',
    'fitur_ya' => [
    'Hingga 5 halaman (Beranda, Tentang, Layanan, Galeri, Kontak)',
    'Desain profesional sesuai brand',
    'Halaman layanan / produk dasar',
    'Galeri foto proyek',
    'Formulir kontak + notifikasi email',
    'Tombol WhatsApp langsung',
    'Peta lokasi Google Maps',
    'Dashboard admin mandiri',
    'Desain responsif (HP & PC)',
    'Domain .com & Hosting 1 tahun',
    'SSL Certificate (HTTPS)',
    'Optimasi SEO on-page dasar',
    'Panduan & pelatihan admin',
    'Garansi bug',
    ],
    'fitur_tidak' => [
    'Halaman blog / artikel',
    'Portfolio proyek detail',
    'Live chat widget',
    'Integrasi Google Analytics',
    'Animasi & interaksi premium',
    'Multi-bahasa (Indonesia + Inggris)',
    'Integrasi media sosial otomatis',
    ],
    ],
    [
    'nama' => 'Company Profile Professional',
    'tagline' => 'Paling populer untuk bisnis yang serius tumbuh',
    'harga' => 'Rp 3,5jt',
    'harga_raw' => '3.500.000',
    'label' => 'Paling Populer',
    'populer' => true,
    'wa_text' => 'Halo%20Cakra%2C%20saya%20tertarik%20Paket%20Company%20Profile%20Professional.',
    'btn_style' => 'bg-blue-600 text-white hover:bg-blue-700 shadow-lg shadow-blue-200',
    'fitur_ya' => [
    'Hingga 10 halaman dinamis',
    'Desain premium dengan animasi scroll',
    'Halaman layanan detail per item',
    'Portfolio / galeri proyek + filter kategori',
    'Halaman blog / artikel SEO-friendly',
    'Formulir kontak + notifikasi email & WA',
    'Tombol WhatsApp + live chat widget',
    'Manajemen testimoni klien',
    'Dashboard admin lengkap',
    'Desain responsif Mobile-First',
    'Domain .com & Hosting 1 tahun',
    'SSL Certificate (HTTPS)',
    'Optimasi SEO on-page lengkap',
    'Integrasi Google Analytics & Search Console',
    'Integrasi media sosial otomatis',
    'Panduan video & pelatihan admin',
    'Garansi bug',
    ],
    'fitur_tidak' => [
    'Multi-bahasa (Indonesia + Inggris)',
    'Sistem pendaftaran / login pengguna',
    'Dedicated server & SLA uptime',
    'Integrasi API pihak ketiga',
    ],
    ],
    [
    'nama' => 'Enterprise / Korporat',
    'tagline' => 'Untuk perusahaan besar dengan kebutuhan kustom',
    'harga' => 'Custom',
    'harga_raw' => null,
    'label' => 'Mulai Rp 6jt',
    'populer' => false,
    'wa_text' => 'Halo%20Cakra%2C%20saya%20ingin%20diskusi%20paket%20Enterprise%20Company%20Profile.',
    'btn_style' => 'border-2 border-slate-800 text-slate-800 hover:bg-slate-900 hover:text-white',
    'fitur_ya' => [
    'Semua fitur Professional',
    'Halaman tidak terbatas',
    'Desain kustom penuh sesuai brand guideline',
    'Multi-bahasa (Indonesia + Inggris)',
    'Sistem pendaftaran / login pengguna',
    'Portal klien atau area member',
    'Integrasi API pihak ketiga (CRM, ERP)',
    'Animasi & micro-interaction premium',
    'Dedicated server & uptime SLA 99,9%',
    'Panel super-admin multi-role',
    'Backup otomatis harian',
    'Laporan pengunjung & konversi kustom',
    'Prioritas support & dedicated PM',
    'Garansi bug',
    'Free maintenance 3 bulan pertama',
    ],
    'fitur_tidak' => [],
    ],
    ];
    @endphp

    @push('schema')
    <x-faq-schema :faqs="$faqsData" />
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "{{ url('/layanan/web-perusahaan') }}/#service",
        "name": "Jasa Pembuatan Website Company Profile",
        "serviceType": "Pembuatan Website Company Profile",
        "provider": {
            "@id": "{{ url('/') }}/#business"
        },
        "url": "{{ url('/layanan/web-perusahaan') }}",
        "description": "Jasa pembuatan website company profile profesional untuk membangun kredibilitas bisnis, meningkatkan kepercayaan klien, dan tampil di halaman pertama Google.",
        "areaServed": {
            "@type": "Country",
            "name": "Indonesia"
        },
        "offers": [{
                "@type": "Offer",
                "name": "Company Profile Starter",
                "price": "1500000",
                "priceCurrency": "IDR"
            },
            {
                "@type": "Offer",
                "name": "Company Profile Professional",
                "price": "3500000",
                "priceCurrency": "IDR"
            },
            {
                "@type": "Offer",
                "name": "Company Profile Enterprise",
                "price": "7000000",
                "priceCurrency": "IDR"
            }
        ]
    }
    </script>
    @endpush


    {{-- ================================================================
     SECTION 1: HERO
================================================================ --}}
    <section class="pt-28 md:pt-36 pb-12 md:pb-24 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-6">

            <div class="max-w-6xl mx-auto text-center mb-10">
                <x-breadcrumb :items="[['name' => 'Layanan', 'url' => url('/layanan')]]" current="Company Profile" />
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center mt-5 md:mt-6">

                {{-- Kolom Teks --}}
                <div class="text-left space-y-5 md:space-y-7" data-aos="fade-right">
                    <div>
                        <span
                            class="inline-block px-4 py-1.5 rounded-full bg-blue-50 text-blue-600 text-xs font-semibold uppercase tracking-wider mb-3 md:mb-4">
                            Website Company Profile
                        </span>
                        <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-slate-900 leading-tight">
                            Jadikan Website Anda<br class="hidden sm:block">
                            <span class="text-blue-600">Sales Terbaik</span> yang Bekerja 24 Jam
                        </h1>
                        <p class="mt-4 md:mt-5 text-base md:text-lg text-slate-600 leading-relaxed">
                            Calon klien Anda <em>menilai profesionalisme bisnis Anda</em> dari website sebelum
                            memutuskan menghubungi. Pastikan kesan pertama mereka adalah kesan yang memenangkan
                            kepercayaan.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20konsultasi%20pembuatan%20website%20company%20profile."
                            target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center justify-center gap-2 px-6 md:px-8 py-3.5 rounded-2xl bg-blue-600 text-white font-bold text-sm md:text-base hover:bg-blue-700 transition-all shadow-lg shadow-blue-200">
                            <i class="fa-brands fa-whatsapp text-lg" aria-hidden="true"></i>
                            Konsultasi Gratis Sekarang
                        </a>
                        <a href="#fitur"
                            class="inline-flex items-center justify-center gap-2 px-6 md:px-8 py-3.5 rounded-2xl border-2 border-slate-200 text-slate-700 font-bold text-sm md:text-base hover:bg-slate-50 transition">
                            Lihat Fitur Lengkap
                        </a>
                    </div>

                    <div class="flex flex-wrap gap-3 md:gap-5 text-xs md:text-sm text-slate-500">
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-magnifying-glass text-blue-500"
                                aria-hidden="true"></i> SEO-Ready di Google</span>
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-mobile-screen text-blue-500"
                                aria-hidden="true"></i> Mobile-First Design</span>
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-bolt text-blue-500"
                                aria-hidden="true"></i> Dashboard Admin Mandiri</span>
                    </div>

                    {{-- Mobile-only stats --}}
                    <div class="grid grid-cols-2 gap-3 lg:hidden">
                        <div class="bg-blue-50 rounded-2xl p-4 text-center border border-blue-100">
                            <p class="text-2xl font-extrabold text-blue-600">24/7</p>
                            <p class="text-xs text-slate-500 mt-1">Website Bekerja untuk Anda</p>
                        </div>
                        <div class="bg-emerald-50 rounded-2xl p-4 text-center border border-emerald-100">
                            <p class="text-2xl font-extrabold text-emerald-600">10+</p>
                            <p class="text-xs text-slate-500 mt-1">Halaman Profesional</p>
                        </div>
                        <div class="bg-orange-50 rounded-2xl p-4 text-center border border-orange-100">
                            <p class="text-2xl font-extrabold text-orange-500">#1</p>
                            <p class="text-xs text-slate-500 mt-1">Kesan Pertama di Google</p>
                        </div>
                        <div class="bg-violet-50 rounded-2xl p-4 text-center border border-violet-100">
                            <p class="text-2xl font-extrabold text-violet-600">100%</p>
                            <p class="text-xs text-slate-500 mt-1">Milik & Kontrol Anda</p>
                        </div>
                    </div>
                </div>

                {{-- Kolom Mockup Dashboard Company Profile --}}
                <div class="relative" data-aos="fade-left">

                    <div class="absolute inset-0 bg-gradient-to-br from-blue-100 via-indigo-50 to-slate-100 rounded-[3rem] blur-3xl opacity-60 scale-110"
                        aria-hidden="true"></div>

                    <div
                        class="relative z-10 bg-slate-900 rounded-[2rem] shadow-2xl overflow-hidden border border-slate-700/50">

                        {{-- Topbar --}}
                        <div
                            class="bg-slate-800 px-5 py-3.5 flex items-center justify-between border-b border-slate-700/60">
                            <div class="flex items-center gap-2.5">
                                <div class="w-2.5 h-2.5 rounded-full bg-red-500"></div>
                                <div class="w-2.5 h-2.5 rounded-full bg-amber-400"></div>
                                <div class="w-2.5 h-2.5 rounded-full bg-emerald-500"></div>
                            </div>
                            <div class="flex items-center gap-1.5 bg-slate-700/60 rounded-lg px-3 py-1">
                                <i class="fa-solid fa-lock text-slate-400 text-[9px]" aria-hidden="true"></i>
                                <span class="text-[10px] text-slate-400 font-mono">perusahaan-anda.com</span>
                            </div>
                            <div class="w-6 h-6 rounded-full bg-blue-500 flex items-center justify-center">
                                <span class="text-[8px] font-bold text-white">A</span>
                            </div>
                        </div>

                        {{-- Hero section mini --}}
                        <div class="bg-gradient-to-br from-blue-700 to-indigo-800 px-5 py-6 relative overflow-hidden">
                            <div class="absolute right-0 top-0 w-24 h-24 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/4"
                                aria-hidden="true"></div>
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center shrink-0">
                                    <i class="fa-solid fa-building text-white text-sm" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <p class="text-[11px] font-extrabold text-white">PT. Maju Bersama Indonesia</p>
                                    <p class="text-[9px] text-blue-200">Solusi Konstruksi & Bangunan</p>
                                </div>
                            </div>
                            <div class="space-y-2 mb-4">
                                <div class="h-2.5 w-3/4 bg-white/30 rounded-full"></div>
                                <div class="h-2 w-1/2 bg-white/20 rounded-full"></div>
                            </div>
                            <div class="flex gap-2">
                                <div class="px-3 py-1.5 bg-white rounded-lg text-[9px] font-bold text-blue-700">Hubungi
                                    Kami</div>
                                <div
                                    class="px-3 py-1.5 bg-white/20 rounded-lg text-[9px] font-semibold text-white border border-white/30">
                                    Lihat Portfolio</div>
                            </div>
                        </div>

                        {{-- Body --}}
                        <div class="p-5 space-y-4">

                            {{-- Statistik website --}}
                            <div class="grid grid-cols-3 gap-2.5">
                                <div class="bg-slate-800/80 rounded-xl p-3 border border-slate-700/40 text-center">
                                    <p class="text-base font-extrabold text-white leading-none">1.240</p>
                                    <p class="text-[9px] text-slate-400 mt-1">Pengunjung / Bln</p>
                                </div>
                                <div class="bg-slate-800/80 rounded-xl p-3 border border-slate-700/40 text-center">
                                    <p class="text-base font-extrabold text-emerald-400 leading-none">38</p>
                                    <p class="text-[9px] text-slate-400 mt-1">Inquiry Masuk</p>
                                </div>
                                <div class="bg-slate-800/80 rounded-xl p-3 border border-slate-700/40 text-center">
                                    <p class="text-base font-extrabold text-blue-400 leading-none">#4</p>
                                    <p class="text-[9px] text-slate-400 mt-1">Posisi Google</p>
                                </div>
                            </div>

                            {{-- Grafik pengunjung --}}
                            <div class="bg-slate-800/80 rounded-xl p-4 border border-slate-700/40">
                                <div class="flex items-center justify-between mb-3">
                                    <p class="text-[10px] text-slate-300 font-semibold">Grafik Pengunjung — 7 Hari</p>
                                    <span
                                        class="text-[9px] bg-emerald-500/20 text-emerald-400 px-2 py-0.5 rounded-full">+24%</span>
                                </div>
                                <div class="flex items-end gap-1.5 h-16">
                                    @php $bars = [40,65,50,80,60,90,100]; $days =
                                    ['Sen','Sel','Rab','Kam','Jum','Sab','Min']; @endphp
                                    @foreach($bars as $i => $h)
                                    <div class="flex-1 flex flex-col items-center gap-1">
                                        <div class="w-full rounded-t-md"
                                            style="height: {{ $h }}%; background: {{ $h === 100 ? '#3b82f6' : 'rgba(99,102,241,0.4)' }}">
                                        </div>
                                        <span class="text-[7px] text-slate-500">{{ $days[$i] }}</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            {{-- Halaman & Konten --}}
                            <div class="bg-slate-800/80 rounded-xl border border-slate-700/40 overflow-hidden">
                                <div class="px-4 py-2.5 border-b border-slate-700/40 flex items-center justify-between">
                                    <p class="text-[10px] text-slate-300 font-semibold">Manajemen Halaman</p>
                                    <span class="text-[9px] text-blue-400">+ Tambah Halaman</span>
                                </div>
                                @php
                                $pages = [
                                ['icon' => 'fa-house', 'name' => 'Beranda', 'status' => 'Publik', 'color' =>
                                'text-emerald-400 bg-emerald-400/10'],
                                ['icon' => 'fa-briefcase', 'name' => 'Layanan Kami', 'status' => 'Publik', 'color' =>
                                'text-emerald-400 bg-emerald-400/10'],
                                ['icon' => 'fa-images', 'name' => 'Portfolio', 'status' => 'Publik', 'color' =>
                                'text-emerald-400 bg-emerald-400/10'],
                                ['icon' => 'fa-newspaper', 'name' => 'Blog & Artikel', 'status' => 'Draft', 'color' =>
                                'text-amber-400 bg-amber-400/10'],
                                ];
                                @endphp
                                @foreach($pages as $page)
                                <div
                                    class="px-4 py-2.5 flex items-center justify-between border-b border-slate-700/20 last:border-0">
                                    <div class="flex items-center gap-3">
                                        <div class="w-7 h-7 rounded-lg bg-slate-700 flex items-center justify-center">
                                            <i class="fa-solid {{ $page['icon'] }} text-slate-400 text-[9px]"
                                                aria-hidden="true"></i>
                                        </div>
                                        <p class="text-[10px] font-semibold text-slate-200">{{ $page['name'] }}</p>
                                    </div>
                                    <span
                                        class="text-[8px] font-semibold px-1.5 py-0.5 rounded-full {{ $page['color'] }}">{{ $page['status'] }}</span>
                                </div>
                                @endforeach
                            </div>

                        </div>
                    </div>

                    {{-- Floating badges --}}
                    <div class="absolute -bottom-4 -left-4 bg-white rounded-2xl shadow-xl border border-slate-100 px-4 py-3 flex items-center gap-3 animate-bounce z-20"
                        aria-hidden="true">
                        <div class="w-9 h-9 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center">
                            <i class="fa-solid fa-envelope text-sm"></i>
                        </div>
                        <div>
                            <p class="text-[9px] text-slate-400 uppercase font-bold tracking-widest">Inquiry Baru!</p>
                            <p class="text-sm font-extrabold text-slate-800">Permintaan Penawaran</p>
                        </div>
                    </div>
                    <div class="absolute -top-3 -right-3 bg-blue-600 text-white rounded-xl shadow-lg px-3 py-2 flex items-center gap-2 z-20"
                        aria-hidden="true">
                        <i class="fa-solid fa-magnifying-glass text-blue-200 text-sm"></i>
                        <span class="text-[10px] font-bold">Halaman #4 Google</span>
                    </div>

                </div>
            </div>
        </div>
    </section>


    {{-- ================================================================
     SECTION 2: PERBANDINGAN
================================================================ --}}
    <section class="py-14 md:py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-16" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Bisnis Tanpa Website vs Bisnis dengan Website Profesional
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-sm md:text-base">
                    Di era digital ini, keputusan calon klien Anda dimulai dari pencarian online — jauh sebelum mereka
                    menghubungi Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 items-stretch">

                <div class="bg-white p-5 md:p-8 rounded-3xl border border-red-100 shadow-sm relative overflow-hidden group"
                    data-aos="fade-right">
                    <div class="absolute -right-4 -top-4 opacity-5 group-hover:rotate-12 transition-transform duration-500"
                        aria-hidden="true">
                        <i class="fa-solid fa-building-circle-xmark text-9xl text-red-600"></i>
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-11 md:w-12 h-11 md:h-12 bg-red-50 rounded-2xl flex items-center justify-center mb-4 md:mb-5">
                            <i class="fa-solid fa-xmark text-red-500 text-lg md:text-xl" aria-hidden="true"></i>
                        </div>
                        <h3 class="text-base md:text-xl font-bold text-slate-900 mb-4 md:mb-5">Tanpa Website Profesional
                        </h3>
                        <ul class="space-y-3 md:space-y-4">
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Tidak Terlihat di Google:</strong> Saat calon klien mencari jasa Anda di
                                    Google, yang muncul adalah kompetitor — bukan Anda.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Sulit Bangun Kepercayaan:</strong> Bisnis tanpa website terlihat kurang
                                    profesional di mata calon klien korporat maupun institusi.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Kehilangan Prospek Potensial:</strong> Tanpa formulir kontak atau WhatsApp
                                    terintegrasi, banyak calon klien yang pergi begitu saja.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-red-500 italic font-medium">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                Portfolio dan prestasi kerja keras Anda tidak punya panggung yang layak untuk
                                ditampilkan.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-blue-600 p-5 md:p-8 rounded-3xl shadow-xl shadow-blue-100 relative overflow-hidden group"
                    data-aos="fade-left">
                    <div class="absolute -right-4 -top-4 opacity-10 group-hover:rotate-12 transition-transform duration-500"
                        aria-hidden="true">
                        <i class="fa-solid fa-building text-9xl text-white"></i>
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-11 md:w-12 h-11 md:h-12 bg-blue-500 rounded-2xl flex items-center justify-center mb-4 md:mb-5 border border-blue-400">
                            <i class="fa-solid fa-check text-white text-lg md:text-xl" aria-hidden="true"></i>
                        </div>
                        <h3 class="text-base md:text-xl font-bold text-white mb-4 md:mb-5">Dengan Website Company
                            Profile</h3>
                        <ul class="space-y-3 md:space-y-4">
                            <li class="flex items-start gap-3 text-sm text-blue-50">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 shrink-0" aria-hidden="true"></i>
                                <p><strong>Muncul di Google 24 Jam:</strong> Calon klien menemukan bisnis Anda kapan
                                    saja mereka mencari — bahkan saat Anda tidur.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-blue-50">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 shrink-0" aria-hidden="true"></i>
                                <p><strong>Kredibilitas Instan:</strong> Website profesional yang rapi membangun
                                    kepercayaan sebelum calon klien berbicara dengan Anda.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-blue-50">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 shrink-0" aria-hidden="true"></i>
                                <p><strong>Mesin Generasi Prospek:</strong> Formulir kontak, WhatsApp, dan ajakan
                                    bertindak yang strategis mengubah pengunjung menjadi klien potensial.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-white font-bold">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 shrink-0" aria-hidden="true"></i>
                                Portfolio dan pencapaian terbaik Anda tampil di panggung digital yang bisa dilihat
                                seluruh dunia.
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ================================================================
         SECTION 3: COCOK UNTUK BISNIS APA?
    ================================================================ --}}
    <section class="py-14 md:py-20 bg-white">
        <div class="max-w-6xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-14" data-aos="fade-up">
                <span
                    class="inline-block bg-orange-50 text-orange-700 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                    Solusi untuk Perusahaan & Institusi Anda
                </span>
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Company Profile untuk Bisnis Anda
                </h2>
                <p class="text-slate-500 max-w-2xl mx-auto text-sm md:text-base">
                    Apapun jenis bisnis Anda, Company Profile bisa disesuaikan untuk kebutuhan spesifik Anda.
                </p>
            </div>

            @php
            $useCases = [
            ['icon' => 'fa-solid fa-building', 'color' => 'blue', 'label' => 'Perusahaan & Korporasi', 'desc' =>
            'Membangun citra profesional untuk tender, profil pemegang saham, dan struktur organisasi.'],
            ['icon' => 'fa-solid fa-helmet-safety', 'color' => 'orange', 'label' => 'Kontraktor & Konstruksi', 'desc' =>
            'Menampilkan portfolio proyek yang telah selesai, daftar alat berat, dan sertifikasi keamanan.'],
            ['icon' => 'fa-solid fa-briefcase-medical', 'color' => 'emerald', 'label' => 'Klinik & Tenaga Medis', 'desc'
            => 'Informasi jadwal dokter, fasilitas layanan kesehatan, dan edukasi pasien secara online.'],
            ['icon' => 'fa-solid fa-graduation-cap', 'color' => 'indigo', 'label' => 'Institusi Pendidikan', 'desc' =>
            'Profil sekolah/kampus, kurikulum, fasilitas pendidikan, dan informasi pendaftaran siswa.'],
            ['icon' => 'fa-solid fa-scale-balanced', 'color' => 'violet', 'label' => 'Firma Hukum & Konsultan', 'desc'
            => 'Menonjolkan keahlian tim ahli, daftar klien, dan publikasi artikel hukum/bisnis.'],
            ['icon' => 'fa-solid fa-industry', 'color' => 'amber', 'label' => 'Manufaktur & Pabrik', 'desc' =>
            'Kapasitas produksi, standar ISO, jalur distribusi, dan profil keberlanjutan (sustainability).'],
            ['icon' => 'fa-solid fa-hotel', 'color' => 'red', 'label' => 'Hospitality & Pariwisata', 'desc' =>
            'Visualisasi gallery hotel, destinasi wisata, testimoni tamu, dan informasi fasilitas.'],
            ['icon' => 'fa-solid fa-handshake-angle', 'color' => 'pink', 'label' => 'Yayasan & Organisasi', 'desc' =>
            'Transparansi program sosial, galeri kegiatan, dan kanal informasi bagi donatur/relawan.'],
            ];

            $uc_colors = [
            'orange' => ['bg' => 'bg-orange-50', 'icon' => 'text-orange-600', 'border' => 'border-orange-100', 'hover'
            => 'hover:border-orange-300'],
            'emerald'=> ['bg' => 'bg-emerald-50', 'icon' => 'text-emerald-600', 'border' => 'border-emerald-100',
            'hover' => 'hover:border-emerald-300'],
            'blue' => ['bg' => 'bg-blue-50', 'icon' => 'text-blue-600', 'border' => 'border-blue-100', 'hover' =>
            'hover:border-blue-300'],
            'pink' => ['bg' => 'bg-pink-50', 'icon' => 'text-pink-600', 'border' => 'border-pink-100', 'hover' =>
            'hover:border-pink-300'],
            'amber' => ['bg' => 'bg-amber-50', 'icon' => 'text-amber-600', 'border' => 'border-amber-100', 'hover' =>
            'hover:border-amber-300'],
            'red' => ['bg' => 'bg-red-50', 'icon' => 'text-red-600', 'border' => 'border-red-100', 'hover' =>
            'hover:border-red-300'],
            'indigo' => ['bg' => 'bg-indigo-50', 'icon' => 'text-indigo-600', 'border' => 'border-indigo-100', 'hover'
            => 'hover:border-indigo-300'],
            'violet' => ['bg' => 'bg-violet-50', 'icon' => 'text-violet-600', 'border' => 'border-violet-100', 'hover'
            => 'hover:border-violet-300'],
            ];
            @endphp

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-5">
                @foreach($useCases as $uc)
                @php $uc_c = $uc_colors[$uc['color']]; @endphp
                <div class="group p-4 md:p-5 bg-white rounded-2xl border {{ $uc_c['border'] }} {{ $uc_c['hover'] }}
                            shadow-sm hover:shadow-md transition-all duration-300 cursor-default" data-aos="fade-up"
                    data-aos-delay="{{ $loop->index * 50 }}">
                    <div
                        class="w-10 h-10 {{ $uc_c['bg'] }} rounded-xl flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                        <i class="{{ $uc['icon'] }} {{ $uc_c['icon'] }} text-lg" aria-hidden="true"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 text-sm mb-1.5">{{ $uc['label'] }}</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">{{ $uc['desc'] }}</p>
                </div>
                @endforeach
            </div>

            <div class="mt-8 md:mt-10 text-center" data-aos="fade-up">
                <p class="text-slate-500 text-sm mb-3">Produk Anda tidak ada di atas tapi tetap ingin punya toko online?
                </p>
                <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20konsultasi%20toko%20online%20untuk%20bisnis%20saya."
                    target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 text-orange-500 font-semibold hover:underline underline-offset-4 transition text-sm">
                    Ceritakan kebutuhan Anda — kami carikan solusinya
                    <i class="fa-solid fa-arrow-right text-xs" aria-hidden="true"></i>
                </a>
            </div>

        </div>
    </section>


    {{-- ================================================================
     SECTION 3: FITUR
================================================================ --}}
    <section id="fitur" class="py-14 md:py-24 bg-slate-50" x-data="{ activeFeature: 1 }">
        <div class="max-w-6xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-16" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Fitur Unggulan <span class="text-blue-600">Company Profile Profesional</span>
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-sm md:text-base">
                    Lebih dari sekadar brosur digital. Website company profile kami dirancang untuk mengkonversi
                    pengunjung menjadi klien nyata.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">

                {{-- Feature Accordion — tampil PERTAMA di mobile --}}
                <div class="lg:col-span-7 space-y-2.5 md:space-y-3 order-first lg:order-last" data-aos="fade-left">

                    @php
                    $fiturList = [
                    [1, 'fa-star', 'Desain Premium Sesuai Identitas Brand', 'Website dirancang mengikuti palet warna,
                    tipografi, dan gaya visual brand Anda — bukan template generik. Setiap elemen mencerminkan nilai dan
                    karakter bisnis Anda.<br><strong>Manfaat:</strong> Kesan pertama yang konsisten memperkuat brand
                    awareness dan membangun kepercayaan lebih cepat.'],
                    [2, 'fa-magnifying-glass', 'SEO On-Page Lengkap — Tampil di Google', 'Setiap halaman dioptimasi
                    dengan struktur heading yang benar, meta tag, schema markup, kecepatan loading, dan sitemap otomatis
                    agar Google mudah mengindeks bisnis Anda.<br><strong>Manfaat:</strong> Bisnis Anda ditemukan calon
                    klien yang sedang aktif mencari layanan Anda di Google — traffic organik tanpa biaya iklan.'],
                    [3, 'fa-images', 'Portfolio & Galeri Proyek yang Memukau', 'Tampilkan portfolio terbaik Anda dalam
                    galeri visual yang terorganisir dengan filter kategori. Setiap proyek bisa dilengkapi foto,
                    deskripsi, dan hasil yang dicapai.<br><strong>Manfaat:</strong> Bukti nyata kualitas kerja Anda
                    berbicara lebih keras dari seribu kata — konversi calon klien lebih tinggi.'],
                    [4, 'fa-envelope', 'Formulir Kontak & WhatsApp Terintegrasi', 'Setiap halaman dilengkapi
                    Call-to-Action strategis, formulir kontak dengan notifikasi email, dan tombol WhatsApp langsung ke
                    nomor Anda.<br><strong>Manfaat:</strong> Tidak ada prospek yang terlewat — setiap pengunjung yang
                    berminat punya jalan mudah untuk langsung menghubungi Anda.'],
                    [5, 'fa-newspaper', 'Blog / Artikel SEO untuk Konten Marketing', 'Halaman blog yang terstruktur
                    untuk publikasi artikel informatif seputar industri Anda — lengkap dengan SEO on-page per
                    artikel.<br><strong>Manfaat:</strong> Konten berkualitas memposisikan bisnis Anda sebagai ahli di
                    bidangnya, meningkatkan kepercayaan dan peringkat di Google secara jangka panjang.'],
                    ];
                    @endphp

                    @foreach($fiturList as [$id, $icon, $judul, $konten])
                    <div @click="activeFeature = {{ $id }}"
                        class="p-4 md:p-5 rounded-2xl cursor-pointer transition-all duration-300 border"
                        :class="activeFeature === {{ $id }} ? 'bg-blue-600 text-white shadow-xl shadow-blue-200/60 border-transparent' : 'bg-white hover:shadow-md text-slate-800 border-slate-100'">
                        <h3 class="font-bold flex items-center justify-between text-sm md:text-base">
                            <span class="flex items-center gap-2.5 md:gap-3">
                                <i class="fa-solid {{ $icon }} w-4 shrink-0"
                                    :class="activeFeature === {{ $id }} ? 'text-white' : 'text-blue-600'"
                                    aria-hidden="true"></i>
                                {{ $judul }}
                            </span>
                            <i class="fa-solid fa-chevron-right text-[10px] transition-transform duration-300 shrink-0 ml-2"
                                :class="activeFeature === {{ $id }} ? 'rotate-90' : ''" aria-hidden="true"></i>
                        </h3>
                        <div x-show="activeFeature === {{ $id }}" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 -translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 -translate-y-1">
                            <p class="text-sm mt-3 opacity-90 leading-relaxed">{!! $konten !!}</p>
                        </div>
                    </div>
                    @endforeach

                </div>

                {{-- Visual sticky --}}
                <div class="lg:col-span-5 order-last lg:order-first lg:sticky lg:top-24" data-aos="fade-right">
                    <div
                        class="bg-gradient-to-br from-slate-900 to-slate-800 p-4 md:p-5 rounded-[1.5rem] md:rounded-[2rem] shadow-2xl border border-slate-700/50 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500/10 rounded-full blur-2xl"
                            aria-hidden="true"></div>
                        <div class="bg-slate-800/80 rounded-2xl p-4 md:p-5 space-y-3 md:space-y-4 relative z-10">

                            <div class="flex items-center gap-3 border-b border-slate-700/40 pb-3 md:pb-4">
                                <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center">
                                    <i class="fa-solid fa-building text-white text-xs" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-white">Dashboard Company Profile</p>
                                    <p class="text-[9px] text-slate-400">Manajemen Konten Mudah</p>
                                </div>
                                <div class="ml-auto flex items-center gap-1.5">
                                    <div class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></div>
                                    <span class="text-[9px] text-emerald-400">Online</span>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-2.5 md:gap-3">
                                <div class="bg-slate-900/60 rounded-xl p-3 border border-slate-700/30">
                                    <i class="fa-solid fa-star text-yellow-400 mb-2 text-sm" aria-hidden="true"></i>
                                    <p class="text-[9px] text-slate-400">Desain Premium</p>
                                    <p class="text-xs font-bold text-white">Sesuai Brand</p>
                                </div>
                                <div class="bg-slate-900/60 rounded-xl p-3 border border-slate-700/30">
                                    <i class="fa-solid fa-magnifying-glass text-blue-400 mb-2 text-sm"
                                        aria-hidden="true"></i>
                                    <p class="text-[9px] text-slate-400">SEO Google</p>
                                    <p class="text-xs font-bold text-white">Halaman #1-5</p>
                                </div>
                                <div class="bg-slate-900/60 rounded-xl p-3 border border-slate-700/30">
                                    <i class="fa-solid fa-images text-emerald-400 mb-2 text-sm" aria-hidden="true"></i>
                                    <p class="text-[9px] text-slate-400">Portofolio</p>
                                    <p class="text-xs font-bold text-white">Galeri Proyek</p>
                                </div>
                                <div class="bg-slate-900/60 rounded-xl p-3 border border-slate-700/30">
                                    <i class="fa-solid fa-envelope text-orange-400 mb-2 text-sm" aria-hidden="true"></i>
                                    <p class="text-[9px] text-slate-400">Inquiry Masuk</p>
                                    <p class="text-xs font-bold text-white">38 / Bulan</p>
                                </div>
                            </div>

                            <div class="bg-blue-600 rounded-xl p-3 flex items-center justify-between">
                                <div>
                                    <p class="text-[9px] text-blue-200">Pengunjung Bulan Ini</p>
                                    <p class="text-base font-extrabold text-white">1.240 Orang</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-[9px] text-blue-200">Posisi Google</p>
                                    <p class="text-sm font-bold text-emerald-300">#4 ↑</p>
                                </div>
                            </div>

                        </div>
                        <div class="absolute -bottom-2 -right-2 bg-blue-500 text-white px-3 py-2 rounded-xl shadow-lg flex items-center gap-1.5"
                            aria-hidden="true">
                            <i class="fa-solid fa-trophy text-xs"></i>
                            <span class="text-[10px] font-bold">Top Google</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ================================================================
     SECTION 4: PAKET HARGA
================================================================ --}}
    <section id="paket" class="py-14 md:py-24 bg-white-50">
        <div class="max-w-7xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-16" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-5xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Bangun <span class="text-blue-600">Identitas Digital Anda</span>
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-sm md:text-base">
                    Harga transparan, fitur jelas. Pilih paket sesuai skala bisnis Anda — semua bisa didiskusikan.
                </p>
                <p class="text-xs text-slate-400 mt-3 italic">*Harga belum termasuk biaya domain dan hosting tahunan.
                    Bisa dicicil 2–3 termin.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 md:gap-6 lg:gap-8 items-start">

                @foreach($paket as $i => $p)
                <article
                    class="relative bg-white rounded-3xl flex flex-col transition-all duration-300
                       {{ $p['populer'] ? 'border-2 border-blue-600 shadow-2xl shadow-blue-100 lg:-translate-y-4' : 'border border-slate-200 shadow-sm hover:shadow-md' }}"
                    data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">

                    @if($p['label'])
                    <div
                        class="absolute -top-3.5 left-1/2 -translate-x-1/2
                                    {{ $p['populer'] ? 'bg-amber-400 text-amber-950' : 'bg-slate-700 text-white' }}
                                    text-[10px] px-4 py-1.5 rounded-full font-bold uppercase tracking-wider shadow-sm whitespace-nowrap">
                        {{ $p['label'] }}
                    </div>
                    @endif

                    <div class="p-5 md:p-6 lg:p-8 {{ $p['label'] ? 'pt-8 md:pt-10' : '' }}">

                        <div class="mb-5 pb-5 border-b border-slate-100">
                            <h3 class="text-base md:text-lg font-extrabold text-slate-900 mb-1">{{ $p['nama'] }}</h3>
                            <p class="text-slate-500 text-xs mb-3 md:mb-4">{{ $p['tagline'] }}</p>
                            @if($p['harga'] === 'Custom')
                            <p class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900">Custom</p>
                            <p class="text-xs text-slate-400 mt-1">Harga sesuai kebutuhan</p>
                            @else
                            <p class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900">{{ $p['harga'] }}
                            </p>
                            <p class="text-xs text-slate-400 mt-1">Biaya setup awal — bisa 2–3 termin</p>
                            @endif
                        </div>

                        <div class="mb-4">
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2.5 md:mb-3">
                                Yang Anda Dapatkan</p>
                            <ul class="space-y-1.5 md:space-y-2">
                                @foreach($p['fitur_ya'] as $f)
                                <li class="flex items-start gap-2 md:gap-2.5 text-xs text-slate-700">
                                    <i class="fa-solid fa-circle-check text-blue-600 mt-0.5 shrink-0 text-[11px]"
                                        aria-hidden="true"></i>
                                    {{ $f }}
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        @if(count($p['fitur_tidak']) > 0)
                        <div class="mb-5 pt-3 md:pt-4 border-t border-slate-50">
                            <p class="text-[10px] font-bold text-slate-300 uppercase tracking-widest mb-2.5 md:mb-3">
                                Tidak Termasuk</p>
                            <ul class="space-y-1.5 md:space-y-2">
                                @foreach($p['fitur_tidak'] as $f)
                                <li class="flex items-start gap-2 md:gap-2.5 text-xs text-slate-400">
                                    <i class="fa-solid fa-xmark text-slate-300 mt-0.5 shrink-0 text-[11px]"
                                        aria-hidden="true"></i>
                                    {{ $f }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @else
                        <div class="mb-5 pt-3 md:pt-4 border-t border-slate-50">
                            <p class="text-xs text-slate-400 italic flex items-center gap-2">
                                <i class="fa-solid fa-infinity text-blue-400"></i>
                                Semua fitur tersedia — tidak ada batasan.
                            </p>
                        </div>
                        @endif

                        <a href="https://wa.me/6285865405330?text={{ $p['wa_text'] }}" target="_blank"
                            rel="noopener noreferrer"
                            class="block w-full py-3 md:py-3.5 px-6 text-center rounded-2xl font-bold text-sm transition-all duration-200 {{ $p['btn_style'] }}">
                            @if($p['populer']) Ambil Penawaran Ini
                            @elseif($p['harga'] === 'Custom') Diskusi dengan Tim Ahli
                            @else Pilih Paket Ini
                            @endif
                        </a>

                    </div>
                </article>
                @endforeach

            </div>

            <div class="mt-8 md:mt-10 text-center" data-aos="fade-up">
                <a href="{{ url('/fitur-company-profile') }}"
                    class="inline-flex items-center gap-2 px-6 md:px-8 py-3 bg-white border border-slate-200 hover:border-blue-300 hover:bg-blue-50 text-slate-700 font-semibold rounded-full transition-all text-sm shadow-sm">
                    Lihat perbandingan fitur &amp; harga lengkap
                    <i class="fa-solid fa-chevron-right text-xs" aria-hidden="true"></i>
                </a>
            </div>

        </div>
    </section>


    {{-- ================================================================
     SECTION 5: FAQ
================================================================ --}}
    <section id="faq" class="py-14 md:py-24 bg-slate-50" x-data="faqCompanyProfile()">
        <div class="max-w-3xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-12" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Pertanyaan Seputar <span class="text-blue-600">Website Company Profile</span>
                </h2>
                <p class="text-slate-600 text-sm md:text-base">Semua yang perlu Anda ketahui sebelum memulai proyek
                    bersama kami.</p>
            </div>

            <div class="space-y-2.5 md:space-y-3" data-aos="fade-up" data-aos-delay="100" itemscope
                itemtype="https://schema.org/FAQPage">

                <template x-for="(faq, index) in faqs" :key="faq.id">
                    <div class="faq-cp-item group relative bg-white rounded-2xl overflow-hidden shadow-sm border transition-all duration-300"
                        :class="selected === faq.id ? 'border-blue-300 shadow-blue-100 shadow-md' : 'border-slate-200 hover:border-slate-300 hover:shadow-md'"
                        itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">

                        <div class="absolute left-0 top-0 bottom-0 w-1 rounded-l-full transition-all duration-300"
                            :class="selected === faq.id ? 'bg-blue-500 opacity-100' : 'opacity-0'"></div>

                        <button @click="toggleFaq(faq.id, $event)"
                            class="faq-cp-btn w-full flex items-center gap-3 md:gap-4 px-4 md:px-6 py-4 md:py-5 text-left focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-400 focus-visible:ring-inset relative overflow-hidden cursor-pointer"
                            :aria-expanded="selected === faq.id" :aria-controls="'faq-cp-answer-' + faq.id">

                            <span class="faq-cp-ripple absolute rounded-full bg-blue-100 opacity-0 pointer-events-none"
                                style="width:10px;height:10px;transform:scale(0);transition:transform 0.5s ease,opacity 0.5s ease;"></span>

                            <span
                                class="shrink-0 w-6 md:w-7 h-6 md:h-7 rounded-full text-[10px] md:text-[11px] font-extrabold flex items-center justify-center transition-all duration-300"
                                :class="selected === faq.id ? 'bg-blue-600 text-white' : 'bg-slate-100 text-slate-400 group-hover:bg-slate-200'"
                                x-text="String(index + 1).padStart(2, '0')"></span>

                            <span
                                class="flex-1 font-bold text-sm md:text-base pr-3 md:pr-4 transition-colors duration-200 leading-snug"
                                :class="selected === faq.id ? 'text-blue-700' : 'text-slate-800'" x-text="faq.question"
                                itemprop="name"></span>

                            <span
                                class="shrink-0 w-7 md:w-8 h-7 md:h-8 rounded-full flex items-center justify-center border transition-all duration-300"
                                :class="selected === faq.id ? 'bg-blue-600 border-blue-600 rotate-180' : 'bg-white border-slate-200 group-hover:border-slate-300'">
                                <i class="fa-solid fa-chevron-down text-[10px] md:text-[11px] transition-colors duration-200"
                                    :class="selected === faq.id ? 'text-white' : 'text-slate-400'"
                                    aria-hidden="true"></i>
                            </span>
                        </button>

                        <div :id="'faq-cp-answer-' + faq.id" class="faq-cp-answer overflow-hidden"
                            :style="selected === faq.id ? 'max-height: 500px; opacity: 1;' : 'max-height: 0; opacity: 0;'"
                            itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="px-4 md:px-6 pb-4 md:pb-5 pt-0">
                                <div class="border-t border-slate-100 mb-3 md:mb-4"></div>
                                <div class="pl-9 md:pl-11 text-sm text-slate-600 leading-relaxed" x-html="faq.answer"
                                    itemprop="text"></div>
                            </div>
                        </div>

                    </div>
                </template>
            </div>

            <div class="mt-8 md:mt-10 text-center" data-aos="fade-up">
                <p class="text-slate-500 text-sm mb-4">Masih ada pertanyaan lain?</p>
                <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20bertanya%20soal%20website%20company%20profile."
                    target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 bg-emerald-500 text-white px-5 md:px-6 py-2.5 md:py-3 rounded-xl font-semibold hover:bg-emerald-600 transition text-sm">
                    <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                    Tanya Langsung via WhatsApp
                </a>
            </div>

        </div>
    </section>


    {{-- ================================================================
     SECTION 6: CTA / MEETING FORM
================================================================ --}}
    <x-meeting-form title="Siap Membangun Wajah Digital Profesional Bisnis Anda?"
        subtitle="Jadwalkan konsultasi gratis — kami bantu rancang website company profile yang memenangkan kepercayaan klien." />


    @push('scripts')
    <script>
    function faqCompanyProfile() {
        return {
            selected: null,

            faqs: [{
                    id: 1,
                    question: 'Apa perbedaan website company profile dengan website biasa?',
                    answer: `<p class="mb-3">Website company profile dirancang khusus untuk <strong>membangun kepercayaan dan konversi prospek</strong>:</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div class="p-3 bg-blue-50 rounded-xl border border-blue-100">
                            <p class="text-xs font-bold text-blue-700 mb-1">Company Profile</p>
                            <p class="text-xs text-slate-600">Fokus membangun kredibilitas — menampilkan siapa Anda, apa yang Anda kerjakan, dan mengapa calon klien harus memilih Anda.</p>
                        </div>
                        <div class="p-3 bg-slate-50 rounded-xl border border-slate-100">
                            <p class="text-xs font-bold text-slate-700 mb-1">Website Umum</p>
                            <p class="text-xs text-slate-600">Bisa untuk berbagai tujuan — toko online, blog, portofolio pribadi — tanpa fokus pada konversi prospek korporat.</p>
                        </div>
                    </div>`
                },
                {
                    id: 2,
                    question: 'Apakah saya bisa update konten website sendiri?',
                    answer: `<p class="mb-3">Ya. Anda mendapatkan akses <strong>Dashboard Admin</strong> yang mudah digunakan:</p>
                    <ul class="space-y-1.5">
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Tambah/edit artikel blog dan berita perusahaan</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Upload foto proyek ke galeri portofolio</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Update daftar layanan dan deskripsinya</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Kelola testimoni dan ulasan klien</li>
                    </ul>`
                },
                {
                    id: 3,
                    question: 'Apakah website company profile bisa muncul di Google?',
                    answer: `<p class="mb-3">Ya! Kami mengoptimasi setiap halaman dengan:</p>
                    <ul class="space-y-2">
                        <li class="flex items-start gap-2 text-xs"><i class="fa-solid fa-magnifying-glass text-blue-600 mt-0.5"></i><span><strong>Meta title & description</strong> yang mengandung keyword relevan bisnis Anda</span></li>
                        <li class="flex items-start gap-2 text-xs"><i class="fa-solid fa-code text-blue-600 mt-0.5"></i><span><strong>Schema markup</strong> untuk rich snippet di hasil pencarian Google</span></li>
                        <li class="flex items-start gap-2 text-xs"><i class="fa-solid fa-bolt text-blue-600 mt-0.5"></i><span><strong>Optimasi kecepatan loading</strong> untuk PageSpeed yang bagus di mata Google</span></li>
                        <li class="flex items-start gap-2 text-xs"><i class="fa-solid fa-sitemap text-blue-600 mt-0.5"></i><span><strong>Sitemap otomatis</strong> agar semua halaman terindeks dengan cepat</span></li>
                    </ul>`
                },
                {
                    id: 4,
                    question: 'Berapa lama pengerjaan website company profile?',
                    answer: `<div class="space-y-2">
                    <div class="flex items-center gap-3 p-3 bg-slate-50 rounded-xl text-xs"><i class="fa-solid fa-clock text-blue-600"></i><span><strong>Paket Starter:</strong> ± 7–10 hari kerja</span></div>
                    <div class="flex items-center gap-3 p-3 bg-blue-50 rounded-xl text-xs border border-blue-100"><i class="fa-solid fa-clock text-blue-600"></i><span><strong>Paket Professional:</strong> ± 10–14 hari kerja</span></div>
                    <p class="text-xs text-slate-400 italic mt-2">*Waktu bisa lebih cepat jika konten, foto, dan logo sudah disiapkan sejak awal.</p>
                </div>`
                },
                {
                    id: 5,
                    question: 'Apakah tampilan website bisa disesuaikan dengan identitas brand saya?',
                    answer: `<p class="mb-3">Tentu! Proses desain kami dimulai dengan:</p>
                    <ul class="space-y-1.5">
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-palette text-blue-600 text-[10px]"></i> Konsultasi warna, font, dan gaya visual brand Anda</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-eye text-blue-600 text-[10px]"></i> Presentasi mockup desain sebelum coding dimulai</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-rotate text-blue-600 text-[10px]"></i> Revisi desain hingga Anda puas</li>
                    </ul>`
                },
                {
                    id: 6,
                    question: 'Apakah ada fitur formulir kontak atau WhatsApp di website?',
                    answer: `<p class="mb-3">Ya, semua sudah terintegrasi:</p>
                    <ul class="space-y-2">
                        <li class="flex items-start gap-3"><i class="fa-brands fa-whatsapp text-emerald-600 mt-1 shrink-0"></i> <span><strong>Tombol WhatsApp:</strong> Langsung ke nomor Anda, bisa di setiap halaman.</span></li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-envelope text-blue-600 mt-1 shrink-0"></i> <span><strong>Formulir Kontak:</strong> Notifikasi masuk ke email Anda setiap ada pesan baru.</span></li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-comment text-purple-600 mt-1 shrink-0"></i> <span><strong>Live Chat Widget:</strong> Tersedia di paket Professional ke atas.</span></li>
                    </ul>`
                },
                {
                    id: 7,
                    question: 'Apakah website bisa tampil baik di HP?',
                    answer: `<p class="mb-3">Wajib. Kami menggunakan <strong>Mobile-First Design</strong>:</p>
                    <ul class="space-y-1.5">
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Tampilan dioptimasi untuk HP terlebih dahulu</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Loading cepat meski koneksi tidak stabil</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Tombol dan navigasi mudah digunakan di layar kecil</li>
                    </ul>
                    <p class="text-xs text-slate-400 mt-3 italic">*75%+ pengunjung website bisnis saat ini mengakses dari HP.</p>`
                },
                {
                    id: 8,
                    question: 'Bagaimana dengan keamanan data dan website saya?',
                    answer: `<ul class="space-y-3">
                    <li class="flex items-start gap-3"><i class="fa-solid fa-shield-halved text-blue-600 mt-1 shrink-0"></i> <span><strong>SSL Certificate (HTTPS):</strong> Koneksi terenkripsi standar internasional.</span></li>
                    <li class="flex items-start gap-3"><i class="fa-solid fa-server text-blue-600 mt-1 shrink-0"></i> <span><strong>Backup Berkala:</strong> Data website di-backup rutin agar aman dari kehilangan data.</span></li>
                    <li class="flex items-start gap-3"><i class="fa-solid fa-code text-blue-600 mt-1 shrink-0"></i> <span><strong>Framework Aman:</strong> Dibangun dengan Laravel yang teruji keamanannya.</span></li>
                </ul>`
                }
            ],

            toggleFaq(id, event) {
                const btn = event.currentTarget;
                const ripple = btn.querySelector('.faq-cp-ripple');

                // 1. Efek Ripple (Tetap sama)
                if (ripple) {
                    const rect = btn.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height) * 2;
                    ripple.style.width = size + 'px';
                    ripple.style.height = size + 'px';
                    ripple.style.left = (event.clientX - rect.left - size / 2) + 'px';
                    ripple.style.top = (event.clientY - rect.top - size / 2) + 'px';
                    ripple.style.transform = 'scale(0)';
                    ripple.style.opacity = '1';
                    ripple.offsetWidth;
                    ripple.style.transform = 'scale(1)';
                    ripple.style.opacity = '0';
                }

                const wasOpen = this.selected === id;
                this.selected = wasOpen ? null : id;

                // 2. Logic Scroll Pintar
                if (!wasOpen) {
                    // Deteksi apakah user menggunakan layar smartphone (lebar < 768px)
                    const isMobile = window.innerWidth < 768;

                    if (isMobile) {
                        // VERSI PRO MOBILE: Gunakan requestAnimationFrame untuk sinkronisasi dengan animasi browser
                        // Kita beri sedikit jeda (delay) tapi lebih singkat agar tidak terasa lambat
                        setTimeout(() => {
                                this.scrollToElement(id);
                            },
                            290
                        ); // 250ms adalah sweet spot: animasi penutupan sudah berjalan tapi user belum bosan menunggu
                    } else {
                        // VERSI DESKTOP: Gunakan $nextTick agar instan dan smooth
                        this.$nextTick(() => {
                            this.scrollToElement(id);
                        });
                    }
                }
            },

            // Fungsi pembantu agar kode lebih bersih
            scrollToElement(id) {
                const el = document.getElementById('faq-cp-answer-' + id);
                if (el) {
                    const parent = el.closest('.faq-cp-item');
                    if (parent) {
                        const offset = 110;
                        const bodyRect = document.body.getBoundingClientRect().top;
                        const elementRect = parent.getBoundingClientRect().top;
                        const elementPosition = elementRect - bodyRect;
                        const offsetPosition = elementPosition - offset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                }
            }
        };
    }
    </script>
    @endpush

    @push('styles')
    <style>
    html,
    body {
        max-width: 100% !important;
        overflow-x: hidden !important;
        position: relative;
    }

    .faq-cp-answer {
        transition: max-height 0.38s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.28s ease;
    }

    .faq-cp-ripple {
        position: absolute;
        border-radius: 50%;
        background: #dbeafe;
        transform: scale(0);
        opacity: 0;
        pointer-events: none;
        transition: transform 0.5s ease, opacity 0.5s ease;
    }

    .faq-cp-item:not([class*="border-blue"]):hover {
        background: #fafafa;
    }

    @media (prefers-reduced-motion: reduce) {
        .faq-cp-answer {
            transition: none;
        }

        .faq-cp-ripple {
            display: none;
        }
    }
    </style>
    @endpush

</x-layout.app>
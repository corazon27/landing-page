<x-layout.app>

    {{-- ============================================================
         SEO: Meta halaman /layanan/web-katalog-produk
         Target keyword: "jasa website katalog produk",
         "katalog digital online Indonesia", "website katalog UMKM",
         "katalog produk WhatsApp", "brosur digital interaktif"
    ============================================================ --}}
    @php
    $title = 'Jasa Pembuatan Website Katalog Produk Digital Profesional | Cakra Inovasi Digital';
    $metaDescription= 'Jasa pembuatan website katalog produk digital — tampilkan ratusan produk secara profesional,
    terima order via WhatsApp 1 klik, dan update katalog mandiri kapan saja. Tanpa ribet kirim foto manual. Konsultasi
    gratis!';
    $metaKeywords = 'jasa website katalog produk, katalog digital online, brosur digital interaktif, website katalog
    UMKM, katalog produk WhatsApp, web developer Sukoharjo, Jawa Tengah, katalog produk Indonesia';
    $ogType = 'website';
    $canonicalUrl = url('/layanan/web-katalog-produk');

    $faqsData = [
    ['question' => 'Apa bedanya website katalog produk dengan toko online (e-commerce)?',
    'answer' => 'Website katalog menampilkan produk secara profesional lengkap dengan foto, deskripsi, dan harga — namun
    tanpa sistem checkout atau payment gateway. Pelanggan yang tertarik langsung diarahkan ke WhatsApp untuk memesan.
    Ini jauh lebih simpel dan lebih hemat biaya, cocok untuk bisnis yang ingin proses transaksinya tetap personal dan
    fleksibel.'],
    ['question' => 'Apakah pelanggan bisa langsung order via WhatsApp dari katalog?',
    'answer' => 'Ya. Setiap produk dilengkapi tombol "Order via WhatsApp" yang ketika diklik akan membuka WA dengan
    pesan otomatis berisi nama produk, varian, dan harga — sehingga proses order langsung terstruktur tanpa pelanggan
    perlu ketik ulang.'],
    ['question' => 'Apakah saya bisa update produk sendiri tanpa developer?',
    'answer' => 'Tentu. Anda mendapatkan Dashboard Admin yang mudah digunakan untuk tambah produk baru, update foto dan
    harga, atur kategori, atau nonaktifkan produk — kapan saja tanpa perlu menghubungi developer.'],
    ['question' => 'Berapa banyak produk yang bisa ditampilkan?',
    'answer' => 'Tergantung paket yang dipilih — mulai dari 50 produk (Starter), 300 produk (Professional), hingga
    unlimited (Enterprise). Semua bisa di-upgrade kapan saja seiring pertumbuhan bisnis Anda.'],
    ['question' => 'Apakah ada fitur download brosur atau PDF katalog?',
    'answer' => 'Tersedia di paket Professional ke atas. Pelanggan bisa mengunduh katalog PDF dari halaman website yang
    selalu sinkron otomatis dengan data produk terbaru di admin — tidak perlu bikin ulang PDF manual setiap ada
    perubahan.'],
    ['question' => 'Apakah website katalog bisa ditemukan di Google?',
    'answer' => 'Ya. Kami mengoptimasi setiap halaman dan produk dengan teknik SEO on-page — meta title, deskripsi, alt
    text gambar, dan schema markup Product agar produk Anda muncul saat calon pelanggan mencari di Google.'],
    ['question' => 'Apakah foto produk di katalog bisa dilindungi dari pencurian?',
    'answer' => 'Ya. Paket Professional ke atas dilengkapi fitur watermark otomatis — setiap foto produk yang diunggah
    ke sistem akan otomatis mendapat watermark logo bisnis Anda, sehingga foto tidak bisa diklaim atau digunakan
    kompetitor tanpa izin.'],
    ['question' => 'Berapa lama waktu pengerjaan website katalog produk?',
    'answer' => 'Paket Starter selesai dalam 7–10 hari kerja, Professional 12–18 hari kerja. Waktu bisa lebih cepat jika
    foto produk dan konten sudah disiapkan sejak awal. Kami menyediakan checklist lengkap untuk membantu persiapan
    Anda.'],
    ];

    $paket = [
    [
    'nama' => 'Katalog Starter',
    'tagline' => 'Untuk UMKM yang baru ingin tampil online',
    'harga' => 'Rp 2jt',
    'harga_raw' => '2.000.000',
    'label' => null,
    'populer' => false,
    'wa_text' => 'Halo%20Cakra%2C%20saya%20tertarik%20Paket%20Katalog%20Starter.',
    'btn_style' => 'border-2 border-emerald-600 text-emerald-600 hover:bg-emerald-50',
    'fitur_ya' => [
    'Hingga 50 produk',
    'Kategori & filter produk',
    'Halaman detail per produk',
    'Foto produk + deskripsi + harga',
    'Tombol Order via WhatsApp per produk',
    'Pencarian produk (search bar)',
    'Dashboard admin mandiri',
    'Desain responsif Mobile-First',
    'Domain .com & Hosting 1 tahun',
    'SSL Certificate (HTTPS)',
    'Optimasi SEO on-page dasar',
    'Formulir kontak + Google Maps',
    'Panduan & pelatihan admin',
    'Garansi bug',
    ],
    'fitur_tidak' => [
    'Download brosur / PDF katalog',
    'Watermark otomatis pada foto',
    'Fitur request penawaran harga',
    'Statistik pengunjung & Google Analytics',
    'Halaman blog / artikel',
    'Multi-bahasa (bilingual)',
    'Portal pelanggan (login & favorit)',
    ],
    ],
    [
    'nama' => 'Katalog Professional',
    'tagline' => 'Paling populer untuk bisnis aktif & supplier',
    'harga' => 'Rp 3,5jt',
    'harga_raw' => '3.500.000',
    'label' => 'Paling Populer',
    'populer' => true,
    'wa_text' => 'Halo%20Cakra%2C%20saya%20tertarik%20Paket%20Katalog%20Professional.',
    'btn_style' => 'bg-emerald-600 text-white hover:bg-emerald-700 shadow-lg shadow-emerald-200',
    'fitur_ya' => [
    'Hingga 300 produk',
    'Kategori, subkategori & tag produk',
    'Halaman detail produk + galeri foto multi-gambar',
    'Tombol WA & form request penawaran harga',
    'Pencarian & filter multi-parameter',
    'Download brosur / PDF katalog otomatis',
    'Watermark otomatis pada semua foto produk',
    'Harga grosir & eceran terpisah',
    'Halaman produk unggulan & promo',
    'Statistik pengunjung (Google Analytics)',
    'Laporan produk paling banyak dilihat',
    'Integrasi Google Search Console',
    'SEO on-page lengkap per produk',
    'Schema markup Product (Google)',
    'Halaman blog / artikel',
    'Domain .com & Hosting 1 tahun',
    'SSL Certificate (HTTPS)',
    'Panduan video & pelatihan admin',
    'Garansi bug',
    ],
    'fitur_tidak' => [
    'Multi-bahasa (Indonesia + Inggris)',
    'Portal pelanggan (login & simpan favorit)',
    'Sistem harga per segmen pelanggan',
    'Integrasi ERP / sistem internal',
    'Dedicated server & SLA uptime',
    ],
    ],
    [
    'nama' => 'Enterprise / B2B',
    'tagline' => 'Untuk distributor, supplier & B2B skala besar',
    'harga' => 'Custom',
    'harga_raw' => null,
    'label' => 'Mulai Rp 7jt',
    'populer' => false,
    'wa_text' => 'Halo%20Cakra%2C%20saya%20ingin%20diskusi%20Paket%20Katalog%20Enterprise.',
    'btn_style' => 'border-2 border-slate-800 text-slate-800 hover:bg-slate-900 hover:text-white',
    'fitur_ya' => [
    'Semua fitur Professional',
    'Produk & kategori unlimited',
    'Multi-bahasa (Indonesia + Inggris)',
    'Portal pelanggan (login & simpan favorit)',
    'Sistem harga per segmen pelanggan',
    'Form request penawaran (RFQ) lengkap',
    'Ekspor data produk ke Excel',
    'Integrasi ERP / sistem internal perusahaan',
    'Panel super-admin multi-role & multi-user',
    'Dedicated server & SLA uptime 99,9%',
    'Backup otomatis harian',
    'Prioritas support & dedicated PM',
    'Free maintenance 3 bulan pertama',
    'Garansi bug',
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
        "@id": "{{ url('/layanan/web-katalog-produk') }}/#service",
        "name": "Jasa Pembuatan Website Katalog Produk Digital Profesional",
        "serviceType": "Pembuatan Website Katalog Produk",
        "provider": {
            "@id": "{{ url('/') }}/#business"
        },
        "url": "{{ url('/layanan/web-katalog-produk') }}",
        "description": "Jasa pembuatan website katalog produk digital profesional dengan tombol order WhatsApp, download PDF katalog, watermark foto otomatis, SEO on-page, dan dashboard admin mandiri.",
        "areaServed": {
            "@type": "Country",
            "name": "Indonesia"
        },
        "offers": [{
                "@type": "Offer",
                "name": "Katalog Starter",
                "price": "2000000",
                "priceCurrency": "IDR",
                "description": "Website katalog produk dasar untuk UMKM yang ingin tampil online."
            },
            {
                "@type": "Offer",
                "name": "Katalog Professional",
                "price": "3500000",
                "priceCurrency": "IDR",
                "description": "Katalog digital lengkap dengan PDF, watermark, statistik, dan SEO per produk."
            },
            {
                "@type": "Offer",
                "name": "Enterprise / B2B",
                "price": "7000000",
                "priceCurrency": "IDR",
                "description": "Platform katalog skala besar dengan multi-bahasa, portal pelanggan, dan integrasi ERP."
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
                <x-breadcrumb :items="[['name' => 'Layanan', 'url' => url('/layanan')]]" current="Katalog Produk" />
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center mt-5 md:mt-6">

                {{-- Kolom Teks --}}
                <div class="text-left space-y-5 md:space-y-7" data-aos="fade-right">
                    <div>
                        <span
                            class="inline-block px-4 py-1.5 rounded-full bg-emerald-50 text-emerald-700 text-xs font-semibold uppercase tracking-wider mb-3 md:mb-4">
                            Website Katalog Produk Digital
                        </span>
                        <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-slate-900 leading-tight">
                            Berhenti Kirim Foto<br class="hidden sm:block">
                            Satu per Satu —<br class="hidden sm:block">
                            <span class="text-emerald-600">Semua Produk dalam Satu Link</span>
                        </h1>
                        <p class="mt-4 md:mt-5 text-base md:text-lg text-slate-600 leading-relaxed">
                            Bayangkan punya katalog digital yang bisa dibuka pelanggan kapan saja, tampil
                            profesional di
                            HP manapun, dan langsung terhubung ke WhatsApp Anda dengan satu klik. Tidak perlu kirim
                            foto
                            manual, tidak perlu buat PDF baru setiap harga berubah. <strong>Cakra Inovasi
                                Digital</strong> buatkan semuanya untuk Anda.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20konsultasi%20pembuatan%20website%20katalog%20produk%20untuk%20bisnis%20saya."
                            target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center justify-center gap-2 px-6 md:px-8 py-3.5 rounded-2xl bg-emerald-600 text-white font-bold text-sm md:text-base hover:bg-emerald-700 transition-all shadow-lg shadow-emerald-200">
                            <i class="fa-brands fa-whatsapp text-lg" aria-hidden="true"></i>
                            Konsultasi Gratis Sekarang
                        </a>
                        <a href="#fitur"
                            class="inline-flex items-center justify-center gap-2 px-6 md:px-8 py-3.5 rounded-2xl border-2 border-slate-200 text-slate-700 font-bold text-sm md:text-base hover:bg-slate-50 transition">
                            Lihat Fitur Lengkap
                        </a>
                    </div>

                    <div class="flex flex-wrap gap-3 md:gap-5 text-xs md:text-sm text-slate-500">
                        <span class="flex items-center gap-1.5"><i class="fa-brands fa-whatsapp text-emerald-500"
                                aria-hidden="true"></i> Order WA 1 Klik</span>
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-file-pdf text-emerald-500"
                                aria-hidden="true"></i> Download PDF Katalog</span>
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-sliders text-emerald-500"
                                aria-hidden="true"></i> Update Mandiri via Admin</span>
                    </div>

                    {{-- Stats mini — mobile only --}}
                    <div class="grid grid-cols-2 gap-3 lg:hidden">
                        <div class="bg-emerald-50 rounded-2xl p-4 text-center border border-emerald-100">
                            <p class="text-2xl font-extrabold text-emerald-600">350+</p>
                            <p class="text-xs text-slate-500 mt-1">Produk Bisa Ditampilkan</p>
                        </div>
                        <div class="bg-blue-50 rounded-2xl p-4 text-center border border-blue-100">
                            <p class="text-2xl font-extrabold text-blue-600">24/7</p>
                            <p class="text-xs text-slate-500 mt-1">Katalog Bisa Diakses</p>
                        </div>
                        <div class="bg-orange-50 rounded-2xl p-4 text-center border border-orange-100">
                            <p class="text-2xl font-extrabold text-orange-500">1 Klik</p>
                            <p class="text-xs text-slate-500 mt-1">Order Langsung ke WA</p>
                        </div>
                        <div class="bg-violet-50 rounded-2xl p-4 text-center border border-violet-100">
                            <p class="text-2xl font-extrabold text-violet-600">0 Ribet</p>
                            <p class="text-xs text-slate-500 mt-1">Update Produk Sendiri</p>
                        </div>
                    </div>
                </div>

                {{-- Kolom Mockup Katalog --}}
                <div class="relative" data-aos="fade-left">

                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-100 via-teal-50 to-slate-100 rounded-[3rem] blur-3xl opacity-60 scale-110"
                        aria-hidden="true"></div>

                    <div
                        class="relative z-10 bg-white rounded-[2rem] shadow-2xl overflow-hidden border border-slate-200/60">

                        {{-- Browser Topbar --}}
                        <div class="bg-slate-100 px-5 py-3 flex items-center gap-3 border-b border-slate-200">
                            <div class="flex items-center gap-1.5">
                                <div class="w-2.5 h-2.5 rounded-full bg-red-400"></div>
                                <div class="w-2.5 h-2.5 rounded-full bg-amber-400"></div>
                                <div class="w-2.5 h-2.5 rounded-full bg-emerald-400"></div>
                            </div>
                            <div
                                class="flex-1 flex items-center gap-1.5 bg-white rounded-lg px-3 py-1.5 border border-slate-200">
                                <i class="fa-solid fa-lock text-slate-400 text-[9px]" aria-hidden="true"></i>
                                <span class="text-[10px] text-slate-500 font-mono">katalog.bisnis-anda.com</span>
                            </div>
                            <div
                                class="flex items-center gap-1 bg-emerald-100 text-emerald-700 text-[9px] font-bold px-2.5 py-1 rounded-full">
                                <i class="fa-solid fa-circle text-[6px]"></i> Live
                            </div>
                        </div>

                        {{-- Katalog Header --}}
                        <div class="bg-emerald-600 px-5 py-4 text-white">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-[9px] font-semibold opacity-70 uppercase tracking-widest">Katalog
                                        Produk</p>
                                    <p class="text-sm font-extrabold">Toko Batik Nusantara</p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="bg-white/20 rounded-lg p-1.5"><i
                                            class="fa-solid fa-magnifying-glass text-white text-[9px]"
                                            aria-hidden="true"></i></div>
                                    <div class="bg-white/20 rounded-lg p-1.5"><i
                                            class="fa-solid fa-file-pdf text-white text-[9px]" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex gap-2 mt-3 overflow-x-hidden">
                                @foreach(['Semua','Batik Tulis','Batik Cap','Aksesoris'] as $k => $kat)
                                <span
                                    class="px-2.5 py-1 rounded-full text-[9px] font-bold whitespace-nowrap {{ $k === 0 ? 'bg-white text-emerald-700' : 'bg-white/20 text-white' }}">{{ $kat }}</span>
                                @endforeach
                            </div>
                        </div>

                        {{-- Grid Produk --}}
                        <div class="p-4 bg-slate-50">
                            @php
                            $mockProduk = [
                            ['nama'=>'Batik Tulis Solo', 'harga'=>'Rp 350.000','stok'=>'Stok: 24
                            pcs','bg'=>'bg-amber-100','emoji'=>'👘'],
                            ['nama'=>'Batik Cap Mega Mendung', 'harga'=>'Rp 185.000','stok'=>'Stok: 48
                            pcs','bg'=>'bg-blue-100', 'emoji'=>'🎨'],
                            ['nama'=>'Selendang Batik Sutra', 'harga'=>'Rp 125.000','stok'=>'Stok: 30
                            pcs','bg'=>'bg-rose-100', 'emoji'=>'🧣'],
                            ['nama'=>'Kemeja Batik Pria', 'harga'=>'Rp 275.000','stok'=>'Stok: 15
                            pcs','bg'=>'bg-teal-100', 'emoji'=>'👔'],
                            ];
                            @endphp
                            <div class="grid grid-cols-2 gap-3">
                                @foreach($mockProduk as $p)
                                <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-slate-100">
                                    <div class="{{ $p['bg'] }} h-20 flex items-center justify-center">
                                        <span class="text-3xl" role="img" aria-hidden="true">{{ $p['emoji'] }}</span>
                                    </div>
                                    <div class="p-2.5">
                                        <p class="text-[10px] font-bold text-slate-800 leading-tight mb-0.5">
                                            {{ $p['nama'] }}</p>
                                        <p class="text-[10px] font-extrabold text-emerald-600">{{ $p['harga'] }}</p>
                                        <p class="text-[8px] text-slate-400 mb-2">{{ $p['stok'] }}</p>
                                        <button
                                            class="w-full bg-emerald-500 text-white text-[9px] font-bold py-1.5 rounded-lg flex items-center justify-center gap-1">
                                            <i class="fa-brands fa-whatsapp text-[9px]" aria-hidden="true"></i>
                                            Order WA
                                        </button>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>

                    {{-- Floating badges --}}
                    <div class="absolute -bottom-4 -left-4 bg-white rounded-2xl shadow-xl border border-slate-100 px-4 py-3 flex items-center gap-3 animate-bounce z-20"
                        aria-hidden="true">
                        <div
                            class="w-9 h-9 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center">
                            <i class="fa-brands fa-whatsapp text-sm"></i>
                        </div>
                        <div>
                            <p class="text-[9px] text-slate-400 uppercase font-bold tracking-widest">Order Masuk!
                            </p>
                            <p class="text-sm font-extrabold text-slate-800">Batik Tulis Solo</p>
                        </div>
                    </div>
                    <div class="absolute -top-3 -right-3 bg-emerald-600 text-white rounded-xl shadow-lg px-3 py-2 flex items-center gap-2 z-20"
                        aria-hidden="true">
                        <i class="fa-solid fa-file-pdf text-sm"></i>
                        <span class="text-[10px] font-bold">PDF Auto-Generate</span>
                    </div>

                </div>
            </div>
        </div>
    </section>


    {{-- ================================================================
         SECTION 2: PERBANDINGAN — Kirim Foto Manual vs Katalog Digital
    ================================================================ --}}
    <section class="py-14 md:py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-16" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Masih Kirim Foto Produk Satu per Satu?
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-sm md:text-base">
                    Ada cara yang jauh lebih profesional, lebih efisien, dan lebih menguntungkan untuk menampilkan
                    produk Anda ke pelanggan.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 items-stretch">

                <div class="bg-white p-5 md:p-8 rounded-3xl border border-red-100 shadow-sm relative overflow-hidden group"
                    data-aos="fade-right">
                    <div class="absolute -right-4 -top-4 opacity-5 group-hover:rotate-12 transition-transform duration-500"
                        aria-hidden="true">
                        <i class="fa-solid fa-images text-9xl text-red-600"></i>
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-11 md:w-12 h-11 md:h-12 bg-red-50 rounded-2xl flex items-center justify-center mb-4 md:mb-5">
                            <i class="fa-solid fa-xmark text-red-500 text-lg md:text-xl" aria-hidden="true"></i>
                        </div>
                        <h3 class="text-base md:text-xl font-bold text-slate-900 mb-4 md:mb-5">Cara Lama: Kirim Foto
                            Manual di WA</h3>
                        <ul class="space-y-3 md:space-y-4">
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Buang waktu berjam-jam:</strong> Setiap ada calon pelanggan baru yang nanya
                                    "ada produk apa aja?", Anda harus cari foto dan kirim satu per satu ke setiap orang.
                                </p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>PDF dan brosur cepat kadaluarsa:</strong> Setiap ada perubahan harga atau
                                    produk baru, harus bikin ulang dan kirim lagi ke semua kontak — melelahkan dan tidak
                                    efisien.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Tidak terlihat di Google:</strong> Pelanggan baru tidak bisa menemukan produk
                                    Anda lewat pencarian online — Anda kehilangan peluang bisnis setiap harinya.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-red-500 italic font-medium">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                Terlihat tidak profesional dibandingkan kompetitor yang sudah punya website katalog
                                sendiri.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-emerald-600 p-5 md:p-8 rounded-3xl shadow-xl shadow-emerald-100 relative overflow-hidden group"
                    data-aos="fade-left">
                    <div class="absolute -right-4 -top-4 opacity-10 group-hover:rotate-12 transition-transform duration-500"
                        aria-hidden="true">
                        <i class="fa-solid fa-layer-group text-9xl text-white"></i>
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-11 md:w-12 h-11 md:h-12 bg-emerald-500 rounded-2xl flex items-center justify-center mb-4 md:mb-5 border border-emerald-400">
                            <i class="fa-solid fa-check text-white text-lg md:text-xl" aria-hidden="true"></i>
                        </div>
                        <h3 class="text-base md:text-xl font-bold text-white mb-4 md:mb-5">Dengan Katalog Digital
                            Profesional</h3>
                        <ul class="space-y-3 md:space-y-4">
                            <li class="flex items-start gap-3 text-sm text-emerald-50">
                                <i class="fa-solid fa-circle-check text-emerald-200 mt-1 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Satu link, semua produk:</strong> Bagikan ke Instagram Bio, WhatsApp Story,
                                    atau email — pelanggan langsung lihat semua produk tanpa nanya satu per satu.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-emerald-50">
                                <i class="fa-solid fa-circle-check text-emerald-200 mt-1 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Update sekali, semua pelanggan tahu:</strong> Ganti harga atau tambah produk
                                    baru dari admin — katalog langsung berubah tanpa perlu kirim ulang ke siapapun.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-emerald-50">
                                <i class="fa-solid fa-circle-check text-emerald-200 mt-1 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Ditemukan di Google:</strong> Setiap produk dioptimasi SEO agar muncul saat
                                    calon pelanggan baru mencari di Google — tanpa biaya iklan.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-white font-bold">
                                <i class="fa-solid fa-circle-check text-emerald-200 mt-1 shrink-0"
                                    aria-hidden="true"></i>
                                Tampil jauh lebih profesional — bangun kepercayaan calon pelanggan sebelum mereka bahkan
                                menghubungi Anda.
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
                    class="inline-block bg-emerald-50 text-emerald-700 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                    Solusi untuk Semua Jenis Produk
                </span>
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Katalog Digital untuk Bisnis Anda
                </h2>
                <p class="text-slate-500 max-w-2xl mx-auto text-sm md:text-base">
                    Apapun jenis produk Anda — fisik, handmade, atau B2B — katalog digital bisa disesuaikan dengan
                    kebutuhan spesifik bisnis Anda.
                </p>
            </div>

            @php
            $useCases = [
            ['icon' => 'fa-solid fa-shirt', 'color' => 'emerald', 'label' => 'Fashion & Batik', 'desc' => 'Tampilkan
            koleksi dengan foto cantik, filter warna & ukuran. Pelanggan pilih, klik WA, deal.'],
            ['icon' => 'fa-solid fa-box-open', 'color' => 'amber', 'label' => 'Supplier & Distributor', 'desc' =>
            'Katalog B2B profesional dengan harga grosir/eceran terpisah dan form request penawaran.'],
            ['icon' => 'fa-solid fa-paint-brush', 'color' => 'violet', 'label' => 'Handmade & Kerajinan', 'desc' =>
            'Tampilkan karya unik Anda dengan galeri premium — kerajinan, batik, souvenir, dan produk lokal.'],
            ['icon' => 'fa-solid fa-toolbox', 'color' => 'orange', 'label' => 'Spare Part & Material', 'desc' =>
            'Katalog teknis lengkap dengan kode SKU, spesifikasi detail, dan filter kategori yang rapi.'],
            ['icon' => 'fa-solid fa-utensils', 'color' => 'rose', 'label' => 'Kuliner & F&B', 'desc' => 'Menu digital
            via QR Code — pelanggan scan, pilih menu favorit, dan order langsung via WA.'],
            ['icon' => 'fa-solid fa-spa', 'color' => 'pink', 'label' => 'Kecantikan & Skincare', 'desc' => 'Tampilkan
            produk skincare, makeup, atau layanan salon dengan foto dan deskripsi yang menawan.'],
            ['icon' => 'fa-solid fa-seedling', 'color' => 'teal', 'label' => 'Pertanian & Agrobisnis', 'desc' =>
            'Katalog produk tani, pupuk, atau hasil kebun dengan info musim panen dan harga terkini.'],
            ['icon' => 'fa-solid fa-gem', 'color' => 'blue', 'label' => 'Perhiasan & Aksesori', 'desc' => 'Tampilkan
            koleksi perhiasan dengan foto detail, material, dan berat — kelas premium tanpa toko fisik.'],
            ];
            $uc_colors = [
            'emerald'=>
            ['bg'=>'bg-emerald-50','icon'=>'text-emerald-600','border'=>'border-emerald-100','hover'=>'hover:border-emerald-300'],
            'amber' => ['bg'=>'bg-amber-50', 'icon'=>'text-amber-600', 'border'=>'border-amber-100',
            'hover'=>'hover:border-amber-300'],
            'violet' => ['bg'=>'bg-violet-50', 'icon'=>'text-violet-600', 'border'=>'border-violet-100',
            'hover'=>'hover:border-violet-300'],
            'orange' => ['bg'=>'bg-orange-50', 'icon'=>'text-orange-600', 'border'=>'border-orange-100',
            'hover'=>'hover:border-orange-300'],
            'rose' => ['bg'=>'bg-rose-50', 'icon'=>'text-rose-600', 'border'=>'border-rose-100',
            'hover'=>'hover:border-rose-300'],
            'pink' => ['bg'=>'bg-pink-50', 'icon'=>'text-pink-600', 'border'=>'border-pink-100',
            'hover'=>'hover:border-pink-300'],
            'teal' => ['bg'=>'bg-teal-50', 'icon'=>'text-teal-600', 'border'=>'border-teal-100',
            'hover'=>'hover:border-teal-300'],
            'blue' => ['bg'=>'bg-blue-50', 'icon'=>'text-blue-600', 'border'=>'border-blue-100',
            'hover'=>'hover:border-blue-300'],
            ];
            @endphp

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-5">
                @foreach($useCases as $uc)
                @php $uc_c = $uc_colors[$uc['color']]; @endphp
                <div class="group p-4 md:p-5 bg-white rounded-2xl border {{ $uc_c['border'] }} {{ $uc_c['hover'] }} shadow-sm hover:shadow-md transition-all duration-300 cursor-default"
                    data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
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
                <p class="text-slate-500 text-sm mb-3">Produk Anda tidak ada di atas tapi tetap ingin punya katalog
                    digital?</p>
                <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20konsultasi%20katalog%20digital%20untuk%20bisnis%20saya."
                    target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 text-emerald-600 font-semibold hover:underline underline-offset-4 transition text-sm">
                    Ceritakan kebutuhan Anda — kami carikan solusinya
                    <i class="fa-solid fa-arrow-right text-xs" aria-hidden="true"></i>
                </a>
            </div>

        </div>
    </section>


    {{-- ================================================================
         SECTION 4: FITUR UNGGULAN
    ================================================================ --}}
    <section id="fitur" class="py-14 md:py-24 bg-slate-50" x-data="{ activeFeature: 1 }">
        <div class="max-w-6xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-16" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Fitur Unggulan <span class="text-emerald-600">Katalog Digital Profesional</span>
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-sm md:text-base">
                    Bukan sekadar daftar produk online. Ini adalah mesin pemasaran pasif yang bekerja 24 jam
                    mendatangkan pelanggan baru untuk bisnis Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">

                {{-- Feature Accordion — kolom kanan dulu (reversed seperti template ecommerce) --}}
                <div class="lg:col-span-7 space-y-2.5 md:space-y-3 order-first lg:order-last" data-aos="fade-left">

                    @php
                    $fiturList = [
                    [1, 'fa-solid fa-layer-group', 'Katalog Produk Terstruktur & Mudah Dicari', 'Tampilkan ratusan
                    produk dalam kategori yang rapi, lengkap dengan foto resolusi tinggi, deskripsi, harga, dan tag
                    produk. Pelanggan bisa filter dan cari produk spesifik dalam hitungan
                    detik.<br><strong>Manfaat:</strong> Pelanggan tidak bingung dan tidak perlu tanya-tanya — mereka
                    bisa temukan sendiri produk yang mereka cari kapan saja, bahkan di luar jam kerja Anda.'],
                    [2, 'fa-brands fa-whatsapp', 'Order via WhatsApp Otomatis 1 Klik', 'Setiap produk dilengkapi tombol
                    "Order via WhatsApp" yang otomatis mengirimkan pesan terstruktur berisi nama produk, varian, dan
                    harga langsung ke nomor Anda — tanpa pelanggan perlu ketik ulang
                    apapun.<br><strong>Manfaat:</strong> Dari lihat produk ke chat WA hanya satu klik. Tidak ada lagi
                    calon pembeli yang terputus di tengah jalan karena kesulitan menghubungi Anda.'],
                    [3, 'fa-solid fa-magnifying-glass','SEO Produk — Muncul di Hasil Google', 'Setiap halaman produk
                    dioptimasi dengan meta title, deskripsi, alt text gambar, dan schema markup Product agar Google bisa
                    mengindeks dan menampilkan produk Anda di hasil pencarian.<br><strong>Manfaat:</strong> Pelanggan
                    baru yang belum kenal brand Anda bisa menemukan produk Anda secara organik — tanpa biaya iklan
                    tambahan.'],
                    [4, 'fa-solid fa-file-pdf', 'Download Brosur PDF Otomatis & Selalu Update', 'Pelanggan bisa
                    mengunduh katalog PDF langsung dari website yang selalu sinkron dengan data produk terbaru di admin
                    — tidak perlu buat ulang PDF manual setiap ada perubahan harga atau produk
                    baru.<br><strong>Manfaat:</strong> Terlihat profesional di mata pelanggan B2B dan distributor yang
                    terbiasa meminta brosur atau katalog cetak.'],
                    [5, 'fa-solid fa-shield-halved', 'Proteksi Foto — Watermark Logo Otomatis', 'Semua foto produk
                    dilindungi watermark logo bisnis Anda secara otomatis setiap kali foto diunggah ke sistem — tidak
                    perlu tambahkan watermark manual satu per satu.<br><strong>Manfaat:</strong> Foto produk original
                    Anda tidak bisa diklaim, dicuri, atau dipakai kompetitor tanpa izin — identitas brand Anda
                    terlindungi.'],
                    ];
                    @endphp

                    @foreach($fiturList as [$id, $icon, $judul, $konten])
                    <div @click="activeFeature = {{ $id }}"
                        class="p-4 md:p-5 rounded-2xl cursor-pointer transition-all duration-300 border" :class="activeFeature === {{ $id }}
                             ? 'bg-emerald-600 text-white shadow-xl shadow-emerald-200/60 border-transparent'
                             : 'bg-white hover:shadow-md text-slate-800 border-slate-100'">
                        <h3 class="font-bold flex items-center justify-between text-sm md:text-base">
                            <span class="flex items-center gap-2.5 md:gap-3">
                                <i class="{{ $icon }} w-4 shrink-0 transition-colors duration-200"
                                    :class="activeFeature === {{ $id }} ? 'text-white' : 'text-emerald-600'"
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

                {{-- Visual mockup Dashboard Katalog --}}
                <div class="lg:col-span-5 order-last lg:order-first lg:sticky lg:top-24" data-aos="fade-right">
                    <div
                        class="bg-gradient-to-br from-slate-900 to-slate-800 p-4 md:p-5 rounded-[1.5rem] md:rounded-[2rem] shadow-2xl border border-slate-700/50 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-500/10 rounded-full blur-2xl"
                            aria-hidden="true"></div>
                        <div class="bg-slate-800/80 rounded-2xl p-4 md:p-5 space-y-3 md:space-y-4 relative z-10">

                            <div class="flex items-center gap-3 border-b border-slate-700/40 pb-3 md:pb-4">
                                <div class="w-8 h-8 bg-emerald-600 rounded-lg flex items-center justify-center">
                                    <i class="fa-solid fa-layer-group text-white text-xs" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-white">Dashboard Katalog</p>
                                    <p class="text-[9px] text-slate-400">248 Produk Aktif</p>
                                </div>
                                <div class="ml-auto flex items-center gap-1.5">
                                    <div class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></div>
                                    <span class="text-[9px] text-emerald-400">Online</span>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-2.5 md:gap-3">
                                <div class="bg-slate-900/60 rounded-xl p-3 border border-slate-700/30">
                                    <i class="fa-brands fa-whatsapp text-emerald-400 mb-2 text-sm"
                                        aria-hidden="true"></i>
                                    <p class="text-[9px] text-slate-400">Order WA</p>
                                    <p class="text-xs font-bold text-white">1 Klik Otomatis</p>
                                </div>
                                <div class="bg-slate-900/60 rounded-xl p-3 border border-slate-700/30">
                                    <i class="fa-solid fa-file-pdf text-red-400 mb-2 text-sm" aria-hidden="true"></i>
                                    <p class="text-[9px] text-slate-400">PDF Katalog</p>
                                    <p class="text-xs font-bold text-white">Auto Generate</p>
                                </div>
                                <div class="bg-slate-900/60 rounded-xl p-3 border border-slate-700/30">
                                    <i class="fa-solid fa-magnifying-glass text-blue-400 mb-2 text-sm"
                                        aria-hidden="true"></i>
                                    <p class="text-[9px] text-slate-400">SEO Produk</p>
                                    <p class="text-xs font-bold text-white">Google Ready</p>
                                </div>
                                <div class="bg-slate-900/60 rounded-xl p-3 border border-slate-700/30">
                                    <i class="fa-solid fa-shield-halved text-purple-400 mb-2 text-sm"
                                        aria-hidden="true"></i>
                                    <p class="text-[9px] text-slate-400">Watermark Foto</p>
                                    <p class="text-xs font-bold text-white">Auto Protect</p>
                                </div>
                            </div>

                            <div class="bg-emerald-600 rounded-xl p-3 flex items-center justify-between">
                                <div>
                                    <p class="text-[9px] text-emerald-200">Pengunjung Bulan Ini</p>
                                    <p class="text-base font-extrabold text-white">4.280 Orang</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-[9px] text-emerald-200">Inquiry Masuk</p>
                                    <p class="text-sm font-bold text-white">186 Chat ↑</p>
                                </div>
                            </div>
                        </div>
                        <div class="absolute -bottom-2 -right-2 bg-emerald-500 text-white px-3 py-2 rounded-xl shadow-lg flex items-center gap-1.5"
                            aria-hidden="true">
                            <i class="fa-solid fa-bolt text-xs"></i>
                            <span class="text-[10px] font-bold">Auto-Inquiry</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ================================================================
         SECTION 5: PAKET HARGA
    ================================================================ --}}
    <section id="paket" class="py-14 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-16" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-5xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Pilih Paket <span class="text-emerald-600">Katalog Digital</span> Anda
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-sm md:text-base">
                    Harga transparan, fitur jelas. Pilih sesuai jumlah produk dan kebutuhan bisnis Anda.
                </p>
                <p class="text-xs text-slate-400 mt-3 italic">*Harga belum termasuk biaya domain dan hosting tahunan.
                    Bisa dicicil 2–3 termin.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 md:gap-6 lg:gap-8 items-start">

                @foreach($paket as $i => $p)
                <article class="relative bg-white rounded-3xl flex flex-col transition-all duration-300
                       {{ $p['populer']
                          ? 'border-2 border-emerald-600 shadow-2xl shadow-emerald-100 lg:-translate-y-4'
                          : 'border border-slate-200 shadow-sm hover:shadow-md' }}" data-aos="fade-up"
                    data-aos-delay="{{ $i * 100 }}">

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
                                    <i class="fa-solid fa-circle-check text-emerald-600 mt-0.5 shrink-0 text-[11px]"
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
                                <i class="fa-solid fa-infinity text-emerald-400"></i>
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
                <a href="{{ url('/fitur-web-katalog-produk') }}"
                    class="inline-flex items-center gap-2 px-6 md:px-8 py-3 bg-white border border-slate-200 hover:border-emerald-300 hover:bg-emerald-50 text-slate-700 font-semibold rounded-full transition-all text-sm shadow-sm">
                    Lihat perbandingan fitur &amp; harga lengkap
                    <i class="fa-solid fa-chevron-right text-xs" aria-hidden="true"></i>
                </a>
            </div>

        </div>
    </section>


    {{-- ================================================================
         SECTION 6: FAQ
    ================================================================ --}}
    <section id="faq" class="py-14 md:py-24 bg-slate-50" x-data="faqKatalog()">
        <div class="max-w-3xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-12" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Pertanyaan Seputar <span class="text-blue-600">Website Katalog Produk</span>
                </h2>
                <p class="text-slate-600 text-sm md:text-base">Semua yang perlu Anda ketahui sebelum memulai proyek
                    bersama kami.</p>
            </div>

            <div class="space-y-2.5 md:space-y-3" data-aos="fade-up" data-aos-delay="100" itemscope
                itemtype="https://schema.org/FAQPage">

                <template x-for="(faq, index) in faqs" :key="faq.id">
                    <div class="faq-katalog-item group relative bg-white rounded-2xl overflow-hidden shadow-sm border transition-all duration-300"
                        :class="selected === faq.id ? 'border-blue-300 shadow-blue-100 shadow-md' : 'border-slate-200 hover:border-slate-300 hover:shadow-md'"
                        itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">

                        <div class="absolute left-0 top-0 bottom-0 w-1 rounded-l-full transition-all duration-300"
                            :class="selected === faq.id ? 'bg-blue-500 opacity-100' : 'opacity-0'"></div>

                        <button @click="toggleFaq(faq.id, $event)"
                            class="faq-katalog-btn w-full flex items-center gap-3 md:gap-4 px-4 md:px-6 py-4 md:py-5 text-left focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-400 focus-visible:ring-inset relative overflow-hidden cursor-pointer"
                            :aria-expanded="selected === faq.id" :aria-controls="'faq-katalog-answer-' + faq.id">

                            <span
                                class="faq-katalog-ripple absolute rounded-full bg-blue-100 opacity-0 pointer-events-none"
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

                        <div :id="'faq-katalog-answer-' + faq.id" class="faq-katalog-answer overflow-hidden"
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
                <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20bertanya%20soal%20pembuatan%20katalog%20digital."
                    target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 bg-emerald-500 text-white px-5 md:px-6 py-2.5 md:py-3 rounded-xl font-semibold hover:bg-emerald-600 transition text-sm">
                    <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                    Tanya Langsung via WhatsApp
                </a>
            </div>

        </div>
    </section>


    {{-- ================================================================
         SECTION 7: CTA / MEETING FORM
    ================================================================ --}}
    <x-meeting-form title="Siap Tampilkan Semua Produk Anda dalam Satu Link Profesional?"
        subtitle="Jadwalkan konsultasi gratis — kami bantu rancang katalog digital yang paling sesuai dengan kebutuhan bisnis Anda." />


    @push('scripts')
    <script>
    function faqKatalog() {
        return {
            selected: null,

            faqs: [{
                    id: 1,
                    question: 'Apa bedanya website katalog produk dengan toko online biasa?',
                    answer: `<p class="mb-3">Perbedaan utamanya ada di <strong>alur transaksi</strong>:</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div class="p-3 bg-blue-50 rounded-xl border border-blue-100">
                            <p class="text-xs font-bold text-blue-700 mb-1">Website Katalog</p>
                            <p class="text-xs text-slate-600">Tampilkan produk → pelanggan tertarik → klik tombol WA → deal secara personal. Cocok untuk bisnis yang proses transaksinya masih ingin personal.</p>
                        </div>
                        <div class="p-3 bg-slate-50 rounded-xl border border-slate-100">
                            <p class="text-xs font-bold text-slate-700 mb-1">Toko Online (E-Commerce)</p>
                            <p class="text-xs text-slate-600">Tampilkan produk → pelanggan tambah ke keranjang → checkout → bayar otomatis. Cocok jika ingin transaksi berjalan 24 jam tanpa intervensi.</p>
                        </div>
                    </div>`
                },
                {
                    id: 2,
                    question: 'Apakah saya bisa update produk sendiri setelah website jadi?',
                    answer: `<p class="mb-3">Ya. Anda mendapatkan akses <strong>Dashboard Admin</strong> yang mudah digunakan:</p>
                    <ul class="space-y-1.5">
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]" aria-hidden="true"></i> Tambah, edit, atau hapus produk kapan saja</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]" aria-hidden="true"></i> Upload foto dan atur kategori produk</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]" aria-hidden="true"></i> Ubah harga dan deskripsi tanpa perlu developer</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]" aria-hidden="true"></i> Katalog PDF otomatis ikut ter-update</li>
                    </ul>`
                },
                {
                    id: 3,
                    question: 'Berapa banyak produk yang bisa ditampilkan?',
                    answer: `<div class="space-y-2">
                    <div class="flex items-center justify-between p-3 bg-slate-50 rounded-xl text-xs"><span class="font-semibold text-slate-700">Paket Starter</span><span class="text-blue-600 font-bold">Hingga 50 produk</span></div>
                    <div class="flex items-center justify-between p-3 bg-blue-50 rounded-xl text-xs border border-blue-100"><span class="font-semibold text-slate-700">Paket Professional</span><span class="text-blue-600 font-bold">Hingga 300 produk</span></div>
                    <div class="flex items-center justify-between p-3 bg-slate-50 rounded-xl text-xs"><span class="font-semibold text-slate-700">Paket Enterprise</span><span class="text-blue-600 font-bold">Unlimited</span></div>
                    <p class="text-xs text-slate-400 italic mt-2">Semua paket bisa ditingkatkan seiring pertumbuhan bisnis.</p>
                </div>`
                },
                {
                    id: 4,
                    question: 'Apakah website katalog bisa ditemukan di Google?',
                    answer: `<p class="mb-3">Ya! Setiap halaman produk kami optimasi dengan:</p>
                    <ul class="space-y-2">
                        <li class="flex items-start gap-2 text-xs"><i class="fa-solid fa-magnifying-glass text-blue-600 mt-0.5" aria-hidden="true"></i><span><strong>Meta title &amp; description</strong> yang mengandung keyword relevan produk Anda</span></li>
                        <li class="flex items-start gap-2 text-xs"><i class="fa-solid fa-image text-blue-600 mt-0.5" aria-hidden="true"></i><span><strong>Alt text gambar</strong> agar foto produk terindeks di Google Images</span></li>
                        <li class="flex items-start gap-2 text-xs"><i class="fa-solid fa-code text-blue-600 mt-0.5" aria-hidden="true"></i><span><strong>Schema markup Product</strong> untuk rich snippet di hasil pencarian Google</span></li>
                    </ul>`
                },
                {
                    id: 5,
                    question: 'Apakah ada fitur tombol WhatsApp langsung dari halaman produk?',
                    answer: `<p class="mb-2">Ya. Tombol WhatsApp sudah terpasang di setiap halaman detail produk. Ketika diklik, pelanggan langsung diarahkan ke WhatsApp Anda dengan pesan otomatis:</p>
                    <div class="bg-emerald-50 border border-emerald-100 rounded-xl p-3 text-xs text-slate-600 font-mono">"Halo, saya tertarik dengan produk <strong>[Nama Produk]</strong>. Bisa tolong info lebih lanjut?"</div>
                    <p class="text-xs text-slate-400 mt-2">Pesan bisa dikustomisasi sesuai kebutuhan bisnis Anda.</p>`
                },
                {
                    id: 6,
                    question: 'Apakah katalog bisa dibagikan sebagai link ke pelanggan?',
                    answer: `<p>Tentu. Website katalog Anda memiliki URL unik yang bisa dibagikan ke mana saja — Instagram Bio, story WhatsApp, email, atau kartu nama digital. Jauh lebih profesional dibandingkan kirim foto manual satu per satu.</p>`
                },
                {
                    id: 7,
                    question: 'Apakah ada fitur download brosur atau PDF katalog?',
                    answer: `<p class="mb-3">Tersedia di paket <strong>Professional ke atas</strong>. Fitur ini secara otomatis:</p>
                    <ul class="space-y-1.5">
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-file-pdf text-red-500 text-[10px]" aria-hidden="true"></i> Menghasilkan PDF katalog dari data produk terbaru di admin</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-rotate text-blue-600 text-[10px]" aria-hidden="true"></i> PDF selalu sinkron — tidak perlu buat ulang manual</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-download text-blue-600 text-[10px]" aria-hidden="true"></i> Pelanggan bisa unduh langsung dari halaman website</li>
                    </ul>`
                },
                {
                    id: 8,
                    question: 'Berapa lama waktu pengerjaan website katalog produk?',
                    answer: `<div class="space-y-2">
                    <div class="flex items-center gap-3 p-3 bg-slate-50 rounded-xl text-xs"><i class="fa-solid fa-clock text-blue-600" aria-hidden="true"></i><span><strong>Paket Starter:</strong> ± 7–10 hari kerja</span></div>
                    <div class="flex items-center gap-3 p-3 bg-blue-50 rounded-xl text-xs border border-blue-100"><i class="fa-solid fa-clock text-blue-600" aria-hidden="true"></i><span><strong>Paket Professional:</strong> ± 10–14 hari kerja</span></div>
                    <p class="text-xs text-slate-400 italic">*Waktu bisa lebih cepat jika foto dan konten produk sudah disiapkan sejak awal.</p>
                </div>`
                }
            ],

            toggleFaq(id, event) {
                const btn = event.currentTarget;
                const ripple = btn.querySelector('.faq-katalog-ripple');

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
                const el = document.getElementById('faq-katalog-answer-' + id);
                if (el) {
                    const parent = el.closest('.faq-katalog-item');
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

    .faq-katalog-answer {
        transition: max-height 0.38s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.28s ease;
    }

    .faq-katalog-ripple {
        position: absolute;
        border-radius: 50%;
        background: #dbeafe;
        transform: scale(0);
        opacity: 0;
        pointer-events: none;
        transition: transform 0.5s ease, opacity 0.5s ease;
    }

    .faq-katalog-item:not([class*="border-blue"]):hover {
        background: #fafafa;
    }

    @media (prefers-reduced-motion: reduce) {
        .faq-katalog-answer {
            transition: none;
        }

        .faq-katalog-ripple {
            display: none;
        }
    }
    </style>
    @endpush

</x-layout.app>
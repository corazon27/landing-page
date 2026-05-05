<x-layout.app>

    {{-- ============================================================
     SEO: Meta halaman /layanan/web-ecommerce
============================================================ --}}
    @php
    $title = 'Jasa Pembuatan Website E-Commerce Profesional | Cakra Inovasi Digital';
    $metaDescription= 'Jasa pembuatan website e-commerce profesional dengan payment gateway, ongkir otomatis, manajemen
    stok real-time, dan dashboard admin mandiri. Lepas ketergantungan marketplace. Konsultasi gratis!';
    $metaKeywords = 'jasa website e-commerce, toko online profesional, website toko online, payment gateway, ongkir
    otomatis, jasa web developer Magelang, Jawa Tengah, UMKM Indonesia';
    $ogType = 'website';
    $canonicalUrl = url('/layanan/web-ecommerce');
    @endphp

    @php
    $faqsData = [
    ['question' => 'Apakah biaya kirim bisa otomatis muncul di website?', 'answer' => 'Ya, kami mengintegrasikan API
    ekspedisi (RajaOngkir) sehingga ongkir muncul otomatis berdasarkan berat produk dan kecamatan tujuan.'],
    ['question' => 'Metode pembayaran apa saja yang tersedia?', 'answer' => 'Kami mendukung Transfer Bank (Virtual
    Account), E-Wallet (OVO, Dana, GoPay), Kartu Kredit/Debit, dan Retail (Alfamart/Indomaret) via Payment Gateway.'],
    ['question' => 'Bagaimana saya tahu jika ada pesanan baru masuk?', 'answer' => 'Sistem mengirimkan notifikasi
    real-time via Email dan opsional integrasi WhatsApp setiap kali pelanggan menyelesaikan pembayaran.'],
    ['question' => 'Apakah saya bisa mengelola stok dan produk sendiri?', 'answer' => 'Tentu. Anda mendapatkan Dashboard
    Admin khusus untuk mengelola katalog, foto produk, harga, diskon, dan stok tanpa perlu bantuan developer.'],
    ['question' => 'Apakah data pelanggan dan transaksi aman?', 'answer' => 'Kami menggunakan SSL Certificate standar
    internasional. Data pembeli terenkripsi dan tidak pernah dibagikan ke pihak ketiga.'],
    ['question' => 'Dapatkah saya membuat kupon promo atau diskon?', 'answer' => 'Ya. Tersedia fitur manajemen promo:
    kode kupon, diskon persentase, hingga gratis ongkir dengan syarat tertentu.'],
    ['question' => 'Apakah tersedia laporan penjualan otomatis?', 'answer' => 'Ya. Anda bisa mengunduh laporan harian,
    mingguan, dan bulanan dalam format Excel, atau melihat grafik performa langsung di dashboard.'],
    ['question' => 'Bagaimana tampilan produk saya di layar HP?', 'answer' => 'Website dioptimalkan dengan Mobile-First
    Design. Alur belanja dari pilih produk hingga checkout dibuat nyaman di semua ukuran layar.'],
    ];

    $paket = [
    [
    'nama' => 'E-Commerce Starter',
    'tagline' => 'Untuk UMKM yang baru go-digital',
    'harga' => 'Rp 3,5jt',
    'harga_raw' => '3.500.000',
    'label' => null,
    'populer' => false,
    'wa_text' => 'Halo%20Cakra%2C%20saya%20tertarik%20Paket%20E-Commerce%20Starter.',
    'btn_style' => 'border-2 border-blue-600 text-blue-600 hover:bg-blue-50',
    'fitur_ya' => [
    'Kapasitas hingga 50 produk',
    'Kategori & filter produk',
    'Keranjang belanja + checkout',
    'Checkout & order via WhatsApp',
    'Manajemen stok dasar',
    'Dashboard admin mandiri',
    'Laporan penjualan dasar',
    'Desain responsif (HP & PC)',
    'Domain .com & Hosting 1 tahun',
    'SSL Certificate (HTTPS)',
    'Formulir kontak + Google Maps',
    'Optimasi SEO on-page dasar',
    'Panduan & pelatihan admin',
    'Garansi bug 30 hari',
    ],
    'fitur_tidak' => [
    'Payment Gateway otomatis',
    'Ongkir otomatis (RajaOngkir)',
    'Sistem kupon & voucher diskon',
    'Notifikasi email/WA otomatis',
    'Database & manajemen member',
    'Facebook Pixel / Google Analytics',
    'Fitur multi-warehouse',
    'Sistem affiliate/reseller',
    ],
    ],
    [
    'nama' => 'E-Commerce Professional',
    'tagline' => 'Paling populer untuk bisnis aktif',
    'harga' => 'Rp 6,5jt',
    'harga_raw' => '6.500.000',
    'label' => 'Paling Populer',
    'populer' => true,
    'wa_text' => 'Halo%20Cakra%2C%20saya%20tertarik%20Paket%20E-Commerce%20Professional.',
    'btn_style' => 'bg-blue-600 text-white hover:bg-blue-700 shadow-lg shadow-blue-200',
    'fitur_ya' => [
    'Produk unlimited (tidak terbatas)',
    'Kategori, subkategori & filter lengkap',
    'Keranjang belanja + checkout otomatis',
    'Payment Gateway (VA, E-Wallet, Kartu Kredit)',
    'Ongkir otomatis via RajaOngkir API',
    'Notifikasi pesanan via Email & WhatsApp',
    'Manajemen stok real-time',
    'Dashboard admin lengkap',
    'Laporan penjualan (Excel & grafik)',
    'Sistem kupon & voucher diskon',
    'Manajemen member & database pelanggan',
    'Ulasan & rating produk dari pembeli',
    'Desain responsif Mobile-First',
    'Domain .com & Hosting 1 tahun',
    'SSL Certificate (HTTPS)',
    'Optimasi SEO on-page lengkap',
    'Integrasi Google Analytics',
    'Panduan video & pelatihan admin',
    'Garansi bug 60 hari',
    ],
    'fitur_tidak' => [
    'Fitur multi-warehouse',
    'Sistem affiliate/reseller',
    'Facebook Pixel & Retargeting',
    'Dedicated server & SLA uptime',
    ],
    ],
    [
    'nama' => 'Enterprise / B2B',
    'tagline' => 'Skala besar, fitur kustom penuh',
    'harga' => 'Custom',
    'harga_raw' => null,
    'label' => 'Mulai Rp 12jt',
    'populer' => false,
    'wa_text' => 'Halo%20Cakra%2C%20saya%20ingin%20diskusi%20paket%20Enterprise%20E-Commerce.',
    'btn_style' => 'border-2 border-slate-800 text-slate-800 hover:bg-slate-900 hover:text-white',
    'fitur_ya' => [
    'Semua fitur Professional',
    'Produk & kategori unlimited',
    'Fitur multi-warehouse & multi-cabang',
    'Sistem reseller & affiliate terintegrasi',
    'Integrasi API pihak ketiga (ERP, CRM)',
    'Facebook Pixel & Google Tag Manager',
    'Retargeting & abandoned cart automation',
    'Dedicated server & uptime SLA 99,9%',
    'Panel super-admin multi-role',
    'Backup otomatis harian',
    'Laporan custom & ekspor data',
    'Prioritas support & dedicated PM',
    'Garansi bug 90 hari',
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
        "@id": "{{ url('/layanan/web-ecommerce') }}/#service",
        "name": "Jasa Pembuatan Website E-Commerce",
        "serviceType": "Pembuatan Website E-Commerce",
        "provider": {
            "@id": "{{ url('/') }}/#business"
        },
        "url": "{{ url('/layanan/web-ecommerce') }}",
        "description": "Jasa pembuatan website toko online profesional dengan payment gateway, ongkir otomatis, manajemen stok real-time, dan dashboard admin mandiri.",
        "areaServed": {
            "@type": "Country",
            "name": "Indonesia"
        },
        "offers": [{
                "@type": "Offer",
                "name": "E-Commerce Starter",
                "price": "3500000",
                "priceCurrency": "IDR",
                "description": "Toko online siap pakai untuk UMKM yang baru mulai go-digital."
            },
            {
                "@type": "Offer",
                "name": "E-Commerce Professional",
                "price": "6500000",
                "priceCurrency": "IDR",
                "description": "Sistem otomatis penuh dengan payment gateway, ongkir, dan fitur marketing."
            },
            {
                "@type": "Offer",
                "name": "E-Commerce Enterprise",
                "price": "12000000",
                "priceCurrency": "IDR",
                "description": "Platform e-commerce skala besar dengan fitur kustom dan dedicated support."
            }
        ]
    }
    </script>
    @endpush



    {{-- ================================================================
     SECTION 1: HERO
     Mobile: Mockup dashboard disembunyikan di HP, diganti visual stats
================================================================ --}}
    <section class="pt-32 md:pt-36 pb-16 md:pb-24 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-6">

            <x-breadcrumb :items="[['name' => 'Layanan', 'url' => url('/layanan')]]" current="Website E-Commerce" />

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center mt-6">

                {{-- Kolom Teks --}}
                <div class="text-left space-y-6 md:space-y-8" data-aos="fade-right">
                    <div>
                        <span
                            class="inline-block px-4 py-1.5 rounded-full bg-blue-50 text-blue-600 text-xs font-semibold uppercase tracking-wider mb-4">
                            Website E-Commerce
                        </span>
                        <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-slate-900 leading-tight">
                            Bangun Toko Online <span class="text-blue-600">Profesional</span><br
                                class="hidden sm:block">
                            Lepas Ketergantungan dari Marketplace
                        </h1>
                        <p class="mt-5 text-base md:text-lg text-slate-600 leading-relaxed">
                            Ubah bisnis Anda menjadi brand yang kuat dengan sistem otomatis. Kelola pesanan, pembayaran,
                            hingga pengiriman dalam satu pintu yang bekerja 24 jam nonstop.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-3 md:gap-4">
                        <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20konsultasi%20pembuatan%20website%20e-commerce."
                            target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center justify-center gap-2 px-6 md:px-8 py-3.5 md:py-4 rounded-2xl bg-blue-600 text-white font-bold text-sm md:text-base hover:bg-blue-700 transition-all shadow-lg shadow-blue-200">
                            <i class="fa-brands fa-whatsapp text-lg" aria-hidden="true"></i>
                            Konsultasi Gratis Sekarang
                        </a>
                        <a href="#fitur"
                            class="inline-flex items-center justify-center gap-2 px-6 md:px-8 py-3.5 md:py-4 rounded-2xl border-2 border-slate-200 text-slate-700 font-bold text-sm md:text-base hover:bg-slate-50 transition">
                            Lihat Fitur Lengkap
                        </a>
                    </div>

                    <div class="flex flex-wrap gap-3 md:gap-5 text-xs md:text-sm text-slate-500">
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-shield text-blue-500"
                                aria-hidden="true"></i> SSL & Keamanan Data</span>
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-mobile-screen text-blue-500"
                                aria-hidden="true"></i> Mobile-First Design</span>
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-bolt text-blue-500"
                                aria-hidden="true"></i> Dashboard Admin Mandiri</span>
                    </div>

                    {{-- Mobile-only: Stats visual pengganti mockup --}}
                    <div class="grid grid-cols-2 gap-3 lg:hidden">
                        <div class="bg-blue-50 rounded-2xl p-4 text-center border border-blue-100">
                            <p class="text-2xl font-extrabold text-blue-600">24/7</p>
                            <p class="text-xs text-slate-500 mt-1">Toko Online Berjalan</p>
                        </div>
                        <div class="bg-emerald-50 rounded-2xl p-4 text-center border border-emerald-100">
                            <p class="text-2xl font-extrabold text-emerald-600">10+</p>
                            <p class="text-xs text-slate-500 mt-1">Metode Pembayaran</p>
                        </div>
                        <div class="bg-orange-50 rounded-2xl p-4 text-center border border-orange-100">
                            <p class="text-2xl font-extrabold text-orange-500">∞</p>
                            <p class="text-xs text-slate-500 mt-1">Produk Unlimited (Pro)</p>
                        </div>
                        <div class="bg-violet-50 rounded-2xl p-4 text-center border border-violet-100">
                            <p class="text-2xl font-extrabold text-violet-600">0%</p>
                            <p class="text-xs text-slate-500 mt-1">Biaya Admin Marketplace</p>
                        </div>
                    </div>
                </div>

                {{-- Kolom Mockup Dashboard — disembunyikan di mobile (diganti stats di atas) --}}
                <div class="relative hidden lg:block" data-aos="fade-left">

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
                                <span class="text-[10px] text-slate-400 font-mono">toko-anda.com/admin</span>
                            </div>
                            <div class="w-6 h-6 rounded-full bg-blue-500 flex items-center justify-center">
                                <span class="text-[8px] font-bold text-white">A</span>
                            </div>
                        </div>

                        {{-- Body --}}
                        <div class="p-5 space-y-4">
                            <div class="grid grid-cols-3 gap-3">
                                <div class="bg-slate-800/80 rounded-xl p-3.5 border border-slate-700/40">
                                    <p class="text-[9px] text-slate-400 uppercase tracking-wider font-semibold mb-1">
                                        Omzet Hari Ini</p>
                                    <p class="text-lg font-extrabold text-white leading-none">Rp 4,2jt</p>
                                    <p class="text-[9px] text-emerald-400 mt-1 flex items-center gap-1"><i
                                            class="fa-solid fa-arrow-trend-up" aria-hidden="true"></i> +18%</p>
                                </div>
                                <div class="bg-slate-800/80 rounded-xl p-3.5 border border-slate-700/40">
                                    <p class="text-[9px] text-slate-400 uppercase tracking-wider font-semibold mb-1">
                                        Order Masuk</p>
                                    <p class="text-lg font-extrabold text-white leading-none">24</p>
                                    <p class="text-[9px] text-blue-400 mt-1 flex items-center gap-1"><i
                                            class="fa-solid fa-arrow-trend-up" aria-hidden="true"></i> +5 baru</p>
                                </div>
                                <div class="bg-slate-800/80 rounded-xl p-3.5 border border-slate-700/40">
                                    <p class="text-[9px] text-slate-400 uppercase tracking-wider font-semibold mb-1">
                                        Produk Aktif</p>
                                    <p class="text-lg font-extrabold text-white leading-none">128</p>
                                    <p class="text-[9px] text-slate-400 mt-1">Stok Aman</p>
                                </div>
                            </div>

                            <div class="bg-slate-800/80 rounded-xl p-4 border border-slate-700/40">
                                <div class="flex items-center justify-between mb-3">
                                    <p class="text-[10px] text-slate-300 font-semibold">Grafik Penjualan — 7 Hari</p>
                                    <span
                                        class="text-[9px] bg-blue-500/20 text-blue-400 px-2 py-0.5 rounded-full">Live</span>
                                </div>
                                <div class="flex items-end gap-1.5 h-16">
                                    @php $bars = [35,55,40,70,50,85,100]; $days =
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

                            <div class="bg-slate-800/80 rounded-xl border border-slate-700/40 overflow-hidden">
                                <div class="px-4 py-2.5 border-b border-slate-700/40 flex items-center justify-between">
                                    <p class="text-[10px] text-slate-300 font-semibold">Order Terbaru</p>
                                    <span class="text-[9px] text-blue-400">Lihat Semua</span>
                                </div>
                                @php
                                $orders = [
                                ['id'=>'#ORD-884','name'=>'Budi S.','product'=>'Kaos Polos XL','amount'=>'Rp
                                145rb','status'=>'Lunas','color'=>'text-emerald-400 bg-emerald-400/10'],
                                ['id'=>'#ORD-883','name'=>'Sari D.','product'=>'Tote Bag Batik','amount'=>'Rp
                                95rb','status'=>'Proses','color'=>'text-amber-400 bg-amber-400/10'],
                                ['id'=>'#ORD-882','name'=>'Andi W.','product'=>'Celana Chino M','amount'=>'Rp
                                210rb','status'=>'Kirim','color'=>'text-blue-400 bg-blue-400/10'],
                                ];
                                @endphp
                                @foreach($orders as $order)
                                <div
                                    class="px-4 py-2.5 flex items-center justify-between border-b border-slate-700/20 last:border-0">
                                    <div class="flex items-center gap-3">
                                        <div class="w-7 h-7 rounded-lg bg-slate-700 flex items-center justify-center">
                                            <i class="fa-solid fa-bag-shopping text-slate-400 text-[9px]"
                                                aria-hidden="true"></i>
                                        </div>
                                        <div>
                                            <p class="text-[10px] font-semibold text-slate-200">{{ $order['name'] }}
                                                <span class="text-slate-500 font-normal">{{ $order['id'] }}</span>
                                            </p>
                                            <p class="text-[9px] text-slate-500">{{ $order['product'] }}</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-[10px] font-bold text-slate-200">{{ $order['amount'] }}</p>
                                        <span
                                            class="text-[8px] font-semibold px-1.5 py-0.5 rounded-full {{ $order['color'] }}">{{ $order['status'] }}</span>
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
                            <i class="fa-solid fa-bag-shopping text-sm"></i>
                        </div>
                        <div>
                            <p class="text-[9px] text-slate-400 uppercase font-bold tracking-widest">Order Baru!</p>
                            <p class="text-sm font-extrabold text-slate-800">+ Rp 185.000</p>
                        </div>
                    </div>
                    <div class="absolute -top-3 -right-3 bg-blue-600 text-white rounded-xl shadow-lg px-3 py-2 flex items-center gap-2 z-20"
                        aria-hidden="true">
                        <i class="fa-solid fa-circle-check text-emerald-300 text-sm"></i>
                        <span class="text-[10px] font-bold">Pembayaran Diterima</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ================================================================
     SECTION 2: PERBANDINGAN
================================================================ --}}
    <section class="py-16 md:py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-5 md:px-6">
            <div class="text-center mb-10 md:mb-16" data-aos="fade-up">
                <h2 class="text-2xl md:text-4xl font-extrabold text-slate-900 mb-4">
                    Mengapa Harus Website E-Commerce Sendiri?
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-sm md:text-base">
                    Bandingkan kondisi bisnis saat bergantung pada marketplace vs memiliki platform toko online mandiri.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 items-stretch">

                <div class="bg-white p-6 md:p-8 rounded-3xl border border-red-100 shadow-sm relative overflow-hidden group"
                    data-aos="fade-right">
                    <div class="absolute -right-4 -top-4 opacity-5 group-hover:rotate-12 transition-transform duration-500"
                        aria-hidden="true">
                        <i class="fa-solid fa-box-archive text-9xl text-red-600"></i>
                    </div>
                    <div class="relative z-10">
                        <div class="w-12 h-12 bg-red-50 rounded-2xl flex items-center justify-center mb-5">
                            <i class="fa-solid fa-xmark text-red-500 text-xl" aria-hidden="true"></i>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-slate-900 mb-5">Tanpa Website (Manual /
                            Marketplace)</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Ketergantungan Pihak Ketiga:</strong> Rentan perubahan kebijakan dan biaya
                                    admin marketplace yang terus naik.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Perang Harga:</strong> Produk Anda disandingkan langsung dengan kompetitor
                                    yang banting harga di platform yang sama.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Data Pelanggan Terbatas:</strong> Tidak punya database email/WA pembeli untuk
                                    strategi retarget.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-red-500 italic font-medium">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                Branding sulit berkembang karena pembeli lebih ingat nama marketplace daripada nama toko
                                Anda.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-blue-600 p-6 md:p-8 rounded-3xl shadow-xl shadow-blue-100 relative overflow-hidden group"
                    data-aos="fade-left">
                    <div class="absolute -right-4 -top-4 opacity-10 group-hover:rotate-12 transition-transform duration-500"
                        aria-hidden="true">
                        <i class="fa-solid fa-cart-shopping text-9xl text-white"></i>
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-12 h-12 bg-blue-500 rounded-2xl flex items-center justify-center mb-5 border border-blue-400">
                            <i class="fa-solid fa-check text-white text-xl" aria-hidden="true"></i>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-white mb-5">Dengan Website E-Commerce Sendiri</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3 text-sm text-blue-50">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 shrink-0" aria-hidden="true"></i>
                                <p><strong>Kontrol Penuh & Branding:</strong> Bebas atur tampilan, promosi, dan sistem
                                    tanpa aturan marketplace.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-blue-50">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 shrink-0" aria-hidden="true"></i>
                                <p><strong>Sistem Otomatis 24/7:</strong> Hitung ongkir dan terima pembayaran via
                                    Payment Gateway meski Anda sedang tidur.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-blue-50">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 shrink-0" aria-hidden="true"></i>
                                <p><strong>Database Mandiri:</strong> Miliki data pelanggan penuh sebagai aset pemasaran
                                    jangka panjang.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-white font-bold">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 shrink-0" aria-hidden="true"></i>
                                Toko online eksklusif yang profesional, terpercaya, dan 100% milik Anda.
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ================================================================
     SECTION 3: FITUR
     Mobile: feature list stack penuh, visual sticky hanya di desktop
================================================================ --}}
    <section id="fitur" class="py-16 md:py-24 bg-white" x-data="{ activeFeature: 1 }">
        <div class="max-w-6xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-16" data-aos="fade-up">
                <h2 class="text-2xl md:text-4xl font-extrabold text-slate-900 mb-4">
                    Fitur Unggulan <span class="text-blue-600">E-Commerce Profesional</span>
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-sm md:text-base">
                    Tinggalkan cara jualan manual yang melelahkan. Bangun kredibilitas dan biarkan sistem otomatis
                    mendatangkan profit 24 jam.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">

                {{-- Visual — sticky hanya di desktop --}}
                <div class="lg:col-span-5 lg:sticky lg:top-24" data-aos="fade-right">
                    <div
                        class="bg-gradient-to-br from-slate-900 to-slate-800 p-5 rounded-[2rem] shadow-2xl border border-slate-700/50 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500/10 rounded-full blur-2xl"
                            aria-hidden="true"></div>
                        <div class="bg-slate-800/80 rounded-2xl p-5 space-y-4 relative z-10">
                            <div class="flex items-center gap-3 border-b border-slate-700/40 pb-4">
                                <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center">
                                    <i class="fa-solid fa-store text-white text-xs" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-white">Dashboard E-Commerce</p>
                                    <p class="text-[9px] text-slate-400">Sistem Aktif — Realtime</p>
                                </div>
                                <div class="ml-auto flex items-center gap-1.5">
                                    <div class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></div>
                                    <span class="text-[9px] text-emerald-400">Online</span>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-3">
                                <div class="bg-slate-900/60 rounded-xl p-3 border border-slate-700/30">
                                    <i class="fa-solid fa-credit-card text-blue-400 mb-2 text-sm"
                                        aria-hidden="true"></i>
                                    <p class="text-[9px] text-slate-400">Payment Gateway</p>
                                    <p class="text-xs font-bold text-white">10+ Metode</p>
                                </div>
                                <div class="bg-slate-900/60 rounded-xl p-3 border border-slate-700/30">
                                    <i class="fa-solid fa-truck-fast text-emerald-400 mb-2 text-sm"
                                        aria-hidden="true"></i>
                                    <p class="text-[9px] text-slate-400">Ongkir Otomatis</p>
                                    <p class="text-xs font-bold text-white">JNE, TIKI, dll</p>
                                </div>
                                <div class="bg-slate-900/60 rounded-xl p-3 border border-slate-700/30">
                                    <i class="fa-solid fa-boxes-stacked text-orange-400 mb-2 text-sm"
                                        aria-hidden="true"></i>
                                    <p class="text-[9px] text-slate-400">Manajemen Stok</p>
                                    <p class="text-xs font-bold text-white">Real-time</p>
                                </div>
                                <div class="bg-slate-900/60 rounded-xl p-3 border border-slate-700/30">
                                    <i class="fa-solid fa-chart-pie text-purple-400 mb-2 text-sm"
                                        aria-hidden="true"></i>
                                    <p class="text-[9px] text-slate-400">Laporan Omzet</p>
                                    <p class="text-xs font-bold text-white">Harian / Bulanan</p>
                                </div>
                            </div>
                            <div class="bg-blue-600 rounded-xl p-3 flex items-center justify-between">
                                <div>
                                    <p class="text-[9px] text-blue-200">Total Transaksi Hari Ini</p>
                                    <p class="text-base font-extrabold text-white">Rp 4.220.000</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-[9px] text-blue-200">Conversion Rate</p>
                                    <p class="text-sm font-bold text-emerald-300">3,8% ↑</p>
                                </div>
                            </div>
                        </div>
                        <div class="absolute -bottom-2 -right-2 bg-emerald-500 text-white px-3 py-2 rounded-xl shadow-lg flex items-center gap-1.5"
                            aria-hidden="true">
                            <i class="fa-solid fa-rocket text-xs"></i>
                            <span class="text-[10px] font-bold">Auto-Sales</span>
                        </div>
                    </div>
                </div>

                {{-- Feature Accordion List --}}
                <div class="lg:col-span-7 space-y-3" data-aos="fade-left">

                    @php
                    $fiturList = [
                    [1, 'fa-store', 'Katalog Produk & Checkout Otomatis', 'Kelola produk dengan kategori, variasi
                    ukuran/warna, dan keranjang belanja yang user-friendly. <br><strong>Manfaat:</strong> Memudahkan
                    pelanggan memilih produk dan mempercepat pembelian, mengurangi <em>abandoned cart</em>.'],
                    [2, 'fa-wallet', 'Pembayaran Online & Ongkir Otomatis', 'Integrasi Payment Gateway (Transfer,
                    E-Wallet) dan hitung ongkir real-time dari berbagai ekspedisi via RajaOngkir API.
                    <br><strong>Manfaat:</strong> Pelanggan bayar langsung tanpa konfirmasi manual — transaksi lebih
                    cepat dan profesional.'],
                    [3, 'fa-chart-pie', 'Manajemen Order & Laporan Penjualan', 'Pantau semua pesanan masuk dan lihat
                    grafik omzet, produk terlaris, serta performa toko dari satu dashboard.
                    <br><strong>Manfaat:</strong> Administrasi tercatat rapi otomatis, keputusan bisnis berbasis data
                    nyata bukan feeling.'],
                    [4, 'fa-bullhorn', 'Fitur Marketing (Voucher, Review & Promo)', 'Sistem kupon diskon, gratis ongkir
                    bersyarat, dan ulasan produk dari pembeli asli. <br><strong>Manfaat:</strong> Tingkatkan repeat
                    order dan bangun kepercayaan calon pelanggan baru secara organik.'],
                    [5, 'fa-bolt-lightning','Advanced Tech (Tracking & Retargeting)', 'Integrasi Facebook Pixel, Google
                    Analytics, dan setup awal retargeting. <br><strong>Manfaat:</strong> Pantau performa iklan secara
                    akurat dan kejar kembali calon pembeli yang belum checkout.'],
                    ];
                    @endphp

                    @foreach($fiturList as [$id, $icon, $judul, $konten])
                    <div @click="activeFeature = {{ $id }}"
                        class="p-4 md:p-5 rounded-2xl cursor-pointer transition-all duration-300 border" :class="activeFeature === {{ $id }}
                        ? 'bg-blue-600 text-white shadow-xl shadow-blue-200/60 border-transparent'
                        : 'bg-white hover:shadow-md text-slate-800 border-slate-100'">
                        <h3 class="font-bold flex items-center justify-between text-sm md:text-base">
                            <span class="flex items-center gap-3">
                                <i class="fa-solid {{ $icon }} w-4"
                                    :class="activeFeature === {{ $id }} ? 'text-white' : 'text-blue-600'"
                                    aria-hidden="true"></i>
                                {{ $judul }}
                            </span>
                            <i class="fa-solid fa-chevron-right text-[10px] transition-transform duration-300 shrink-0 ml-2"
                                :class="activeFeature === {{ $id }} ? 'rotate-90' : ''" aria-hidden="true"></i>
                        </h3>
                        <div x-show="activeFeature === {{ $id }}" x-transition:enter="transition ease-out duration-300"
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
            </div>
        </div>
    </section>

    {{-- ================================================================
     SECTION 4: PAKET HARGA
     Harga riset pasar Indonesia 2024-2025, fitur detail per paket
================================================================ --}}
    <section id="paket" class="py-16 md:py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-16" data-aos="fade-up">
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-extrabold text-slate-900 mb-4">
                    Miliki <span class="text-blue-600">Toko Online Anda</span>
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-sm md:text-base">
                    Harga transparan, fitur jelas. Pilih paket sesuai skala bisnis Anda — semua bisa didiskusikan.
                </p>
                <p class="text-xs text-slate-400 mt-3 italic">*Harga belum termasuk biaya domain, hosting tahunan, dan
                    payment gateway (dibayar ke provider masing-masing). Bisa dicicil 2-3 termin.</p>
            </div>

            {{-- Grid Paket — mobile: stack, desktop: 3 kolom --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8 items-start">

                @foreach($paket as $i => $p)
                <article class="relative bg-white rounded-3xl flex flex-col transition-all duration-300
                       {{ $p['populer']
                          ? 'border-2 border-blue-600 shadow-2xl shadow-blue-100 lg:-translate-y-4'
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

                    <div class="p-6 md:p-8 {{ $p['label'] ? 'pt-8 md:pt-10' : '' }}">

                        {{-- Header paket --}}
                        <div class="mb-6 pb-6 border-b border-slate-100">
                            <h3 class="text-lg font-extrabold text-slate-900 mb-1">{{ $p['nama'] }}</h3>
                            <p class="text-slate-500 text-xs mb-4">{{ $p['tagline'] }}</p>
                            @if($p['harga'] === 'Custom')
                            <p class="text-3xl md:text-4xl font-extrabold text-slate-900">Custom</p>
                            <p class="text-xs text-slate-400 mt-1">Harga sesuai kebutuhan</p>
                            @else
                            <p class="text-3xl md:text-4xl font-extrabold text-slate-900">{{ $p['harga'] }}</p>
                            <p class="text-xs text-slate-400 mt-1">Biaya setup awal — bisa 2–3 termin</p>
                            @endif
                        </div>

                        {{-- Fitur yang DIDAPAT --}}
                        <div class="mb-5">
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-3">Yang Anda
                                Dapatkan</p>
                            <ul class="space-y-2">
                                @foreach($p['fitur_ya'] as $f)
                                <li class="flex items-start gap-2.5 text-xs text-slate-700">
                                    <i class="fa-solid fa-circle-check text-blue-600 mt-0.5 shrink-0 text-[11px]"
                                        aria-hidden="true"></i>
                                    {{ $f }}
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        {{-- Fitur yang TIDAK ADA --}}
                        @if(count($p['fitur_tidak']) > 0)
                        <div class="mb-6 pt-4 border-t border-slate-50">
                            <p class="text-[10px] font-bold text-slate-300 uppercase tracking-widest mb-3">Tidak
                                Termasuk</p>
                            <ul class="space-y-2">
                                @foreach($p['fitur_tidak'] as $f)
                                <li class="flex items-start gap-2.5 text-xs text-slate-400">
                                    <i class="fa-solid fa-xmark text-slate-300 mt-0.5 shrink-0 text-[11px]"
                                        aria-hidden="true"></i>
                                    {{ $f }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @else
                        <div class="mb-6 pt-4 border-t border-slate-50">
                            <p class="text-xs text-slate-400 italic flex items-center gap-2">
                                <i class="fa-solid fa-infinity text-blue-400"></i>
                                Semua fitur tersedia — tidak ada batasan.
                            </p>
                        </div>
                        @endif

                        <a href="https://wa.me/6285865405330?text={{ $p['wa_text'] }}" target="_blank"
                            rel="noopener noreferrer"
                            class="block w-full py-3.5 px-6 text-center rounded-2xl font-bold text-sm transition-all duration-200 {{ $p['btn_style'] }}">
                            @if($p['populer']) Ambil Penawaran Ini
                            @elseif($p['harga'] === 'Custom') Diskusi dengan Tim Ahli
                            @else Pilih Paket Ini
                            @endif
                        </a>

                    </div>
                </article>
                @endforeach

            </div>

            <div class="mt-10 text-center" data-aos="fade-up">
                <a href="{{ url('/fitur-web-ecommerce') }}"
                    class="inline-flex items-center gap-2 px-8 py-3 bg-white border border-slate-200 hover:border-blue-300 hover:bg-blue-50 text-slate-700 font-semibold rounded-full transition-all text-sm shadow-sm">
                    Lihat perbandingan fitur &amp; harga lengkap
                    <i class="fa-solid fa-chevron-right text-xs" aria-hidden="true"></i>
                </a>
            </div>

        </div>
    </section>

    {{-- ================================================================
     SECTION 5: FAQ
     Animasi: x-transition dengan ease + duration, bukan x-collapse
================================================================ --}}
    <section id="faq" class="py-16 md:py-24 bg-white" x-data="faqEcommerce()">
        <div class="max-w-3xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-12" data-aos="fade-up">
                <h2 class="text-2xl md:text-4xl font-extrabold text-slate-900 mb-4">
                    Pertanyaan Seputar <span class="text-blue-600">Website E-Commerce</span>
                </h2>
                <p class="text-slate-600 text-sm md:text-base">Semua yang perlu Anda ketahui sebelum memulai proyek
                    bersama kami.</p>
            </div>

            <div class="space-y-3" itemscope itemtype="https://schema.org/FAQPage">
                <template x-for="faq in faqs" :key="faq.id">
                    <div class="border rounded-2xl overflow-hidden transition-all duration-300" :class="selected === faq.id
                        ? 'border-blue-300 ring-1 ring-blue-100 shadow-md shadow-blue-50'
                        : 'border-slate-200 shadow-sm'" itemscope itemprop="mainEntity"
                        itemtype="https://schema.org/Question">

                        <button @click="toggle(faq.id)"
                            class="w-full flex items-center justify-between p-5 md:p-6 text-left bg-white hover:bg-slate-50 transition-colors"
                            :aria-expanded="selected === faq.id">
                            <span class="font-bold text-slate-900 pr-4 text-sm md:text-base leading-snug"
                                :class="selected === faq.id ? 'text-blue-600' : ''" x-text="faq.question"
                                itemprop="name">
                            </span>

                            {{-- Animasi icon rotate --}}
                            <span
                                class="shrink-0 w-7 h-7 rounded-full flex items-center justify-center transition-colors duration-200"
                                :class="selected === faq.id ? 'bg-blue-600' : 'bg-slate-100'">
                                <i class="fa-solid fa-chevron-down text-[10px] transition-transform duration-300"
                                    :class="[
                                   selected === faq.id ? 'rotate-180' : 'rotate-0',
                                   selected === faq.id ? 'text-white' : 'text-slate-500'
                               ]" aria-hidden="true"></i>
                            </span>
                        </button>

                        {{-- Animasi konten: max-height transition --}}
                        <div class="overflow-hidden transition-all duration-300 ease-in-out"
                            :style="selected === faq.id ? 'max-height: 500px; opacity: 1;' : 'max-height: 0px; opacity: 0;'"
                            itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="px-5 md:px-6 pb-5 md:pb-6 text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-4"
                                x-html="faq.answer" itemprop="text">
                            </div>
                        </div>

                    </div>
                </template>
            </div>

            <div class="mt-8 md:mt-10 text-center" data-aos="fade-up">
                <p class="text-slate-500 text-sm mb-4">Masih ada pertanyaan lain?</p>
                <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20bertanya%20soal%20website%20e-commerce."
                    target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 bg-emerald-500 text-white px-6 py-3 rounded-xl font-semibold hover:bg-emerald-600 transition text-sm">
                    <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                    Tanya Langsung via WhatsApp
                </a>
            </div>
        </div>
    </section>

    {{-- ================================================================
     SECTION 6: CTA / MEETING FORM
================================================================ --}}
    <x-meeting-form title="Siap Membangun Toko Online Profesional Anda?"
        subtitle="Jadwalkan konsultasi gratis — diskusikan kebutuhan spesifik bisnis Anda bersama tim kami." />

    {{-- ================================================================
     SCRIPTS
================================================================ --}}
    @push('scripts')
    <script>
    function faqEcommerce() {
        return {
            selected: null,

            toggle(id) {
                this.selected = this.selected === id ? null : id;
            },

            faqs: [{
                    id: 1,
                    question: 'Apakah biaya kirim bisa otomatis muncul di website?',
                    answer: `<p class="mb-3">Ya, kami mengintegrasikan API ekspedisi (RajaOngkir):</p>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-truck-fast text-blue-600"></i> Cek ongkir otomatis (JNE, TIKI, POS, SiCepat, dll).</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-location-dot text-blue-600"></i> Perhitungan berdasarkan berat produk & kecamatan tujuan pembeli.</li>
                    </ul>`
                },
                {
                    id: 2,
                    question: 'Metode pembayaran apa saja yang tersedia?',
                    answer: `<p class="mb-3">Kami mendukung berbagai metode via Payment Gateway:</p>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><span>🏦</span> Transfer Bank (VA)</div>
                        <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><span>📱</span> E-Wallet (OVO, Dana, GoPay)</div>
                        <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><span>💳</span> Kartu Kredit/Debit</div>
                        <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><span>🏧</span> Retail (Alfamart/Indomaret)</div>
                    </div>`
                },
                {
                    id: 3,
                    question: 'Bagaimana saya tahu jika ada pesanan baru masuk?',
                    answer: `<p>Sistem mengirimkan <strong>notifikasi real-time</strong> via Email dan opsional integrasi WhatsApp Business setiap kali pelanggan menyelesaikan pembayaran. Anda tidak akan melewatkan satu pun pesanan masuk.</p>`
                },
                {
                    id: 4,
                    question: 'Apakah saya bisa mengelola stok dan produk sendiri?',
                    answer: `<p class="mb-3">Tentu. Anda mendapatkan akses <strong>Dashboard Admin</strong> yang user-friendly untuk:</p>
                    <ul class="space-y-1.5">
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Tambah/edit/hapus produk dan kategori</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Upload foto produk dan atur variasi (ukuran, warna)</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Pantau stok dan set alert stok menipis</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Buat kode promo dan voucher diskon</li>
                    </ul>`
                },
                {
                    id: 5,
                    question: 'Apakah data pelanggan dan transaksi aman?',
                    answer: `<ul class="space-y-3">
                    <li class="flex items-start gap-3"><i class="fa-solid fa-shield-halved text-blue-600 mt-1 shrink-0"></i> <span><strong>SSL Certified:</strong> Enkripsi data pelanggan standar internasional (HTTPS).</span></li>
                    <li class="flex items-start gap-3"><i class="fa-solid fa-user-lock text-blue-600 mt-1 shrink-0"></i> <span><strong>Data Privacy:</strong> Informasi pembeli tidak pernah dibagikan ke pihak luar.</span></li>
                    <li class="flex items-start gap-3"><i class="fa-solid fa-server text-blue-600 mt-1 shrink-0"></i> <span><strong>Backup Rutin:</strong> Data di-backup secara berkala untuk keamanan.</span></li>
                </ul>`
                },
                {
                    id: 6,
                    question: 'Dapatkah saya membuat kupon promo atau diskon?',
                    answer: `<p class="mb-3">Ya. Tersedia fitur manajemen promo lengkap (tersedia di paket Professional ke atas):</p>
                    <ul class="space-y-1.5">
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-tag text-blue-600 text-[10px]"></i> Kode kupon dengan batas pemakaian</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-percent text-blue-600 text-[10px]"></i> Diskon persentase atau nominal tetap</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-truck text-blue-600 text-[10px]"></i> Gratis ongkir dengan syarat minimum pembelian</li>
                    </ul>`
                },
                {
                    id: 7,
                    question: 'Apakah tersedia laporan penjualan otomatis?',
                    answer: `<div class="flex items-start gap-4 bg-blue-50 p-4 rounded-xl">
                    <i class="fa-solid fa-chart-line text-2xl text-blue-600 mt-1 shrink-0"></i>
                    <p>Anda bisa melihat grafik omzet, produk terlaris, dan performa toko langsung di dashboard. Laporan juga bisa diunduh dalam format Excel untuk laporan harian, mingguan, dan bulanan.</p>
                </div>`
                },
                {
                    id: 8,
                    question: 'Bagaimana tampilan produk saya di layar HP?',
                    answer: `<p class="mb-3">Website dioptimalkan dengan <strong>Mobile-First Design</strong> — tampilan dan performa diutamakan untuk pengguna HP terlebih dahulu:</p>
                    <ul class="space-y-1.5">
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Foto produk tampil optimal di semua ukuran layar</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Proses checkout mudah dilakukan dengan satu tangan</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Loading cepat meski koneksi internet tidak stabil</li>
                    </ul>`
                }
            ]
        };
    }
    </script>
    @endpush

</x-layout.app>
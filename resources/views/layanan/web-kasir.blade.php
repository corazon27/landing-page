<x-layout.app>

    @php
    $title = 'Jasa Pembuatan Website Toko Online & Kasir Digital (POS) | Cakra Inovasi Digital';
    $metaDescription = 'Solusi sistem kasir digital (POS) dan toko online untuk UMKM. Kelola stok, transaksi QRIS, dan
    laporan penjualan real-time dari HP. Cakra Inovasi Digital, Magelang.';
    $metaKeywords = 'website toko online, sistem kasir digital, POS UMKM, manajemen stok, QRIS kasir, web developer
    Magelang, Jawa Tengah';
    $ogType = 'website';
    $breadcrumbs = [
    ['name' => 'Layanan', 'url' => url('/layanan')],
    ['name' => 'Website Toko Online / POS', 'url' => url('/layanan/web-kasir')],
    ];
    @endphp

    @php
    $faqsData = [
    ['question' => 'Bagaimana sistem pembayaran QRIS di toko saya?', 'answer' => 'Integrasi Payment Gateway resmi
    memungkinkan QRIS Dinamis: kode QR muncul otomatis di kasir sesuai nominal belanja. Status transaksi otomatis
    berubah jadi Lunas tanpa cek mutasi manual.'],
    ['question' => 'Apakah data penjualan dan stok saya aman?', 'answer' => 'Ya. Seluruh data dicadangkan harian secara
    otomatis dengan enkripsi SSL penuh antara toko dan server.'],
    ['question' => 'Bagaimana jika saya atau karyawan kesulitan menggunakannya?', 'answer' => 'Kami menyediakan video
    tutorial, layanan konsultasi teknis, dan buku panduan operasional PDF untuk memastikan tim Anda mahir menggunakan
    sistem.'],
    ['question' => 'Apakah sistem ini bisa digunakan di HP atau Tablet?', 'answer' => 'Sangat bisa. Website POS ini
    dibangun responsif dan mendukung Android, iOS, tablet, hingga PC kasir.'],
    ['question' => 'Dapatkah sistem mengelola banyak cabang (Multi-outlet)?', 'answer' => 'Ya. Anda dapat memantau stok
    dan laporan keuangan dari berbagai cabang dalam satu dashboard admin terpusat.'],
    ['question' => 'Apakah stok barang otomatis berkurang saat ada penjualan?', 'answer' => 'Benar. Setiap transaksi
    memotong stok secara real-time, dan sistem memberi peringatan jika stok mendekati batas minimum.'],
    ['question' => 'Apakah saya bisa menarik laporan keuangan bulanan?', 'answer' => 'Tentu. Sistem menyediakan laporan
    otomatis: penjualan harian, laba rugi, hingga analisis produk terlaris.'],
    ['question' => 'Bisa hubungkan dengan alat kasir yang sudah saya punya?', 'answer' => 'Sistem kami mendukung barcode
    scanner, cash drawer, dan printer struk thermal Bluetooth maupun USB.'],
    ['question' => 'Berapa lama waktu pengerjaannya?', 'answer' => 'Untuk sistem POS dengan fitur standar hingga
    integrasi API, waktu pengerjaan berkisar 14 sampai 21 hari kerja.'],
    ];
    @endphp

    @push('schema')
    <x-faq-schema :faqs="$faqsData" />
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "{{ url('/layanan/web-kasir') }}/#service",
        "name": "Jasa Pembuatan Website Toko Online & Kasir Digital (POS)",
        "description": "Solusi sistem kasir digital POS dan toko online untuk UMKM. Kelola stok, transaksi QRIS, dan laporan penjualan real-time dari HP.",
        "provider": {
            "@id": "{{ url('/') }}/#business"
        },
        "areaServed": {
            "@type": "Country",
            "name": "Indonesia"
        },
        "serviceType": "Pembuatan Website Toko Online dan Sistem Kasir POS",
        "url": "{{ url('/layanan/web-kasir') }}"
    }
    </script>
    @endpush


    {{-- SECTION 1: HERO --}}
    <section class="pt-32 pb-20 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">

            <div class="max-w-6xl mx-auto text-center mb-10">
                <x-breadcrumb :items="[['name' => 'Layanan', 'url' => url('/layanan')]]"
                    current="Website Kasir Digital / POS" />
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <div class="text-left space-y-6" data-aos="fade-right">
                    <span
                        class="inline-block px-4 py-1.5 rounded-full bg-blue-50 text-blue-600 text-xs font-semibold uppercase tracking-wider">
                        Sistem POS & Inventaris
                    </span>

                    <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 leading-tight">
                        Kelola Toko Jadi <span class="text-blue-600">Lebih Ringan</span> &amp; Otomatis
                    </h1>

                    <p class="text-lg text-slate-600 leading-relaxed max-w-xl">
                        Tinggalkan cara manual yang melelahkan. Saatnya punya sistem kasir digital yang bekerja untuk
                        Anda — pantau stok, transaksi QRIS, dan laporan laba secara otomatis 24 jam nonstop.
                    </p>

                    <div class="flex flex-wrap gap-4 pt-2">
                        <a href="https://wa.me/6285865405330?text=Halo%20Cakra%2C%20saya%20ingin%20konsultasi%20sistem%20kasir%20digital%20untuk%20toko%20saya."
                            target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center gap-2 px-8 py-4 rounded-2xl bg-blue-600 text-white font-bold hover:bg-blue-700 transition-all shadow-lg shadow-blue-200">
                            <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                            Konsultasi Gratis
                        </a>
                        <a href="/layanan/web-kasir#fitur"
                            class="inline-flex items-center gap-2 px-8 py-4 rounded-2xl border-2 border-slate-200 text-slate-700 font-bold hover:bg-slate-50 transition-all">
                            Lihat Fitur
                            <i class="fa-solid fa-arrow-down text-sm" aria-hidden="true"></i>
                        </a>
                    </div>

                    <div class="flex flex-wrap gap-5 text-sm text-slate-500 pt-2">
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-qrcode text-blue-500"
                                aria-hidden="true"></i> Support QRIS</span>
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-mobile-screen text-blue-500"
                                aria-hidden="true"></i> Akses dari HP</span>
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-hard-drive text-blue-500"
                                aria-hidden="true"></i> Backup Otomatis</span>
                    </div>
                </div>

                {{-- HERO MOCKUP: Live POS Dashboard --}}
                <div class="relative" data-aos="fade-left">
                    <div class="absolute -inset-4 bg-gradient-to-br from-blue-50 via-indigo-50 to-slate-50 rounded-[3rem] blur-2xl opacity-80"
                        aria-hidden="true"></div>

                    <div class="relative bg-white rounded-[2rem] shadow-2xl border border-slate-100 overflow-hidden">

                        {{-- Titlebar --}}
                        <div class="bg-slate-800 px-5 py-3 flex items-center gap-2">
                            <div class="flex gap-1.5">
                                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                                <div class="w-3 h-3 rounded-full bg-amber-400"></div>
                                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                            </div>
                            <div
                                class="flex-1 mx-4 bg-slate-700 rounded-md py-1 px-3 text-[10px] text-slate-400 text-center">
                                <i class="fa-solid fa-lock text-[8px] mr-1"></i> dashboard.toko-anda.com/kasir
                            </div>
                            <div class="flex items-center gap-1">
                                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                                <span class="text-[9px] text-emerald-400 font-bold">LIVE</span>
                            </div>
                        </div>

                        {{-- Dashboard layout --}}
                        <div class="p-4 bg-slate-50 space-y-3">

                            {{-- Stats row --}}
                            <div class="grid grid-cols-3 gap-2">
                                <div class="bg-white rounded-xl p-3 border border-slate-100 shadow-sm">
                                    <p class="text-[9px] text-slate-400 uppercase font-bold tracking-wider mb-1">Omzet
                                        Hari Ini</p>
                                    <p class="text-sm font-extrabold text-slate-900">Rp 2,4jt</p>
                                    <p class="text-[9px] text-emerald-600 font-semibold mt-0.5">↑ 18% vs kemarin</p>
                                </div>
                                <div class="bg-white rounded-xl p-3 border border-slate-100 shadow-sm">
                                    <p class="text-[9px] text-slate-400 uppercase font-bold tracking-wider mb-1">
                                        Transaksi</p>
                                    <p class="text-sm font-extrabold text-slate-900">47</p>
                                    <p class="text-[9px] text-blue-600 font-semibold mt-0.5">3 pending</p>
                                </div>
                                <div class="bg-white rounded-xl p-3 border border-slate-100 shadow-sm">
                                    <p class="text-[9px] text-slate-400 uppercase font-bold tracking-wider mb-1">Stok
                                        Rendah</p>
                                    <p class="text-sm font-extrabold text-orange-500">5 item</p>
                                    <p class="text-[9px] text-orange-500 font-semibold mt-0.5">Perlu restock</p>
                                </div>
                            </div>

                            {{-- Chart --}}
                            <div class="bg-white rounded-xl p-3 border border-slate-100 shadow-sm">
                                <div class="flex items-center justify-between mb-2">
                                    <p class="text-[9px] text-slate-500 font-bold uppercase tracking-wider">Penjualan
                                        Minggu Ini</p>
                                    <span
                                        class="text-[9px] text-blue-600 font-bold bg-blue-50 px-2 py-0.5 rounded-full">7
                                        Hari</span>
                                </div>
                                <div class="flex items-end gap-1.5 h-14">
                                    @php
                                    $bars = [
                                    ['h' => '45%', 'color' => 'bg-slate-200'],
                                    ['h' => '60%', 'color' => 'bg-slate-200'],
                                    ['h' => '40%', 'color' => 'bg-slate-200'],
                                    ['h' => '75%', 'color' => 'bg-blue-300'],
                                    ['h' => '55%', 'color' => 'bg-blue-400'],
                                    ['h' => '85%', 'color' => 'bg-blue-500'],
                                    ['h' => '100%', 'color' => 'bg-blue-600 shadow-lg shadow-blue-100'],
                                    ];
                                    @endphp
                                    @foreach($bars as $bar)
                                    <div class="flex-1 {{ $bar['color'] }} rounded-t-md transition-all"
                                        style="height: {{ $bar['h'] }}"></div>
                                    @endforeach
                                </div>
                                <div class="flex justify-between mt-1">
                                    @foreach(['Sen','Sel','Rab','Kam','Jum','Sab','Min'] as $d)
                                    <span class="flex-1 text-center text-[8px] text-slate-400">{{ $d }}</span>
                                    @endforeach
                                </div>
                            </div>

                            {{-- Transaction feed --}}
                            <div class="bg-white rounded-xl p-3 border border-slate-100 shadow-sm">
                                <p class="text-[9px] text-slate-500 font-bold uppercase tracking-wider mb-2">Transaksi
                                    Terbaru</p>
                                <div class="space-y-1.5">
                                    @php
                                    $txns = [
                                    ['name' => 'Kopi Susu Gula Aren', 'time' => '13:42', 'amount' => 'Rp 25.000',
                                    'badge' => 'LUNAS', 'color' => 'bg-emerald-100 text-emerald-700'],
                                    ['name' => 'Nasi Goreng Spesial', 'time' => '13:38', 'amount' => 'Rp 18.000',
                                    'badge' => 'LUNAS', 'color' => 'bg-emerald-100 text-emerald-700'],
                                    ['name' => 'Mie Ayam + Es Teh', 'time' => '13:25', 'amount' => 'Rp 22.000', 'badge'
                                    => 'PENDING', 'color' => 'bg-orange-100 text-orange-700'],
                                    ];
                                    @endphp
                                    @foreach($txns as $txn)
                                    <div
                                        class="flex items-center justify-between py-1.5 border-b border-slate-50 last:border-0">
                                        <div class="flex items-center gap-2">
                                            <div class="w-5 h-5 rounded-lg bg-blue-50 flex items-center justify-center">
                                                <i class="fa-solid fa-receipt text-blue-400 text-[8px]"
                                                    aria-hidden="true"></i>
                                            </div>
                                            <div>
                                                <p class="text-[9px] font-semibold text-slate-700">{{ $txn['name'] }}
                                                </p>
                                                <p class="text-[8px] text-slate-400">{{ $txn['time'] }}</p>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-[9px] font-bold text-slate-900">{{ $txn['amount'] }}</p>
                                            <span
                                                class="text-[7px] font-bold px-1.5 py-0.5 rounded-full {{ $txn['color'] }}">{{ $txn['badge'] }}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>

                        {{-- Bottom action bar --}}
                        <div class="bg-white border-t border-slate-100 px-4 py-3 flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <div class="w-6 h-6 rounded-lg bg-blue-600 flex items-center justify-center">
                                    <i class="fa-solid fa-cash-register text-white text-[9px]" aria-hidden="true"></i>
                                </div>
                                <span class="text-[10px] font-bold text-slate-700">Kasir Aktif</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                                <span class="text-[9px] text-slate-500">Sinkronisasi real-time</span>
                            </div>
                            <div class="text-[9px] font-bold text-blue-600 bg-blue-50 px-2.5 py-1 rounded-full">
                                <i class="fa-solid fa-qrcode mr-1" aria-hidden="true"></i>QRIS ON
                            </div>
                        </div>

                    </div>

                    {{-- Floating badge --}}
                    <div
                        class="absolute -bottom-4 -left-4 bg-white border border-slate-100 shadow-xl rounded-2xl px-4 py-3 flex items-center gap-3 hidden md:flex">
                        <div
                            class="w-8 h-8 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center text-sm">
                            <i class="fa-solid fa-arrow-trend-up" aria-hidden="true"></i>
                        </div>
                        <div>
                            <p class="text-[9px] text-slate-400 font-bold uppercase tracking-widest">Stok Update</p>
                            <p class="text-xs font-bold text-slate-800">Otomatis setiap transaksi</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>


    {{-- SECTION 2: PERBANDINGAN --}}
    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">
                    Kenapa Harus Pindah ke Sistem Digital?
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto">
                    Lihat perbedaan signifikan antara mengelola toko secara konvensional dibandingkan dengan sistem POS
                    modern.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">

                <div class="bg-white p-8 rounded-3xl border border-red-100 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group"
                    data-aos="fade-right">
                    <div class="absolute -right-4 -top-4 opacity-5 group-hover:rotate-12 transition-transform duration-500"
                        aria-hidden="true">
                        <i class="fa-solid fa-book text-9xl text-red-600"></i>
                    </div>
                    <div class="relative z-10">
                        <div class="w-12 h-12 bg-red-50 rounded-2xl flex items-center justify-center mb-6">
                            <i class="fa-solid fa-xmark text-red-500 text-xl" aria-hidden="true"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-6">Cara Manual / Konvensional</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300" aria-hidden="true"></i>
                                <p class="text-slate-600 text-sm"><strong>Catat buku melelahkan:</strong> Menghabiskan
                                    waktu berjam-jam setiap hari hanya untuk rekapitulasi data penjualan.</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300" aria-hidden="true"></i>
                                <p class="text-slate-600 text-sm"><strong>Sering salah hitung:</strong> Risiko human
                                    error sangat tinggi dalam perhitungan laba dan stok.</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300" aria-hidden="true"></i>
                                <p class="text-slate-600 text-sm"><strong>Stok berantakan:</strong> Sulit memantau
                                    ketersediaan barang secara akurat di berbagai tempat.</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300" aria-hidden="true"></i>
                                <p class="text-slate-600 text-sm font-medium text-red-500 italic">Perlu banyak waktu dan
                                    karyawan hanya untuk kelola produk dan laporan.</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-blue-600 p-8 rounded-3xl border border-blue-500 shadow-xl shadow-blue-100 relative overflow-hidden group"
                    data-aos="fade-left">
                    <div class="absolute -right-4 -top-4 opacity-10 group-hover:rotate-12 transition-transform duration-500"
                        aria-hidden="true">
                        <i class="fa-solid fa-rocket text-9xl text-white"></i>
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-12 h-12 bg-blue-500 rounded-2xl flex items-center justify-center mb-6 border border-blue-400">
                            <i class="fa-solid fa-check text-white text-xl" aria-hidden="true"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-6">Pakai Sistem Kasir Digital</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 text-sm" aria-hidden="true"></i>
                                <p class="text-blue-50 text-sm"><strong>Semua tercatat rapi:</strong> Data transaksi
                                    tersimpan otomatis dan terorganisir dengan sempurna.</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 text-sm" aria-hidden="true"></i>
                                <p class="text-blue-50 text-sm"><strong>Laporan real-time:</strong> Pantau performa
                                    penjualan dan profit detik ini juga tanpa menunggu rekap.</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 text-sm" aria-hidden="true"></i>
                                <p class="text-blue-50 text-sm"><strong>Bisa dipantau dari HP:</strong> Kontrol bisnis
                                    Anda kapan saja dan dari mana saja secara remote.</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 text-sm" aria-hidden="true"></i>
                                <p class="text-blue-50 text-sm font-bold">Sinkronisasi stok otomatis di semua channel
                                    penjualan sekaligus.</p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- SECTION 3: FITUR --}}
    <section id="fitur" class="py-24 bg-white" x-data="{ activeFeature: 1 }">
        <div class="max-w-6xl mx-auto px-6">

            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">
                    Solusi Digital <span class="text-blue-600">All-in-One</span>
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto">
                    Kelola toko online dan kasir fisik Anda dalam satu sistem yang otomatis dan terintegrasi penuh.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

                {{-- Feature Visual --}}
                <div class="lg:sticky lg:top-24" data-aos="fade-right">
                    <div class="bg-white p-5 rounded-[2.5rem] shadow-2xl border border-slate-100 overflow-hidden">
                        <div class="bg-slate-800 rounded-2xl p-5 space-y-4">
                            <div class="flex items-center justify-between">
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Dashboard Toko
                                </p>
                                <span class="flex items-center gap-1 text-[9px] text-emerald-400 font-bold">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>Online
                                </span>
                            </div>

                            <div class="grid grid-cols-2 gap-3">
                                <div class="bg-slate-700/60 rounded-xl p-3">
                                    <p class="text-[9px] text-slate-400 mb-1">Total Produk</p>
                                    <p class="text-lg font-extrabold text-white">248</p>
                                    <div class="mt-1.5 h-1 bg-slate-600 rounded-full">
                                        <div class="h-1 bg-blue-400 rounded-full w-3/4"></div>
                                    </div>
                                </div>
                                <div class="bg-slate-700/60 rounded-xl p-3">
                                    <p class="text-[9px] text-slate-400 mb-1">Omzet Bulan Ini</p>
                                    <p class="text-lg font-extrabold text-emerald-400">Rp 48jt</p>
                                    <p class="text-[9px] text-emerald-500 mt-1">↑ 23% bulan lalu</p>
                                </div>
                            </div>

                            <div class="bg-slate-700/60 rounded-xl p-3 space-y-2">
                                <p class="text-[9px] text-slate-400 font-bold uppercase tracking-wider">Stok Kritis</p>
                                @php
                                $stocks = [
                                ['name' => 'Kopi Arabika 250g', 'pct' => '15%', 'color' => 'bg-red-500', 'label' => '3
                                pcs'],
                                ['name' => 'Gula Aren 500g', 'pct' => '28%', 'color' => 'bg-orange-400', 'label' => '7
                                pcs'],
                                ['name' => 'Susu UHT 1L', 'pct' => '42%', 'color' => 'bg-yellow-400', 'label' => '12
                                pcs'],
                                ];
                                @endphp
                                @foreach($stocks as $stock)
                                <div>
                                    <div class="flex justify-between mb-0.5">
                                        <span class="text-[9px] text-slate-300">{{ $stock['name'] }}</span>
                                        <span class="text-[9px] font-bold text-slate-400">{{ $stock['label'] }}</span>
                                    </div>
                                    <div class="h-1.5 bg-slate-600 rounded-full">
                                        <div class="h-1.5 {{ $stock['color'] }} rounded-full"
                                            style="width: {{ $stock['pct'] }}"></div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <div class="grid grid-cols-3 gap-2">
                                @php
                                $actions = [
                                ['icon' => 'fa-cash-register', 'label' => 'Kasir', 'color' => 'text-blue-400'],
                                ['icon' => 'fa-boxes-stacked', 'label' => 'Stok', 'color' => 'text-emerald-400'],
                                ['icon' => 'fa-chart-pie', 'label' => 'Laporan','color' => 'text-orange-400'],
                                ];
                                @endphp
                                @foreach($actions as $action)
                                <div class="bg-slate-700/60 rounded-xl p-3 flex flex-col items-center gap-1.5">
                                    <i class="fa-solid {{ $action['icon'] }} {{ $action['color'] }}"
                                        aria-hidden="true"></i>
                                    <span class="text-[9px] text-slate-400 font-medium">{{ $action['label'] }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Feature Accordion --}}
                <div class="space-y-3" data-aos="fade-left">

                    @php
                    $features = [
                    ['id' => 1, 'icon' => 'fa-cash-register', 'title' => 'Sistem Kasir (POS) Digital', 'desc' =>
                    'Transaksi langsung dari HP, tablet, atau komputer. Proses jual beli lebih cepat dan profesional
                    seperti minimarket modern.'],
                    ['id' => 2, 'icon' => 'fa-boxes-stacked', 'title' => 'Stok Otomatis (Omnichannel)', 'desc' =>
                    'Kelola produk dan stok dalam satu dashboard pusat. Stok terupdate otomatis di web maupun toko fisik
                    secara bersamaan.'],
                    ['id' => 3, 'icon' => 'fa-credit-card', 'title' => 'Pembayaran Online & QRIS', 'desc' => 'Terima
                    pembayaran via Transfer, E-Wallet, hingga QRIS. Verifikasi uang masuk otomatis tanpa cek mutasi
                    manual.'],
                    ['id' => 4, 'icon' => 'fa-chart-pie', 'title' => 'Laporan Penjualan Real-Time', 'desc' => 'Pantau
                    omzet dan keuntungan langsung dari HP. Mengetahui kondisi kesehatan bisnis kapan saja tanpa laporan
                    manual.'],
                    ['id' => 5, 'icon' => 'fa-brands fa-whatsapp', 'title' => 'Integrasi WhatsApp Otomatis', 'desc' =>
                    'Pesanan website langsung masuk ke WhatsApp admin. Closing lebih cepat karena bisa langsung chat
                    pembeli tanpa pindah aplikasi.'],
                    ];
                    @endphp

                    @foreach($features as $feat)
                    <div @click="activeFeature = activeFeature === {{ $feat['id'] }} ? null : {{ $feat['id'] }}"
                        class="rounded-2xl cursor-pointer transition-all duration-300 border overflow-hidden"
                        :class="activeFeature === {{ $feat['id'] }} ? 'bg-blue-600 text-white shadow-xl shadow-blue-200 border-transparent' : 'bg-white hover:shadow-md text-slate-800 border-slate-100'">
                        <div class="p-5">
                            <h3 class="font-bold flex items-center justify-between text-sm md:text-base">
                                <span class="flex items-center gap-3">
                                    <i class="{{ $feat['icon'] }}"
                                        :class="activeFeature === {{ $feat['id'] }} ? 'text-white' : 'text-blue-600'"
                                        aria-hidden="true"></i>
                                    {{ $feat['title'] }}
                                </span>
                                <i class="fa-solid fa-chevron-right text-[10px] transition-transform flex-shrink-0"
                                    :class="activeFeature === {{ $feat['id'] }} ? 'rotate-90' : ''"
                                    aria-hidden="true"></i>
                            </h3>
                            <div x-show="activeFeature === {{ $feat['id'] }}" x-collapse>
                                <p class="text-sm mt-3 opacity-90 leading-relaxed">{{ $feat['desc'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>


    {{-- SECTION 4: PAKET HARGA --}}
    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">
                    Skema Langganan <span class="text-blue-600">Sesuai Kebutuhan</span>
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto">
                    Mulai digitalisasi operasional toko Anda dengan biaya investasi yang fleksibel dan terjangkau.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 items-stretch">

                @php
                $plans = [
                [
                'title' => 'Skema per Transaksi/Nota',
                'price' => 'Rp200',
                'unit' => 'Per transaksi/nota',
                'desc' => 'Paling untung! Biaya transaksi bisa dibebankan ke pelanggan Anda.',
                'note' => 'Gratis kertas thermal minimal biaya Rp400/transaksi.',
                'badge' => 'Favorit',
                'accent' => 'green',
                'cta' => 'Pilih Skema',
                ],
                [
                'title' => 'Langganan Versi Handphone',
                'price' => 'Rp125.000',
                'unit' => 'Per bulan, per outlet',
                'desc' => 'Tampilan praktis, fitur dasar kasir. Cocok untuk usaha kecil/UMKM.',
                'note' => 'Langganan 12 bulan, gratis 2 bulan tambahan.',
                'badge' => null,
                'accent' => 'slate',
                'cta' => 'Pilih Paket',
                ],
                [
                'title' => 'Langganan Versi Tablet',
                'price' => 'Rp250.000',
                'unit' => 'Per bulan, per outlet',
                'desc' => 'Tampilan lengkap, fitur full access. Ideal buat restoran & kafe.',
                'note' => 'Langganan 12 bulan, hemat Rp300ribu.',
                'badge' => 'Paling Laris',
                'accent' => 'green',
                'cta' => 'Pilih Paket',
                ],
                [
                'title' => 'Langganan Versi Web',
                'price' => 'Rp250.000',
                'unit' => 'Per bulan, per outlet',
                'desc' => 'Tampilan simpel, cocok buat operasional dari laptop/PC kasir.',
                'note' => 'Langganan 12 bulan, hemat Rp300ribu.',
                'badge' => null,
                'accent' => 'slate',
                'cta' => 'Pilih Paket',
                ],
                ];
                @endphp

                @foreach($plans as $i => $plan)
                <article
                    class="bg-white p-7 rounded-3xl flex flex-col relative overflow-hidden transition-all
                            {{ $plan['accent'] === 'green' ? 'border-2 border-green-500 shadow-lg' : 'border border-slate-200 shadow-sm hover:border-blue-200 hover:shadow-md' }}"
                    data-aos="fade-up" data-aos-delay="{{ $i * 80 }}">

                    @if($plan['badge'])
                    <div
                        class="absolute top-0 right-0 bg-green-500 text-white text-[10px] px-5 py-1.5 rounded-bl-xl font-bold uppercase tracking-wider">
                        {{ $plan['badge'] }}
                    </div>
                    @endif

                    <div class="mb-6 text-center {{ $plan['badge'] ? 'mt-4' : '' }}">
                        <h3 class="text-sm font-bold text-slate-800 mb-4 leading-snug">{{ $plan['title'] }}</h3>
                        <p class="text-slate-400 text-xs mb-1">Mulai dari</p>
                        <p
                            class="text-3xl font-extrabold {{ $plan['accent'] === 'green' ? 'text-green-600' : 'text-slate-900' }}">
                            {{ $plan['price'] }}
                        </p>
                        <p
                            class="text-[11px] {{ $plan['accent'] === 'green' ? 'text-green-700' : 'text-slate-500' }} font-medium mt-1">
                            {{ $plan['unit'] }}
                        </p>
                    </div>

                    <p class="text-sm text-slate-600 text-center mb-5 flex-grow leading-relaxed">
                        {{ $plan['desc'] }}
                    </p>

                    <div class="bg-blue-50 p-3 rounded-xl flex items-start gap-2 mb-5">
                        <i class="fa-solid fa-circle-info text-blue-500 mt-0.5 flex-shrink-0 text-xs"
                            aria-hidden="true"></i>
                        <p class="text-[10px] text-blue-700 leading-snug">{{ $plan['note'] }}</p>
                    </div>

                    <a href="https://wa.me/6285865405330?text=Halo%20Cakra%2C%20saya%20tertarik%20dengan%20paket%20{{ urlencode($plan['title']) }}"
                        target="_blank" rel="noopener noreferrer"
                        class="block w-full py-3 px-4 text-center rounded-xl font-bold transition-all text-sm
                          {{ $plan['accent'] === 'green' ? 'bg-green-500 text-white hover:bg-green-600' : 'border-2 border-slate-800 text-slate-800 hover:bg-slate-800 hover:text-white' }}">
                        {{ $plan['cta'] }}
                    </a>

                </article>
                @endforeach

            </div>

            <div class="mt-10 text-center" data-aos="fade-up">
                <a href="{{ url('/fitur-web-kasir') }}"
                    class="inline-flex items-center gap-2 px-8 py-3 bg-white border border-slate-200 hover:border-blue-300 hover:bg-blue-50 text-slate-700 font-semibold rounded-full transition-all text-sm shadow-sm">
                    Lihat perbandingan fitur &amp; harga lengkap
                    <i class="fa-solid fa-chevron-right text-xs" aria-hidden="true"></i>
                </a>
            </div>

        </div>
    </section>


    {{-- SECTION 5: FAQ --}}
    <section class="py-24 bg-white" x-data="faqSection()">
        <div class="max-w-3xl mx-auto px-6">

            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">
                    Pertanyaan Seputar <span class="text-blue-600">Sistem POS Kami</span>
                </h2>
                <p class="text-slate-600">Semua yang perlu Anda ketahui tentang proses kerja sama dan hasil akhir
                    proyek.</p>
            </div>

            <div class="space-y-3" itemscope itemtype="https://schema.org/FAQPage">
                <template x-for="faq in faqs" :key="faq.id">
                    <div class="border border-slate-200 rounded-2xl overflow-hidden shadow-sm transition-all duration-300"
                        :class="selected === faq.id ? 'border-blue-300 ring-1 ring-blue-100' : ''" itemscope
                        itemprop="mainEntity" itemtype="https://schema.org/Question">

                        <button @click="selected !== faq.id ? selected = faq.id : selected = null"
                            class="w-full flex items-center justify-between p-5 text-left bg-white hover:bg-slate-50 transition-colors"
                            :aria-expanded="selected === faq.id">
                            <span class="font-bold text-slate-900 pr-4 text-sm md:text-base"
                                :class="selected === faq.id ? 'text-blue-600' : ''" x-text="faq.question"
                                itemprop="name"></span>
                            <i class="fa-solid fa-chevron-down text-blue-600 transition-transform duration-300 flex-shrink-0"
                                :class="selected === faq.id ? 'rotate-180' : ''" aria-hidden="true"></i>
                        </button>

                        <div class="px-5 pb-5 text-sm text-slate-600 leading-relaxed" x-show="selected === faq.id"
                            x-collapse itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div x-html="faq.answer" itemprop="text"></div>
                        </div>

                    </div>
                </template>
            </div>

            <div class="mt-10 text-center" data-aos="fade-up">
                <p class="text-slate-500 text-sm mb-4">Masih ada pertanyaan lain?</p>
                <a href="https://wa.me/6285865405330?text=Halo%20Cakra%2C%20saya%20ada%20pertanyaan%20seputar%20sistem%20POS%20toko%20digital."
                    target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 bg-emerald-500 text-white px-6 py-3 rounded-xl font-semibold hover:bg-emerald-600 transition text-sm">
                    <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                    Tanya Langsung via WhatsApp
                </a>
            </div>

        </div>
    </section>


    {{-- SECTION 6: CTA + MEETING FORM --}}
    <x-meeting-form title="Siap Membangun Kasir Digital Profesional Anda?"
        subtitle="Jadwalkan konsultasi gratis — diskusikan kebutuhan spesifik bisnis Anda bersama tim kami." />


    @push('scripts')
    <script>
    function faqSection() {
        const answers = {
            1: `<p class="mb-3">Integrasi via Payment Gateway resmi memungkinkan operasional lebih cepat:</p>
            <ul class="space-y-3">
                <li class="flex items-start gap-3"><i class="fa-solid fa-qrcode text-blue-600 mt-1"></i><span><strong>QRIS Dinamis:</strong> Kode QR muncul otomatis di layar kasir sesuai nominal belanja.</span></li>
                <li class="flex items-start gap-3"><i class="fa-solid fa-bell text-blue-600 mt-1"></i><span><strong>Notifikasi Real-time:</strong> Status transaksi otomatis berubah jadi Lunas tanpa cek mutasi manual.</span></li>
            </ul>`,
            2: `<div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                <div class="flex gap-3 p-3 bg-slate-50 rounded-xl"><i class="fa-solid fa-cloud-shield text-blue-600 mt-1"></i><span><strong>Daily Backup:</strong> Data transaksi dicadangkan harian otomatis.</span></div>
                <div class="flex gap-3 p-3 bg-slate-50 rounded-xl"><i class="fa-solid fa-lock text-blue-600 mt-1"></i><span><strong>Enkripsi SSL:</strong> Jalur data antara toko dan server terlindungi.</span></div>
            </div>`,
            3: `<ul class="space-y-2">
                <li class="flex items-center gap-2"><i class="fa-solid fa-video text-blue-500"></i> Video Tutorial fitur kasir & admin.</li>
                <li class="flex items-center gap-2"><i class="fa-solid fa-headset text-blue-500"></i> Konsultasi teknis jika ada kendala.</li>
                <li class="flex items-center gap-2"><i class="fa-solid fa-book text-blue-500"></i> Buku panduan operasional PDF.</li>
            </ul>`,
            4: `<p><strong>Sangat bisa.</strong> Website POS ini dibangun responsif yang mendukung Android, iOS, tablet, hingga PC kasir.</p>`,
            5: `<p>Ya. Anda dapat memantau stok dan laporan keuangan dari berbagai cabang dalam satu dashboard admin terpusat.</p>`,
            6: `<p>Benar. Setiap transaksi memotong stok secara <strong>real-time</strong>, dan sistem memberi peringatan jika stok mencapai batas minimum.</p>`,
            7: `<p>Tentu. Laporan otomatis mencakup penjualan harian, laba rugi, hingga analisis produk terlaris untuk keputusan bisnis Anda.</p>`,
            8: `<p>Sistem kami mendukung <em>barcode scanner</em>, <em>cash drawer</em>, dan printer struk thermal (Bluetooth/USB).</p>`,
            9: `<p>Untuk sistem POS dengan fitur standar hingga integrasi API, waktu pengerjaan berkisar antara <strong>14 sampai 21 hari kerja</strong>.</p>`,
        };

        const rawFaqs = @json($faqsData);
        return {
            selected: null,
            faqs: rawFaqs.map((item, i) => ({
                id: i + 1,
                question: item.question,
                answer: answers[i + 1] ?? `<p>${item.answer}</p>`,
            }))
        };
    }
    </script>
    @endpush

</x-layout.app>
<x-layout.app>

    @php
    $title = 'Jasa Pembuatan Website Toko Online & Kasir Digital (POS) | Cakra Inovasi Digital';
    $metaDescription = 'Solusi sistem kasir digital (POS) dan toko online untuk UMKM. Kelola stok, transaksi QRIS, dan
    laporan penjualan real-time dari HP. Cakra Inovasi Digital, Magelang. Tinggalkan rekap manual! Jasa pembuatan sistem
    Point of Sales (POS) & kasir digital untuk F&B,
    retail, dan jasa. Pantau stok, shift, & omset real-time. Konsultasi gratis!';
    $metaKeywords = 'website toko online, sistem kasir digital, POS UMKM, manajemen stok, QRIS kasir, web developer
    Magelang, Jawa Tengah, jasa pembuatan sistem kasir, web POS indonesia, point of sales custom, aplikasi kasir web,
    software
    kasir umkm, sistem kasir toko, kasir restoran, developer POS indonesia, solusi kasir digital, integrasi pembayaran
    online, laporan penjualan real-time, dashboard kasir online, sistem inventaris toko, manajemen produk digital, web
    kasir responsif, aplikasi kasir berbasis web';
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

                    <div class="flex flex-wrap gap-3 md:gap-5 text-xs md:text-sm text-slate-500">
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-chart-line text-blue-500"
                                aria-hidden="true"></i> Pantau Omset Real-time</span>
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-receipt text-blue-500"
                                aria-hidden="true"></i> Cetak Struk Cepat</span>
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-barcode text-blue-500"
                                aria-hidden="true"></i> Support Barcode</span>
                    </div>

                    {{-- Stats mini — mobile only --}}
                    <div class="grid grid-cols-2 gap-3 lg:hidden">
                        <div class="bg-blue-50 rounded-2xl p-4 text-center border border-blue-100">
                            <p class="text-2xl font-extrabold text-blue-500">Live</p>
                            <p class="text-xs text-slate-500 mt-1">Laporan Omset</p>
                        </div>
                        <div class="bg-emerald-50 rounded-2xl p-4 text-center border border-emerald-100">
                            <p class="text-2xl font-extrabold text-emerald-600">0%</p>
                            <p class="text-xs text-slate-500 mt-1">Selisih Uang</p>
                        </div>
                        <div class="bg-blue-50 rounded-2xl p-4 text-center border border-blue-100">
                            <p class="text-2xl font-extrabold text-blue-600">Fast</p>
                            <p class="text-xs text-slate-500 mt-1">Cetak Struk</p>
                        </div>
                        <div class="bg-amber-50 rounded-2xl p-4 text-center border border-amber-100">
                            <p class="text-2xl font-extrabold text-amber-500">✓</p>
                            <p class="text-xs text-slate-500 mt-1">Akurasi Stok</p>
                        </div>
                    </div>
                </div>

                {{-- HERO MOCKUP: Live POS Dashboard --}}
                <div class="hidden lg:block relative" data-aos="fade-left">

                    <div class="absolute inset-0 bg-gradient-to-br from-blue-100 via-amber-50 to-slate-100 rounded-[3rem] blur-3xl opacity-60 scale-110"
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
                                <span class="text-[10px] text-slate-400 font-mono">pos.toko-anda.com/kasir</span>
                            </div>
                            <div class="w-6 h-6 rounded-full bg-blue-500 flex items-center justify-center">
                                <span class="text-[8px] font-bold text-white">K</span>
                            </div>
                        </div>

                        {{-- Body --}}
                        <div class="p-5 space-y-4">

                            {{-- Stats row --}}
                            <div class="grid grid-cols-3 gap-3">
                                <div class="bg-slate-800/80 rounded-xl p-3.5 border border-slate-700/40">
                                    <p class="text-[9px] text-slate-400 uppercase tracking-wider font-semibold mb-1">
                                        Shift Aktif</p>
                                    <p class="text-lg font-extrabold text-white leading-none">Budi H.</p>
                                    <p class="text-[9px] text-emerald-400 mt-1 flex items-center gap-1"><i
                                            class="fa-solid fa-circle text-[6px]" aria-hidden="true"></i> Kasir 1</p>
                                </div>
                                <div class="bg-slate-800/80 rounded-xl p-3.5 border border-slate-700/40">
                                    <p class="text-[9px] text-slate-400 uppercase tracking-wider font-semibold mb-1">
                                        Transaksi Shift</p>
                                    <p class="text-lg font-extrabold text-white leading-none">42</p>
                                    <p class="text-[9px] text-orange-400 mt-1 flex items-center gap-1"><i
                                            class="fa-solid fa-receipt" aria-hidden="true"></i> Nota tercetak</p>
                                </div>
                                <div class="bg-slate-800/80 rounded-xl p-3.5 border border-slate-700/40">
                                    <p class="text-[9px] text-slate-400 uppercase tracking-wider font-semibold mb-1">
                                        Omset Shift</p>
                                    <p class="text-lg font-extrabold text-white leading-none">Rp 4,2jt</p>
                                    <p class="text-[9px] text-red-400 mt-1">Live Update</p>
                                </div>
                            </div>

                            {{-- Pesanan terbaru / Layar Kasir --}}
                            <div class="bg-slate-800/80 rounded-xl p-4 border border-slate-700/40">
                                <div class="flex items-center justify-between mb-3">
                                    <p class="text-[10px] text-slate-300 font-semibold">Transaksi Terakhir</p>
                                    <span
                                        class="text-[9px] bg-emerald-500/20 text-emerald-400 px-2 py-0.5 rounded-full">Sukses</span>
                                </div>
                                <div class="space-y-2">
                                    @php
                                    $orders = [
                                    ['id'=>'TRX-092','type'=>'Takeaway','product'=>'Kopi Susu Gula Aren
                                    x2','status'=>'Lunas','color'=>'bg-emerald-500/20 text-emerald-400','amount'=>'Rp
                                    44.000'],
                                    ['id'=>'TRX-091','type'=>'Dine-in (M2)','product'=>'Nasi Goreng Spesial
                                    x1','status'=>'Lunas','color'=>'bg-emerald-500/20 text-emerald-400','amount'=>'Rp
                                    35.000'],
                                    ['id'=>'TRX-090','type'=>'Takeaway','product'=>'Roti Bakar Coklat
                                    x3','status'=>'Lunas','color'=>'bg-emerald-500/20 text-emerald-400','amount'=>'Rp
                                    45.000'],
                                    ];
                                    @endphp
                                    @foreach($orders as $order)
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="text-[9px] text-slate-500 font-mono w-12 shrink-0">{{ $order['id'] }}</span>
                                        <div
                                            class="flex-1 flex items-center justify-between bg-slate-700/40 rounded-lg px-3 py-1.5">
                                            <div>
                                                <p class="text-[10px] font-semibold text-slate-200 leading-tight">
                                                    {{ $order['type'] }}</p>
                                                <p class="text-[9px] text-slate-400">{{ $order['product'] }}</p>
                                            </div>
                                            <div class="text-right">
                                                <p class="text-[9px] font-bold text-white">{{ $order['amount'] }}</p>
                                                <span
                                                    class="text-[8px] font-semibold {{ $order['color'] }}">{{ $order['status'] }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            {{-- Stok alert --}}
                            <div class="bg-slate-800/80 rounded-xl border border-slate-700/40 overflow-hidden">
                                <div class="px-4 py-2.5 border-b border-slate-700/40 flex items-center justify-between">
                                    <p class="text-[10px] text-slate-300 font-semibold">Peringatan Stok Gudang</p>
                                    <span class="text-[9px] text-amber-400">2 Item Menipis</span>
                                </div>
                                @php
                                $stocks = [
                                ['product'=>'Biji Kopi Arabica','stok'=>'0.5 Kg','color'=>'text-red-400'],
                                ['product'=>'Gula Aren Cair','stok'=>'2 Botol','color'=>'text-amber-400'],
                                ];
                                @endphp
                                @foreach($stocks as $s)
                                <div
                                    class="px-4 py-2.5 flex items-center justify-between border-b border-slate-700/20 last:border-0">
                                    <p class="text-[10px] text-slate-300">{{ $s['product'] }}</p>
                                    <span class="text-[10px] font-bold {{ $s['color'] }}">Sisa {{ $s['stok'] }}</span>
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
                            <i class="fa-solid fa-print text-sm"></i>
                        </div>
                        <div>
                            <p class="text-[9px] text-slate-400 uppercase font-bold tracking-widest">Transaksi Sukses
                            </p>
                            <p class="text-sm font-extrabold text-slate-800">Mencetak Struk...</p>
                        </div>
                    </div>
                    <div class="absolute -top-3 -right-3 bg-blue-500 text-white rounded-xl shadow-lg px-3 py-2 flex items-center gap-2 z-20"
                        aria-hidden="true">
                        <i class="fa-solid fa-qrcode text-white text-sm"></i>
                        <span class="text-[10px] font-bold">QRIS Terverifikasi</span>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- SECTION 2: PERBANDINGAN --}}
    <section class="py-14 md:py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-5 md:px-6">
            <div class="text-center mb-10 md:mb-16" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Masih Pakai Buku Nota & Kalkulator?
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-sm md:text-base">
                    Kasir manual membuat bisnis lambat, rentan kebocoran dana, dan menyulitkan Anda sebagai owner untuk
                    mengecek performa toko saat sedang tidak berada di tempat.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 items-stretch">

                <div class="bg-white p-5 md:p-8 rounded-3xl border border-red-100 shadow-sm relative overflow-hidden group"
                    data-aos="fade-right">
                    <div class="absolute -right-4 -top-4 opacity-5 group-hover:rotate-12 transition-transform duration-500"
                        aria-hidden="true">
                        <i class="fa-solid fa-book-open text-9xl text-red-600"></i>
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-11 md:w-12 h-11 md:h-12 bg-red-50 rounded-2xl flex items-center justify-center mb-4 md:mb-5">
                            <i class="fa-solid fa-xmark text-red-500 text-lg md:text-xl" aria-hidden="true"></i>
                        </div>
                        <h3 class="text-base md:text-xl font-bold text-slate-900 mb-4 md:mb-5">Kasir Manual & Buku Tulis
                        </h3>
                        <ul class="space-y-3 md:space-y-4">
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Laporan lambat & rawan salah:</strong> Karyawan harus merekap nota secara
                                    manual di akhir hari, sangat rentan *human error* dan manipulasi.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Stok barang tidak terkontrol:</strong> Anda tidak pernah tahu pasti jumlah
                                    barang gudang dan rak tanpa harus menghitung fisiknya langsung.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Tidak bisa pantau dari jauh:</strong> Owner wajib berada di toko untuk
                                    mengetahui berapa pendapatan hari ini.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-red-500 italic font-medium">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                Pelayanan kasir sangat lambat saat jam sibuk, membuat antrean panjang pelanggan tidak
                                sabar.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-blue-500 p-5 md:p-8 rounded-3xl shadow-xl shadow-blue-100 relative overflow-hidden group"
                    data-aos="fade-left">
                    <div class="absolute -right-4 -top-4 opacity-10 group-hover:rotate-12 transition-transform duration-500"
                        aria-hidden="true">
                        <i class="fa-solid fa-desktop text-9xl text-white"></i>
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-11 md:w-12 h-11 md:h-12 bg-blue-400 rounded-2xl flex items-center justify-center mb-4 md:mb-5 border border-blue-300">
                            <i class="fa-solid fa-check text-white text-lg md:text-xl" aria-hidden="true"></i>
                        </div>
                        <h3 class="text-base md:text-xl font-bold text-white mb-4 md:mb-5">Dengan Sistem POS Digital
                        </h3>
                        <ul class="space-y-3 md:space-y-4">
                            <li class="flex items-start gap-3 text-sm text-blue-50">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 shrink-0" aria-hidden="true"></i>
                                <p><strong>Rekap instan tanpa selisih:</strong> Saat tutup shift, laporan uang fisik vs
                                    sistem akan otomatis tercetak, mencegah kebocoran dana.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-blue-50">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 shrink-0" aria-hidden="true"></i>
                                <p><strong>Manajemen stok otomatis (Auto-sync):</strong> Stok gudang/rak berkurang
                                    seketika setiap struk belanja dicetak.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-blue-50">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 shrink-0" aria-hidden="true"></i>
                                <p><strong>Owner pantau dari HP (Real-time):</strong> Anda bisa ngopi di rumah sambil
                                    memantau penjualan seluruh cabang tanpa harus datang.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-white font-bold">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 shrink-0" aria-hidden="true"></i>
                                Pelayanan 5x lebih cepat dengan scan barcode & cetak struk instan. Pelanggan senang,
                                antrean lancar.
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
                    class="inline-block bg-blue-50 text-blue-700 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                    Sistem Custom Yang Fleksibel
                </span>
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Sistem Kasir untuk Berbagai Bisnis
                </h2>
                <p class="text-slate-500 max-w-2xl mx-auto text-sm md:text-base">
                    Sistem berbasis web memungkinkan kami menyesuaikan fitur kasir agar pas dengan alur bisnis spesifik
                    Anda.
                </p>
            </div>

            @php
            $useCases = [
            ['icon' => 'fa-solid fa-store', 'color' => 'blue', 'label' => 'Toko Retail & Minimarket', 'desc' =>
            'Dukungan scan barcode cepat, manajemen ribuan SKU, dan opname stok fisik yang mudah.'],
            ['icon' => 'fa-solid fa-mug-hot', 'color' => 'emerald','label' => 'Cafe & Coffee Shop', 'desc' =>
            'Pencatatan varian menu (ukuran, less sugar), manajemen meja, dan sistem split bill.'],
            ['icon' => 'fa-solid fa-utensils', 'color' => 'red', 'label' => 'Restoran & F&B', 'desc' => 'Fitur Kitchen
            Display System (KDS), perhitungan bahan baku (resep), dan take-away/dine-in.'],
            ['icon' => 'fa-solid fa-scissors', 'color' => 'pink', 'label' => 'Salon & Barbershop', 'desc' => 'Pencatatan
            komisi karyawan/kapster otomatis per transaksi dan database pelanggan.'],
            ['icon' => 'fa-solid fa-car', 'color' => 'blue', 'label' => 'Bengkel & Cuci Mobil', 'desc' => 'Gabungan
            penjualan sparepart, biaya jasa mekanik, dan estimasi waktu selesai pengerjaan.'],
            ['icon' => 'fa-solid fa-pills', 'color' => 'amber', 'label' => 'Apotek & Klinik', 'desc' => 'Manajemen
            tanggal kadaluarsa (expired date), batch obat, dan sinkronisasi resep.'],
            ['icon' => 'fa-solid fa-shirt', 'color' => 'indigo', 'label' => 'Toko Baju & Butik', 'desc' => 'Manajemen
            variasi warna & ukuran, retur barang, serta program membership/diskon.'],
            ['icon' => 'fa-solid fa-network-wired', 'color' => 'violet', 'label' => 'Franchise / Multi-Cabang', 'desc'
            => 'Laporan pusat konsolidasi, mutasi barang antar cabang, dan kontrol harga terpusat.'],
            ];

            $uc_colors = [
            'blue' => ['bg' => 'bg-blue-50', 'icon' => 'text-blue-600', 'border' => 'border-blue-100', 'hover'
            => 'hover:border-blue-300'],
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
                <p class="text-slate-500 text-sm mb-3">Bisnis Anda memiliki alur operasional yang unik?</p>
                <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20konsultasi%20sistem%20kasir%20custom%20untuk%20bisnis%20saya."
                    target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 text-blue-500 font-semibold hover:underline underline-offset-4 transition text-sm">
                    Mari diskusikan, kami bisa membuatkan fitur secara custom
                    <i class="fa-solid fa-arrow-right text-xs" aria-hidden="true"></i>
                </a>
            </div>

        </div>
    </section>


    {{-- SECTION 3: FITUR --}}
    <section id="fitur" class="py-24 bg-slate-50" x-data="{ activeFeature: 1 }">
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
                                ['name' => 'Gula Aren 500g', 'pct' => '28%', 'color' => 'bg-blue-400', 'label' => '7
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
                                ['icon' => 'fa-chart-pie', 'label' => 'Laporan','color' => 'text-blue-400'],
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
                    [
                    'id' => 1,
                    'icon' => 'fa-solid fa-cash-register', // Menambahkan fa-solid
                    'title' => 'Sistem Kasir (POS) Digital',
                    'desc' => 'Transaksi langsung dari HP, tablet, atau komputer. Proses jual beli lebih cepat dan
                    profesional seperti minimarket modern.'
                    ],
                    [
                    'id' => 2,
                    'icon' => 'fa-solid fa-boxes-stacked',
                    'title' => 'Stok Otomatis (Omnichannel)',
                    'desc' => 'Kelola produk dan stok dalam satu dashboard pusat. Stok terupdate otomatis di web maupun
                    toko fisik secara bersamaan.'
                    ],
                    [
                    'id' => 3,
                    'icon' => 'fa-solid fa-qrcode', // Lebih pas untuk QRIS daripada fa-credit-card
                    'title' => 'Pembayaran Online & QRIS',
                    'desc' => 'Terima pembayaran via Transfer, E-Wallet, hingga QRIS. Verifikasi uang masuk otomatis
                    tanpa cek mutasi manual.'
                    ],
                    [
                    'id' => 4,
                    'icon' => 'fa-solid fa-chart-column', // Memberikan kesan dashboard keuangan yang tumbuh
                    'title' => 'Laporan Penjualan Real-Time',
                    'desc' => 'Pantau omzet dan keuntungan langsung dari HP. Mengetahui kondisi kesehatan bisnis kapan
                    saja tanpa laporan manual.'
                    ],
                    [
                    'id' => 5,
                    'icon' => 'fa-brands fa-whatsapp',
                    'title' => 'Integrasi WhatsApp Otomatis',
                    'desc' => 'Pesanan website langsung masuk ke WhatsApp admin. Closing lebih cepat karena bisa
                    langsung chat pembeli tanpa pindah aplikasi.'
                    ],
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
    <section class="py-24 bg-white-50">
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
    <!-- <section class="py-24 bg-slate-50" x-data="faqSection()">
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
    </section> -->

    <section id="faq" class="py-14 md:py-24 bg-slate-50" x-data="faqPOS()">
        <div class="max-w-3xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-12" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Pertanyaan Seputar <span class="text-blue-600">Sistem POS Kami</span>
                </h2>
                <p class="text-slate-600 text-sm md:text-base">Semua yang perlu Anda ketahui sebelum memulai proyek
                    bersama kami.</p>
            </div>

            <div class="space-y-2.5 md:space-y-3" data-aos="fade-up" data-aos-delay="100" itemscope
                itemtype="https://schema.org/FAQPage">

                <template x-for="(faq, index) in faqs" :key="faq.id">
                    <div class="faq-pos-item group relative bg-white rounded-2xl overflow-hidden shadow-sm border transition-all duration-300"
                        :class="selected === faq.id ? 'border-blue-300 shadow-blue-100 shadow-md' : 'border-slate-200 hover:border-slate-300 hover:shadow-md'"
                        itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">

                        <div class="absolute left-0 top-0 bottom-0 w-1 rounded-l-full transition-all duration-300"
                            :class="selected === faq.id ? 'bg-blue-500 opacity-100' : 'opacity-0'"></div>

                        <button @click="toggleFaq(faq.id, $event)"
                            class="faq-pos-btn w-full flex items-center gap-3 md:gap-4 px-4 md:px-6 py-4 md:py-5 text-left focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-400 focus-visible:ring-inset relative overflow-hidden cursor-pointer"
                            :aria-expanded="selected === faq.id" :aria-controls="'faq-pos-answer-' + faq.id">

                            <span class="faq-pos-ripple absolute rounded-full bg-blue-100 opacity-0 pointer-events-none"
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

                        <div :id="'faq-pos-answer-' + faq.id" class="faq-pos-answer overflow-hidden"
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
                <a href="https://wa.me/6285865405330?text=Halo%20Cakra%2C%20saya%20ada%20pertanyaan%20seputar%20sistem%20POS%20atau%20Kasir%20Digital."
                    target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 bg-emerald-500 text-white px-5 md:px-6 py-2.5 md:py-3 rounded-xl font-semibold hover:bg-emerald-600 transition text-sm">
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
    function faqPOS() {
        return {
            selected: null,

            faqs: [{
                    id: 1,
                    question: 'Bagaimana sistem pembayaran QRIS di toko saya?',
                    answer: `<p class="mb-3">Integrasi via Payment Gateway resmi memungkinkan operasional lebih cepat:</p>
            <div class="space-y-2">
                <div class="flex items-start gap-3 p-3 bg-blue-50 rounded-xl"><i class="fa-solid fa-qrcode text-blue-600 mt-0.5 shrink-0 text-xs" aria-hidden="true"></i><p class="text-xs text-slate-600"><strong>QRIS Dinamis:</strong> Kode QR muncul otomatis di layar kasir/tablet sesuai nominal belanja tanpa input manual.</p></div>
                <div class="flex items-start gap-3 p-3 bg-emerald-50 rounded-xl"><i class="fa-solid fa-bell text-emerald-600 mt-0.5 shrink-0 text-xs" aria-hidden="true"></i><p class="text-xs text-slate-600"><strong>Notifikasi Real-time:</strong> Status transaksi otomatis berubah jadi Lunas di sistem kasir begitu pelanggan membayar.</p></div>
            </div>
            <p class="text-xs text-slate-400 mt-3 italic">Tidak perlu lagi cek mutasi manual di m-banking, semua tercatat otomatis oleh sistem.</p>`
                },
                {
                    id: 2,
                    question: 'Apakah data penjualan dan stok saya aman?',
                    answer: `<div class="flex items-start gap-4 bg-orange-50 p-4 rounded-xl">
            <i class="fa-solid fa-shield-halved text-2xl text-orange-500 mt-1 shrink-0" aria-hidden="true"></i>
            <div>
                <p class="mb-2 text-xs font-bold text-slate-700">Keamanan Data Berlapis:</p>
                <ul class="space-y-1">
                    <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-orange-500 text-[10px]" aria-hidden="true"></i> Seluruh data dicadangkan (backup) harian secara otomatis</li>
                    <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-orange-500 text-[10px]" aria-hidden="true"></i> Jalur data terproteksi enkripsi SSL penuh (Bank-grade security)</li>
                    <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-orange-500 text-[10px]" aria-hidden="true"></i> Server berbasis Cloud dengan uptime 99.9%</li>
                </ul>
            </div>
        </div>`
                },
                {
                    id: 3,
                    question: 'Bagaimana jika saya atau karyawan kesulitan menggunakannya?',
                    answer: `<p class="mb-3">Kami memastikan tim Anda mahir menggunakan sistem melalui fasilitas lengkap:</p>
            <div class="grid grid-cols-2 gap-2">
                <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><i class="fa-solid fa-video text-blue-500"></i> Video Tutorial</div>
                <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><i class="fa-solid fa-headset text-emerald-500"></i> Konsultasi Teknis</div>
                <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><i class="fa-solid fa-book text-orange-500"></i> Panduan PDF</div>
                <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><i class="fa-solid fa-users text-violet-500"></i> Pelatihan Admin</div>
            </div>`
                },
                {
                    id: 4,
                    question: 'Apakah sistem ini bisa digunakan di HP atau Tablet?',
                    answer: `<p class="mb-3"><strong>Sangat bisa.</strong> Website POS ini dibangun dengan teknologi responsif:</p>
            <div class="space-y-2">
                <div class="flex items-center gap-3 p-2.5 bg-slate-50 rounded-xl text-xs"><i class="fa-solid fa-mobile-screen text-slate-500" aria-hidden="true"></i><span>Mobile Android & iOS (Untuk monitoring & stok)</span></div>
                <div class="flex items-center gap-3 p-2.5 bg-slate-50 rounded-xl text-xs"><i class="fa-solid fa-tablet-screen-button text-slate-500" aria-hidden="true"></i><span>Tablet Android/iPad (Untuk display kasir)</span></div>
                <div class="flex items-center gap-3 p-2.5 bg-slate-50 rounded-xl text-xs"><i class="fa-solid fa-desktop text-slate-500" aria-hidden="true"></i><span>PC / Laptop / Terminal Kasir</span></div>
            </div>`
                },
                {
                    id: 5,
                    question: 'Dapatkah sistem mengelola banyak cabang (Multi-outlet)?',
                    answer: `<p class="mb-3">Ya. Anda dapat memantau seluruh operasional dari satu tempat:</p>
            <ul class="space-y-1.5">
                <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-circle-check text-orange-500 text-[10px]" aria-hidden="true"></i> Dashboard admin terpusat untuk memantau semua cabang</li>
                <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-circle-check text-orange-500 text-[10px]" aria-hidden="true"></i> Mutasi stok antar cabang terpantau otomatis</li>
                <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-circle-check text-orange-500 text-[10px]" aria-hidden="true"></i> Laporan penjualan per cabang maupun konsolidasi</li>
            </ul>`
                },
                {
                    id: 6,
                    question: 'Apakah stok barang otomatis berkurang saat ada penjualan?',
                    answer: `<div class="flex items-start gap-4 bg-emerald-50 p-4 rounded-xl border border-emerald-100">
            <i class="fa-solid fa-boxes-stacked text-2xl text-emerald-600 mt-1 shrink-0" aria-hidden="true"></i>
            <div>
                <p class="mb-2 text-xs">Sistem stok bekerja secara <strong>Real-time</strong>:</p>
                <ul class="space-y-1">
                    <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-arrow-down text-red-500 text-[10px]" aria-hidden="true"></i> Pengurangan stok otomatis tiap transaksi sukses</li>
                    <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-triangle-exclamation text-amber-500 text-[10px]" aria-hidden="true"></i> Warning jika stok mencapai batas minimum</li>
                    <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-clock-rotate-left text-blue-500 text-[10px]" aria-hidden="true"></i> Histori mutasi stok tercatat lengkap</li>
                </ul>
            </div>
        </div>`
                },
                {
                    id: 7,
                    question: 'Apakah saya bisa menarik laporan keuangan bulanan?',
                    answer: `<p class="mb-3">Tentu. Laporan otomatis siap pakai untuk keputusan bisnis Anda:</p>
            <div class="grid grid-cols-2 gap-2">
                <div class="p-2.5 bg-orange-50 border border-orange-100 rounded-lg text-xs"><p class="font-bold text-slate-700 mb-0.5">Penjualan</p><p class="text-slate-500">Harian, mingguan, bulanan</p></div>
                <div class="p-2.5 bg-orange-50 border border-orange-100 rounded-lg text-xs"><p class="font-bold text-slate-700 mb-0.5">Laba Rugi</p><p class="text-slate-500">Margin keuntungan bersih</p></div>
                <div class="p-2.5 bg-orange-50 border border-orange-100 rounded-lg text-xs"><p class="font-bold text-slate-700 mb-0.5">Top Product</p><p class="text-slate-500">Analisis barang terlaris</p></div>
                <div class="p-2.5 bg-orange-50 border border-orange-100 rounded-lg text-xs"><p class="font-bold text-slate-700 mb-0.5">Metode Bayar</p><p class="text-slate-500">Tunai vs QRIS vs Bank</p></div>
            </div>`
                },
                {
                    id: 8,
                    question: 'Bisa hubungkan dengan alat kasir yang sudah saya punya?',
                    answer: `<p class="mb-3">Sistem kami bersifat <em>hardware-friendly</em> dan mendukung:</p>
            <div class="space-y-2">
                <div class="flex items-center gap-3 p-2.5 bg-slate-50 rounded-xl text-xs"><i class="fa-solid fa-barcode text-slate-600" aria-hidden="true"></i><span>Barcode Scanner (USB / Wireless)</span></div>
                <div class="flex items-center gap-3 p-2.5 bg-slate-50 rounded-xl text-xs"><i class="fa-solid fa-print text-slate-600" aria-hidden="true"></i><span>Printer Struk Thermal (Bluetooth / USB)</span></div>
                <div class="flex items-center gap-3 p-2.5 bg-slate-50 rounded-xl text-xs"><i class="fa-solid fa-vault text-slate-600" aria-hidden="true"></i><span>Cash Drawer (Laci Kasir Otomatis)</span></div>
            </div>`
                },
                {
                    id: 9,
                    question: 'Berapa lama waktu pengerjaannya?',
                    answer: `<div class="space-y-2">
                <div class="flex items-center gap-3 p-3 bg-orange-50 rounded-xl text-xs border border-orange-100">
                    <i class="fa-solid fa-clock text-orange-500" aria-hidden="true"></i>
                    <span><strong>Estimasi Waktu:</strong> 14 sampai 21 hari kerja</span>
                </div>
                <p class="text-xs text-slate-400 italic">*Waktu pengerjaan mencakup setup server, integrasi API Payment Gateway, input data awal, hingga tahap testing sistem di lokasi Anda.</p>
            </div>`
                },
            ],

            toggleFaq(id, event) {
                const btn = event.currentTarget;
                const ripple = btn.querySelector('.faq-pos-ripple');
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
                if (!wasOpen) {
                    this.$nextTick(() => {
                        const el = document.getElementById('faq-pos-answer-' + id);
                        if (el) {
                            const parent = el.closest('.faq-pos-item');
                            if (parent) {
                                const top = parent.getBoundingClientRect().top + window.scrollY - 100;
                                window.scrollTo({
                                    top,
                                    behavior: 'smooth'
                                });
                            }
                        }
                    });
                }
            },
        };
    }
    </script>
    @endpush

    @push('styles')
    <style>
    .faq-pos-answer {
        transition: max-height 0.38s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.28s ease;
    }

    .faq-pos-ripple {
        position: absolute;
        border-radius: 50%;
        background: #dbeafe;
        transform: scale(0);
        opacity: 0;
        pointer-events: none;
        transition: transform 0.5s ease, opacity 0.5s ease;
    }

    .faq-pos-item:not([class*="border-blue"]):hover {
        background: #fafafa;
    }

    @media (prefers-reduced-motion: reduce) {
        .faq-pos-answer {
            transition: none;
        }

        .faq-pos-ripple {
            display: none;
        }
    }
    </style>
    @endpush

</x-layout.app>
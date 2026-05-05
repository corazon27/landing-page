<x-layout.app>

    {{-- ============================================================
     SEO: Meta halaman /layanan
============================================================ --}}
    @php
    $title = 'Layanan Jasa Pembuatan Website Profesional | Cakra Inovasi Digital';
    $metaDescription= 'Cakra Inovasi Digital menyediakan 6 jenis layanan website profesional: E-commerce, Company
    Profile, Katalog Produk, Toko Online/POS, Rental, dan Sistem Manajemen Bisnis (ERP). Harga transparan, teknologi
    modern.';
    $metaKeywords = 'jasa pembuatan website, website e-commerce, company profile, katalog produk, toko online, kasir
    digital, kasir
    POS, website booking, website rental, website manajemen Bisnis (ERP), Sistem Manajemen Bisnis (ERP), Magelang, Jawa
    Tengah';
    $ogType = 'website';
    @endphp

    {{-- ============================================================
     Data layanan — single source of truth untuk seluruh halaman ini
============================================================ --}}
    @php
    $layanan = [
    [
    'route' => 'layanan.ecommerce',
    'icon' => '
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />',
    'label' => 'Website E-Commerce',
    'tagline' => 'Jual lebih banyak, 24 jam sehari',
    'desc' => 'Toko online lengkap dengan keranjang belanja, payment gateway, manajemen produk, dan laporan penjualan
    real-time.',
    'fitur' => ['Payment gateway terintegrasi', 'Dashboard manajemen produk', 'Laporan penjualan otomatis',
    'Mobile-first design'],
    'cocok' => 'Toko retail, fashion, elektronik, FMCG',
    'accent' => 'blue',
    'badge' => 'Paling Populer',
    ],
    [
    'route' => 'layanan.katalog-produk',
    'icon' => '
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
    ',
    'label' => 'Website Katalog Produk',
    'tagline' => 'Pamerkan produk, mudahkan closing',
    'desc' => 'Katalog digital responsif dengan kategori produk lengkap dan tombol direct-chat WhatsApp — pelanggan
    tinggal pilih, Anda tinggal kirim.',
    'fitur' => ['Direct-chat WhatsApp per produk', 'Kategori & filter produk', 'Tampilan mobile-first', 'Update produk
    mandiri via admin'],
    'cocok' => 'Toko fashion, spare part, bahan bangunan, supplier',
    'accent' => 'emerald',
    'badge' => null,
    ],
    [
    'route' => 'layanan.kasir',
    'icon' => '
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
    ',
    'label' => 'Kasir Digital / Point of Sale',
    'tagline' => 'Kasir pintar, stok selalu terkontrol',
    'desc' => 'Sistem kasir digital modern — catat transaksi, pantau stok real-time, cetak struk, dan lihat laporan
    keuangan harian langsung dari HP.',
    'fitur' => ['Kasir digital multi-perangkat', 'Manajemen stok real-time', 'Laporan keuangan harian', 'Support QRIS &
    printer thermal'],
    'cocok' => 'Warung, minimarket, toko retail, apotek',
    'accent' => 'orange',
    'badge' => null,
    ],
    [
    'route' => 'layanan.perusahaan',
    'icon' => '
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
    ',
    'label' => 'Website Company Profile',
    'tagline' => 'Kesan profesional sejak klik pertama',
    'desc' => 'Website perusahaan yang membangun kepercayaan klien, menampilkan portofolio, dan memperkuat brand bisnis
    Anda secara online.',
    'fitur' => ['Desain premium & elegan', 'Halaman portofolio & galeri', 'Formulir kontak terintegrasi', 'SEO-ready
    dari hari pertama'],
    'cocok' => 'CV, PT, konsultan, kontraktor, agensi',
    'accent' => 'indigo',
    'badge' => null,
    ],
    [
    'route' => 'layanan.rental',
    'icon' => '
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />',
    'label' => 'Website Rental & Booking',
    'tagline' => 'Reservasi online, tanpa repot telpon',
    'desc' => 'Sistem booking online real-time dengan kalender ketersediaan, konfirmasi otomatis, dan manajemen jadwal
    terpusat untuk bisnis rental Anda.',
    'fitur' => ['Kalender booking real-time', 'Konfirmasi otomatis via WA', 'Manajemen jadwal terpusat', 'Laporan
    pendapatan bulanan'],
    'cocok' => 'Rental mobil, kamera, alat, villa, lapangan',
    'accent' => 'violet',
    'badge' => null,
    ],
    ];

    $accentMap = [
    'blue' => ['bg' => 'bg-blue-50', 'border' => 'border-blue-100', 'icon' => 'text-blue-600', 'badge' => 'bg-blue-100
    text-blue-700', 'check' => 'text-blue-500', 'hover' => 'group-hover:border-blue-300 group-hover:shadow-blue-100/60',
    'btn' => 'text-blue-600 hover:text-blue-700'],
    'indigo' => ['bg' => 'bg-indigo-50', 'border' => 'border-indigo-100', 'icon' => 'text-indigo-600', 'badge' =>
    'bg-indigo-100 text-indigo-700', 'check' => 'text-indigo-500', 'hover' => 'group-hover:border-indigo-300
    group-hover:shadow-indigo-100/60', 'btn' => 'text-indigo-600 hover:text-indigo-700'],
    'emerald'=> ['bg' => 'bg-emerald-50','border' => 'border-emerald-100','icon' => 'text-emerald-600','badge' =>
    'bg-emerald-100 text-emerald-700','check' => 'text-emerald-500','hover' => 'group-hover:border-emerald-300
    group-hover:shadow-emerald-100/60','btn' => 'text-emerald-600 hover:text-emerald-700'],
    'orange' => ['bg' => 'bg-orange-50', 'border' => 'border-orange-100', 'icon' => 'text-orange-600', 'badge' =>
    'bg-orange-100 text-orange-700', 'check' => 'text-orange-500', 'hover' => 'group-hover:border-orange-300
    group-hover:shadow-orange-100/60', 'btn' => 'text-orange-600 hover:text-orange-700'],
    'violet' => ['bg' => 'bg-violet-50', 'border' => 'border-violet-100', 'icon' => 'text-violet-600', 'badge' =>
    'bg-violet-100 text-violet-700', 'check' => 'text-violet-500', 'hover' => 'group-hover:border-violet-300
    group-hover:shadow-violet-100/60', 'btn' => 'text-violet-600 hover:text-violet-700'],
    'rose' => ['bg' => 'bg-rose-50', 'border' => 'border-rose-100', 'icon' => 'text-rose-600', 'badge' => 'bg-rose-100
    text-rose-700', 'check' => 'text-rose-500', 'hover' => 'group-hover:border-rose-300 group-hover:shadow-rose-100/60',
    'btn' => 'text-rose-600 hover:text-rose-700'],
    ];
    @endphp

    {{-- ================================================================
     SECTION 1: HERO — Unik, berbeda dari welcome.blade.php
     SEO: 1x <h1> dengan keyword, ada breadcrumb visual
================================================================ --}}
    <section class="pt-36 pb-16 bg-gradient-to-b from-slate-50 to-white">
        <div class="max-w-6xl mx-auto px-6 lg:px-10">

            <x-breadcrumb :items="[]" current="Layanan" />

            <div class="flex flex-col lg:flex-row items-center gap-14 mt-6">

                {{-- Teks Hero --}}
                <div class="lg:w-1/2" data-aos="fade-right">
                    <span
                        class="inline-block bg-blue-50 text-blue-700 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-5">
                        6 Jenis Layanan Tersedia
                    </span>
                    <h1 class="text-4xl lg:text-5xl font-extrabold leading-tight text-slate-900 mb-5">
                        Pilih Layanan Website<br>
                        <span class="text-blue-600">Sesuai Kebutuhan Bisnis</span>
                    </h1>
                    <p class="text-lg text-slate-600 leading-relaxed mb-8">
                        Setiap bisnis punya kebutuhan yang berbeda. Kami menyediakan 6 jenis layanan website — dari toko
                        online, company profile, katalog produk, hingga sistem kasir digital — semua bisa disesuaikan
                        dengan skala dan budget bisnis Anda.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#layanan-kami"
                            class="inline-flex items-center gap-2 bg-blue-600 text-white px-7 py-3.5 rounded-xl font-bold hover:bg-blue-700 transition shadow-lg shadow-blue-200">
                            Eksplorasi Semua Layanan
                            <i class="fa-solid fa-arrow-down text-sm"></i>
                        </a>
                        <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20konsultasi%20mengenai%20layanan%20website%20yang%20cocok%20untuk%20bisnis%20saya."
                            target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center gap-2 bg-white border-2 border-slate-200 text-slate-700 px-7 py-3.5 rounded-xl font-bold hover:bg-slate-50 transition">
                            <i class="fa-brands fa-whatsapp text-emerald-500"></i>
                            Konsultasi Dulu
                        </a>
                    </div>
                </div>

                {{-- Visual stats --}}
                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="col-span-2 bg-blue-600 text-white rounded-2xl p-6 flex items-center gap-5">
                            <div class="w-14 h-14 bg-white/20 rounded-xl flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-layer-group text-2xl"></i>
                            </div>
                            <div>
                                <p class="text-3xl font-extrabold">6 Layanan</p>
                                <p class="text-blue-200 text-sm mt-0.5">Semuanya bisa dikustomisasi sesuai bisnis Anda
                                </p>
                            </div>
                        </div>
                        <div class="bg-white border border-slate-100 rounded-2xl p-5 shadow-sm">
                            <p class="text-2xl font-extrabold text-slate-900">50+</p>
                            <p class="text-slate-500 text-xs mt-1">Proyek website selesai</p>
                        </div>
                        <div class="bg-white border border-slate-100 rounded-2xl p-5 shadow-sm">
                            <p class="text-2xl font-extrabold text-emerald-600">98%</p>
                            <p class="text-slate-500 text-xs mt-1">Klien puas & rekomendasikan</p>
                        </div>
                        <div class="bg-white border border-slate-100 rounded-2xl p-5 shadow-sm">
                            <p class="text-2xl font-extrabold text-orange-500">Gratis</p>
                            <p class="text-slate-500 text-xs mt-1">Konsultasi pertama</p>
                        </div>
                        <div class="bg-white border border-slate-100 rounded-2xl p-5 shadow-sm">
                            <p class="text-2xl font-extrabold text-violet-600">3+</p>
                            <p class="text-slate-500 text-xs mt-1">Tahun pengalaman</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ================================================================
     SECTION 2: GRID 6 LAYANAN DETAIL
     SEO: <h2> heading, tiap kartu <article> + <h3>, link ke halaman detail
================================================================ --}}
    <section id="layanan-kami" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6 lg:px-10">

            <div class="text-center mb-14" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">
                    Semua Layanan Pembuatan Website Kami
                </h2>
                <p class="text-slate-500 max-w-2xl mx-auto">
                    Klik salah satu layanan di bawah untuk melihat detail fitur, harga estimasi, dan contoh hasil kerja
                    kami.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7">
                @foreach($layanan as $i => $item)
                @php $a = $accentMap[$item['accent']]; @endphp

                <article
                    class="group relative flex flex-col bg-white border {{ $a['border'] }} rounded-3xl p-7 shadow-sm hover:shadow-xl {{ $a['hover'] }} transition-all duration-300"
                    data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 100 }}">

                    {{-- Badge --}}
                    @if($item['badge'])
                    <span
                        class="absolute top-5 right-5 text-[10px] font-bold px-2.5 py-1 rounded-full {{ $a['badge'] }}">
                        {{ $item['badge'] }}
                    </span>
                    @endif

                    {{-- Icon --}}
                    <div
                        class="w-14 h-14 {{ $a['bg'] }} {{ $a['icon'] }} rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            {!! $item['icon'] !!}
                        </svg>
                    </div>

                    {{-- Konten --}}
                    <div class="flex-grow">
                        <p class="text-xs font-semibold {{ $a['icon'] }} uppercase tracking-wider mb-1">
                            {{ $item['tagline'] }}</p>
                        <h3 class="text-xl font-extrabold text-slate-900 mb-3 leading-snug">{{ $item['label'] }}</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-5">{{ $item['desc'] }}</p>

                        {{-- Fitur --}}
                        <ul class="space-y-2 mb-5" aria-label="Fitur {{ $item['label'] }}">
                            @foreach($item['fitur'] as $fitur)
                            <li class="flex items-center gap-2 text-sm text-slate-600">
                                <i class="fa-solid fa-check {{ $a['check'] }} shrink-0 text-xs"></i>
                                {{ $fitur }}
                            </li>
                            @endforeach
                        </ul>

                        {{-- Cocok untuk --}}
                        <p class="text-xs text-slate-400 italic border-t border-slate-100 pt-4 mb-5">
                            <span class="font-semibold not-italic text-slate-500">Cocok untuk:</span>
                            {{ $item['cocok'] }}
                        </p>
                    </div>

                    {{-- CTA --}}
                    <a href="{{ route($item['route']) }}"
                        class="inline-flex items-center gap-2 text-sm font-bold {{ $a['btn'] }} transition-colors group/link">
                        Lihat Detail Layanan
                        <i
                            class="fa-solid fa-arrow-right text-xs group-hover/link:translate-x-1 transition-transform"></i>
                    </a>

                </article>
                @endforeach
            </div>

        </div>
    </section>

    {{-- ================================================================
     SECTION 3: PROSES KERJA
     SEO: <h2> heading, konten unik yang tidak ada di halaman lain
================================================================ --}}
    <section class="py-20 bg-slate-50">
        <div class="max-w-6xl mx-auto px-6 lg:px-10">

            <div class="text-center mb-14" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">
                    Bagaimana Proses Pengerjaan Website?
                </h2>
                <p class="text-slate-500 max-w-2xl mx-auto">
                    Dari konsultasi hingga website live — semua berjalan transparan, terjadwal, dan Anda selalu kami
                    libatkan di setiap tahapnya.
                </p>
            </div>

            @php
            $proses = [
            ['step' => '01', 'icon' => 'fa-comments', 'title' => 'Konsultasi Kebutuhan', 'desc' => 'Ceritakan bisnis dan
            kebutuhan Anda. Kami bantu pilihkan solusi dan layanan yang paling tepat — gratis, tanpa syarat.', 'color'
            => 'blue'],
            ['step' => '02', 'icon' => 'fa-pen-ruler', 'title' => 'Desain Visual (UI/UX)', 'desc' => 'Tim desainer kami
            membuat mockup tampilan website. Anda bisa memberikan masukan hingga tampilan benar-benar sesuai visi bisnis
            Anda.', 'color' => 'indigo'],
            ['step' => '03', 'icon' => 'fa-code', 'title' => 'Pengembangan Sistem', 'desc' => 'Setelah desain disetujui,
            tim developer mulai coding. Anda mendapat update progres berkala agar tidak ada yang mengejutkan.', 'color'
            => 'violet'],
            ['step' => '04', 'icon' => 'fa-bug', 'title' => 'Testing & Revisi', 'desc' => 'Website diuji di berbagai
            perangkat dan browser. Semua bug diperbaiki, dan Anda memiliki kesempatan melakukan revisi.', 'color' =>
            'orange'],
            ['step' => '05', 'icon' => 'fa-rocket', 'title' => 'Go-Live & Pelatihan', 'desc' => 'Website resmi
            dipublikasikan. Kami mendampingi Anda dan tim belajar mengoperasikan sistem hingga benar-benar mandiri.',
            'color' => 'emerald'],
            ];
            $stepColors = [
            'blue' => 'bg-blue-600 text-white',
            'indigo' => 'bg-indigo-600 text-white',
            'violet' => 'bg-violet-600 text-white',
            'orange' => 'bg-orange-500 text-white',
            'emerald'=> 'bg-emerald-600 text-white',
            ];
            @endphp

            <div class="relative">

                {{-- Garis penghubung (desktop) --}}
                <div class="hidden lg:block absolute top-10 left-[10%] right-[10%] h-0.5 bg-slate-200 z-0"
                    aria-hidden="true"></div>

                <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-5 gap-8 relative z-10">
                    @foreach($proses as $p)
                    <div class="flex flex-col items-center text-center" data-aos="fade-up"
                        data-aos-delay="{{ $loop->index * 100 }}">
                        <div
                            class="w-20 h-20 {{ $stepColors[$p['color']] }} rounded-2xl flex items-center justify-center mb-5 shadow-lg shrink-0">
                            <i class="fa-solid {{ $p['icon'] }} text-2xl"></i>
                        </div>
                        <span class="text-xs font-bold text-slate-400 tracking-widest mb-1">TAHAP
                            {{ $p['step'] }}</span>
                        <h3 class="text-base font-bold text-slate-900 mb-2">{{ $p['title'] }}</h3>
                        <p class="text-slate-500 text-xs leading-relaxed">{{ $p['desc'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>

    {{-- ================================================================
     SECTION 4: PERBANDINGAN PAKET (Why Us)
     Konten unik yang membedakan /layanan dari halaman lain
================================================================ --}}
    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-6 lg:px-10">

            <div class="text-center mb-14" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">
                    Apa yang Termasuk di Setiap Layanan?
                </h2>
                <p class="text-slate-500 max-w-xl mx-auto">
                    Semua layanan kami sudah mencakup komponen ini — tidak ada biaya tersembunyi, tidak ada kejutan di
                    tengah jalan.
                </p>
            </div>

            @php
            $inklusif = [
            ['icon' => 'fa-globe', 'title' => 'Domain & Hosting 1 Tahun', 'desc' => 'Nama domain (.com atau .id) dan
            cloud hosting berkualitas sudah termasuk di semua paket.'],
            ['icon' => 'fa-lock', 'title' => 'SSL Certificate (HTTPS)', 'desc' => 'Website Anda aman dan dipercaya
            Google. SSL aktif sejak hari pertama live.'],
            ['icon' => 'fa-gauge-high', 'title' => 'Optimasi Performa & Kecepatan', 'desc' => 'Website dioptimasi agar
            loading cepat di semua perangkat — penting untuk SEO dan pengalaman pengguna.'],
            ['icon' => 'fa-mobile-screen', 'title' => 'Desain Responsif (HP & PC)', 'desc' => 'Tampilan otomatis
            menyesuaikan ukuran layar HP, tablet, dan komputer tanpa perlu versi terpisah.'],
            ['icon' => 'fa-sliders', 'title' => 'Dashboard Admin Mandiri', 'desc' => 'Anda bisa update konten, produk,
            atau harga sendiri tanpa harus menghubungi kami setiap saat.'],
            ['icon' => 'fa-headset', 'title' => 'Garansi Support Purna Jual', 'desc' => 'Kami tidak lepas tangan.
            Garansi perbaikan bug dan konsultasi teknis gratis setelah website live.'],
            ['icon' => 'fa-file-video', 'title' => 'Panduan Operasional (Video)', 'desc' => 'Anda dan tim mendapatkan
            video tutorial lengkap agar bisa mengoperasikan sistem secara mandiri.'],
            ['icon' => 'fa-magnifying-glass-chart', 'title' => 'Setup Dasar SEO', 'desc' => 'Meta title, description,
            dan struktur halaman dioptimasi agar website mudah ditemukan di Google.'],
            ];
            @endphp

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
                @foreach($inklusif as $item)
                <div class="p-5 bg-slate-50 border border-slate-100 rounded-2xl hover:bg-blue-50 hover:border-blue-100 transition-colors group"
                    data-aos="fade-up" data-aos-delay="{{ ($loop->index % 4) * 80 }}">
                    <div
                        class="w-10 h-10 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-4 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <i class="fa-solid {{ $item['icon'] }} text-sm"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 text-sm mb-2">{{ $item['title'] }}</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">{{ $item['desc'] }}</p>
                </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- ================================================================
     SECTION 5: CTA
================================================================ --}}
    <section class="py-20 bg-slate-50" aria-label="Ajakan konsultasi layanan">
        <div class="max-w-7xl mx-auto px-6">
            <div data-aos="zoom-in" data-aos-duration="800"
                class="bg-blue-600 rounded-[2rem] p-12 lg:p-16 text-center relative overflow-hidden shadow-2xl">

                <div class="absolute inset-0 opacity-10" aria-hidden="true">
                    <div
                        class="absolute top-0 left-0 w-64 h-64 bg-white rounded-full -translate-x-1/2 -translate-y-1/2">
                    </div>
                    <div
                        class="absolute bottom-0 right-0 w-64 h-64 bg-white rounded-full translate-x-1/2 translate-y-1/2">
                    </div>
                </div>

                <div class="relative z-10 text-white">
                    <h2 class="text-3xl lg:text-4xl font-bold mb-4">Belum Yakin Pilih Layanan yang Mana?</h2>
                    <p class="text-blue-100 text-lg mb-8 max-w-xl mx-auto">
                        Ceritakan bisnis Anda, dan kami bantu rekomendasikan layanan yang paling tepat — konsultasi
                        pertama gratis, tanpa syarat.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20mau%20konsultasi%20untuk%20memilih%20layanan%20website%20yang%20paling%20tepat%20untuk%20bisnis%20saya."
                            target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-blue-600 font-bold rounded-xl shadow-lg hover:bg-blue-50 transition">
                            <i class="fa-brands fa-whatsapp text-emerald-500 text-lg"></i>
                            Konsultasi Gratis via WhatsApp
                        </a>
                        <a href="/portofolio"
                            class="inline-flex items-center justify-center gap-2 px-8 py-4 border-2 border-white/40 text-white font-bold rounded-xl hover:bg-white/10 transition">
                            Lihat Portofolio Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout.app>
<x-layout.app>

    {{-- ============================================================
     SEO: Meta halaman /portofolio
============================================================ --}}
    @php
    $title = 'Portofolio Website & Sistem Digital | Cakra Inovasi Digital';
    $metaDescription= 'Lihat hasil kerja nyata Cakra Inovasi Digital — portofolio website e-commerce, company profile,
    kasir digital POS, katalog produk, dan aplikasi kustom untuk UMKM di seluruh Indonesia.';
    $metaKeywords = 'portofolio website, hasil kerja jasa website, website UMKM, kasir digital, toko online, company
    profile, Cakra Inovasi Digital';
    $ogType = 'website';
    @endphp

    {{-- ============================================================
     SEO: Schema ItemList — daftar portofolio untuk Google
============================================================ --}}
    @push('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ItemList",
        "name": "Portofolio Cakra Inovasi Digital",
        "description": "Kumpulan hasil kerja nyata pembuatan website dan sistem digital untuk UMKM.",
        "numberOfItems": 6,
        "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "Sistem Kasir & Point of Sale (POS)"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "Website E-Commerce Toko Online"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Website Company Profile Profesional"
            },
            {
                "@type": "ListItem",
                "position": 4,
                "name": "Katalog Produk Digital + WhatsApp"
            },
            {
                "@type": "ListItem",
                "position": 5,
                "name": "Website Rental & Booking Online"
            }
        ]
    }
    </script>
    @endpush

    {{-- ============================================================
     Data portofolio — single source of truth
============================================================ --}}
    @php
    $portofolio = [
    [
    'kategori' => 'Kasir / POS',
    'filter' => 'pos',
    'bg' => 'bg-blue-600',
    'label_bg' => 'bg-blue-50 text-blue-700',
    'hover' => 'group-hover:text-blue-600',
    'icon' => '🛍️',
    'watermark' => 'POS',
    'judul' => 'Sistem Kasir & Point of Sale',
    'sub' => 'Toko Retail & Minimarket',
    'desc' => 'Sistem kasir digital yang membantu pemilik toko memantau stok secara real-time, mencatat transaksi, dan
    menghasilkan laporan keuangan harian — semua bisa dipantau dari HP.',
    'tags' => ['#StokRealTime', '#LaporanOtomatis', '#QRIS'],
    'fitur' => ['Manajemen stok & produk', 'Laporan penjualan harian', 'Support QRIS & printer thermal', 'Multi-kasir &
    multi-cabang'],
    'hasil' => 'Selisih stok turun drastis, proses kasir 3x lebih cepat.',
    ],
    [
    'kategori' => 'E-Commerce',
    'filter' => 'ecommerce',
    'bg' => 'bg-slate-800',
    'label_bg' => 'bg-slate-100 text-slate-700',
    'hover' => 'group-hover:text-slate-600',
    'icon' => '🛒',
    'watermark' => 'SHOP',
    'judul' => 'Website Toko Online (E-Commerce)',
    'sub' => 'Toko Fashion & Retail',
    'desc' => 'Toko online lengkap dengan keranjang belanja, payment gateway, manajemen produk, dan dashboard admin —
    pelanggan bisa belanja 24 jam tanpa perlu DM satu per satu.',
    'tags' => ['#PaymentGateway', '#AdminDashboard', '#MobileFriendly'],
    'fitur' => ['Keranjang belanja & checkout', 'Integrasi payment gateway', 'Dashboard manajemen produk', 'Laporan
    penjualan otomatis'],
    'hasil' => 'Omzet naik signifikan, tidak bergantung marketplace.',
    ],
    [
    'kategori' => 'Company Profile',
    'filter' => 'company',
    'bg' => 'bg-indigo-600',
    'label_bg' => 'bg-indigo-50 text-indigo-700',
    'hover' => 'group-hover:text-indigo-600',
    'icon' => '🏢',
    'watermark' => 'WEB',
    'judul' => 'Website Company Profile Profesional',
    'sub' => 'CV & PT — Jasa & Konstruksi',
    'desc' => 'Website perusahaan yang membangun kepercayaan klien sejak klik pertama — dilengkapi halaman portofolio,
    galeri, testimoni, dan formulir kontak terintegrasi.',
    'tags' => ['#DesainPremium', '#SEOReady', '#AdminMandiri'],
    'fitur' => ['Halaman portofolio & galeri', 'Formulir kontak terintegrasi', 'Blog & artikel perusahaan', 'Optimasi
    SEO on-page'],
    'hasil' => 'Kepercayaan calon klien meningkat, inquiry naik.',
    ],
    [
    'kategori' => 'Katalog Produk',
    'filter' => 'katalog',
    'bg' => 'bg-emerald-600',
    'label_bg' => 'bg-emerald-50 text-emerald-700',
    'hover' => 'group-hover:text-emerald-600',
    'icon' => '📦',
    'watermark' => 'CAT',
    'judul' => 'Katalog Produk Digital + WhatsApp',
    'sub' => 'Supplier, Distributor & Reseller',
    'desc' => 'Katalog online responsif dengan kategori produk, foto, harga, dan tombol direct-chat WhatsApp per produk
    — pelanggan tinggal pilih, Anda tinggal kirim.',
    'tags' => ['#WhatsAppLink', '#MobileFirst', '#UpdateMandiri'],
    'fitur' => ['Kategori & filter produk', 'Tombol WA per produk', 'Tampilan foto produk optimal', 'Update katalog via
    admin'],
    'hasil' => 'Proses closing lebih cepat, tidak perlu kirim foto manual.',
    ],
    [
    'kategori' => 'Rental & Booking',
    'filter' => 'rental',
    'bg' => 'bg-violet-600',
    'label_bg' => 'bg-violet-50 text-violet-700',
    'hover' => 'group-hover:text-violet-600',
    'icon' => '📅',
    'watermark' => 'BOOK',
    'judul' => 'Sistem Booking & Rental Online',
    'sub' => 'Rental Mobil, Alat & Villa',
    'desc' => 'Sistem booking online dengan kalender ketersediaan real-time, konfirmasi otomatis via WhatsApp, dan
    manajemen jadwal terpusat — tidak perlu lagi kelola reservasi manual.',
    'tags' => ['#KalenderRealTime', '#KonfirmasiOtomatis', '#AntiDoubleBooking'],
    'fitur' => ['Kalender booking real-time', 'Konfirmasi otomatis via WA', 'Manajemen jadwal terpusat', 'Laporan
    pendapatan bulanan'],
    'hasil' => 'Double booking hilang, proses reservasi lebih rapi.',
    ],
    ];

    $stats = [
    ['angka' => '50+', 'label' => 'Proyek Selesai', 'color' => 'text-blue-600'],
    ['angka' => '6', 'label' => 'Jenis Layanan', 'color' => 'text-indigo-600'],
    ['angka' => '98%', 'label' => 'Klien Puas', 'color' => 'text-emerald-600'],
    ['angka' => '3+', 'label' => 'Tahun Pengalaman', 'color' => 'text-orange-500'],
    ];
    @endphp

    {{-- ================================================================
     SECTION 1: HERO
     SEO: 1x <h1> dengan keyword, breadcrumb via x-breadcrumb component
================================================================ --}}
    <section class="pt-36 pb-16 bg-gradient-to-b from-slate-50 to-white overflow-hidden">
        <div class="max-w-6xl mx-auto px-6 lg:px-10">

            <x-breadcrumb :items="[]" current="Portofolio Kami" />

            <div class="mt-8 text-center max-w-3xl mx-auto" data-aos="fade-up">
                <span
                    class="inline-block bg-blue-50 text-blue-700 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-5">
                    Bukti Kerja Nyata
                </span>
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight text-slate-900 mb-6">
                    Portofolio Website &<br>
                    <span class="text-blue-600">Sistem Digital untuk UMKM</span>
                </h1>
                <p class="text-lg text-slate-500 leading-relaxed max-w-2xl mx-auto">
                    Kami bangga bisa mendampingi para pemilik usaha bertransformasi digital — dari toko online, katalog
                    produk, kasir digital, hingga sistem booking. Semua dikerjakan dengan serius dan hasilnya bisa Anda
                    lihat di sini.
                </p>
            </div>

            {{-- Stats Bar --}}
            <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-4" data-aos="fade-up" data-aos-delay="150">
                @foreach($stats as $s)
                <div class="bg-white border border-slate-100 rounded-2xl p-5 text-center shadow-sm">
                    <p class="text-3xl font-extrabold {{ $s['color'] }}">{{ $s['angka'] }}</p>
                    <p class="text-slate-500 text-xs mt-1">{{ $s['label'] }}</p>
                </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- ================================================================
     SECTION 2: FILTER + GRID PORTOFOLIO
     SEO: <h2> heading, tiap kartu pakai <article> + <h3>
================================================================ --}}
    <section class="py-20 bg-white" id="portofolio-grid">
        <div class="max-w-6xl mx-auto px-6 lg:px-10">

            <div class="text-center mb-10" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-3">
                    Hasil Kerja yang Sudah Kami Selesaikan
                </h2>
                <p class="text-slate-500 max-w-xl mx-auto text-sm">Filter berdasarkan jenis layanan untuk menemukan
                    contoh yang paling relevan dengan bisnis Anda.</p>
            </div>

            {{-- Filter Tabs (Alpine.js) --}}
            <div class="flex flex-wrap justify-center gap-2 mb-12" x-data="{ active: 'semua' }" id="filter-tabs">
                @php
                $filters = [
                'semua' => 'Semua',
                'pos' => 'Kasir / POS',
                'ecommerce'=> 'E-Commerce',
                'company' => 'Company Profile',
                'katalog' => 'Katalog Produk',
                'rental' => 'Rental & Booking',
                ];
                @endphp
                @foreach($filters as $key => $label)
                <button @click="active = '{{ $key }}'; $dispatch('filter-change', { filter: '{{ $key }}' })" :class="active === '{{ $key }}'
                    ? 'bg-blue-600 text-white shadow-lg shadow-blue-200'
                    : 'bg-white text-slate-600 border border-slate-200 hover:border-blue-300 hover:text-blue-600'"
                    class="px-4 py-2 rounded-full text-xs font-bold transition-all duration-200">
                    {{ $label }}
                </button>
                @endforeach
            </div>

            {{-- Grid Portofolio --}}
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7" x-data="portfolioFilter()"
                @filter-change.window="setFilter($event.detail.filter)">

                @foreach($portofolio as $i => $p)
                <article x-show="isVisible('{{ $p['filter'] }}')" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                    class="group bg-white rounded-[28px] overflow-hidden shadow-sm border border-slate-100 hover:shadow-xl transition-all duration-500 flex flex-col"
                    data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 100 }}">

                    {{-- Visual header --}}
                    <div
                        class="{{ $p['bg'] }} aspect-video flex flex-col items-center justify-center text-white p-6 relative overflow-hidden">
                        <span
                            class="text-6xl font-black opacity-10 absolute -right-3 -bottom-3 leading-none select-none"
                            aria-hidden="true">{{ $p['watermark'] }}</span>
                        <div class="text-center z-10">
                            <span class="text-4xl mb-2 block" role="img"
                                aria-label="{{ $p['judul'] }}">{{ $p['icon'] }}</span>
                            <p class="font-bold text-sm">{{ $p['kategori'] }}</p>
                            <p class="text-white/70 text-xs mt-0.5">{{ $p['sub'] }}</p>
                        </div>
                    </div>

                    {{-- Konten kartu --}}
                    <div class="p-7 flex flex-col flex-grow">
                        <div class="flex items-center gap-2 mb-3">
                            <span
                                class="text-[10px] font-bold px-2.5 py-1 rounded-full {{ $p['label_bg'] }} uppercase tracking-wide">
                                {{ $p['kategori'] }}
                            </span>
                        </div>

                        <h3
                            class="text-lg font-extrabold text-slate-900 mb-2 {{ $p['hover'] }} transition-colors leading-snug">
                            {{ $p['judul'] }}
                        </h3>

                        <p class="text-slate-500 text-sm leading-relaxed mb-5">{{ $p['desc'] }}</p>

                        {{-- Fitur --}}
                        <ul class="space-y-1.5 mb-5" aria-label="Fitur yang dibangun">
                            @foreach($p['fitur'] as $f)
                            <li class="flex items-center gap-2 text-xs text-slate-600">
                                <i class="fa-solid fa-check text-blue-500 shrink-0 text-[10px]"></i>
                                {{ $f }}
                            </li>
                            @endforeach
                        </ul>

                        {{-- Hasil / impact --}}
                        <div class="mt-auto pt-4 border-t border-slate-50">
                            <p class="text-xs text-slate-400 italic mb-3">
                                <span class="font-semibold not-italic text-slate-500">Hasil:</span> {{ $p['hasil'] }}
                            </p>
                            <div class="flex flex-wrap gap-1.5">
                                @foreach($p['tags'] as $tag)
                                <span
                                    class="text-[10px] font-bold text-slate-400 bg-slate-50 px-2 py-0.5 rounded-full">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </article>
                @endforeach

            </div>

        </div>
    </section>

    {{-- ================================================================
     SECTION 3: PROSES KERJA SINGKAT
     Konten unik yang menambah nilai halaman portofolio
================================================================ --}}
    <section class="py-20 bg-slate-50">
        <div class="max-w-5xl mx-auto px-6 lg:px-10">

            <div class="text-center mb-14" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">
                    Dari Ide ke Website Live — Prosesnya Simpel
                </h2>
                <p class="text-slate-500 max-w-xl mx-auto">Tidak perlu paham teknologi. Ceritakan kebutuhan bisnis Anda,
                    kami yang urus semuanya hingga siap dipakai.</p>
            </div>

            @php
            $alur = [
            ['step' => '01', 'icon' => 'fa-comments', 'title' => 'Konsultasi Gratis', 'desc' => 'Ceritakan bisnis Anda.
            Kami bantu pilihkan solusi terbaik tanpa syarat apapun.'],
            ['step' => '02', 'icon' => 'fa-pen-ruler', 'title' => 'Desain & Approval', 'desc' => 'Tim desainer kami buat
            mockup tampilan. Anda review dan setujui sebelum coding dimulai.'],
            ['step' => '03', 'icon' => 'fa-code', 'title' => 'Development', 'desc' => 'Website dibangun dengan teknologi
            modern. Anda mendapat update progres berkala.'],
            ['step' => '04', 'icon' => 'fa-rocket', 'title' => 'Live & Pelatihan', 'desc' => 'Website dipublish. Kami
            dampingi Anda dan tim sampai benar-benar bisa pakai sendiri.'],
            ];
            @endphp

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($alur as $a)
                <div class="relative bg-white rounded-2xl p-6 border border-slate-100 shadow-sm text-center"
                    data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div
                        class="w-14 h-14 bg-blue-600 text-white rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-md shadow-blue-200">
                        <i class="fa-solid {{ $a['icon'] }} text-xl"></i>
                    </div>
                    <span class="text-xs font-bold text-slate-300 tracking-widest">TAHAP {{ $a['step'] }}</span>
                    <h3 class="text-base font-bold text-slate-900 mt-1 mb-2">{{ $a['title'] }}</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">{{ $a['desc'] }}</p>
                    @if(!$loop->last)
                    <div class="hidden lg:block absolute top-10 -right-3 z-10">
                        <i class="fa-solid fa-chevron-right text-slate-200 text-xl"></i>
                    </div>
                    @endif
                </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- ================================================================
     SECTION 4: TESTIMONI PILIHAN
     SEO: <h2> heading, pakai <blockquote> yang semantik
================================================================ --}}
    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-6 lg:px-10">

            <div class="text-center mb-14" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">
                    Cerita Nyata dari Klien Kami
                </h2>
                <p class="text-slate-500 max-w-lg mx-auto">Bukan sekadar testimoni — bukti bahwa hasil kerja kami
                    benar-benar memberi dampak nyata pada bisnis mereka.</p>
            </div>

            @php
            $testimonials = [
            [
            'nama' => 'Andi Pratama',
            'peran' => 'Owner Toko Retail — Sistem Kasir POS',
            'inisial' => 'AP',
            'bg' => 'bg-blue-500',
            'quote' => 'Sistem kasir yang mereka buat sangat mudah digunakan. Stok barang sekarang tidak pernah selisih
            lagi dan laporan penjualan bisa saya pantau dari HP kapan saja.',
            ],
            [
            'nama' => 'Siti Aminah',
            'peran' => 'IT Manager — Company Profile & Sistem Kustom',
            'inisial' => 'SA',
            'bg' => 'bg-indigo-500',
            'quote' => 'Profesional, tepat waktu, dan komunikatif. Solusi software kustom mereka membantu tim kami
            bekerja jauh lebih efisien. Sangat merekomendasikan!',
            ],
            [
            'nama' => 'Dewi Lestari',
            'peran' => 'Owner Home Industri — Website E-Commerce',
            'inisial' => 'DL',
            'bg' => 'bg-emerald-500',
            'quote' => 'Website e-commerce-nya bagus dan gampang dikelola sendiri. Produk kerajinan saya sekarang bisa
            menjangkau pembeli dari luar pulau — sesuatu yang tidak pernah saya bayangkan sebelumnya.',
            ],
            [
            'nama' => 'Bpk. Subagyo',
            'peran' => 'Pemilik Warung Makan — Menu Digital QR Code',
            'inisial' => 'BS',
            'bg' => 'bg-rose-500',
            'quote' => 'Menu QR Code-nya simpel sekali untuk pelanggan. Saya tidak perlu cetak ulang buku menu tiap ada
            perubahan harga. Hemat biaya dan waktu.',
            ],
            ];
            @endphp

            <div class="grid md:grid-cols-2 gap-6">
                @foreach($testimonials as $i => $t)
                <div class="bg-slate-50 border border-slate-100 rounded-2xl p-7 hover:shadow-md transition-shadow"
                    data-aos="{{ $i % 2 === 0 ? 'fade-right' : 'fade-left' }}" data-aos-delay="{{ ($i % 2) * 100 }}">
                    <div class="text-3xl text-slate-200 font-black mb-3 leading-none" aria-hidden="true">"</div>
                    <blockquote class="text-slate-700 italic text-sm leading-relaxed mb-6">
                        {{ $t['quote'] }}
                    </blockquote>
                    <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
                        <div
                            class="w-11 h-11 {{ $t['bg'] }} rounded-full flex items-center justify-center text-white font-bold text-sm shrink-0">
                            {{ $t['inisial'] }}
                        </div>
                        <div>
                            <p class="font-bold text-slate-900 text-sm">{{ $t['nama'] }}</p>
                            <p class="text-xs text-slate-500">{{ $t['peran'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- ================================================================
     SECTION 5: CTA
================================================================ --}}
    <section class="py-20 bg-slate-50" aria-label="Ajakan diskusi proyek baru">
        <div class="max-w-4xl mx-auto px-6">
            <div data-aos="zoom-in" data-aos-duration="800"
                class="bg-slate-900 rounded-[2rem] p-12 lg:p-16 text-white text-center relative overflow-hidden shadow-2xl">

                <div class="absolute inset-0 opacity-5" aria-hidden="true">
                    <div
                        class="absolute top-0 left-0 w-64 h-64 bg-blue-400 rounded-full -translate-x-1/2 -translate-y-1/2">
                    </div>
                    <div
                        class="absolute bottom-0 right-0 w-64 h-64 bg-blue-400 rounded-full translate-x-1/2 translate-y-1/2">
                    </div>
                </div>

                <div class="relative z-10">
                    <h2 class="text-3xl lg:text-4xl font-bold mb-4">Bisnis Anda Proyek Kami Berikutnya?</h2>
                    <p class="text-slate-400 mb-8 leading-relaxed max-w-xl mx-auto">
                        Kami tidak hanya membuat website — kami membangun solusi yang pas dengan cara kerja dan budget
                        bisnis Anda. Yuk, diskusi dulu tanpa perlu komitmen apapun!
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20lihat%20portofolio%20Anda%20dan%20tertarik.%20Bisa%20bantu%20buatkan%20solusi%20yang%20pas%20untuk%20bisnis%20saya%3F"
                            target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center justify-center gap-2 bg-blue-600 text-white px-8 py-4 rounded-xl font-bold hover:bg-blue-500 transition shadow-lg shadow-blue-500/30">
                            <i class="fa-brands fa-whatsapp text-lg"></i>
                            Diskusi via WhatsApp
                        </a>
                        <a href="/layanan"
                            class="inline-flex items-center justify-center gap-2 border-2 border-slate-700 text-slate-300 px-8 py-4 rounded-xl font-bold hover:border-blue-500 hover:text-blue-400 transition">
                            Lihat Semua Layanan
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ================================================================
     SCRIPTS — Alpine.js portfolio filter
================================================================ --}}
    @push('scripts')
    <script>
    function portfolioFilter() {
        return {
            activeFilter: 'semua',
            setFilter(filter) {
                this.activeFilter = filter;
            },
            isVisible(filterKey) {
                return this.activeFilter === 'semua' || this.activeFilter === filterKey;
            }
        }
    }
    </script>
    @endpush

</x-layout.app>
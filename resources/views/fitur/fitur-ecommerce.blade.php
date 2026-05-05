<x-layout.app>

    {{-- ============================================================
     SEO: Meta halaman /fitur/web-ecommerce
============================================================ --}}
    @php
    $title = 'Harga & Perbandingan Paket Website E-Commerce | Cakra Inovasi Digital';
    $metaDescription= 'Bandingkan harga dan fitur lengkap paket website e-commerce Cakra Inovasi Digital — Starter,
    Professional, hingga Enterprise. Transparan, tanpa biaya tersembunyi.';
    $metaKeywords = 'harga website e-commerce, paket toko online, perbandingan fitur e-commerce, jasa website toko
    online Indonesia, payment gateway, ongkir otomatis';
    $ogType = 'website';
    $canonicalUrl = url('/fitur/web-ecommerce');
    @endphp

    {{-- ============================================================
     Data FAQ
============================================================ --}}
    @php
    $faqsData = [
    ['question' => 'Apakah saya bisa upgrade paket di kemudian hari?', 'answer' => 'Tentu. Anda bisa upgrade ke paket
    lebih tinggi kapan saja. Tim kami membantu proses penyesuaian fitur dan biaya tambahan secara transparan.'],
    ['question' => 'Apakah domain dan hosting sudah termasuk di semua paket?', 'answer' => 'Ya, domain .com dan hosting
    1 tahun sudah termasuk di semua paket. Tahun berikutnya dikenakan biaya perpanjangan sesuai tarif provider.'],
    ['question' => 'Apakah payment gateway langsung aktif setelah website jadi?', 'answer' => 'Payment gateway
    memerlukan proses verifikasi merchant dari penyedia (Midtrans/Xendit). Kami membantu proses pendaftaran dan
    integrasinya.'],
    ['question' => 'Bisakah saya mengelola produk dan stok sendiri tanpa developer?', 'answer' => 'Ya. Dashboard Admin
    dirancang user-friendly sehingga Anda bisa tambah produk, atur stok, buat promo, dan lihat laporan tanpa bantuan
    teknis.'],
    ['question' => 'Bagaimana jika ada bug atau error setelah website live?', 'answer' => 'Semua paket mendapatkan
    garansi perbaikan bug — Starter 30 hari, Professional 60 hari, Enterprise 90 hari setelah serah terima.'],
    ['question' => 'Apakah bisa cicil pembayarannya?', 'answer' => 'Bisa. Kami menggunakan sistem 3 termin: DP saat
    deal, termin progres setelah desain disetujui, dan pelunasan saat website siap live.'],
    ];
    @endphp

    @push('schema')
    <x-faq-schema :faqs="$faqsData" />
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "{{ url('/fitur/web-ecommerce') }}/#webpage",
        "name": "Harga & Perbandingan Paket Website E-Commerce — Cakra Inovasi Digital",
        "description": "Perbandingan lengkap harga dan fitur paket website e-commerce untuk UMKM Indonesia.",
        "url": "{{ url('/fitur/web-ecommerce') }}",
        "isPartOf": {
            "@id": "{{ url('/') }}/#website"
        }
    }
    </script>
    @endpush

    {{-- ================================================================
     SECTION 1: HERO
================================================================ --}}
    <section class="pt-36 pb-14 bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-6">

            <x-breadcrumb :items="[
            ['name' => 'Layanan',          'url' => url('/layanan')],
            ['name' => 'Website E-Commerce','url' => url('/layanan/web-ecommerce')],
        ]" current="Fitur & Harga" />

            <div class="text-center mt-8 mb-4 max-w-3xl mx-auto" data-aos="fade-up">
                <span
                    class="inline-block px-4 py-1.5 rounded-full bg-blue-50 text-blue-600 text-xs font-semibold uppercase tracking-wider mb-5">
                    Transparan, Tanpa Biaya Tersembunyi
                </span>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-slate-900 mb-4 leading-tight">
                    Bandingkan Paket & <span class="text-blue-600">Fitur E-Commerce</span>
                </h1>
                <p class="text-slate-500 text-sm md:text-base leading-relaxed">
                    Pilih paket yang paling sesuai dengan skala bisnis Anda. Semua paket sudah termasuk domain, hosting,
                    SSL, dan garansi support purna jual.
                </p>
            </div>

        </div>
    </section>

    {{-- ================================================================
     SECTION 2: TABEL PERBANDINGAN FITUR LENGKAP
     Mobile: scroll horizontal dengan petunjuk geser
================================================================ --}}
    <section class="pb-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <p class="flex items-center justify-center gap-2 text-center text-slate-400 text-xs mb-4 md:hidden">
                <i class="fa-solid fa-hand-pointer text-blue-400" aria-hidden="true"></i>
                Geser ke samping untuk melihat semua paket
            </p>

            <div class="overflow-x-auto rounded-3xl border border-slate-200 shadow-sm" data-aos="fade-up">
                <table class="w-full text-left border-collapse min-w-[680px]">

                    <thead>
                        <tr class="bg-slate-50 border-b border-slate-200">

                            <th class="py-6 px-5 w-[240px] lg:w-1/4 sticky left-0 bg-slate-50 z-10">
                                <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Fitur</span>
                            </th>

                            @php
                            $cols = [
                            [
                            'label' => 'Starter',
                            'sub' => 'Rp 3.500.000',
                            'badge' => null,
                            'btn' => 'border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white',
                            'wa' => 'Paket%20E-Commerce%20Starter',
                            ],
                            [
                            'label' => 'Professional',
                            'sub' => 'Rp 6.500.000',
                            'badge' => 'Paling Populer',
                            'badge_bg' => 'bg-amber-400 text-amber-950',
                            'btn' => 'bg-blue-600 hover:bg-blue-700 text-white',
                            'wa' => 'Paket%20E-Commerce%20Professional',
                            ],
                            [
                            'label' => 'Enterprise',
                            'sub' => 'Mulai Rp 12.000.000',
                            'badge' => null,
                            'btn' => 'bg-slate-800 hover:bg-slate-900 text-white',
                            'wa' => 'Paket%20E-Commerce%20Enterprise',
                            ],
                            ];
                            @endphp

                            @foreach($cols as $col)
                            <th class="py-6 px-5 text-center relative">
                                @if(!empty($col['badge']))
                                <span
                                    class="absolute top-2 left-1/2 -translate-x-1/2 {{ $col['badge_bg'] }} text-[9px] px-3 py-0.5 rounded-full font-bold uppercase tracking-wider whitespace-nowrap">
                                    {{ $col['badge'] }}
                                </span>
                                @endif
                                <span
                                    class="block text-sm font-bold text-slate-900 {{ !empty($col['badge']) ? 'mt-5' : '' }}">{{ $col['label'] }}</span>
                                <span
                                    class="block text-[11px] text-blue-600 font-semibold mt-0.5">{{ $col['sub'] }}</span>
                                <span class="block text-[10px] text-slate-400 mt-0.5">Biaya setup awal</span>
                            </th>
                            @endforeach

                        </tr>
                    </thead>

                    <tbody class="text-sm divide-y divide-slate-100">

                        @php
                        $groups = [
                        'Produk & Katalog' => [
                        ['label' => 'Kapasitas Produk', 'values' => ['50 Produk', 'Unlimited', 'Unlimited']],
                        ['label' => 'Kategori & Subkategori', 'values' => [true, true, true]],
                        ['label' => 'Variasi Produk (ukuran/warna)', 'values' => [true, true, true]],
                        ['label' => 'Upload Foto Produk Multi-gambar','values'=> [true, true, true]],
                        ['label' => 'Filter & Pencarian Produk', 'values' => [false, true, true]],
                        ['label' => 'Produk Digital (File Download)', 'values'=> [false, true, true]],
                        ],
                        'Transaksi & Pembayaran' => [
                        ['label' => 'Keranjang Belanja & Checkout', 'values' => [true, true, true]],
                        ['label' => 'Checkout via WhatsApp', 'values' => [true, false, false]],
                        ['label' => 'Payment Gateway (VA, E-Wallet, Kartu)','values'=> [false, true, true]],
                        ['label' => 'Ongkir Otomatis (RajaOngkir API)','values'=> [false, true, true]],
                        ['label' => 'COD (Bayar di Tempat)', 'values' => [true, true, true]],
                        ['label' => 'Multi-Currency (Mata Uang)', 'values' => [false, false, true]],
                        ],
                        'Manajemen & Operasional' => [
                        ['label' => 'Dashboard Admin Mandiri', 'values' => [true, true, true]],
                        ['label' => 'Manajemen Stok Real-time', 'values' => [true, true, true]],
                        ['label' => 'Alert Stok Menipis', 'values' => [true, true, true]],
                        ['label' => 'Manajemen Order & Status Kirim','values' => [true, true, true]],
                        ['label' => 'Database & Manajemen Member', 'values' => [false, true, true]],
                        ['label' => 'Multi-Warehouse (Gudang)', 'values' => [false, false, true]],
                        ['label' => 'Sistem Reseller / Affiliate', 'values' => [false, false, true]],
                        ],
                        'Laporan & Analitik' => [
                        ['label' => 'Laporan Penjualan Harian', 'values' => [true, true, true]],
                        ['label' => 'Ekspor Laporan ke Excel', 'values' => [false, true, true]],
                        ['label' => 'Grafik Omzet & Produk Terlaris','values' => [false, true, true]],
                        ['label' => 'Google Analytics', 'values' => [false, true, true]],
                        ['label' => 'Facebook Pixel & Retargeting', 'values' => [false, false, true]],
                        ['label' => 'Google Tag Manager', 'values' => [false, false, true]],
                        ],
                        'Marketing & Promosi' => [
                        ['label' => 'Sistem Kupon & Voucher Diskon', 'values' => [false, true, true]],
                        ['label' => 'Gratis Ongkir Bersyarat', 'values' => [false, true, true]],
                        ['label' => 'Ulasan & Rating Produk', 'values' => [false, true, true]],
                        ['label' => 'Flash Sale & Diskon Terbatas', 'values' => [false, true, true]],
                        ['label' => 'Email Marketing Terintegrasi', 'values' => [false, false, true]],
                        ['label' => 'Notifikasi Abandoned Cart', 'values' => [false, false, true]],
                        ],
                        'Teknis & Support' => [
                        ['label' => 'Domain .com & Hosting 1 Tahun','values' => [true, true, true]],
                        ['label' => 'SSL Certificate (HTTPS)', 'values' => [true, true, true]],
                        ['label' => 'Desain Responsif Mobile-First', 'values' => [true, true, true]],
                        ['label' => 'Optimasi SEO On-page Dasar', 'values' => [true, true, true]],
                        ['label' => 'Optimasi SEO Lengkap', 'values' => [false, true, true]],
                        ['label' => 'Dedicated Server & SLA 99,9%', 'values' => [false, false, true]],
                        ['label' => 'Integrasi API Pihak Ketiga', 'values' => [false, false, true]],
                        ['label' => 'Backup Data', 'values' => ['Mingguan', 'Harian', 'Real-time']],
                        ['label' => 'Garansi Bug Purna Jual', 'values' => ['30 hari', '60 hari', '90 hari']],
                        ['label' => 'Video Panduan Operasional', 'values' => [true, true, true]],
                        ['label' => 'Konsultasi Teknis Gratis', 'values' => [true, true, true]],
                        ['label' => 'Dedicated Project Manager', 'values' => [false, false, true]],
                        ],
                        ];
                        @endphp

                        @foreach($groups as $groupName => $rows)

                        <tr class="bg-blue-50/40">
                            <td colspan="4" class="py-3 px-5 sticky left-0 bg-blue-50/40">
                                <span
                                    class="text-[11px] font-bold text-blue-600 uppercase tracking-widest">{{ $groupName }}</span>
                            </td>
                        </tr>

                        @foreach($rows as $row)
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td
                                class="py-3.5 px-5 font-medium text-slate-700 text-sm sticky left-0 bg-white hover:bg-slate-50/50 transition-colors">
                                {{ $row['label'] }}
                            </td>
                            @foreach($row['values'] as $val)
                            <td class="py-3.5 px-5 text-center">
                                @if($val === true)
                                <i class="fa-solid fa-circle-check text-emerald-500 text-lg" aria-label="Tersedia"></i>
                                @elseif($val === false)
                                <i class="fa-solid fa-circle-xmark text-slate-200 text-lg"
                                    aria-label="Tidak tersedia"></i>
                                @else
                                <span
                                    class="inline-block text-[11px] font-semibold text-blue-700 bg-blue-50 px-2.5 py-1 rounded-full whitespace-nowrap">{{ $val }}</span>
                                @endif
                            </td>
                            @endforeach
                        </tr>
                        @endforeach

                        @endforeach

                    </tbody>

                    <tfoot>
                        <tr class="border-t-2 border-slate-100 bg-slate-50/50">
                            <td class="py-7 px-5 sticky left-0 bg-slate-50/50 text-xs text-slate-400 italic">
                                *Harga belum termasuk biaya domain, hosting perpanjangan, & payment gateway provider
                            </td>
                            @foreach($cols as $col)
                            <td class="py-7 px-5 text-center">
                                <a href="https://wa.me/6285865405330?text=Halo%20Cakra%2C%20saya%20tertarik%20dengan%20{{ $col['wa'] }}"
                                    target="_blank" rel="noopener noreferrer"
                                    class="inline-block px-5 py-2.5 {{ $col['btn'] }} rounded-xl font-bold text-xs transition-all shadow-sm">
                                    Pilih Paket
                                </a>
                            </td>
                            @endforeach
                        </tr>
                    </tfoot>

                </table>
            </div>

        </div>
    </section>

    {{-- ================================================================
     SECTION 3: PRICING CARDS — ringkasan mobile-friendly
================================================================ --}}
    <section class="pb-20 bg-slate-50">
        <div class="max-w-5xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-12" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 mb-3">
                    Ringkasan Paket Harga
                </h2>
                <p class="text-slate-500 text-sm">Semua bisa dicicil 2–3 termin. Konsultasi dulu jika belum yakin pilih
                    paket mana.</p>
            </div>

            @php
            $cards = [
            [
            'badge' => null,
            'ring' => 'border border-slate-200',
            'title' => 'E-Commerce Starter',
            'tagline' => 'Untuk UMKM yang baru go-digital',
            'price' => 'Rp 3.500.000',
            'price_color' => 'text-slate-900',
            'note' => 'Biaya setup awal',
            'perks' => [
            '50 produk',
            'Checkout via WhatsApp',
            'Manajemen stok real-time',
            'Dashboard admin mandiri',
            'Laporan penjualan harian',
            'Domain .com & Hosting 1 thn',
            'SSL & SEO dasar',
            'Garansi bug 30 hari',
            ],
            'btn' => 'border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white',
            'wa' => 'Paket%20E-Commerce%20Starter',
            ],
            [
            'badge' => 'Paling Populer',
            'badge_bg' => 'bg-amber-400 text-amber-950',
            'ring' => 'border-2 border-blue-600 shadow-2xl shadow-blue-100',
            'title' => 'E-Commerce Professional',
            'tagline' => 'Otomatisasi penuh untuk scale-up',
            'price' => 'Rp 6.500.000',
            'price_color' => 'text-blue-600',
            'note' => 'Fitur terlengkap untuk bisnis aktif',
            'perks' => [
            'Produk unlimited',
            'Payment Gateway (VA, E-Wallet, Kartu)',
            'Ongkir otomatis via RajaOngkir',
            'Notifikasi order via Email & WA',
            'Stok real-time + alert menipis',
            'Kupon, voucher & flash sale',
            'Database member & ulasan produk',
            'Google Analytics + ekspor Excel',
            'SEO lengkap & backup harian',
            'Garansi bug 60 hari',
            ],
            'btn' => 'bg-blue-600 hover:bg-blue-700 text-white shadow-lg shadow-blue-200',
            'wa' => 'Paket%20E-Commerce%20Professional',
            ],
            [
            'badge' => 'Mulai Rp 12jt',
            'badge_bg' => 'bg-slate-700 text-white',
            'ring' => 'border border-slate-200',
            'title' => 'Enterprise / B2B',
            'tagline' => 'Platform berskala besar, fitur kustom',
            'price' => 'Custom',
            'price_color' => 'text-slate-900',
            'note' => 'Harga sesuai kebutuhan',
            'perks' => [
            'Semua fitur Professional',
            'Multi-warehouse & multi-cabang',
            'Sistem reseller & affiliate',
            'Integrasi API ERP/CRM',
            'Facebook Pixel & Google Tag Manager',
            'Notifikasi abandoned cart',
            'Dedicated server & SLA 99,9%',
            'Dedicated Project Manager',
            'Garansi bug 90 hari',
            'Free maintenance 3 bulan',
            ],
            'btn' => 'border-2 border-slate-800 text-slate-800 hover:bg-slate-800 hover:text-white',
            'wa' => 'Paket%20E-Commerce%20Enterprise',
            ],
            ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-7 items-start">
                @foreach($cards as $i => $c)
                <article class="bg-white rounded-3xl {{ $c['ring'] }} flex flex-col relative overflow-hidden"
                    data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">

                    @if(!empty($c['badge']))
                    <div
                        class="absolute top-0 right-0 {{ $c['badge_bg'] }} text-[10px] px-4 py-1.5 rounded-bl-xl font-bold uppercase tracking-wider">
                        {{ $c['badge'] }}
                    </div>
                    @endif

                    <div class="p-6 md:p-7 flex flex-col flex-grow {{ !empty($c['badge']) ? 'pt-9' : '' }}">

                        <h3 class="text-base font-extrabold text-slate-900 mb-1">{{ $c['title'] }}</h3>
                        <p class="text-xs text-slate-500 mb-4">{{ $c['tagline'] }}</p>

                        <div class="mb-1">
                            <span class="text-3xl font-extrabold {{ $c['price_color'] }}">{{ $c['price'] }}</span>
                        </div>
                        <p class="text-[11px] text-slate-400 font-medium mb-5">{{ $c['note'] }}</p>

                        <ul class="space-y-2.5 flex-grow mb-6">
                            @foreach($c['perks'] as $perk)
                            <li class="flex items-start gap-2.5 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-check text-blue-600 text-[11px] mt-0.5 shrink-0"
                                    aria-hidden="true"></i>
                                {{ $perk }}
                            </li>
                            @endforeach
                        </ul>

                        <a href="https://wa.me/6285865405330?text=Halo%20Cakra%2C%20saya%20tertarik%20dengan%20{{ $c['wa'] }}"
                            target="_blank" rel="noopener noreferrer"
                            class="block w-full py-3.5 px-5 text-center rounded-2xl {{ $c['btn'] }} font-bold text-sm transition-all duration-200">
                            @if($c['price'] === 'Custom') Diskusi dengan Tim Ahli @else Pilih Paket Ini @endif
                        </a>

                    </div>
                </article>
                @endforeach
            </div>

            <div class="mt-8 text-center" data-aos="fade-up">
                <p class="text-slate-500 text-sm">Belum yakin pilih paket mana? <a
                        href="https://wa.me/6285865405330?text=Halo%20Cakra%2C%20saya%20mau%20konsultasi%20pilih%20paket%20e-commerce%20yang%20tepat."
                        target="_blank" rel="noopener noreferrer"
                        class="text-blue-600 font-semibold hover:underline">Konsultasi gratis dulu →</a></p>
            </div>

        </div>
    </section>

    {{-- ================================================================
     SECTION 4: FAQ
================================================================ --}}
    <section class="py-20 bg-white" x-data="faqFiturEcommerce()">
        <div class="max-w-3xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-12" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 mb-4">
                    Pertanyaan Umum Seputar <span class="text-blue-600">Paket & Harga</span>
                </h2>
                <p class="text-slate-500 text-sm">Semua yang perlu Anda ketahui sebelum memutuskan pilihan paket.</p>
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

                        <div class="overflow-hidden transition-all duration-300 ease-in-out"
                            :style="selected === faq.id ? 'max-height: 400px; opacity: 1;' : 'max-height: 0px; opacity: 0;'"
                            itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="px-5 md:px-6 pb-5 md:pb-6 text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-4"
                                x-text="faq.answer" itemprop="text">
                            </div>
                        </div>

                    </div>
                </template>
            </div>

            <div class="mt-8 text-center" data-aos="fade-up">
                <p class="text-slate-500 text-sm mb-4">Masih ragu memilih paket yang tepat?</p>
                <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20konsultasi%20paket%20e-commerce%20yang%20sesuai%20bisnis%20saya."
                    target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 bg-blue-600 text-white px-7 py-3.5 rounded-xl font-semibold hover:bg-blue-700 transition text-sm shadow-lg shadow-blue-200">
                    <i class="fa-brands fa-whatsapp text-lg" aria-hidden="true"></i>
                    Konsultasi Gratis via WhatsApp
                </a>
            </div>

        </div>
    </section>

    {{-- ================================================================
     SECTION 5: CTA
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
                    <h2 class="text-3xl lg:text-5xl font-bold mb-4">
                        Siap Punya Website Profesional untuk Bisnis Anda?
                    </h2>
                    <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">
                        Konsultasi pertama gratis, tanpa syarat. Ceritakan kebutuhan bisnis Anda dan kami siapkan
                        solusinya.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20konsultasi%20gratis%20untuk%20pembuatan%20website%20bisnis%20saya."
                            target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center justify-center gap-2 px-10 py-4 bg-white text-blue-600 font-bold rounded-xl shadow-lg hover:bg-blue-50 transition text-base">
                            <i class="fa-brands fa-whatsapp text-emerald-500 text-lg" aria-hidden="true"></i>
                            Mulai Konsultasi Sekarang
                        </a>
                        <a href="{{ url('/layanan/web-ecommerce') }}"
                            class="inline-flex items-center justify-center gap-2 px-10 py-4 border-2 border-white/40 text-white font-bold rounded-xl hover:bg-white/10 transition text-base">
                            Kembali ke Halaman E-Commerce
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
    function faqFiturEcommerce() {
        const rawFaqs = @json($faqsData);
        return {
            selected: null,
            toggle(id) {
                this.selected = this.selected === id ? null : id;
            },
            faqs: rawFaqs.map((item, i) => ({
                id: i + 1,
                question: item.question,
                answer: item.answer,
            }))
        };
    }
    </script>
    @endpush

</x-layout.app>
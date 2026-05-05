<x-layout.app>

    @php
    $title = 'Jasa Pembuatan Website Profesional untuk UMKM | Cakra Inovasi Digital';
    $metaDescription = 'Cakra Inovasi Digital — jasa pembuatan website profesional, toko online, company profile, sistem
    manajemen bisnis (ERP), dan
    kasir digital untuk UMKM. Harga transparan, teknologi modern, support purna jual.';
    $metaKeywords = 'jasa pembuatan website, website UMKM, toko online, company profile, kasir digital, sistem
    manajemen (ERP), bisnis web developer
    Magelang, Jawa Tengah';
    $ogType = 'website';
    @endphp

    @php
    $faqsData = [
    ['question' => 'Bagaimana tahapan pengerjaan proyek website di Cakra Inovasi Digital?', 'answer' => 'Kami bekerja
    melalui 5 tahap: (1) Konsultasi kebutuhan dan deal kontrak, (2) Pembuatan konsep desain visual, (3) Proses coding
    sistem, (4) Testing dan revisi, (5) Go-Live dan pelatihan admin.'],
    ['question' => 'Apa saja yang saya dapatkan setelah website selesai dibuat?', 'answer' => 'Anda mendapatkan akses
    penuh Dashboard Admin, domain (.com/.id) dan hosting aktif 1 tahun, sertifikat SSL (HTTPS), dan video panduan
    operasional sistem.'],
    ['question' => 'Bagaimana sistem pembayaran jasa pembuatan website?', 'answer' => 'Kami menggunakan sistem 3 termin:
    DP saat deal kontrak, termin progres setelah desain disetujui, dan pelunasan setelah website selesai dan siap
    dipublish.'],
    ['question' => 'Apakah ada layanan after sales setelah website jadi?', 'answer' => 'Ya. Kami memberikan garansi
    perbaikan bug/error, konsultasi teknis gratis, pemantauan server dan backup, serta update panduan fitur baru.'],
    ['question' => 'Berapa kali revisi yang dapat dilakukan?', 'answer' => 'Revisi minor pada tahap desain dapat
    dilakukan hingga deal. Pada tahap coding, revisi mencakup perubahan fungsi dan konten (bukan perombakan
    struktur).'],
    ['question' => 'Apakah website bisa diakses dan dikelola dari HP atau tablet?', 'answer' => 'Sangat bisa. Sistem
    berbasis web responsif yang dapat diakses via Android dan iOS, mendukung laptop, PC kasir, serta printer thermal
    Bluetooth maupun USB.'],
    ['question' => 'Apakah saya bisa update konten website sendiri setelah website jadi?', 'answer' => 'Ya. Kami
    menyediakan Dashboard Admin yang user-friendly sehingga Anda bisa menambah artikel, galeri, atau mengubah harga
    layanan kapan saja tanpa keahlian teknis.'],
    ['question' => 'Bagaimana jika saya atau karyawan kesulitan menggunakan sistem?', 'answer' => 'Kami menyediakan
    video tutorial lengkap, konsultasi teknis gratis, dan buku panduan PDF untuk memastikan tim Anda bisa mengoperasikan
    sistem dengan lancar.'],
    ];
    @endphp

    @push('schema')
    <x-faq-schema :faqs="$faqsData" />
    @endpush


    {{-- ================================================================
         SECTION 1: HERO
         Mobile: kolom teks full-width, stats grid 2x2 tetap tapi lebih
         kompak, tombol stack vertikal di layar kecil.
    ================================================================ --}}
    <section class="pt-28 md:pt-36 pb-16 md:pb-20 bg-white overflow-hidden">
        <div class="max-w-6xl mx-auto px-5 lg:px-10">
            <div class="flex flex-col md:flex-row items-center gap-10 md:gap-12">

                {{-- Kolom Teks --}}
                <div class="w-full md:w-1/2" data-aos="fade-right">
                    <span
                        class="bg-blue-50 text-blue-700 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                        Teman Tumbuh UMKM Indonesia
                    </span>

                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold mt-4 mb-4 leading-tight text-slate-900">
                        Jasa Pembuatan Website<br>
                        <span class="text-blue-600">Profesional untuk UMKM</span>
                    </h1>

                    <p class="text-base md:text-lg text-slate-600 mb-7 leading-relaxed">
                        Capek urus catatan manual yang sering selisih? Mau punya toko online tapi bingung mulainya?
                        <strong>Cakra Inovasi Digital</strong> hadir untuk mendampingi UMKM go-digital — simpel,
                        transparan, dan harga bersahabat.
                    </p>

                    {{-- CTA Hero: hanya 1 tombol + 1 link sekunder --}}
                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20konsultasi%20gratis%20soal%20pembuatan%20website%20untuk%20bisnis%20saya."
                            target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center justify-center gap-2 bg-blue-600 text-white px-7 py-3.5 rounded-2xl font-bold hover:bg-blue-700 transition shadow-lg shadow-blue-200 text-sm md:text-base">
                            <i class="fa-brands fa-whatsapp text-lg" aria-hidden="true"></i>
                            Konsultasi Gratis via WhatsApp
                        </a>
                    </div>

                    {{-- Trust Badges --}}
                    <div class="mt-7 flex flex-wrap items-center gap-4 md:gap-5 text-xs md:text-sm text-slate-500">
                        <span class="flex items-center gap-1.5">
                            <i class="fa-solid fa-headset text-blue-500" aria-hidden="true"></i> Garansi Support
                        </span>
                        <span class="flex items-center gap-1.5">
                            <i class="fa-solid fa-tags text-blue-500" aria-hidden="true"></i> Harga Transparan
                        </span>
                        <span class="flex items-center gap-1.5">
                            <i class="fa-solid fa-mobile-screen text-blue-500" aria-hidden="true"></i> Responsif di HP
                        </span>
                    </div>
                </div>

                {{-- Kolom Stats --}}
                {{--
                    Mobile: muncul di bawah teks, padding dikurangi,
                    teks angka sedikit lebih kecil agar muat di layar 375px.
                --}}
                <div class="w-full md:w-1/2" data-aos="fade-left">
                    <div
                        class="bg-gradient-to-br from-blue-50 to-slate-100 rounded-[32px] md:rounded-[40px] flex items-center justify-center p-6 md:p-10">
                        <div class="w-full text-center">
                            <div class="grid grid-cols-2 gap-3 md:gap-4 mb-5">
                                <div
                                    class="bg-white rounded-2xl p-4 md:p-5 shadow-sm border border-slate-100 text-left">
                                    <p class="text-2xl md:text-3xl font-extrabold text-blue-600">50+</p>
                                    <p class="text-xs text-slate-500 mt-1">Proyek Selesai</p>
                                </div>
                                <div
                                    class="bg-white rounded-2xl p-4 md:p-5 shadow-sm border border-slate-100 text-left">
                                    <p class="text-2xl md:text-3xl font-extrabold text-emerald-600">98%</p>
                                    <p class="text-xs text-slate-500 mt-1">Klien Puas</p>
                                </div>
                                <div
                                    class="bg-white rounded-2xl p-4 md:p-5 shadow-sm border border-slate-100 text-left">
                                    <p class="text-2xl md:text-3xl font-extrabold text-orange-500">3+</p>
                                    <p class="text-xs text-slate-500 mt-1">Tahun Pengalaman</p>
                                </div>
                                <div
                                    class="bg-white rounded-2xl p-4 md:p-5 shadow-sm border border-slate-100 text-left">
                                    <p class="text-2xl md:text-3xl font-extrabold text-purple-600">24/7</p>
                                    <p class="text-xs text-slate-500 mt-1">Website Online</p>
                                </div>
                            </div>
                            <p class="text-slate-500 text-xs md:text-sm font-medium italic">"Partner diskusi, bukan
                                sekadar vendor."</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ================================================================
         SECTION 2: LAYANAN
         Mobile: kartu full-width 1 kolom, emoji tidak terlalu besar.
    ================================================================ --}}
    <section id="layanan" class="py-16 md:py-20 bg-slate-50">
        <div class="max-w-6xl mx-auto px-5 lg:px-10">

            <div class="text-center mb-12 md:mb-16" data-aos="fade-up">
                <span
                    class="text-blue-600 font-bold bg-blue-50 px-4 py-1.5 rounded-full text-xs uppercase tracking-wider">
                    Solusi Digital untuk Bisnis Anda
                </span>
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold mt-4 mb-3 text-slate-900">
                    Layanan Pembuatan Website Kami
                </h2>
                <p class="text-slate-500 max-w-2xl mx-auto text-sm md:text-base">
                    Kami urus teknologinya, Anda fokus kembangkan usahanya. Semua transparan dan tanpa biaya
                    tersembunyi.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">

                <article
                    class="p-6 md:p-8 rounded-3xl bg-blue-50/60 border border-blue-100 hover:shadow-lg transition group"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="text-3xl md:text-4xl mb-4 group-hover:scale-110 transition-transform inline-block"
                        aria-hidden="true">🌐</div>
                    <h3 class="text-lg md:text-xl font-bold mb-3 text-slate-900">Website Toko Online & Company Profile
                    </h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">
                        Tampil profesional di Google dengan website yang cantik, mobile-friendly, dan membantu Anda
                        mendapatkan lebih banyak pelanggan baru.
                    </p>
                    <ul class="text-xs text-slate-500 space-y-2" aria-label="Keunggulan layanan website">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-blue-600"
                                aria-hidden="true"></i> Konsultasi gratis tanpa syarat</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-blue-600"
                                aria-hidden="true"></i> Sudah termasuk domain & hosting</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-blue-600"
                                aria-hidden="true"></i> SEO-ready dari hari pertama</li>
                    </ul>
                </article>

                <article
                    class="p-6 md:p-8 rounded-3xl bg-emerald-50/60 border border-emerald-100 hover:shadow-lg transition group"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="text-3xl md:text-4xl mb-4 group-hover:scale-110 transition-transform inline-block"
                        aria-hidden="true">🛠️</div>
                    <h3 class="text-lg md:text-xl font-bold mb-3 text-slate-900">Sistem & Aplikasi Khusus Bisnis</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">
                        Punya alur kerja unik? Kami bangun sistem yang mengikuti cara kerja bisnis Anda, bukan
                        sebaliknya.
                    </p>
                    <ul class="text-xs text-slate-500 space-y-2" aria-label="Keunggulan layanan sistem khusus">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-600"
                                aria-hidden="true"></i> Harga sesuai budget UMKM</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-600"
                                aria-hidden="true"></i> Didampingi hingga tim bisa pakai</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-600"
                                aria-hidden="true"></i> Bisa dikembangkan seiring tumbuh</li>
                    </ul>
                </article>

                <article
                    class="p-6 md:p-8 rounded-3xl bg-orange-50/60 border border-orange-100 hover:shadow-lg transition group"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="text-3xl md:text-4xl mb-4 group-hover:scale-110 transition-transform inline-block"
                        aria-hidden="true">📑</div>
                    <h3 class="text-lg md:text-xl font-bold mb-3 text-slate-900">Kasir Digital & Manajemen Stok</h3>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">
                        Tinggalkan catatan manual yang rawan selisih. Pantau stok dan laporan penjualan harian dari HP
                        kapan saja.
                    </p>
                    <ul class="text-xs text-slate-500 space-y-2" aria-label="Keunggulan kasir digital">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-orange-600"
                                aria-hidden="true"></i> Laporan otomatis real-time</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-orange-600"
                                aria-hidden="true"></i> Pantau stok lewat HP</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-orange-600"
                                aria-hidden="true"></i> Support QRIS & printer thermal</li>
                    </ul>
                </article>

            </div>

            <div class="text-center mt-8 md:mt-10" data-aos="fade-up">
                <a href="/layanan"
                    class="inline-flex items-center gap-2 text-blue-600 font-semibold hover:underline underline-offset-4 transition text-sm md:text-base">
                    Lihat semua jenis layanan kami
                    <i class="fa-solid fa-arrow-right text-sm" aria-hidden="true"></i>
                </a>
            </div>

        </div>
    </section>


    {{-- ================================================================
         SECTION 3: PROSES KERJA
         Mobile: stepper vertikal (sudah ada).
         PERUBAHAN: CTA bawah diubah dari tombol besar → link teks
         biasa dengan ikon. Alasan: terlalu dekat dengan Hero (3 scroll),
         pengunjung belum cukup "dipanaskan" untuk tombol besar kedua.
         CTA asli tetap ada di section FAQ dan CTA Akhir.
    ================================================================ --}}
    <section id="proses-kerja" class="py-16 md:py-24 bg-white overflow-hidden">
        <div class="max-w-6xl mx-auto px-5 lg:px-10">

            {{-- Header --}}
            <div class="text-center mb-14 md:mb-20" data-aos="fade-up">
                <span
                    class="inline-block bg-blue-50 text-blue-700 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                    Transparan dari Awal
                </span>
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-4">
                    Bagaimana Kami Bekerja?
                </h2>
                <p class="text-slate-500 max-w-xl mx-auto text-sm md:text-base">
                    Tidak ada yang disembunyikan. Dari konsultasi pertama hingga website live, setiap langkah kami
                    lakukan bersama Anda.
                </p>
            </div>

            {{-- ── Desktop: Stepper Horizontal ── --}}
            <div class="hidden md:block relative" data-aos="fade-up" data-aos-delay="100">

                {{-- Connector line --}}
                <div class="absolute top-[52px] left-[10%] right-[10%] h-0.5 bg-slate-200 z-0" aria-hidden="true">
                    <div
                        class="proses-progress-line h-full bg-gradient-to-r from-blue-400 to-blue-600 rounded-full w-0">
                    </div>
                </div>

                <div class="grid grid-cols-5 gap-4 relative z-10">
                    @php
                    $steps = [
                    ['icon' => 'fa-comments', 'color' => 'blue', 'title' => 'Konsultasi', 'sub' => 'Gratis & tanpa
                    syarat', 'detail' => 'Ceritakan kebutuhan bisnis Anda. Kami analisis, lalu susun solusi yang tepat
                    bersama-sama.'],
                    ['icon' => 'fa-pen-ruler', 'color' => 'violet', 'title' => 'Desain Visual', 'sub' => 'Revisi hingga
                    deal', 'detail' => 'Kami buat mockup tampilan website. Anda bebas revisi minor hingga desain
                    benar-benar sesuai visi.'],
                    ['icon' => 'fa-code', 'color' => 'emerald', 'title' => 'Coding Sistem', 'sub' => 'Teknologi modern',
                    'detail' => 'Proses pengembangan dimulai. Fitur dibangun sesuai spesifikasi yang sudah disepakati di
                    kontrak.'],
                    ['icon' => 'fa-magnifying-glass-chart','color' => 'orange', 'title' => 'Testing & Revisi', 'sub' =>
                    'Teliti sebelum live', 'detail' => 'Pengujian menyeluruh di berbagai perangkat. Semua bug dan
                    permintaan perubahan diselesaikan dulu.'],
                    ['icon' => 'fa-rocket', 'color' => 'blue', 'title' => 'Go-Live & Training','sub' => 'Siap
                    beroperasi', 'detail' => 'Website live! Kami training tim Anda, serahkan akses, dan tetap standby
                    untuk pertanyaan pasca-launch.'],
                    ];
                    $colorMap = [
                    'blue' => ['ring' => 'ring-blue-200', 'bg' => 'bg-blue-100', 'icon' => 'text-blue-600', 'badge' =>
                    'bg-blue-600', 'hover' => 'group-hover:bg-blue-600', 'hoverbg' => 'group-hover:bg-blue-50'],
                    'violet' => ['ring' => 'ring-violet-200', 'bg' => 'bg-violet-100', 'icon' => 'text-violet-600',
                    'badge' => 'bg-violet-600', 'hover' => 'group-hover:bg-violet-600', 'hoverbg' =>
                    'group-hover:bg-violet-50'],
                    'emerald' => ['ring' => 'ring-emerald-200', 'bg' => 'bg-emerald-100', 'icon' => 'text-emerald-600',
                    'badge' => 'bg-emerald-600', 'hover' => 'group-hover:bg-emerald-600', 'hoverbg' =>
                    'group-hover:bg-emerald-50'],
                    'orange' => ['ring' => 'ring-orange-200', 'bg' => 'bg-orange-100', 'icon' => 'text-orange-600',
                    'badge' => 'bg-orange-600', 'hover' => 'group-hover:bg-orange-600', 'hoverbg' =>
                    'group-hover:bg-orange-50'],
                    ];
                    @endphp

                    @foreach($steps as $i => $step)
                    @php $c = $colorMap[$step['color']]; @endphp
                    <div class="group flex flex-col items-center text-center cursor-default" data-aos="fade-up"
                        data-aos-delay="{{ 100 + $i * 100 }}">

                        <div class="relative mb-6">
                            <span
                                class="absolute -top-1 -right-1 w-5 h-5 rounded-full {{ $c['badge'] }} text-white text-[10px] font-extrabold flex items-center justify-center z-10 shadow-sm">
                                {{ $i + 1 }}
                            </span>
                            <div class="w-[104px] h-[104px] rounded-full {{ $c['bg'] }} {{ $c['ring'] }} ring-4
                                        flex items-center justify-center
                                        {{ $c['hover'] }} transition-all duration-300 shadow-sm
                                        group-hover:shadow-lg group-hover:scale-105">
                                <i class="fa-solid {{ $step['icon'] }} text-2xl {{ $c['icon'] }} group-hover:text-white transition-colors duration-300"
                                    aria-hidden="true"></i>
                            </div>
                        </div>

                        <h3
                            class="font-extrabold text-slate-900 text-sm mb-1 group-hover:text-blue-600 transition-colors">
                            {{ $step['title'] }}
                        </h3>
                        <p class="text-xs text-slate-400 mb-3 font-medium">{{ $step['sub'] }}</p>

                        <div
                            class="max-h-0 overflow-hidden group-hover:max-h-24 transition-all duration-500 ease-in-out w-full">
                            <div
                                class="{{ $c['hoverbg'] }} rounded-2xl px-3 py-3 text-xs text-slate-600 leading-relaxed border border-slate-100 transition-colors duration-300">
                                {{ $step['detail'] }}
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>

            {{-- ── Mobile: Stepper Vertikal ── --}}
            <div class="md:hidden relative pl-10">

                <div class="absolute left-[18px] top-0 bottom-0 w-0.5 bg-slate-200" aria-hidden="true">
                    <div
                        class="proses-progress-line-v w-full bg-gradient-to-b from-blue-400 to-blue-600 rounded-full h-0">
                    </div>
                </div>

                @foreach($steps as $i => $step)
                @php $c = $colorMap[$step['color']]; @endphp
                <div class="relative flex gap-4 mb-6 last:mb-0" data-aos="fade-right" data-aos-delay="{{ $i * 80 }}">

                    <div class="absolute -left-10 top-2 w-9 h-9 rounded-full {{ $c['bg'] }} {{ $c['ring'] }} ring-4
                                flex items-center justify-center shrink-0 shadow-sm z-10">
                        <i class="fa-solid {{ $step['icon'] }} text-sm {{ $c['icon'] }}" aria-hidden="true"></i>
                    </div>

                    <div class="flex-1 bg-slate-50 rounded-2xl p-4 border border-slate-100">
                        <div class="flex items-start gap-2 mb-1.5">
                            <span
                                class="w-5 h-5 rounded-full {{ $c['badge'] }} text-white text-[10px] font-extrabold flex items-center justify-center shrink-0 mt-0.5">
                                {{ $i + 1 }}
                            </span>
                            <div>
                                <h3 class="font-extrabold text-slate-900 text-sm leading-tight">{{ $step['title'] }}
                                </h3>
                                <p class="text-[11px] text-slate-400 font-medium mt-0.5">{{ $step['sub'] }}</p>
                            </div>
                        </div>
                        <p class="text-xs text-slate-600 leading-relaxed pl-7">{{ $step['detail'] }}</p>
                    </div>

                </div>
                @endforeach
            </div>

            {{--
                CTA Proses Kerja — DIUBAH dari tombol besar ke link teks.
                Alasan: Ini adalah CTA pertama yang ditemui pengunjung (Hero
                sudah dinonaktifkan tombolnya). Terlalu agresif jika langsung
                tombol besar penuh. Link teks tetap mengundang tanpa mendorong.
            --}}

            <div class="mt-8 md:mt-10 text-center" data-aos="fade-up">
                <p class="text-slate-500 text-sm mb-4">Masih ada pertanyaan lain?</p>
                <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20tahu%20lebih%20lanjut%20soal%20proses%20pembuatan%20website."
                    target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 bg-emerald-500 text-white px-5 md:px-6 py-2.5 md:py-3 rounded-xl font-semibold hover:bg-emerald-600 transition text-sm">
                    <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                    Tanya Langsung via WhatsApp
                </a>
            </div>

        </div>
    </section>


    {{-- ================================================================
         SECTION 4: PORTOFOLIO
         Mobile: border-b header diperbaiki agar tidak terlalu sempit,
         kartu full-width 1 kolom.
    ================================================================ --}}
    <section id="portofolio" class="py-16 md:py-24 bg-white relative overflow-hidden">
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-64 h-64 rounded-full bg-blue-100 opacity-40 blur-3xl pointer-events-none"
            aria-hidden="true"></div>

        <div class="max-w-7xl mx-auto px-5 lg:px-10 relative z-10">

            <div
                class="flex flex-col md:flex-row justify-between items-start md:items-end mb-10 md:mb-14 gap-5 border-b border-slate-200 pb-7 md:pb-8">
                <div class="md:w-2/3" data-aos="fade-right">
                    <span
                        class="text-blue-600 font-semibold tracking-wider uppercase text-xs md:text-sm mb-2 block">Hasil
                        Nyata</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                        Portofolio Website yang Kami Bangun
                    </h2>
                    <p class="text-slate-600 leading-relaxed max-w-2xl text-sm md:text-base">
                        Lihat bagaimana kami membantu para pemilik usaha bertransformasi digital — dari katalog produk
                        hingga sistem manajemen yang efisien.
                    </p>
                </div>
                <div data-aos="fade-left" class="shrink-0">
                    <a href="/portofolio"
                        class="group inline-flex items-center gap-2 px-5 py-2.5 bg-white border border-slate-300 rounded-full text-slate-700 font-semibold hover:border-blue-600 hover:text-blue-600 transition-all shadow-sm hover:shadow text-sm">
                        Lihat Semua Proyek
                        <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"
                            aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">

                <article
                    class="group flex flex-col bg-white rounded-3xl p-4 shadow-sm hover:shadow-xl transition-all duration-500 border border-slate-100"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="aspect-video bg-slate-100 rounded-2xl mb-4 overflow-hidden relative">
                        <div class="absolute inset-0 flex items-center justify-center text-slate-400 text-sm font-medium"
                            aria-hidden="true">
                            Screenshot Website Company Profile
                        </div>
                        <span
                            class="absolute top-3 left-3 bg-white/90 backdrop-blur text-slate-800 text-[10px] font-bold px-2.5 py-1 rounded-md shadow-sm">Website</span>
                    </div>
                    <div class="px-2 flex-grow">
                        <h3
                            class="text-base md:text-lg font-bold text-slate-900 mb-2 group-hover:text-blue-600 transition-colors">
                            Website Company Profile Profesional
                        </h3>
                        <p class="text-slate-500 text-sm mb-4 line-clamp-2">
                            Website perusahaan dengan galeri visual, halaman layanan, dan dashboard admin mandiri untuk
                            update konten sendiri.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
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
                    <div class="aspect-video bg-emerald-50 rounded-2xl mb-4 overflow-hidden relative">
                        <div class="absolute inset-0 flex items-center justify-center text-emerald-400 text-sm font-medium"
                            aria-hidden="true">
                            Screenshot Katalog Produk Digital
                        </div>
                        <span
                            class="absolute top-3 left-3 bg-white/90 backdrop-blur text-slate-800 text-[10px] font-bold px-2.5 py-1 rounded-md shadow-sm">Katalog
                            Digital</span>
                    </div>
                    <div class="px-2 flex-grow">
                        <h3
                            class="text-base md:text-lg font-bold text-slate-900 mb-2 group-hover:text-emerald-600 transition-colors">
                            Katalog Produk Digital + WhatsApp
                        </h3>
                        <p class="text-slate-500 text-sm mb-4 line-clamp-2">
                            Katalog online responsif dengan kategori produk lengkap dan tombol direct-chat WhatsApp
                            untuk mempercepat closing.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
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
                    <div class="aspect-video bg-orange-50 rounded-2xl mb-4 overflow-hidden relative">
                        <div class="absolute inset-0 flex items-center justify-center text-orange-400 text-sm font-medium"
                            aria-hidden="true">
                            Screenshot Sistem Kasir / POS
                        </div>
                        <span
                            class="absolute top-3 left-3 bg-white/90 backdrop-blur text-slate-800 text-[10px] font-bold px-2.5 py-1 rounded-md shadow-sm">Kasir
                            / POS</span>
                    </div>
                    <div class="px-2 flex-grow">
                        <h3
                            class="text-base md:text-lg font-bold text-slate-900 mb-2 group-hover:text-orange-600 transition-colors">
                            Sistem Kasir & Point of Sale (POS)
                        </h3>
                        <p class="text-slate-500 text-sm mb-4 line-clamp-2">
                            Kasir digital modern dengan manajemen stok real-time, laporan keuangan harian, dan dukungan
                            QRIS.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
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
         SECTION 5: KEUNGGULAN
         Mobile: grid 2 kolom tetap (sudah cukup kompak di sm:grid-cols-2).
    ================================================================ --}}
    <section id="keunggulan" class="py-16 md:py-24 bg-slate-900 text-white overflow-hidden relative">
        <div class="absolute top-0 left-0 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2 pointer-events-none"
            aria-hidden="true"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-emerald-600/10 rounded-full blur-3xl translate-x-1/3 translate-y-1/3 pointer-events-none"
            aria-hidden="true"></div>

        <div class="max-w-7xl mx-auto px-5 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 md:gap-16 items-center">

                <div data-aos="fade-right">
                    <span
                        class="text-blue-400 font-semibold tracking-wider uppercase text-xs md:text-sm mb-3 block">Kenapa
                        Pilih Kami?</span>
                    <h2 class="text-2xl md:text-3xl lg:text-5xl font-extrabold mb-5 leading-tight">
                        Keunggulan Jasa Website<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-emerald-400">
                            Cakra Inovasi Digital
                        </span>
                    </h2>
                    <p class="text-slate-400 text-base md:text-lg mb-7 leading-relaxed max-w-md">
                        Kami tidak sekadar membuat website. Kami membangun sistem digital yang dirancang khusus untuk
                        mempercepat pertumbuhan bisnis Anda.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-3 mt-6">
                        <a href="/hubungi-kami"
                            class="inline-flex items-center justify-center gap-2 px-7 py-3 bg-blue-600 hover:bg-blue-500 text-white font-bold rounded-full transition-all shadow-lg shadow-blue-500/30 text-sm">
                            Mulai Konsultasi Gratis <i class="fa-solid fa-arrow-right text-sm" aria-hidden="true"></i>
                        </a>
                        <a href="/tentang"
                            class="inline-flex items-center justify-center gap-2 px-7 py-3 border-2 border-blue-600 text-blue-400 hover:bg-blue-600 hover:text-white font-bold rounded-full transition-all text-sm">
                            Tentang Kami
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 md:gap-6">

                    <div class="group p-5 md:p-6 bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-2xl hover:bg-slate-800 hover:border-blue-500/50 transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="w-10 md:w-12 h-10 md:h-12 bg-blue-500/10 text-blue-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform"
                            aria-hidden="true">
                            <i class="fa-solid fa-code text-lg md:text-xl"></i>
                        </div>
                        <h3 class="text-sm md:text-lg font-bold mb-2 text-slate-100">Teknologi Modern & Terkini</h3>
                        <p class="text-slate-400 text-xs md:text-sm leading-relaxed">
                            Dibangun dengan framework terkini — website Anda cepat, aman, dan mudah dikembangkan.
                        </p>
                    </div>

                    <div class="group p-5 md:p-6 bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-2xl hover:bg-slate-800 hover:border-emerald-500/50 transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="w-10 md:w-12 h-10 md:h-12 bg-emerald-500/10 text-emerald-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform"
                            aria-hidden="true">
                            <i class="fa-solid fa-mobile-screen text-lg md:text-xl"></i>
                        </div>
                        <h3 class="text-sm md:text-lg font-bold mb-2 text-slate-100">Responsif di Semua Perangkat</h3>
                        <p class="text-slate-400 text-xs md:text-sm leading-relaxed">
                            Tampilan optimal di HP, tablet, maupun komputer.
                        </p>
                    </div>

                    <div class="group p-5 md:p-6 bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-2xl hover:bg-slate-800 hover:border-orange-500/50 transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="300">
                        <div class="w-10 md:w-12 h-10 md:h-12 bg-orange-500/10 text-orange-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform"
                            aria-hidden="true">
                            <i class="fa-solid fa-tags text-lg md:text-xl"></i>
                        </div>
                        <h3 class="text-sm md:text-lg font-bold mb-2 text-slate-100">Harga Transparan</h3>
                        <p class="text-slate-400 text-xs md:text-sm leading-relaxed">
                            Tidak ada kejutan biaya di tengah jalan — semua disepakati di kontrak.
                        </p>
                    </div>

                    <div class="group p-5 md:p-6 bg-slate-800/50 backdrop-blur-sm border border-slate-700/50 rounded-2xl hover:bg-slate-800 hover:border-purple-500/50 transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="400">
                        <div class="w-10 md:w-12 h-10 md:h-12 bg-purple-500/10 text-purple-400 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform"
                            aria-hidden="true">
                            <i class="fa-solid fa-headset text-lg md:text-xl"></i>
                        </div>
                        <h3 class="text-sm md:text-lg font-bold mb-2 text-slate-100">Garansi Support Purna Jual</h3>
                        <p class="text-slate-400 text-xs md:text-sm leading-relaxed">
                            Dukungan teknis terus berjalan setelah serah terima.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>


    {{-- ================================================================
         SECTION 6: TESTIMONI (tidak berubah secara struktural)
    ================================================================ --}}
    <section id="testimoni" class="py-16 md:py-24 bg-white overflow-hidden" x-data="testimonialData()"
        aria-label="Testimoni klien">
        <div class="max-w-7xl mx-auto px-5 lg:px-10">
            <div class="text-center mb-12 md:mb-16" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900">Cerita Nyata dari Klien Kami
                </h2>
                <p class="text-slate-500 mt-4 max-w-2xl mx-auto text-base md:text-lg">
                    Bukan sekadar testimoni — bukti nyata bahwa kami serius mendampingi bisnis Anda tumbuh.
                </p>
            </div>
            <div class="relative">
                <div class="swiper testimonial-swiper">
                    <div class="swiper-wrapper">
                        <template x-for="item in testimonials" :key="item.id">
                            <div class="swiper-slide h-auto py-4 px-2">
                                <div
                                    :class="`p-6 md:p-8 rounded-3xl border h-full flex flex-col relative transition-all duration-300 shadow-sm hover:shadow-md ${item.bgColor} ${item.borderColor}`">
                                    <div :class="`text-4xl absolute top-4 right-6 opacity-20 ${item.quoteColor}`"
                                        aria-hidden="true">"</div>
                                    <p class="text-slate-700 text-sm md:text-base italic leading-relaxed mb-7 flex-grow"
                                        x-text="item.content"></p>
                                    <div class="flex items-center gap-3 mt-auto border-t border-black/5 pt-5">
                                        <div :class="`w-10 md:w-12 h-10 md:h-12 rounded-full flex items-center justify-center font-bold text-white shadow-sm flex-shrink-0 text-sm ${item.avatarBg}`"
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
                <div class="testimonial-pagination flex justify-center gap-2 mt-8 md:mt-10" role="tablist"
                    aria-label="Navigasi testimoni"></div>
            </div>
        </div>
    </section>


    {{-- ================================================================
         SECTION 7: TEKNOLOGI
         Mobile: grid 4 kolom di sm, 2 kolom di xs — sudah bagus.
         Banner bawah: stack vertikal di mobile.
    ================================================================ --}}
    <section id="teknologi" class="py-16 md:py-24 bg-slate-50 overflow-hidden">
        <div class="max-w-6xl mx-auto px-5 lg:px-10">

            <div class="text-center mb-10 md:mb-14" data-aos="fade-up">
                <span
                    class="bg-blue-100 text-blue-700 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                    Teknologi Modern & Stabil
                </span>
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold mt-4 mb-3 text-slate-900">
                    Stack Teknologi yang Kami Gunakan
                </h2>
                <p class="text-slate-500 max-w-2xl mx-auto text-sm md:text-base">
                    Kombinasi teknologi terbaik untuk memastikan website Anda cepat, aman, dan mudah dikembangkan.
                </p>
            </div>

            @php
            $techStack = [
            ['src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg', 'alt' =>
            'Laravel — PHP Framework', 'label' => 'Laravel', 'hover' => 'group-hover:text-red-600'],
            ['src' => 'https://upload.wikimedia.org/wikipedia/commons/d/d5/Tailwind_CSS_Logo.svg', 'alt' => 'Tailwind
            CSS — Utility CSS', 'label' => 'Tailwind', 'hover' => 'group-hover:text-cyan-500'],
            ['src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/codeigniter/codeigniter-plain.svg', 'alt' =>
            'CodeIgniter — PHP Framework', 'label' => 'CodeIgniter', 'hover' => 'group-hover:text-orange-600'],
            ['src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg', 'alt' => 'React JS
            — JavaScript Library', 'label' => 'React JS', 'hover' => 'group-hover:text-cyan-400'],
            ['src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg', 'alt' => 'Node JS
            — JavaScript Runtime', 'label' => 'Node JS', 'hover' => 'group-hover:text-green-600'],
            ['src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg', 'alt' => 'MySQL —
            Relational Database', 'label' => 'MySQL', 'hover' => 'group-hover:text-blue-600'],
            ['src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg', 'alt' =>
            'JavaScript Modern (ES6+)', 'label' => 'JS Modern', 'hover' => 'group-hover:text-yellow-500'],
            ['src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg', 'alt' => 'PHP 8+ —
            Server Side Language', 'label' => 'PHP 8+', 'hover' => 'group-hover:text-indigo-600'],
            ];
            @endphp

            <div class="grid grid-cols-4 md:grid-cols-4 lg:grid-cols-8 gap-3 md:gap-6" data-aos="fade-up"
                data-aos-delay="200">
                @foreach($techStack as $tech)
                <div
                    class="group p-3 md:p-5 bg-white rounded-[20px] md:rounded-[28px] shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 flex flex-col items-center justify-center border border-slate-100">
                    <img src="{{ $tech['src'] }}" alt="{{ $tech['alt'] }}" loading="lazy" width="40" height="40"
                        class="w-7 md:w-10 h-7 md:h-10 mb-2 md:mb-3 grayscale group-hover:grayscale-0 transition-all">
                    <span
                        class="text-[9px] md:text-[10px] font-bold text-slate-400 {{ $tech['hover'] }} transition-colors text-center leading-tight">
                        {{ strtoupper($tech['label']) }}
                    </span>
                </div>
                @endforeach
            </div>

            <div class="mt-10 md:mt-14 p-6 md:p-8 bg-blue-600 rounded-[24px] md:rounded-[32px] text-white flex flex-col md:flex-row items-center justify-between gap-5 md:gap-6"
                data-aos="zoom-in">
                <div class="flex items-center gap-4 text-center md:text-left">
                    <div class="w-12 h-12 bg-white/20 rounded-2xl flex items-center justify-center text-2xl shrink-0"
                        aria-hidden="true">🚀</div>
                    <div>
                        <h3 class="font-bold text-sm md:text-base">Selalu Up-to-Date dengan Teknologi Terbaru</h3>
                        <p class="text-blue-100 text-xs md:text-sm mt-1">Kami memastikan sistem Anda menggunakan versi
                            teknologi terkini dan terpercaya.</p>
                    </div>
                </div>
                <a href="/portofolio"
                    class="whitespace-nowrap w-full md:w-auto text-center bg-white text-blue-600 px-5 py-2.5 rounded-xl font-bold text-sm hover:bg-blue-50 transition">
                    Lihat Hasil Kerja Kami
                </a>
            </div>

        </div>
    </section>


    {{-- ================================================================
         SECTION 8: FAQ
         Mobile: nomor urut lebih kecil, padding dikurangi sedikit.
    ================================================================ --}}
    <section id="faq" class="py-16 md:py-24 bg-white" x-data="faqSection()">
        <div class="max-w-3xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-12" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Pertanyaan Seputar <span class="text-blue-600">Jasa Website Kami</span>
                </h2>
                <p class="text-slate-600 text-sm md:text-base">Semua yang perlu Anda ketahui sebelum memulai kerja sama
                    bersama kami.</p>
            </div>

            <div class="space-y-2.5 md:space-y-3" data-aos="fade-up" data-aos-delay="100">
                <template x-for="(faq, index) in faqs" :key="faq.id">

                    <div class="faq-item group relative bg-white rounded-2xl overflow-hidden shadow-sm border transition-all duration-300"
                        :class="selected === faq.id ? 'border-blue-300 shadow-blue-100 shadow-md' : 'border-slate-200 hover:border-slate-300 hover:shadow-md'">

                        {{-- Garis aksen kiri --}}
                        <div class="absolute left-0 top-0 bottom-0 w-1 rounded-l-full transition-all duration-300"
                            :class="selected === faq.id ? 'bg-blue-500 opacity-100' : 'opacity-0'"></div>

                        {{-- Tombol pertanyaan --}}
                        <button @click="toggleFaq(faq.id, $event)" class="faq-btn w-full flex items-center gap-3 md:gap-4 px-4 md:px-6 py-4 md:py-5 text-left
                                       focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-400
                                       focus-visible:ring-inset relative overflow-hidden cursor-pointer"
                            :aria-expanded="selected === faq.id" :aria-controls="'faq-answer-' + faq.id">

                            {{-- Ripple --}}
                            <span class="faq-ripple absolute rounded-full bg-blue-100 opacity-0 pointer-events-none"
                                style="width:10px;height:10px;transform:scale(0);transition:transform 0.5s ease,opacity 0.5s ease;"></span>

                            {{-- Nomor urut --}}
                            <span class="shrink-0 w-6 md:w-7 h-6 md:h-7 rounded-full text-[10px] md:text-[11px] font-extrabold
                                         flex items-center justify-center transition-all duration-300"
                                :class="selected === faq.id ? 'bg-blue-600 text-white' : 'bg-slate-100 text-slate-400 group-hover:bg-slate-200'"
                                x-text="String(index + 1).padStart(2, '0')">
                            </span>

                            {{-- Teks pertanyaan --}}
                            <span
                                class="flex-1 font-bold text-sm md:text-base pr-3 md:pr-4 transition-colors duration-200"
                                :class="selected === faq.id ? 'text-blue-700' : 'text-slate-800'" x-text="faq.question">
                            </span>

                            {{-- Chevron --}}
                            <span
                                class="shrink-0 w-7 md:w-8 h-7 md:h-8 rounded-full flex items-center justify-center border transition-all duration-300"
                                :class="selected === faq.id ? 'bg-blue-600 border-blue-600 rotate-180' : 'bg-white border-slate-200 group-hover:border-slate-300'">
                                <i class="fa-solid fa-chevron-down text-[10px] md:text-[11px] transition-colors duration-200"
                                    :class="selected === faq.id ? 'text-white' : 'text-slate-400'"
                                    aria-hidden="true"></i>
                            </span>
                        </button>

                        {{-- Panel jawaban --}}
                        <div :id="'faq-answer-' + faq.id" class="faq-answer overflow-hidden"
                            :style="selected === faq.id ? 'max-height: 500px; opacity: 1;' : 'max-height: 0; opacity: 0;'">
                            <div class="px-4 md:px-6 pb-4 md:pb-5 pt-0">
                                <div class="border-t border-slate-100 mb-3 md:mb-4"></div>
                                <div class="pl-9 md:pl-11 text-sm text-slate-600 leading-relaxed" x-html="faq.answer">
                                </div>
                            </div>
                        </div>

                    </div>
                </template>
            </div>

            {{--
                CTA FAQ: tetap tombol emerald (berbeda warna dari CTA lain).
                Konteks sangat relevan — muncul persis setelah FAQ,
                pengunjung yang punya pertanyaan belum terjawab akan klik ini.
            --}}
            <div class="mt-8 md:mt-10 text-center" data-aos="fade-up">
                <p class="text-slate-500 text-sm mb-4">Masih ada pertanyaan lain?</p>
                <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ada%20pertanyaan%20seputar%20jasa%20website%20Anda."
                    target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 bg-emerald-500 text-white px-5 md:px-6 py-2.5 md:py-3 rounded-xl font-semibold hover:bg-emerald-600 transition text-sm">
                    <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                    Tanya Langsung via WhatsApp
                </a>
            </div>

        </div>
    </section>


    {{-- ================================================================
         SECTION 9: CTA AKHIR
         Mobile: padding lebih kecil, tombol stack vertikal.
    ================================================================ --}}
    <section class="py-16 md:py-20 bg-slate-50" aria-label="Ajakan untuk memulai proyek website">
        <div class="max-w-7xl mx-auto px-5 md:px-6">
            <div data-aos="zoom-in" data-aos-duration="800"
                class="bg-blue-600 rounded-[1.5rem] md:rounded-[2rem] p-8 md:p-12 lg:p-20 text-center relative overflow-hidden shadow-2xl">

                <div class="absolute inset-0 opacity-10" aria-hidden="true">
                    <div
                        class="absolute top-0 left-0 w-64 h-64 bg-white rounded-full -translate-x-1/2 -translate-y-1/2">
                    </div>
                    <div
                        class="absolute bottom-0 right-0 w-64 h-64 bg-white rounded-full translate-x-1/2 translate-y-1/2">
                    </div>
                </div>

                <div class="relative z-10 text-white">
                    <h2 class="text-2xl md:text-3xl lg:text-5xl font-bold mb-3 md:mb-4">
                        Siap Punya Website Profesional untuk Bisnis Anda?
                    </h2>
                    <p class="text-blue-100 text-base md:text-lg mb-7 md:mb-8 max-w-2xl mx-auto">
                        Konsultasi pertama gratis, tanpa syarat. Ceritakan kebutuhan bisnis Anda dan kami siapkan
                        solusinya.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-3 md:gap-4 justify-center">
                        <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20konsultasi%20untuk%20pembuatan%20website%20bisnis%20saya."
                            target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center justify-center gap-2 px-8 md:px-10 py-3.5 md:py-4 bg-white text-blue-600 font-bold rounded-xl shadow-lg hover:bg-blue-50 transition text-sm md:text-base">
                            <i class="fa-brands fa-whatsapp text-emerald-500 text-lg" aria-hidden="true"></i>
                            Mulai Konsultasi Sekarang
                        </a>
                        <a href="/portofolio"
                            class="inline-flex items-center justify-center gap-2 px-8 md:px-10 py-3.5 md:py-4 border-2 border-white/40 text-white font-bold rounded-xl hover:bg-white/10 transition text-sm md:text-base">
                            Lihat Portofolio Kami
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    @push('scripts')
    <script>
    const faqRichAnswers = {
        1: `Kami bekerja melalui 5 tahap profesional:
        <ul class="mt-3 space-y-2">
            <li class="flex items-center gap-2"><i class="fa-solid fa-1 text-[10px] bg-blue-100 text-blue-600 p-1 rounded" aria-hidden="true"></i> Konsultasi kebutuhan &amp; deal kontrak.</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-2 text-[10px] bg-blue-100 text-blue-600 p-1 rounded" aria-hidden="true"></i> Pembuatan konsep desain visual.</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-3 text-[10px] bg-blue-100 text-blue-600 p-1 rounded" aria-hidden="true"></i> Proses coding sistem.</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-4 text-[10px] bg-blue-100 text-blue-600 p-1 rounded" aria-hidden="true"></i> Testing sistem &amp; revisi.</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-5 text-[10px] bg-blue-100 text-blue-600 p-1 rounded" aria-hidden="true"></i> Go-Live &amp; pelatihan admin/kasir.</li>
        </ul>`,
        2: `<p class="mb-3 font-medium">Anda menerima paket siap operasional:</p>
        <ul class="space-y-2">
            <li class="flex items-start gap-3"><i class="fa-solid fa-check text-blue-600 mt-1" aria-hidden="true"></i> <span>Akses penuh Dashboard Admin &amp; Kasir.</span></li>
            <li class="flex items-start gap-3"><i class="fa-solid fa-check text-blue-600 mt-1" aria-hidden="true"></i> <span>Domain (.com/.id) &amp; Cloud Hosting aktif 1 tahun.</span></li>
            <li class="flex items-start gap-3"><i class="fa-solid fa-check text-blue-600 mt-1" aria-hidden="true"></i> <span>Sertifikat keamanan SSL (HTTPS).</span></li>
            <li class="flex items-start gap-3"><i class="fa-solid fa-check text-blue-600 mt-1" aria-hidden="true"></i> <span>Video panduan operasional sistem.</span></li>
        </ul>`,
        3: `<p class="mb-4 text-slate-700">Kami menggunakan sistem <strong>3 Termin</strong>:</p>
        <div class="space-y-4 pl-4 border-l-2 border-slate-100">
            <div><span class="font-bold block text-slate-900">1. Termin Awal (DP)</span><span class="text-xs">Saat deal proyek dan penandatanganan kontrak.</span></div>
            <div><span class="font-bold block text-slate-900">2. Termin Progres</span><span class="text-xs">Setelah desain disetujui dan masuk tahap coding.</span></div>
            <div><span class="font-bold block text-slate-900">3. Termin Pelunasan</span><span class="text-xs">Setelah website selesai dan siap dipublish.</span></div>
        </div>`,
        4: `<div class="grid grid-cols-1 md:grid-cols-2 gap-3">
            <div class="p-3 bg-slate-50 rounded-xl flex gap-3"><i class="fa-solid fa-tools text-blue-600" aria-hidden="true"></i> <span>Garansi bug/error sistem.</span></div>
            <div class="p-3 bg-slate-50 rounded-xl flex gap-3"><i class="fa-solid fa-headset text-blue-600" aria-hidden="true"></i> <span>Konsultasi teknis gratis.</span></div>
            <div class="p-3 bg-slate-50 rounded-xl flex gap-3"><i class="fa-solid fa-server text-blue-600" aria-hidden="true"></i> <span>Pemantauan server &amp; backup.</span></div>
            <div class="p-3 bg-slate-50 rounded-xl flex gap-3"><i class="fa-solid fa-circle-play text-blue-600" aria-hidden="true"></i> <span>Update panduan fitur baru.</span></div>
        </div>`,
        5: `<ul class="space-y-3">
            <li class="flex items-start gap-3"><i class="fa-solid fa-palette text-blue-600 mt-1" aria-hidden="true"></i> <span><strong>Tahap Desain:</strong> Revisi minor sepuasnya hingga deal.</span></li>
            <li class="flex items-start gap-3"><i class="fa-solid fa-code text-blue-600 mt-1" aria-hidden="true"></i> <span><strong>Tahap Coding:</strong> Revisi fungsi/konten (bukan rombak struktur).</span></li>
        </ul>`,
        6: `<p><strong>Sangat bisa!</strong> Sistem berbasis web responsif:</p>
        <ul class="mt-3 space-y-2">
            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-blue-600 text-[10px]" aria-hidden="true"></i> Akses via Android/iOS.</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-blue-600 text-[10px]" aria-hidden="true"></i> Support Laptop/PC Kasir.</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-check text-blue-600 text-[10px]" aria-hidden="true"></i> Support Printer Thermal Bluetooth/USB.</li>
        </ul>`,
        7: `<p><strong>Sangat bisa!</strong> Kami menyediakan Dashboard Admin yang user-friendly sehingga Anda bisa menambah artikel, galeri, atau mengubah harga layanan kapan saja — tanpa keahlian teknis apapun.</p>`,
        8: `<ul class="space-y-2">
            <li class="flex items-center gap-2"><i class="fa-solid fa-video text-blue-500" aria-hidden="true"></i> Video tutorial lengkap.</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-headset text-blue-500" aria-hidden="true"></i> Konsultasi teknis gratis via WhatsApp.</li>
            <li class="flex items-center gap-2"><i class="fa-solid fa-book text-blue-500" aria-hidden="true"></i> Buku panduan dalam format PDF.</li>
        </ul>`,
    };

    function faqSection() {
        const rawFaqs = @json($faqsData);
        return {
            selected: null,
            faqs: rawFaqs.map((item, index) => ({
                id: index + 1,
                question: item.question,
                answer: faqRichAnswers[index + 1] ?? `<p>${item.answer}</p>`,
            })),
            toggleFaq(id, event) {
                const btn = event.currentTarget;
                const ripple = btn.querySelector('.faq-ripple');
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
                        const el = document.getElementById('faq-answer-' + id);
                        if (el) {
                            const parent = el.closest('.faq-item');
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

    function testimonialData() {
        return {
            testimonials: [{
                    id: 1,
                    name: 'Bu Hj. Nurhasanah',
                    role: 'Pemilik Toko Berkah (POS)',
                    initials: 'HN',
                    bgColor: 'bg-blue-50/50',
                    borderColor: 'border-blue-100',
                    quoteColor: 'text-blue-400',
                    avatarBg: 'bg-blue-500',
                    content: 'Awalnya saya gaptek banget, takut pakai sistem kasir karena mikirnya bakal ribet. Tapi tim Cakra sabar banget ngajarin pelan-pelan sampai saya bisa operasikan sendiri.'
                },
                {
                    id: 2,
                    name: 'Kevin Sanjaya',
                    role: 'CEO Start-up Lokal (Landing Page)',
                    initials: 'KS',
                    bgColor: 'bg-slate-50/50',
                    borderColor: 'border-slate-100',
                    quoteColor: 'text-slate-400',
                    avatarBg: 'bg-slate-600',
                    content: 'Landing page-nya kenceng dan clean. Conversion rate bisnis saya naik signifikan sejak pakai jasa Cakra Digital. Benar-benar paham cara bikin desain yang menjual.'
                },
                {
                    id: 3,
                    name: 'Siska Amelia',
                    role: 'Owner Butik Siska (Katalog Digital)',
                    initials: 'SA',
                    bgColor: 'bg-orange-50/50',
                    borderColor: 'border-orange-100',
                    quoteColor: 'text-orange-400',
                    avatarBg: 'bg-orange-500',
                    content: 'Katalog digitalnya bikin jualan di WA jadi lebih profesional. Pelanggan tinggal pilih barang dari katalog, nggak perlu kirim foto manual satu-satu lagi.'
                },
                {
                    id: 4,
                    name: 'Maya Sartika',
                    role: 'Catering Ibu Maya (E-commerce)',
                    initials: 'MS',
                    bgColor: 'bg-emerald-50/50',
                    borderColor: 'border-emerald-100',
                    quoteColor: 'text-emerald-400',
                    avatarBg: 'bg-emerald-600',
                    content: 'Website e-commerce-nya gampang dikelola sendiri, bahkan buat saya yang bukan orang IT. Pesanan masuk jadi lebih teratur dan pembayaran otomatisnya sangat membantu.'
                },
                {
                    id: 5,
                    name: 'Andi Wijaya',
                    role: 'Distributor Material (Inventory POS)',
                    initials: 'AW',
                    bgColor: 'bg-blue-50/50',
                    borderColor: 'border-blue-100',
                    quoteColor: 'text-blue-400',
                    avatarBg: 'bg-blue-600',
                    content: 'Sistem stoknya real-time banget. Saya bisa pantau keluar masuk barang di gudang dari luar kota cuma modal HP saja. Sangat membantu kontrol bisnis jarak jauh.'
                },
                {
                    id: 6,
                    name: 'Mas Rian',
                    role: 'Owner Laundry Express (Landing Page)',
                    initials: 'RS',
                    bgColor: 'bg-slate-50/50',
                    borderColor: 'border-slate-100',
                    quoteColor: 'text-slate-400',
                    avatarBg: 'bg-slate-500',
                    content: 'Cari vendor IT yang nggak "nakutin" soal harga itu susah. Di sini saya dapat landing page berkualitas dengan budget yang bersahabat buat UMKM seperti saya.'
                },
                {
                    id: 7,
                    name: 'Bpk. Subagyo',
                    role: 'Warung Makan Barokah (Katalog QR)',
                    initials: 'BS',
                    bgColor: 'bg-orange-50/50',
                    borderColor: 'border-orange-100',
                    quoteColor: 'text-orange-400',
                    avatarBg: 'bg-orange-600',
                    content: 'Menu katalog QR code-nya simpel, anti ribet buat pembeli. Saya nggak perlu cetak ulang buku menu tiap kali ada perubahan harga atau menu baru.'
                },
                {
                    id: 8,
                    name: 'Fandi Ahmad',
                    role: 'Bengkel Motor Fandi (POS Service)',
                    initials: 'FA',
                    bgColor: 'bg-emerald-50/50',
                    borderColor: 'border-emerald-100',
                    quoteColor: 'text-emerald-400',
                    avatarBg: 'bg-emerald-400',
                    content: 'Data pelanggan jadi rapi. Dulu sering lupa jadwal servis rutin pelanggan, sekarang tinggal cek di sistem. Bengkel jadi terlihat lebih modern dan dipercaya.'
                },
                {
                    id: 9,
                    name: 'Ibu Ratna',
                    role: 'Toko Sembako Jaya (POS Mobile)',
                    initials: 'IR',
                    bgColor: 'bg-blue-50/50',
                    borderColor: 'border-blue-100',
                    quoteColor: 'text-blue-400',
                    avatarBg: 'bg-blue-400',
                    content: 'Ditemenin sampai bisa pakai! Support-nya juara, kalau ada bingung soal input barang tinggal WA langsung dibantu sampai tuntas. Gak nyesel langganan di sini.'
                },
                {
                    id: 10,
                    name: 'Dewi Lestari',
                    role: 'Home Industri Kerajinan (E-commerce)',
                    initials: 'DL',
                    bgColor: 'bg-emerald-50/50',
                    borderColor: 'border-emerald-100',
                    quoteColor: 'text-emerald-400',
                    avatarBg: 'bg-emerald-500',
                    content: 'Visual website e-commerce-nya bagus banget, sesuai ekspektasi saya yang peduli soal estetika. Sekarang produk kerajinan saya bisa menjangkau pembeli luar pulau.'
                },
            ]
        };
    }

    document.addEventListener('DOMContentLoaded', function() {
        new Swiper('.testimonial-swiper', {
            slidesPerView: 1,
            spaceBetween: 16,
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
                    slidesPerView: 1.5,
                    spaceBetween: 20
                },
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }
            }
        });

        const hLine = document.querySelector('.proses-progress-line');
        const vLine = document.querySelector('.proses-progress-line-v');
        if (hLine || vLine) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        if (hLine) hLine.style.width = '100%';
                        if (vLine) vLine.style.height = '100%';
                        observer.disconnect();
                    }
                });
            }, {
                threshold: 0.25
            });
            const sec = document.getElementById('proses-kerja');
            if (sec) observer.observe(sec);
        }
    });
    </script>
    @endpush

    @push('styles')
    <style>
    /* ── Swiper ──────────────────────────────────────── */
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
        transition: all .3s ease;
        cursor: pointer;
    }

    .testimonial-pagination .swiper-pagination-bullet-active {
        background: #2563eb !important;
        width: 28px !important;
        border-radius: 12px !important;
    }

    /* ── FAQ ─────────────────────────────────────────── */
    .faq-answer {
        transition: max-height 0.38s cubic-bezier(0.4, 0, 0.2, 1),
            opacity 0.28s ease;
    }

    .faq-ripple {
        position: absolute;
        border-radius: 50%;
        background: #dbeafe;
        transform: scale(0);
        opacity: 0;
        pointer-events: none;
        transition: transform 0.5s ease, opacity 0.5s ease;
    }

    .faq-item:not([class*="border-blue"]):hover {
        background: #fafafa;
    }

    /* ── Proses Kerja progress line ──────────────────── */
    .proses-progress-line {
        transition: width 1.8s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .proses-progress-line-v {
        transition: height 1.8s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .group:hover .group-hover\:max-h-24 {
        max-height: 6rem;
    }

    /* ── Reduced motion ──────────────────────────────── */
    @media (prefers-reduced-motion: reduce) {

        .faq-answer,
        .proses-progress-line,
        .proses-progress-line-v {
            transition: none;
        }

        .faq-ripple {
            display: none;
        }
    }
    </style>
    @endpush

</x-layout.app>
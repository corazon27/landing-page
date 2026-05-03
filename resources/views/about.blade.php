<x-layout.app>
    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-10 text-center">

            {{-- Navigasi Breadcrumbs di atas --}}
            <nav class="flex justify-center mb-6" aria-label="Breadcrumb" data-aos="fade-down">
                <ol
                    class="inline-flex items-center bg-white/80 backdrop-blur-sm px-6 py-2.5 rounded-full border border-slate-200/60 shadow-sm">
                    <li class="inline-flex items-center">
                        <a href="/"
                            class="text-xs font-semibold text-slate-500 hover:text-blue-600 transition flex items-center">
                            <i class="fas fa-home mr-2.5"></i> Beranda
                        </a>
                    </li>

                    <li aria-current="page">
                        <div class="flex items-center">
                            {{-- Menggunakan mx-4 yang konsisten --}}
                            <i class="fas fa-chevron-right text-[9px] text-slate-300 mx-4"></i>
                            <span class="text-xs font-bold text-blue-600 tracking-wide">Tentang Kami</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="max-w-6xl mx-auto px-10">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right">
                    <span
                        class="bg-blue-50 text-blue-600 px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider">
                        Cerita Cakra
                    </span>
                    <h1 class="text-4xl md:text-5xl font-extrabold mt-6 mb-6 leading-tight text-slate-900">
                        Digitalisasi Tanpa Pusing. Kami <span class="text-blue-600">Teman Tumbuh</span> Anda.
                    </h1>
                    <p class="text-lg text-slate-600 leading-relaxed mb-6">
                        Berawal dari kepedulian melihat banyaknya pengusaha lokal yang kewalahan dengan operasional
                        manual, Cakra Inovasi Digital hadir. Kami menyederhanakan kerumitan teknologi menjadi alat
                        praktis yang mempercepat laju bisnis Anda.
                    </p>
                    <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-2xl border-l-4 border-blue-600">
                        <span class="text-2xl">🤝</span>
                        <p class="text-sm text-slate-700 italic font-medium">"Anda fokus kembangkan bisnis dan jualan,
                            biar kami yang urus kerumitan sistemnya."</p>
                    </div>
                </div>
                <div class="relative" data-aos="fade-left">
                    <div class="aspect-square bg-blue-100 rounded-[40px] overflow-hidden mt-3">
                        <div class="w-full h-full flex items-center justify-center text-blue-300 font-bold">Foto Tim
                            Cakra Inovasi Digital</div>
                    </div>
                    <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-3xl shadow-xl border border-slate-100">
                        <p class="text-3xl font-bold text-blue-600">50+</p>
                        <p class="text-xs text-slate-500 font-medium">UMKM Telah Go-Digital</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <!-- Header -->
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-blue-600 font-bold tracking-widest uppercase text-sm">Tujuan Kami</span>
                <h2 class="text-3xl md:text-5xl font-extrabold text-slate-900 mt-3">Visi & Misi Cakra</h2>
                <div class="w-20 h-1.5 bg-blue-600 mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-8 lg:gap-12 items-stretch">
                <!-- Kartu Visi -->
                <div class="relative group" data-aos="fade-right">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-[40px] blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200">
                    </div>
                    <div
                        class="relative h-full bg-slate-900 p-8 md:p-12 rounded-[40px] border border-slate-800 shadow-2xl flex flex-col justify-center">
                        <div class="flex items-center gap-4 mb-8">
                            <div
                                class="w-14 h-14 bg-blue-600/20 rounded-2xl flex items-center justify-center border border-blue-500/30">
                                <i class="fa-solid fa-eye text-2xl text-blue-400"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-white">Visi Kami</h3>
                        </div>
                        <p class="text-xl md:text-2xl text-slate-300 leading-relaxed italic font-light">
                            "Menjadi <span class="text-blue-400 font-semibold text-glow">Roda Penggerak Utama</span>
                            dalam inovasi digital yang berdaya guna, menciptakan solusi teknologi modern untuk mendukung
                            transformasi era digital di masa depan yang berkelanjutan."
                        </p>
                    </div>
                </div>

                <!-- Kartu Misi -->
                <div class="relative group" data-aos="fade-left">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-blue-400 to-blue-600 rounded-[40px] blur opacity-10 group-hover:opacity-30 transition duration-1000">
                    </div>
                    <div class="relative h-full bg-white p-8 md:p-12 rounded-[40px] border border-slate-100 shadow-xl">
                        <div class="flex items-center gap-4 mb-8">
                            <div
                                class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center border border-blue-100">
                                <i class="fa-solid fa-rocket text-2xl text-blue-600"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900">Misi Kami</h3>
                        </div>

                        <ul class="space-y-6">
                            <li class="flex gap-4 group/item">
                                <div
                                    class="mt-1.5 flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center group-hover/item:bg-blue-600 transition-colors">
                                    <i
                                        class="fa-solid fa-check text-[10px] text-blue-600 group-hover/item:text-white"></i>
                                </div>
                                <p class="text-slate-600 leading-relaxed">Membangun ekosistem teknologi yang kolaboratif
                                    untuk mendukung pertumbuhan startup, UMKM, dan perusahaan besar.</p>
                            </li>
                            <li class="flex gap-4 group/item">
                                <div
                                    class="mt-1.5 flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center group-hover/item:bg-blue-600 transition-colors">
                                    <i
                                        class="fa-solid fa-check text-[10px] text-blue-600 group-hover/item:text-white"></i>
                                </div>
                                <p class="text-slate-600 leading-relaxed">Menyediakan layanan digital yang mudah diakses
                                    dan <span class="font-bold text-slate-900">user-friendly</span> untuk semua
                                    kalangan.</p>
                            </li>
                            <li class="flex gap-4 group/item">
                                <div
                                    class="mt-1.5 flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center group-hover/item:bg-blue-600 transition-colors">
                                    <i
                                        class="fa-solid fa-check text-[10px] text-blue-600 group-hover/item:text-white"></i>
                                </div>
                                <p class="text-slate-600 leading-relaxed">Mengutamakan keberlanjutan dan etika teknologi
                                    agar memberi dampak positif bagi masyarakat.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="max-w-6xl mx-auto px-10">
            <!-- Tambahan animasi pada header -->
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-slate-900">Pendekatan Kami</h2>
                <p class="text-slate-500 mt-2 text-sm">Memahami manusianya sebelum menulis kode sistemnya.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Kartu 1: Muncul pertama -->
                <div class="bg-white p-10 rounded-[32px] shadow-sm hover:shadow-md transition border border-slate-50"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center text-xl mb-6">
                        💬
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">1. Ngobrol & Pahami</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Gak perlu pusing istilah IT. Ceritakan saja kendala operasional Anda layaknya ngobrol dengan
                        teman. Kami dengar, kami pelajari akar masalahnya.
                    </p>
                </div>

                <!-- Kartu 2: Muncul kedua -->
                <div class="bg-white p-10 rounded-[32px] shadow-sm hover:shadow-md transition border border-slate-50"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center text-xl mb-6">
                        💡
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">2. Rancang Tepat Guna</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Kami mendesain sistem yang pas. Tidak ada fitur berlebihan yang mubazir, semua disesuaikan
                        dengan skala kebutuhan dan anggaran bisnis Anda saat ini.
                    </p>
                </div>

                <!-- Kartu 3: Muncul ketiga -->
                <div class="bg-white p-10 rounded-[32px] shadow-sm hover:shadow-md transition border border-slate-50"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-12 h-12 bg-orange-50 text-orange-600 rounded-xl flex items-center justify-center text-xl mb-6">
                        🚀
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">3. Dampingi Sampai Mahir</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Tugas kami tidak selesai saat rilis. Tim Cakra akan membimbing Anda dan karyawan step-by-step
                        sampai benar-benar lancar menggunakannya.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-900 relative overflow-hidden">
        <!-- Dekorasi Background -->
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-64 h-64 rounded-full bg-blue-500/10 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-indigo-500/10 blur-3xl"></div>

        <div class="max-w-4xl mx-auto px-10 text-center relative z-10" data-aos="fade-up">
            <span
                class="text-blue-400 font-bold bg-blue-900/50 px-4 py-2 rounded-full text-sm border border-blue-800">Kenapa
                Cakra?</span>
            <h1 class="text-3xl md:text-4xl font-bold mt-8 mb-6 leading-tight text-white">
                Sistem Canggih Tidak Harus<br>Rumit & Menguras Kantong.
            </h1>
            <p class="text-slate-300 text-lg mx-auto leading-relaxed">
                Di <strong>Cakra Inovasi Digital</strong>, kami menempatkan diri sebagai rekan diskusi yang menjembatani
                ambisi bisnis Anda dengan eksekusi teknologi yang realistis. Kami bertekad membuktikan bahwa
                transformasi digital adalah hak setiap UMKM.
            </p>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-10">
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="text-3xl mb-4">🤝</div>
                    <h3 class="text-xl font-bold mb-2 text-slate-900">Komunikasi Membumi</h3>
                    <p class="text-slate-500 text-sm">Selamat tinggal jargon teknis yang membingungkan. Kami selalu
                        menjelaskan proses dan fitur menggunakan bahasa sehari-hari.</p>
                </div>
                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="text-3xl mb-4">💰</div>
                    <h3 class="text-xl font-bold mb-2 text-slate-900">Transparansi Biaya</h3>
                    <p class="text-slate-500 text-sm">Investasi teknologi yang jelas sejak awal. Tanpa biaya
                        tersembunyi, semua dihitung murni berdasarkan kebutuhan spesifik Anda.</p>
                </div>
                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="text-3xl mb-4">☕</div>
                    <h3 class="text-xl font-bold mb-2 text-slate-900">Partner Jangka Panjang</h3>
                    <p class="text-slate-500 text-sm">Lebih dari sekadar klien, kami menganggap Anda partner. Ingin
                        diskusi pengembangan fitur sambil ngopi? Pintu kami selalu terbuka.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-50 border-t border-slate-100">
        <div class="max-w-6xl mx-auto px-10">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-slate-900">Kenalan Bersama Tim Kami</h2>
                <p class="text-slate-500 mt-2">Wajah-wajah di balik layar yang siap mengawal digitalisasi bisnis Anda.
                </p>
            </div>

            <div class="flex flex-row md:justify-center items-start gap-8 overflow-x-auto pb-6 snap-x">

                <div class="flex-none w-64 snap-center" data-aos="zoom-in" data-aos-delay="100">
                    <div
                        class="w-32 h-32 bg-blue-100 rounded-full mx-auto mb-4 overflow-hidden border-4 border-white shadow-md flex items-center justify-center text-blue-600 font-bold">
                        Foto
                    </div>
                    <div class="text-center">
                        <h4 class="font-bold text-lg text-slate-900">Budi Setiawan</h4>
                        <p class="text-blue-600 text-sm font-medium">System Analyst</p>
                        <p class="text-slate-500 text-xs mt-2 px-4 italic">"Pendengar setia masalah stok dan kasir
                            Anda."</p>
                    </div>
                </div>

                <div class="flex-none w-64 snap-center" data-aos="zoom-in" data-aos-delay="200">
                    <div
                        class="w-32 h-32 bg-pink-100 rounded-full mx-auto mb-4 overflow-hidden border-4 border-white shadow-md flex items-center justify-center text-pink-600 font-bold">
                        Foto
                    </div>
                    <div class="text-center">
                        <h4 class="font-bold text-lg text-slate-900">Siti Aminah</h4>
                        <p class="text-blue-600 text-sm font-medium">UI/UX Designer</p>
                        <p class="text-slate-500 text-xs mt-2 px-4 italic">"Fokus bikin tampilan aplikasi yang ramah
                            untuk semua usia."</p>
                    </div>
                </div>

                <div class="flex-none w-64 snap-center" data-aos="zoom-in" data-aos-delay="300">
                    <div
                        class="w-32 h-32 bg-emerald-100 rounded-full mx-auto mb-4 overflow-hidden border-4 border-white shadow-md flex items-center justify-center text-emerald-600 font-bold">
                        Foto
                    </div>
                    <div class="text-center">
                        <h4 class="font-bold text-lg text-slate-900">Andi Pratama</h4>
                        <p class="text-blue-600 text-sm font-medium">Lead Developer</p>
                        <p class="text-slate-500 text-xs mt-2 px-4 italic">"Memastikan aplikasi Anda berjalan mulus
                            tanpa ngelag."</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <style>
    .text-glow {
        text-shadow: 0 0 15px rgba(96, 165, 250, 0.4);
    }
    </style>
</x-layout.app>
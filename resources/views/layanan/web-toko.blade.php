<x-layout.app>
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
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
                                <span class="text-xs font-bold text-blue-600 tracking-wide">Toko</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <div class="text-left space-y-6">
                    <span
                        class="inline-block px-4 py-1.5 rounded-full bg-blue-50 text-blue-600 text-xs font-semibold uppercase tracking-wider">
                        Sistem POS & Inventaris
                    </span>

                    <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 leading-tight">
                        Kelola Toko Jadi <span class="text-blue-600">Lebih Ringan</span> &
                        Otomatis
                    </h2>

                    <p class="text-lg text-slate-600 leading-relaxed max-w-xl">
                        Tinggalkan cara manual yang melelahkan. Saatnya punya sistem yang bekerja untuk Anda, memantau
                        stok
                        hingga laporan laba secara otomatis 24 jam nonstop.
                    </p>

                    <div class="pt-4">
                        <a href="#"
                            class="inline-block px-8 py-3.5 rounded-xl bg-blue-600 text-white font-bold text-sm hover:bg-blue-700 transition-colors shadow-lg shadow-blue-100">
                            Coba Gratis 3 Hari
                        </a>
                    </div>
                </div>

                <div class="relative z-10 flex items-center justify-center py-32 overflow-visible animate-bounce-slow">
                    <div class="relative">
                        <div
                            class="absolute -inset-20 bg-gradient-to-tr from-blue-100 to-indigo-50 rounded-full blur-3xl opacity-60 animate-pulse">
                        </div>
                        <div
                            class="absolute -inset-10 border-2 border-dashed border-blue-100 rounded-full animate-[spin_20s_linear_infinite] opacity-50">
                        </div>

                        <div class="relative group">
                            <div
                                class="absolute inset-0 bg-blue-600 blur-2xl opacity-20 group-hover:opacity-40 transition-opacity duration-500">
                            </div>
                            <i
                                class="fa-solid fa-laptop-code text-[140px] bg-gradient-to-br from-blue-600 to-indigo-700 bg-clip-text text-transparent relative drop-shadow-2xl"></i>
                        </div>

                        <div class="absolute -top-12 -right-12 animate-[bounce_4s_ease-in-out_infinite]">
                            <div
                                class="bg-white/80 backdrop-blur-md border border-white p-4 rounded-3xl shadow-[0_20px_50px_rgba(16,185,129,0.2)] group hover:scale-110 transition-transform duration-300">
                                <i class="fa-solid fa-chart-line text-4xl text-emerald-500"></i>
                                <span class="absolute -top-2 -right-2 flex h-4 w-4">
                                    <span
                                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                    <span
                                        class="relative inline-flex rounded-full h-4 w-4 bg-emerald-500 border-2 border-white"></span>
                                </span>
                            </div>
                        </div>

                        <div class="absolute -bottom-10 -left-12 animate-[bounce_5s_ease-in-out_infinite_1s]">
                            <div
                                class="bg-white/80 backdrop-blur-md border border-white p-4 rounded-3xl shadow-[0_20px_50px_rgba(249,115,22,0.2)] group hover:scale-110 transition-transform duration-300">
                                <i class="fa-solid fa-box-open text-4xl text-orange-500"></i>
                            </div>
                        </div>

                        <div
                            class="absolute top-1/2 -right-20 animate-[bounce_6s_ease-in-out_infinite_0.5s] hidden md:block">
                            <div class="bg-white/80 backdrop-blur-md border border-white p-3 rounded-2xl shadow-xl">
                                <i class="fa-solid fa-shield-halved text-2xl text-blue-400"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">
                    Kenapa Harus Pindah ke Sistem Digital?
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto">
                    Lihat perbedaan signifikan antara mengelola toko secara konvensional dibandingkan dengan menggunakan
                    sistem POS modern.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">

                <div
                    class="bg-white p-8 rounded-3xl border border-red-100 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
                    <div
                        class="absolute -right-4 -top-4 opacity-5 group-hover:rotate-12 transition-transform duration-500">
                        <i class="fa-solid fa-book text-9xl text-red-600"></i>
                    </div>

                    <div class="relative z-10">
                        <div class="w-12 h-12 bg-red-50 rounded-2xl flex items-center justify-center mb-6">
                            <i class="fa-solid fa-xmark text-red-500 text-xl"></i>
                        </div>

                        <h3 class="text-xl font-bold text-slate-900 mb-6">Cara Manual</h3>

                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300"></i>
                                <p class="text-slate-600 text-sm"><strong>Catat buku melelahkan:</strong> Menghabiskan
                                    waktu berjam-jam setiap hari hanya untuk rekapitulasi data.</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300"></i>
                                <p class="text-slate-600 text-sm"><strong>Sering salah hitung:</strong> Risiko kesalahan
                                    manusia (human error) sangat tinggi dalam perhitungan laba.</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300"></i>
                                <p class="text-slate-600 text-sm"><strong>Stok berantakan:</strong> Sulit memantau
                                    ketersediaan barang secara akurat di berbagai tempat.</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300"></i>
                                <p class="text-slate-600 text-sm font-medium text-red-500 italic">Perlu banyak waktu dan
                                    karyawan hanya untuk kelola produk.</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div
                    class="bg-blue-600 p-8 rounded-3xl border border-blue-500 shadow-xl shadow-blue-100 relative overflow-hidden group">
                    <div
                        class="absolute -right-4 -top-4 opacity-10 group-hover:rotate-12 transition-transform duration-500">
                        <i class="fa-solid fa-rocket text-9xl text-white"></i>
                    </div>

                    <div class="relative z-10">
                        <div
                            class="w-12 h-12 bg-blue-500 rounded-2xl flex items-center justify-center mb-6 border border-blue-400">
                            <i class="fa-solid fa-check text-white text-xl"></i>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-6">Pakai Sistem Modern</h3>

                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 text-sm"></i>
                                <p class="text-blue-50 text-sm"><strong>Semua tercatat rapi:</strong> Data transaksi
                                    tersimpan otomatis dan terorganisir dengan sempurna.</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 text-sm"></i>
                                <p class="text-blue-50 text-sm"><strong>Laporan real-time:</strong> Pantau performa
                                    penjualan dan profit detik ini juga tanpa menunggu rekap.</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 text-sm"></i>
                                <p class="text-blue-50 text-sm"><strong>Bisa dipantau dari HP:</strong> Kontrol bisnis
                                    Anda kapan saja dan dari mana saja secara remote.</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 text-sm"></i>
                                <p class="text-blue-50 text-sm font-bold">Sinkronisasi stok otomatis di semua channel
                                    penjualan sekaligus.</p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-white-50" x-data="{ activeFeature: 1 }">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-extrabold text-slate-900 mb-4">
                    Solusi Digital <span class="text-blue-600">All-in-One</span>
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto">
                    Tinggalkan cara manual. Kelola toko online dan kasir fisik Anda dalam satu sistem yang otomatis dan
                    terintegrasi.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                <div class="lg:col-span-6 sticky top-24">
                    <div
                        class="bg-white p-4 rounded-[2.5rem] shadow-2xl border border-slate-100 relative overflow-hidden group">
                        <div class="bg-slate-100 rounded-2xl p-4 aspect-square flex flex-col gap-4">
                            <div class="flex items-center justify-between bg-white p-3 rounded-xl shadow-sm">
                                <div class="flex gap-2">
                                    <div class="w-3 h-3 rounded-full bg-red-400"></div>
                                    <div class="w-3 h-3 rounded-full bg-amber-400"></div>
                                    <div class="w-3 h-3 rounded-full bg-green-400"></div>
                                </div>
                                <div class="h-2 w-24 bg-blue-100 rounded"></div>
                            </div>

                            <div class="bg-white rounded-xl p-6 flex-1 flex flex-col justify-end gap-4">
                                <div class="flex items-end gap-2 h-32">
                                    <div class="w-full bg-blue-100 rounded-t-lg" style="height: 40%"></div>
                                    <div class="w-full bg-blue-200 rounded-t-lg" style="height: 60%"></div>
                                    <div class="w-full bg-blue-600 rounded-t-lg shadow-lg shadow-blue-100"
                                        style="height: 90%"></div>
                                    <div class="w-full bg-blue-300 rounded-t-lg" style="height: 50%"></div>
                                </div>
                                <div class="space-y-2">
                                    <div class="h-4 w-1/2 bg-slate-100 rounded"></div>
                                    <div
                                        class="h-8 w-full bg-blue-50 rounded-lg border border-blue-100 flex items-center px-3">
                                        <span class="text-[10px] font-bold text-blue-600">TOTAL OMZET: TERPANTAU!</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="absolute top-12 right-8 bg-green-500 text-white p-3 rounded-xl shadow-lg flex items-center gap-2 animate-bounce">
                            <i class="fa-solid fa-circle-check"></i>
                            <span class="text-xs font-bold">Stok Sinkron!</span>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-6 space-y-3">

                    <div @click="activeFeature = activeFeature === 1 ? null : 1"
                        class="p-5 rounded-2xl cursor-pointer transition-all duration-300 border"
                        :class="activeFeature === 1 ? 'bg-blue-600 text-white shadow-xl shadow-blue-200 border-transparent' : 'bg-white hover:shadow-md text-slate-800 border-slate-100'">
                        <h4 class="font-bold flex items-center justify-between">
                            <span class="flex items-center gap-3">
                                <i class="fa-solid fa-cash-register"
                                    :class="activeFeature === 1 ? 'text-white' : 'text-blue-600'"></i>
                                Sistem Kasir (POS) Digital
                            </span>
                            <i class="fa-solid fa-chevron-right text-[10px] transition-transform"
                                :class="activeFeature === 1 ? 'rotate-90' : ''"></i>
                        </h4>
                        <div x-show="activeFeature === 1" x-collapse>
                            <p class="text-sm mt-3 opacity-90 leading-relaxed">
                                Transaksi langsung dari HP, tablet, atau komputer.
                                <strong>Manfaat:</strong> Proses jual beli lebih cepat & profesional seperti minimarket
                                modern.
                            </p>
                        </div>
                    </div>

                    <div @click="activeFeature = activeFeature === 2 ? null : 2"
                        class="p-5 rounded-2xl cursor-pointer transition-all duration-300 border"
                        :class="activeFeature === 2 ? 'bg-blue-600 text-white shadow-xl shadow-blue-200 border-transparent' : 'bg-white hover:shadow-md text-slate-800 border-slate-100'">
                        <h4 class="font-bold flex items-center justify-between">
                            <span class="flex items-center gap-3">
                                <i class="fa-solid fa-boxes-stacked"
                                    :class="activeFeature === 2 ? 'text-white' : 'text-blue-600'"></i>
                                Stok Otomatis (Omnichannel)
                            </span>
                            <i class="fa-solid fa-chevron-right text-[10px] transition-transform"
                                :class="activeFeature === 2 ? 'rotate-90' : ''"></i>
                        </h4>
                        <div x-show="activeFeature === 2" x-collapse>
                            <p class="text-sm mt-3 opacity-90 leading-relaxed">
                                Kelola produk dan stok dalam satu dashboard pusat.
                                <strong>Manfaat:</strong> Stok terupdate otomatis di web maupun toko fisik secara
                                bersamaan.
                            </p>
                        </div>
                    </div>

                    <div @click="activeFeature = activeFeature === 3 ? null : 3"
                        class="p-5 rounded-2xl cursor-pointer transition-all duration-300 border"
                        :class="activeFeature === 3 ? 'bg-blue-600 text-white shadow-xl shadow-blue-200 border-transparent' : 'bg-white hover:shadow-md text-slate-800 border-slate-100'">
                        <h4 class="font-bold flex items-center justify-between">
                            <span class="flex items-center gap-3">
                                <i class="fa-solid fa-credit-card"
                                    :class="activeFeature === 3 ? 'text-white' : 'text-blue-600'"></i>
                                Pembayaran Online & QRIS
                            </span>
                            <i class="fa-solid fa-chevron-right text-[10px] transition-transform"
                                :class="activeFeature === 3 ? 'rotate-90' : ''"></i>
                        </h4>
                        <div x-show="activeFeature === 3" x-collapse>
                            <p class="text-sm mt-3 opacity-90 leading-relaxed">
                                Terima pembayaran via Transfer, E-Wallet, hingga QRIS.
                                <strong>Manfaat:</strong> Memudahkan pelanggan membayar dan verifikasi uang masuk
                                otomatis.
                            </p>
                        </div>
                    </div>

                    <div @click="activeFeature = activeFeature === 4 ? null : 4"
                        class="p-5 rounded-2xl cursor-pointer transition-all duration-300 border"
                        :class="activeFeature === 4 ? 'bg-blue-600 text-white shadow-xl shadow-blue-200 border-transparent' : 'bg-white hover:shadow-md text-slate-800 border-slate-100'">
                        <h4 class="font-bold flex items-center justify-between">
                            <span class="flex items-center gap-3">
                                <i class="fa-solid fa-chart-pie"
                                    :class="activeFeature === 4 ? 'text-white' : 'text-blue-600'"></i>
                                Laporan Penjualan Real-Time
                            </span>
                            <i class="fa-solid fa-chevron-right text-[10px] transition-transform"
                                :class="activeFeature === 4 ? 'rotate-90' : ''"></i>
                        </h4>
                        <div x-show="activeFeature === 4" x-collapse>
                            <p class="text-sm mt-3 opacity-90 leading-relaxed">
                                Pantau omzet dan keuntungan langsung dari HP.
                                <strong>Manfaat:</strong> Mengetahui kondisi kesehatan bisnis kapan saja tanpa nunggu
                                laporan manual.
                            </p>
                        </div>
                    </div>

                    <div @click="activeFeature = activeFeature === 5 ? null : 5"
                        class="p-5 rounded-2xl cursor-pointer transition-all duration-300 border"
                        :class="activeFeature === 5 ? 'bg-blue-600 text-white shadow-xl shadow-blue-200 border-transparent' : 'bg-white hover:shadow-md text-slate-800 border-slate-100'">
                        <h4 class="font-bold flex items-center justify-between">
                            <span class="flex items-center gap-3">
                                <i class="fa-brands fa-whatsapp"
                                    :class="activeFeature === 5 ? 'text-white' : 'text-blue-600'"></i>
                                Integrasi WhatsApp Otomatis
                            </span>
                            <i class="fa-solid fa-chevron-right text-[10px] transition-transform"
                                :class="activeFeature === 5 ? 'rotate-90' : ''"></i>
                        </h4>
                        <div x-show="activeFeature === 5" x-collapse>
                            <p class="text-sm mt-3 opacity-90 leading-relaxed">
                                Pesanan website langsung masuk ke WhatsApp admin.
                                <strong>Manfaat:</strong> Closing lebih cepat karena bisa langsung chat pembeli tanpa
                                pindah aplikasi.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-6">
                    Investasi Terbaik untuk <span class="text-blue-600">Bisnis Anda</span>
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Pilih paket sistem kasir dan toko online yang paling sesuai
                    dengan kebutuhan operasional Anda saat ini.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">

                <div
                    class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm flex flex-col hover:shadow-md transition-all group">
                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Toko Basic</h3>
                        <p class="text-slate-500 text-sm mb-6">Cocok untuk toko tunggal yang ingin mulai digitalisasi
                            stok.</p>
                        <div class="flex items-baseline gap-1">
                            <span class="text-4xl font-extrabold text-slate-900">Rp 3,5jt</span>
                        </div>
                        <p class="text-xs text-slate-400 mt-2 line-through">Harga Normal: Rp 7jt</p>
                    </div>

                    <ul class="space-y-4 mb-10 flex-grow">
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Sistem Kasir (POS) Standar</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Manajemen Stok & Produk</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Laporan Penjualan Harian</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Cetak Struk Thermal</span>
                        </li>
                    </ul>

                    <a href="#"
                        class="block w-full py-4 px-6 text-center rounded-2xl border-2 border-blue-600 text-blue-600 font-bold hover:bg-blue-50 transition-colors">Pilih
                        Paket Basic</a>
                </div>

                <div
                    class="bg-white p-8 rounded-3xl border-2 border-blue-600 shadow-xl flex flex-col relative transform lg:-translate-y-4">
                    <div
                        class="absolute top-0 left-1/2 -translate-x-1/2 bg-amber-400 text-amber-950 text-[10px] px-4 py-1.5 rounded-b-xl font-bold uppercase tracking-wider shadow-sm">
                        Fitur Paling Lengkap
                    </div>

                    <div class="mb-8 mt-4">
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Toko Pro + Online</h3>
                        <p class="text-slate-500 text-sm mb-6">Sistem terintegrasi untuk kelola cabang & pembayaran
                            QRIS.</p>
                        <div class="flex items-baseline gap-1">
                            <span class="text-4xl font-extrabold text-slate-900">Rp 7,5jt</span>
                        </div>
                        <p class="text-xs text-slate-400 mt-2 line-through">Harga Normal: Rp 15jt</p>
                    </div>

                    <ul class="space-y-4 mb-10 flex-grow">
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Semua Fitur Paket Basic</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span><strong>Integrasi QRIS Otomatis</strong></span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span><strong>Laporan Laba Rugi Real-time</strong></span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Kirim Nota via WhatsApp</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Manajemen Data Pelanggan</span>
                        </li>
                    </ul>

                    <a href="#"
                        class="block w-full py-4 px-6 text-center rounded-2xl bg-blue-600 text-white font-bold hover:bg-blue-700 shadow-lg shadow-blue-200 transition-all">Pesan
                        Paket Pro</a>
                </div>

                <div
                    class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm flex flex-col hover:shadow-md transition-all">
                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Multi-Outlet</h3>
                        <p class="text-slate-500 text-sm mb-6">Solusi untuk bisnis dengan banyak cabang tersebar.</p>
                        <div class="flex items-baseline gap-1">
                            <span class="text-2xl font-extrabold text-slate-900 italic">Hubungi Kami</span>
                        </div>
                        <p class="text-xs text-slate-400 mt-2 italic">Custom sistem sesuai kebutuhan</p>
                    </div>

                    <ul class="space-y-4 mb-10 flex-grow">
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Pantau Banyak Cabang (1 Akun)</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Transfer Stok Antar Gudang</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Hak Akses Karyawan Khusus</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Maintenance Prioritas</span>
                        </li>
                    </ul>

                    <a href="#"
                        class="block w-full py-4 px-6 text-center rounded-2xl border-2 border-slate-900 text-slate-900 font-bold hover:bg-slate-900 hover:text-white transition-all">Minta
                        Penawaran</a>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-white-100" x-data="faqSection()">
        <div class="max-w-3xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">
                    Pertanyaan Seputar <span class="text-blue-600">Jasa Kami</span>
                </h2>
                <p class="text-slate-600">Semua yang perlu Anda ketahui tentang proses kerja sama dan hasil
                    akhir proyek Anda.</p>
            </div>

            <div class="space-y-4">
                <template x-for="faq in faqs" :key="faq.id">
                    <div class="border border-slate-200 rounded-2xl overflow-hidden shadow-sm transition-all duration-300"
                        :class="selected === faq.id ? 'border-blue-300 ring-1 ring-blue-100' : ''">

                        <button @click="selected !== faq.id ? selected = faq.id : selected = null"
                            class="w-full flex items-center justify-between p-6 text-left bg-white hover:bg-slate-50 transition-colors group">
                            <span class="font-bold text-slate-900" :class="selected === faq.id ? 'text-blue-600' : ''"
                                x-text="faq.question"></span>
                            <i class="fa-solid fa-chevron-down text-blue-600 transition-transform duration-300"
                                :class="selected === faq.id ? 'rotate-180' : ''"></i>
                        </button>

                        <div class="px-6 pb-6 text-sm text-slate-600 leading-relaxed" x-show="selected === faq.id"
                            x-collapse>
                            <div x-html="faq.answer"></div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </section>

    <section class="py-20 bg-blue-600 rounded-t-[3rem] text-white">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-extrabold mb-6">Siap Membangun Kantor Digital Anda?</h2>
            <p class="text-blue-100 mb-10 text-lg">Jadwalkan konsultasi gratis (Minta Meeting) untuk mendiskusikan
                kebutuhan spesifik bisnis Anda.</p>

            <div class="bg-white p-8 rounded-3xl shadow-2xl text-slate-900 text-left">
                <form id="meetingForm" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="col-span-1">
                        <label class="block text-sm font-bold mb-2">Nama Perusahaan</label>
                        <input type="text" id="company"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none"
                            placeholder="Contoh: PT. Maju Jaya" required>
                    </div>
                    <div class="col-span-1">
                        <label class="block text-sm font-bold mb-2">Nomor WhatsApp PIC</label>
                        <input type="tel" id="phone"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none"
                            placeholder="0812xxxx" required>
                    </div>
                    <div class="col-span-2">
                        <label class="block text-sm font-bold mb-2">Rencana Tanggal Meeting</label>
                        <input type="date" id="meetingDate"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none text-slate-500"
                            required>
                    </div>
                    <div class="col-span-2">
                        <label class="block text-sm font-bold mb-2">Deskripsi Kebutuhan (Opsional)</label>
                        <textarea id="needs" rows="3"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none"
                            placeholder="Ceritakan singkat kebutuhan website Anda..."></textarea>
                    </div>
                    <div class="col-span-2">
                        <button type="submit"
                            class="w-full py-4 bg-green-500 hover:bg-green-600 text-white font-bold rounded-xl transition-all shadow-lg shadow-emerald-200 flex items-center justify-center gap-2 cursor-pointer group">
                            <i class="fa-brands fa-whatsapp text-xl"></i>
                            Kirim Permintaan Meeting
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
    const meetingForm = document.getElementById('meetingForm');
    if (meetingForm) {
        meetingForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const company = document.getElementById('company').value;
            const phone = document.getElementById('phone').value;
            const date = document.getElementById('meetingDate').value;
            const needs = document.getElementById('needs').value || "Tidak ada deskripsi";
            const myNumber = "6285865405330";

            const message = `Halo Admin, saya ingin *Minta Meeting*:%0A%0A` +
                `*Nama Perusahaan:* ${company}%0A` +
                `*No. WhatsApp PIC:* ${phone}%0A` +
                `*Rencana Tanggal:* ${date}%0A` +
                `*Deskripsi Kebutuhan:* ${needs}`;

            window.open(`https://wa.me/${myNumber}?text=${message}`, '_blank');
        });
    }

    // Script copy bisa ditaruh sini juga atau di resources/js/app.js
    function copyToClipboard(text) {
        navigator.clipboard.writeText(text).then(() => alert('Tautan berhasil disalin!'));
    }
    </script>
    @endpush

    @push('scripts')
    <script>
    function faqSection() {
        return {
            selected: null,
            faqs: [{
                    id: 1,
                    question: "Bagaimana sistem pembayaran QRIS di toko saya?",
                    answer: `<p class="mb-3">Integrasi via Payment Gateway resmi memungkinkan operasional yang lebih cepat:</p>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3"><i class="fa-solid fa-qrcode text-blue-600 mt-1"></i> <span><strong>QRIS Dinamis:</strong> Kode QR akan muncul otomatis di layar kasir sesuai nominal belanja pelanggan.</span></li>
                            <li class="flex items-start gap-3"><i class="fa-solid fa-bell text-blue-600 mt-1"></i> <span><strong>Notifikasi Real-time:</strong> Status transaksi otomatis berubah jadi "Lunas" tanpa perlu cek mutasi manual.</span></li>
                        </ul>`
                },
                {
                    id: 2,
                    question: "Apakah data penjualan dan stok saya aman?",
                    answer: `<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="flex gap-3 p-3 bg-slate-50 rounded-xl"><i class="fa-solid fa-cloud-shield text-blue-600 mt-1"></i> <span><strong>Daily Backup:</strong> Seluruh data transaksi dicadangkan secara harian otomatis.</span></div>
                            <div class="flex gap-3 p-3 bg-slate-50 rounded-xl"><i class="fa-solid fa-lock text-blue-600 mt-1"></i> <span><strong>Enkripsi SSL:</strong> Jalur data antara toko dan server terlindungi sepenuhnya.</span></div>
                        </div>`
                },
                {
                    id: 3,
                    question: "Bagaimana jika saya atau karyawan kesulitan menggunakannya?",
                    answer: `<p class="mb-3">Kami memastikan tim Anda mahir menggunakan sistem melalui:</p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-video text-blue-500"></i> Video Tutorial penggunaan fitur kasir & admin.</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-headset text-blue-500"></i> Layanan konsultasi teknis jika ada kendala.</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-book text-blue-500"></i> Buku panduan operasional digital (PDF).</li>
                        </ul>`
                },
                {
                    id: 4,
                    question: "Apakah sistem ini bisa digunakan di HP atau Tablet?",
                    answer: `<p><strong>Sangat bisa.</strong> Website POS ini dibangun dengan desain responsif yang mendukung berbagai perangkat seperti Android, iOS, tablet, hingga PC kasir khusus.</p>`
                },
                {
                    id: 5,
                    question: "Dapatkah sistem mengelola banyak cabang (Multi-outlet)?",
                    answer: `<p>Ya, sistem didesain untuk skalabilitas. Anda dapat memantau stok dan laporan keuangan dari berbagai cabang hanya dalam satu dashboard admin yang terpusat.</p>`
                },
                {
                    id: 6,
                    question: "Apakah stok barang otomatis berkurang saat ada penjualan?",
                    answer: `<p>Benar. Setiap transaksi penjualan akan memotong stok secara <strong>real-time</strong>, dan sistem akan memberi peringatan jika stok sudah mencapai batas minimum.</p>`
                },
                {
                    id: 7,
                    question: "Apakah saya bisa menarik laporan keuangan bulanan?",
                    answer: `<p>Tentu. Sistem menyediakan fitur laporan otomatis yang mencakup penjualan harian, laba rugi, hingga analisis produk yang paling laris untuk membantu keputusan bisnis Anda.</p>`
                },
                {
                    id: 8,
                    question: "Bisa hubungkan dengan alat kasir yang sudah saya punya?",
                    answer: `<p>Sistem kami mendukung perangkat keras standar industri seperti <em>barcode scanner</em>, <em>cash drawer</em>, dan printer struk thermal (Bluetooth/USB).</p>`
                },
                {
                    id: 9,
                    question: "Berapa lama waktu pengerjaannya?",
                    answer: `<p>Untuk sistem POS dengan fitur standar hingga integrasi API, waktu pengerjaan berkisar antara <strong>14 sampai 21 hari kerja</strong>.</p>`
                }
            ]
        }
    }
    </script>
    @endpush

</x-layout.app>
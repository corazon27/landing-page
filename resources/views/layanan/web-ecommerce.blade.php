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
                                <span class="text-xs font-bold text-blue-600 tracking-wide">E-Commerce</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <div class="text-left space-y-8">
                    <div>
                        <span
                            class="inline-block px-4 py-1.5 rounded-full bg-blue-50 text-blue-600 text-xs font-semibold uppercase tracking-wider mb-4">
                            Website E-Commerce
                        </span>
                        <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 leading-tight">
                            Bangun Toko Online <span class="text-blue-600">Profesional</span> <br
                                class="hidden md:block">
                            Lepas Ketergantungan dari Marketplace
                        </h2>
                        <p class="mt-6 text-lg text-slate-600 leading-relaxed">
                            Ubah bisnis Anda menjadi brand yang kuat dengan sistem otomatis. Kelola pesanan, pembayaran,
                            hingga
                            pengiriman dalam satu pintu yang bekerja 24 jam nonstop.
                        </p>
                    </div>

                    <div class="pt-4">
                        <a href="#"
                            class="inline-block px-8 py-4 rounded-2xl bg-blue-600 text-white font-bold text-base hover:bg-blue-700 transition-all shadow-lg shadow-blue-200">
                            Coba Gratis 3 Hari
                        </a>
                    </div>
                </div>

                <div class="relative mt-12 lg:mt-0">
                    <div class="absolute inset-0 transform scale-125 bg-blue-50/60 rounded-full blur-3xl"></div>

                    <div
                        class="relative z-10 bg-white rounded-2xl shadow-2xl border border-slate-200 overflow-hidden transform lg:rotate-2 hover:rotate-0 transition-transform duration-500">
                        <div class="bg-slate-50 border-b border-slate-200 px-4 py-3 flex items-center gap-2">
                            <div class="flex gap-1.5">
                                <div class="w-3 h-3 rounded-full bg-red-400"></div>
                                <div class="w-3 h-3 rounded-full bg-amber-400"></div>
                                <div class="w-3 h-3 rounded-full bg-green-400"></div>
                            </div>
                            <div
                                class="mx-auto bg-white border border-slate-200 rounded-md py-1 px-4 text-[10px] text-slate-400 w-2/3 text-center">
                                <i class="fa-solid fa-lock text-[8px] mr-1"></i> www.toko-anda.com
                            </div>
                        </div>

                        <div class="p-0 overflow-hidden">
                            <div class="bg-blue-600 p-8 text-center space-y-4">
                                <i class="fa-solid fa-bag-shopping text-blue-400/40 text-4xl mb-2"></i>
                                <div class="h-2 w-16 bg-blue-400 mx-auto rounded"></div>
                                <div class="h-4 w-32 bg-white mx-auto rounded"></div>
                                <div class="h-2 w-24 bg-blue-300 mx-auto rounded"></div>
                            </div>
                            <div class="p-6 grid grid-cols-2 gap-4">
                                <div class="space-y-2">
                                    <div class="aspect-square bg-slate-100 rounded-lg flex items-center justify-center">
                                        <i class="fa-solid fa-image text-slate-200 text-2xl"></i>
                                    </div>
                                    <div class="h-2 w-full bg-slate-200 rounded"></div>
                                    <div class="h-2 w-2/3 bg-slate-100 rounded"></div>
                                </div>
                                <div class="space-y-2">
                                    <div class="aspect-square bg-slate-100 rounded-lg flex items-center justify-center">
                                        <i class="fa-solid fa-image text-slate-200 text-2xl"></i>
                                    </div>
                                    <div class="h-2 w-full bg-slate-200 rounded"></div>
                                    <div class="h-2 w-2/3 bg-slate-100 rounded"></div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="absolute bottom-6 -left-6 bg-white p-4 rounded-2xl shadow-xl border border-slate-100 hidden md:flex items-center gap-4 animate-bounce">
                            <div
                                class="w-10 h-10 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center">
                                <i class="fa-solid fa-tag"></i>
                            </div>
                            <div>
                                <p class="text-[10px] text-slate-400 uppercase font-bold tracking-widest">Order Baru</p>
                                <p class="text-sm font-bold text-slate-800">+ Rp 250.000</p>
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
                    Mengapa Harus Website E-commerce?
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto">
                    Bandingkan bagaimana bisnis Anda dikelola saat masih bergantung pada marketplace atau chat manual
                    dibandingkan dengan memiliki platform toko online mandiri.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">

                <div
                    class="bg-white p-8 rounded-3xl border border-red-100 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
                    <div
                        class="absolute -right-4 -top-4 opacity-5 group-hover:rotate-12 transition-transform duration-500">
                        <i class="fa-solid fa-box-archive text-9xl text-red-600"></i>
                    </div>

                    <div class="relative z-10">
                        <div class="w-12 h-12 bg-red-50 rounded-2xl flex items-center justify-center mb-6">
                            <i class="fa-solid fa-xmark text-red-500 text-xl"></i>
                        </div>

                        <h3 class="text-xl font-bold text-slate-900 mb-6">Tanpa Website (Manual/Marketplace)</h3>

                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300"></i>
                                <p class="text-slate-600 text-sm"><strong>Ketergantungan Pihak Ketiga:</strong> Rentan
                                    terhadap perubahan kebijakan marketplace atau biaya admin yang terus naik.</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300"></i>
                                <p class="text-slate-600 text-sm"><strong>Perang Harga:</strong> Produk Anda
                                    disandingkan langsung dengan kompetitor yang banting harga di platform yang sama.
                                </p>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300"></i>
                                <p class="text-slate-600 text-sm"><strong>Data Pelanggan Terbatas:</strong> Anda tidak
                                    memiliki database email atau nomor WA pembeli untuk strategi promosi ulang.</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300"></i>
                                <p class="text-slate-600 text-sm font-medium text-red-500 italic">Branding sulit
                                    berkembang karena pembeli lebih ingat nama marketplace daripada nama toko Anda.</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div
                    class="bg-blue-600 p-8 rounded-3xl border border-blue-500 shadow-xl shadow-blue-100 relative overflow-hidden group">
                    <div
                        class="absolute -right-4 -top-4 opacity-10 group-hover:rotate-12 transition-transform duration-500">
                        <i class="fa-solid fa-cart-shopping text-9xl text-white"></i>
                    </div>

                    <div class="relative z-10">
                        <div
                            class="w-12 h-12 bg-blue-500 rounded-2xl flex items-center justify-center mb-6 border border-blue-400">
                            <i class="fa-solid fa-check text-white text-xl"></i>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-6">Dengan Website E-commerce</h3>

                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 text-sm"></i>
                                <p class="text-blue-50 text-sm"><strong>Kontrol Penuh & Branding:</strong> Bebas
                                    mengatur tampilan, promosi, dan sistem tanpa bayang-bayang aturan marketplace.</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 text-sm"></i>
                                <p class="text-blue-50 text-sm"><strong>Sistem Otomatis 24/7:</strong> Hitung ongkir
                                    otomatis dan terima pembayaran (Payment Gateway) meski Anda sedang tidur.</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 text-sm"></i>
                                <p class="text-blue-50 text-sm"><strong>Database Mandiri:</strong> Miliki data pelanggan
                                    secara penuh untuk dikelola sebagai aset pemasaran jangka panjang.</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 text-sm"></i>
                                <p class="text-blue-50 text-sm font-bold">Menciptakan toko online yang profesional,
                                    terpercaya, dan eksklusif untuk produk Anda sendiri.</p>
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
                    Fitur Unggulan <span class="text-blue-600">E-Commerce Profesional</span>
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto">
                    Tinggalkan cara jualan manual yang melelahkan. Bangun kredibilitas bisnis Anda dan biarkan sistem
                    otomatis bekerja mendatangkan profit 24 jam nonstop.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                <div class="lg:col-span-5 sticky top-24">
                    <div
                        class="bg-white p-4 rounded-[2.5rem] shadow-2xl border border-slate-100 relative overflow-hidden group">
                        <div class="bg-slate-100 rounded-2xl p-4 aspect-square flex flex-col gap-4">
                            <div class="flex items-center justify-between bg-white p-3 rounded-xl shadow-sm">
                                <div class="flex gap-2">
                                    <div class="w-3 h-3 rounded-full bg-red-400"></div>
                                    <div class="w-3 h-3 rounded-full bg-amber-400"></div>
                                    <div class="w-3 h-3 rounded-full bg-green-400"></div>
                                </div>
                                <div class="h-2 w-32 bg-blue-100 rounded"></div>
                            </div>

                            <div class="bg-white rounded-xl p-6 flex-1 flex flex-col justify-between gap-4">
                                <div class="space-y-3">
                                    <div
                                        class="h-40 w-full bg-slate-50 rounded-xl border border-dashed border-slate-200 flex items-center justify-center">
                                        <i class="fa-solid fa-cart-shopping text-slate-200 text-4xl"></i>
                                    </div>
                                    <div class="h-6 w-3/4 bg-slate-100 rounded"></div>
                                    <div class="h-4 w-full bg-slate-50 rounded"></div>
                                </div>

                                <div class="grid grid-cols-2 gap-3">
                                    <div
                                        class="h-16 bg-blue-50 rounded-lg border border-blue-100 flex flex-col items-center justify-center gap-1">
                                        <i class="fa-solid fa-credit-card text-blue-600 text-lg"></i>
                                        <div class="h-1 w-10 bg-blue-200 rounded"></div>
                                    </div>
                                    <div
                                        class="h-16 bg-emerald-50 rounded-lg border border-emerald-100 flex flex-col items-center justify-center gap-1">
                                        <i class="fa-solid fa-truck-fast text-emerald-600 text-lg"></i>
                                        <div class="h-1 w-10 bg-emerald-200 rounded"></div>
                                    </div>
                                </div>

                                <div class="h-10 w-full bg-blue-600 rounded-lg flex items-center justify-center">
                                    <span class="text-[10px] font-bold text-white tracking-widest uppercase">Sistem
                                        Scalable & Otomatis</span>
                                </div>
                            </div>
                        </div>

                        <div
                            class="absolute top-12 right-8 bg-blue-500 text-white p-3 rounded-xl shadow-lg flex items-center gap-2 animate-bounce">
                            <i class="fa-solid fa-rocket"></i>
                            <span class="text-xs font-bold">Auto-Sales</span>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 space-y-3">

                    <div @click="activeFeature = 1"
                        class="p-5 rounded-2xl cursor-pointer transition-all duration-300 border"
                        :class="activeFeature === 1 ? 'bg-blue-600 text-white shadow-xl shadow-blue-200 border-transparent' : 'bg-white hover:shadow-md text-slate-800 border-slate-100'">
                        <h4 class="font-bold flex items-center justify-between">
                            <span class="flex items-center gap-3">
                                <i class="fa-solid fa-store"
                                    :class="activeFeature === 1 ? 'text-white' : 'text-blue-600'"></i>
                                Katalog Produk & Checkout Otomatis
                            </span>
                            <i class="fa-solid fa-chevron-right text-[10px] transition-transform"
                                :class="activeFeature === 1 ? 'rotate-90' : ''"></i>
                        </h4>
                        <div x-show="activeFeature === 1" x-collapse>
                            <p class="text-sm mt-3 opacity-90 leading-relaxed">
                                Kelola produk dengan kategori, variasi, dan sistem keranjang belanja yang user-friendly.
                                <br><strong>Manfaat:</strong> Memudahkan pelanggan memilih produk dan mempercepat proses
                                pembelian tanpa banyak kendala (mengurangi <i>abandoned cart</i>).
                            </p>
                        </div>
                    </div>

                    <div @click="activeFeature = 2"
                        class="p-5 rounded-2xl cursor-pointer transition-all duration-300 border"
                        :class="activeFeature === 2 ? 'bg-blue-600 text-white shadow-xl shadow-blue-200 border-transparent' : 'bg-white hover:shadow-md text-slate-800 border-slate-100'">
                        <h4 class="font-bold flex items-center justify-between">
                            <span class="flex items-center gap-3">
                                <i class="fa-solid fa-wallet"
                                    :class="activeFeature === 2 ? 'text-white' : 'text-blue-600'"></i>
                                Pembayaran Online & Ongkir Otomatis
                            </span>
                            <i class="fa-solid fa-chevron-right text-[10px] transition-transform"
                                :class="activeFeature === 2 ? 'rotate-90' : ''"></i>
                        </h4>
                        <div x-show="activeFeature === 2" x-collapse>
                            <p class="text-sm mt-3 opacity-90 leading-relaxed">
                                Integrasi Payment Gateway (Transfer, E-Wallet) dan hitung ongkir real-time dari berbagai
                                ekspedisi.
                                <br><strong>Manfaat:</strong> Pelanggan bisa langsung bayar tanpa konfirmasi manual,
                                menghindari kesalahan hitung ongkir, dan transaksi jadi jauh lebih praktis.
                            </p>
                        </div>
                    </div>

                    <div @click="activeFeature = 3"
                        class="p-5 rounded-2xl cursor-pointer transition-all duration-300 border"
                        :class="activeFeature === 3 ? 'bg-blue-600 text-white shadow-xl shadow-blue-200 border-transparent' : 'bg-white hover:shadow-md text-slate-800 border-slate-100'">
                        <h4 class="font-bold flex items-center justify-between">
                            <span class="flex items-center gap-3">
                                <i class="fa-solid fa-chart-pie"
                                    :class="activeFeature === 3 ? 'text-white' : 'text-blue-600'"></i>
                                Manajemen Order & Laporan Penjualan
                            </span>
                            <i class="fa-solid fa-chevron-right text-[10px] transition-transform"
                                :class="activeFeature === 3 ? 'rotate-90' : ''"></i>
                        </h4>
                        <div x-show="activeFeature === 3" x-collapse>
                            <p class="text-sm mt-3 opacity-90 leading-relaxed">
                                Pantau semua pesanan masuk hingga selesai dan lihat grafik omzet serta performa toko
                                lewat satu dashboard.
                                <br><strong>Manfaat:</strong> Administrasi bisnis tercatat rapi secara otomatis,
                                memudahkan Anda mengambil keputusan berdasarkan data nyata.
                            </p>
                        </div>
                    </div>

                    <div @click="activeFeature = 4"
                        class="p-5 rounded-2xl cursor-pointer transition-all duration-300 border"
                        :class="activeFeature === 4 ? 'bg-blue-600 text-white shadow-xl shadow-blue-200 border-transparent' : 'bg-white hover:shadow-md text-slate-800 border-slate-100'">
                        <h4 class="font-bold flex items-center justify-between">
                            <span class="flex items-center gap-3">
                                <i class="fa-solid fa-bullhorn"
                                    :class="activeFeature === 4 ? 'text-white' : 'text-blue-600'"></i>
                                Fitur Marketing (Voucher, Review, & Promo)
                            </span>
                            <i class="fa-solid fa-chevron-right text-[10px] transition-transform"
                                :class="activeFeature === 4 ? 'rotate-90' : ''"></i>
                        </h4>
                        <div x-show="activeFeature === 4" x-collapse>
                            <p class="text-sm mt-3 opacity-90 leading-relaxed">
                                Sistem pembuatan kupon diskon dan fitur ulasan produk dari pembeli asli.
                                <br><strong>Manfaat:</strong> Meningkatkan repeat order melalui strategi promo dan
                                membangun kepercayaan (trust) calon pelanggan baru melalui ulasan positif.
                            </p>
                        </div>
                    </div>

                    <div @click="activeFeature = 5"
                        class="p-5 rounded-2xl cursor-pointer transition-all duration-300 border"
                        :class="activeFeature === 5 ? 'bg-blue-600 text-white shadow-xl shadow-blue-200 border-transparent' : 'bg-white hover:shadow-md text-slate-800 border-slate-100'">
                        <h4 class="font-bold flex items-center justify-between">
                            <span class="flex items-center gap-3">
                                <i class="fa-solid fa-bolt-lightning"
                                    :class="activeFeature === 5 ? 'text-white' : 'text-blue-600'"></i>
                                Advanced Tech (Tracking & Retargeting)
                            </span>
                            <i class="fa-solid fa-chevron-right text-[10px] transition-transform"
                                :class="activeFeature === 5 ? 'rotate-90' : ''"></i>
                        </h4>
                        <div x-show="activeFeature === 5" x-collapse>
                            <p class="text-sm mt-3 opacity-90 leading-relaxed">
                                Integrasi Facebook Pixel, Google Analytics, dan sistem retargeting otomatis.
                                <br><strong>Manfaat:</strong> Pantau performa iklan dengan akurat dan kejar kembali
                                calon pembeli yang belum jadi checkout untuk meningkatkan conversion rate iklan Anda.
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
                    Miliki <span class="text-blue-600">Aset Digital</span> Anda
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Investasikan biaya iklan Anda ke toko sendiri. Bangun
                    database pelanggan yang bisa Anda hubungi kapan saja tanpa potongan admin besar.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">

                <div
                    class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm flex flex-col hover:shadow-md transition-all group">
                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-slate-900 mb-2">E-Commerce Basic</h3>
                        <p class="text-slate-500 text-sm mb-6">Cocok untuk toko baru yang ingin sistem order otomatis.
                        </p>
                        <div class="flex items-baseline gap-1">
                            <span class="text-4xl font-extrabold text-slate-900">Rp 2,5jt</span>
                        </div>
                        <p class="text-xs text-slate-400 mt-2">Biaya Setup Awal</p>
                    </div>

                    <ul class="space-y-4 mb-10 flex-grow">
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Kapasitas 100 Produk</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Checkout via WhatsApp</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Laporan Penjualan Dasar</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Domain .com & Hosting 1 Thn</span>
                        </li>
                    </ul>

                    <a href="#"
                        class="block w-full py-4 px-6 text-center rounded-2xl border-2 border-blue-600 text-blue-600 font-bold hover:bg-blue-50 transition-colors">
                        Pilih Paket Basic
                    </a>
                </div>

                <div
                    class="bg-white p-8 rounded-3xl border-2 border-blue-600 shadow-xl flex flex-col relative transform lg:-translate-y-4">
                    <div
                        class="absolute top-0 left-1/2 -translate-x-1/2 bg-amber-400 text-amber-950 text-[10px] px-4 py-1.5 rounded-b-xl font-bold uppercase tracking-wider shadow-sm">
                        Paling Populer
                    </div>

                    <div class="mb-8 mt-4">
                        <h3 class="text-xl font-bold text-slate-900 mb-2">E-Commerce Professional</h3>
                        <p class="text-slate-500 text-sm mb-6">Otomatisasi penuh untuk scale-up bisnis lebih cepat.</p>
                        <div class="flex items-baseline gap-1">
                            <span class="text-4xl font-extrabold text-slate-900">Rp 4,9jt</span>
                        </div>
                        <p class="text-xs text-slate-400 mt-2">Fitur Terlengkap</p>
                    </div>

                    <ul class="space-y-4 mb-10 flex-grow">
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Produk Unlimited</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span><strong>Payment Gateway & Ongkir Otomatis</strong></span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Sistem Voucher & Kupon Diskon</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Manajemen Stok & Database Member</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Analytics & Facebook Pixel Ready</span>
                        </li>
                    </ul>

                    <a href="#"
                        class="block w-full py-4 px-6 text-center rounded-2xl bg-blue-600 text-white font-bold hover:bg-blue-700 shadow-lg shadow-blue-200 transition-all">
                        Ambil Penawaran Ini
                    </a>
                </div>

                <div
                    class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm flex flex-col hover:shadow-md transition-all">
                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Enterprise / B2B</h3>
                        <p class="text-slate-500 text-sm mb-6">Sistem custom untuk kebutuhan bisnis skala besar.</p>
                        <div class="flex items-baseline gap-1">
                            <span class="text-2xl font-extrabold text-slate-900 italic">Custom Quote</span>
                        </div>
                        <p class="text-xs text-slate-400 mt-2">Skalabilitas Tanpa Batas</p>
                    </div>

                    <ul class="space-y-4 mb-10 flex-grow">
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Integrasi API Pihak Ketiga</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Fitur Multi-Warehouse (Banyak Gudang)</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Sistem Reseller / Affiliate</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Dedicated Server & Support</span>
                        </li>
                    </ul>

                    <a href="#"
                        class="block w-full py-4 px-6 text-center rounded-2xl border-2 border-slate-900 text-slate-900 font-bold hover:bg-slate-900 hover:text-white transition-all">
                        Hubungi Tim Ahli
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-white" x-data="{ selected: null }">
        <div class="max-w-3xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">
                    Tanya Jawab <span class="text-blue-600">E-Commerce</span>
                </h2>
                <p class="text-slate-600">Informasi teknis untuk membantu Anda memutuskan sistem terbaik bagi bisnis.
                </p>
            </div>

            <div class="space-y-4">

                <div class="border border-slate-200 rounded-2xl overflow-hidden shadow-sm transition-all duration-300"
                    :class="selected === 1 ? 'border-blue-300 ring-1 ring-blue-100' : ''">
                    <button @click="selected !== 1 ? selected = 1 : selected = null"
                        class="w-full flex items-center justify-between p-6 text-left bg-white hover:bg-slate-50 transition-colors group">
                        <span class="font-bold text-slate-900" :class="selected === 1 ? 'text-blue-600' : ''">
                            Apakah saya harus bayar komisi per transaksi ke Anda?
                        </span>
                        <i class="fa-solid fa-chevron-down text-blue-600 transition-transform duration-300"
                            :class="selected === 1 ? 'rotate-180' : ''"></i>
                    </button>
                    <div class="px-6 pb-6 text-sm text-slate-600 leading-relaxed" x-show="selected === 1" x-collapse>
                        <strong>Sama sekali tidak.</strong> Berbeda dengan marketplace, 100% keuntungan adalah milik
                        Anda. Anda hanya membayar biaya berlangganan domain/hosting tahunan dan biaya administrasi kecil
                        jika menggunakan payment gateway pihak ketiga (seperti Midtrans/Xendit).
                    </div>
                </div>

                <div class="border border-slate-200 rounded-2xl overflow-hidden shadow-sm transition-all duration-300"
                    :class="selected === 2 ? 'border-blue-300 ring-1 ring-blue-100' : ''">
                    <button @click="selected !== 2 ? selected = 2 : selected = null"
                        class="w-full flex items-center justify-between p-6 text-left bg-white hover:bg-slate-50 transition-colors group">
                        <span class="font-bold text-slate-900" :class="selected === 2 ? 'text-blue-600' : ''">
                            Bagaimana dengan keamanan data pelanggan saya?
                        </span>
                        <i class="fa-solid fa-chevron-down text-blue-600 transition-transform duration-300"
                            :class="selected === 2 ? 'rotate-180' : ''"></i>
                    </button>
                    <div class="px-6 pb-6 text-sm text-slate-600" x-show="selected === 2" x-collapse>
                        Setiap website yang kami bangun dilengkapi dengan sertifikat SSL (Encryption) dan sistem
                        keamanan database berlapis. Data pelanggan Anda adalah aset berharga Anda, dan kami
                        memastikannya aman di server yang andal.
                    </div>
                </div>

                <div class="border border-slate-200 rounded-2xl overflow-hidden shadow-sm transition-all duration-300"
                    :class="selected === 3 ? 'border-blue-300 ring-1 ring-blue-100' : ''">
                    <button @click="selected !== 3 ? selected = 3 : selected = null"
                        class="w-full flex items-center justify-between p-6 text-left bg-white hover:bg-slate-50 transition-colors group">
                        <span class="font-bold text-slate-900" :class="selected === 3 ? 'text-blue-600' : ''">
                            Apakah website sudah otomatis menghitung ongkos kirim?
                        </span>
                        <i class="fa-solid fa-chevron-down text-blue-600 transition-transform duration-300"
                            :class="selected === 3 ? 'rotate-180' : ''"></i>
                    </button>
                    <div class="px-6 pb-6 text-sm text-slate-600 leading-relaxed" x-show="selected === 3" x-collapse>
                        <strong>Ya, sudah terintegrasi.</strong> Sistem kami mendukung perhitungan otomatis dari
                        ekspedisi populer di Indonesia seperti JNE, J&T, Sicepat, hingga POS Indonesia. Pelanggan Anda
                        cukup memasukkan alamat, dan ongkir akan muncul secara otomatis saat checkout.
                    </div>
                </div>

                <div class="border border-slate-200 rounded-2xl overflow-hidden shadow-sm transition-all duration-300"
                    :class="selected === 4 ? 'border-blue-300 ring-1 ring-blue-100' : ''">
                    <button @click="selected !== 4 ? selected = 4 : selected = null"
                        class="w-full flex items-center justify-between p-6 text-left bg-white hover:bg-slate-50 transition-colors group">
                        <span class="font-bold text-slate-900" :class="selected === 4 ? 'text-blue-600' : ''">
                            Apakah saya bisa mengelola stok dan produk sendiri?
                        </span>
                        <i class="fa-solid fa-chevron-down text-blue-600 transition-transform duration-300"
                            :class="selected === 4 ? 'rotate-180' : ''"></i>
                    </button>
                    <div class="px-6 pb-6 text-sm text-slate-600" x-show="selected === 4" x-collapse>
                        Tentu saja. Kami menyediakan <strong>Dashboard Admin</strong> yang sangat mudah digunakan
                        (user-friendly). Anda bisa menambah produk, mengubah harga, mengatur stok, hingga melihat
                        laporan penjualan tanpa perlu keahlian coding sama sekali.
                    </div>
                </div>

                <div class="border border-slate-200 rounded-2xl overflow-hidden shadow-sm transition-all duration-300"
                    :class="selected === 5 ? 'border-blue-300 ring-1 ring-blue-100' : ''">
                    <button @click="selected !== 5 ? selected = 5 : selected = null"
                        class="w-full flex items-center justify-between p-6 text-left bg-white hover:bg-slate-50 transition-colors group">
                        <span class="font-bold text-slate-900" :class="selected === 5 ? 'text-blue-600' : ''">
                            Metode pembayaran apa saja yang tersedia?
                        </span>
                        <i class="fa-solid fa-chevron-down text-blue-600 transition-transform duration-300"
                            :class="selected === 5 ? 'rotate-180' : ''"></i>
                    </button>
                    <div class="px-6 pb-6 text-sm text-slate-600" x-show="selected === 5" x-collapse>
                        Kami mendukung berbagai metode mulai dari <strong>Transfer Bank Manual</strong> hingga
                        <strong>Otomatis (Payment Gateway)</strong>. Melalui Payment Gateway, toko Anda bisa menerima
                        pembayaran via QRIS, E-Wallet (GoPay, OVO, Dana), Virtual Account, hingga kartu kredit secara
                        real-time.
                    </div>
                </div>

                <div class="border border-slate-200 rounded-2xl overflow-hidden shadow-sm transition-all duration-300"
                    :class="selected === 6 ? 'border-blue-300 ring-1 ring-blue-100' : ''">
                    <button @click="selected !== 6 ? selected = 6 : selected = null"
                        class="w-full flex items-center justify-between p-6 text-left bg-white hover:bg-slate-50 transition-colors group">
                        <span class="font-bold text-slate-900" :class="selected === 6 ? 'text-blue-600' : ''">
                            Apakah tampilan website bagus jika dibuka di HP?
                        </span>
                        <i class="fa-solid fa-chevron-down text-blue-600 transition-transform duration-300"
                            :class="selected === 6 ? 'rotate-180' : ''"></i>
                    </button>
                    <div class="px-6 pb-6 text-sm text-slate-600" x-show="selected === 6" x-collapse>
                        <strong>Sangat responsif.</strong> Lebih dari 80% pembeli online menggunakan smartphone, maka
                        dari itu kami mengutamakan desain <em>mobile-first</em>. Website Anda akan tetap rapi, cepat,
                        dan mudah diakses dari perangkat apa pun.
                    </div>
                </div>

                <div class="border border-slate-200 rounded-2xl overflow-hidden shadow-sm transition-all duration-300"
                    :class="selected === 7 ? 'border-blue-300 ring-1 ring-blue-100' : ''">
                    <button @click="selected !== 7 ? selected = 7 : selected = null"
                        class="w-full flex items-center justify-between p-6 text-left bg-white hover:bg-slate-50 transition-colors group">
                        <span class="font-bold text-slate-900" :class="selected === 7 ? 'text-blue-600' : ''">
                            Apakah website saya akan muncul di Google?
                        </span>
                        <i class="fa-solid fa-chevron-down text-blue-600 transition-transform duration-300"
                            :class="selected === 7 ? 'rotate-180' : ''"></i>
                    </button>
                    <div class="px-6 pb-6 text-sm text-slate-600" x-show="selected === 7" x-collapse>
                        Kami membangun website dengan struktur yang <strong>SEO-Friendly</strong>. Ini memudahkan mesin
                        pencari seperti Google untuk mengindeks produk Anda, sehingga memperbesar peluang toko Anda
                        ditemukan oleh calon pembeli secara organik.
                    </div>
                </div>

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
</x-layout.app>
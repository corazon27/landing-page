<x-layout.app>

    <section class="py-20 bg-white overflow-hidden">
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
                                <span class="text-xs font-bold text-blue-600 tracking-wide">Katalog</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1 space-y-8">
                    <div>
                        <span
                            class="inline-block px-4 py-1.5 rounded-full bg-blue-50 text-blue-600 text-xs font-semibold uppercase tracking-wider mb-4">
                            Katalog Digital Otomatis
                        </span>
                        <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 leading-tight">
                            Pamerkan Produk <span class="text-blue-600">Lebih Berkelas</span> Tanpa Kirim Foto Satu-Satu
                        </h2>
                        <p class="mt-6 text-lg text-slate-600 leading-relaxed">
                            Ubah cara jualan manual Anda menjadi otomatis. Biarkan katalog digital yang bekerja
                            menjelaskan detail produk Anda kepada pelanggan 24 jam nonstop, bahkan saat Anda tidur.
                        </p>
                    </div>

                    <div class="pt-4">
                        <a href="#"
                            class="inline-flex items-center gap-2 px-8 py-4 rounded-2xl bg-slate-900 text-white font-bold text-base hover:bg-slate-800 transition-all shadow-xl">
                            Coba Gratis 3 Hari
                            <i class="fa-solid fa-arrow-right text-sm"></i>
                        </a>
                    </div>
                </div>

                <div class="order-1 lg:order-2 relative">
                    <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-blue-100 rounded-full blur-3xl opacity-60">
                    </div>

                    <div
                        class="relative z-10 grid grid-cols-2 gap-4 p-6 bg-slate-50 rounded-[3rem] border border-slate-200 shadow-inner">

                        <div
                            class="bg-white p-3 rounded-2xl shadow-sm border border-slate-100 transform -rotate-2 hover:rotate-0 transition-all duration-500">
                            <div class="aspect-square bg-slate-100 rounded-xl mb-3 overflow-hidden">
                                <div
                                    class="w-full h-full bg-gradient-to-br from-slate-200 to-slate-300 flex items-center justify-center">
                                    <i class="fa-solid fa-image text-slate-400 text-3xl"></i>
                                </div>
                            </div>
                            <div class="h-3 w-3/4 bg-slate-200 rounded mb-2"></div>
                            <div class="h-3 w-1/2 bg-blue-100 rounded"></div>
                        </div>

                        <div
                            class="bg-white p-3 rounded-2xl shadow-sm border border-slate-100 transform rotate-3 hover:rotate-0 transition-all duration-500 mt-8">
                            <div class="aspect-square bg-slate-100 rounded-xl mb-3 overflow-hidden">
                                <div
                                    class="w-full h-full bg-gradient-to-br from-blue-100 to-blue-200 flex items-center justify-center">
                                    <i class="fa-solid fa-bag-shopping text-blue-400 text-3xl"></i>
                                </div>
                            </div>
                            <div class="h-3 w-3/4 bg-slate-200 rounded mb-2"></div>
                            <div class="h-3 w-1/2 bg-blue-100 rounded"></div>
                        </div>

                        <div
                            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white/80 backdrop-blur px-6 py-3 rounded-full border border-white shadow-2xl flex items-center gap-3">
                            <div class="flex -space-x-2">
                                <div class="w-6 h-6 rounded-full bg-blue-400 border-2 border-white"></div>
                                <div class="w-6 h-6 rounded-full bg-slate-400 border-2 border-white"></div>
                            </div>
                            <span class="text-[10px] font-bold text-slate-700 uppercase tracking-widest">1k+
                                Pengunjung</span>
                        </div>
                    </div>

                    <div
                        class="absolute -bottom-9 right-10 bg-emerald-500 text-white px-4 py-2 rounded-xl shadow-lg font-bold text-sm animate-bounce">
                        Siap Jualan!
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">
                    Siap Tinggalkan Cara Jualan Lama?
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto">
                    Bandingkan repotnya mengelola pesanan secara manual dengan kemudahan memiliki sistem katalog digital
                    yang bekerja otomatis untuk bisnis Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">

                <div
                    class="bg-white p-8 rounded-3xl border border-red-100 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
                    <div
                        class="absolute -right-4 -top-4 opacity-5 group-hover:rotate-12 transition-transform duration-500">
                        <i class="fa-solid fa-hand-pointer text-9xl text-red-600"></i>
                    </div>

                    <div class="relative z-10">
                        <div class="w-12 h-12 bg-red-50 rounded-2xl flex items-center justify-center mb-6">
                            <i class="fa-solid fa-xmark text-red-500 text-xl"></i>
                        </div>

                        <h3 class="text-xl font-bold text-slate-900 mb-6">Cara Lama (Manual)</h3>

                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300"></i>
                                <p class="text-slate-600 text-sm"><strong>Repot kirim foto:</strong> Harus kirim foto
                                    produk satu-satu setiap kali ada pelanggan yang bertanya via chat.</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300"></i>
                                <p class="text-slate-600 text-sm"><strong>Chat berulang:</strong> Lelah menjelaskan
                                    spesifikasi dan harga yang sama berkali-kali kepada orang berbeda.</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300"></i>
                                <p class="text-slate-600 text-sm"><strong>Pelanggan bingung:</strong> Pembeli sulit
                                    membandingkan produk karena galeri foto di chat berantakan.</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300"></i>
                                <p class="text-slate-600 text-sm font-medium text-red-500 italic">Bisnis terlihat kurang
                                    profesional dan melelahkan untuk dikelola setiap hari.</p>
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

                        <h3 class="text-xl font-bold text-white mb-6">Dengan Website Katalog</h3>

                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 text-sm"></i>
                                <p class="text-blue-50 text-sm"><strong>Sistem Rapi:</strong> Semua koleksi produk
                                    tersusun cantik dalam satu link katalog profesional.</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 text-sm"></i>
                                <p class="text-blue-50 text-sm"><strong>Hemat Waktu:</strong> Cukup kirim satu link
                                    website, pelanggan bisa langsung lihat semua detail tanpa bertanya lagi.</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 text-sm"></i>
                                <p class="text-blue-50 text-sm"><strong>Self-Service:</strong> Pelanggan bisa pilih
                                    produk sendiri, cek stok, dan langsung klik beli via WhatsApp.</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 text-sm"></i>
                                <p class="text-blue-50 text-sm font-bold">Proses closing jauh lebih cepat, mudah, dan
                                    meningkatkan rasa percaya pembeli secara instan.</p>
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
                    Fitur Unggulan <span class="text-blue-600">Website Katalog Digital</span>
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto">
                    Tinggalkan cara jualan manual yang melelahkan. Bangun kredibilitas bisnis Anda dan biarkan website
                    bekerja mendatangkan pembeli secara otomatis 24 jam nonstop.
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
                                <div class="h-2 w-32 bg-blue-100 rounded"></div>
                            </div>

                            <div class="bg-white rounded-xl p-6 flex-1 flex flex-col justify-between gap-4">
                                <div class="space-y-3">
                                    <div
                                        class="h-40 w-full bg-slate-50 rounded-xl border border-dashed border-slate-200 flex items-center justify-center">
                                        <i class="fa-solid fa-image text-slate-200 text-4xl"></i>
                                    </div>
                                    <div class="h-6 w-3/4 bg-slate-100 rounded"></div>
                                    <div class="h-4 w-full bg-slate-50 rounded"></div>
                                </div>

                                <div class="grid grid-cols-2 gap-3">
                                    <div
                                        class="h-16 bg-blue-50 rounded-lg border border-blue-100 flex flex-col items-center justify-center gap-1">
                                        <i class="fa-solid fa-eye text-blue-600 text-lg"></i>
                                        <div class="h-1 w-10 bg-blue-200 rounded"></div>
                                    </div>
                                    <div
                                        class="h-16 bg-emerald-50 rounded-lg border border-emerald-100 flex flex-col items-center justify-center gap-1">
                                        <i class="fa-brands fa-whatsapp text-emerald-600 text-lg"></i>
                                        <div class="h-1 w-10 bg-emerald-200 rounded"></div>
                                    </div>
                                </div>

                                <div class="h-10 w-full bg-blue-600 rounded-lg flex items-center justify-center">
                                    <span class="text-[10px] font-bold text-white tracking-widest uppercase">Katalog
                                        Profesional Aktif</span>
                                </div>
                            </div>
                        </div>

                        <div
                            class="absolute top-12 right-8 bg-blue-500 text-white p-3 rounded-xl shadow-lg flex items-center gap-2 animate-bounce">
                            <i class="fa-solid fa-bolt"></i>
                            <span class="text-xs font-bold">Siap Closing!</span>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-6 space-y-3">

                    <div @click="activeFeature = 1"
                        class="p-5 rounded-2xl cursor-pointer transition-all duration-300 border"
                        :class="activeFeature === 1 ? 'bg-blue-600 text-white shadow-xl shadow-blue-200 border-transparent' : 'bg-white hover:shadow-md text-slate-800 border-slate-100'">
                        <h4 class="font-bold flex items-center justify-between">
                            <span class="flex items-center gap-3">
                                <i class="fa-solid fa-layer-group"
                                    :class="activeFeature === 1 ? 'text-white' : 'text-blue-600'"></i>
                                Tampilan Produk & Kategori Rapi
                            </span>
                            <i class="fa-solid fa-chevron-right text-[10px] transition-transform"
                                :class="activeFeature === 1 ? 'rotate-90' : ''"></i>
                        </h4>
                        <div x-show="activeFeature === 1" x-collapse>
                            <p class="text-sm mt-3 opacity-90 leading-relaxed">
                                Semua produk disusun rapi berdasarkan kategori, lengkap dengan foto dan deskripsi
                                detail.
                                <br><strong>Manfaat:</strong> Tidak perlu lagi kirim foto satu-persatu. Pelanggan bisa
                                mencari produk sendiri dengan cepat dan mudah.
                            </p>
                        </div>
                    </div>

                    <div @click="activeFeature = 2"
                        class="p-5 rounded-2xl cursor-pointer transition-all duration-300 border"
                        :class="activeFeature === 2 ? 'bg-blue-600 text-white shadow-xl shadow-blue-200 border-transparent' : 'bg-white hover:shadow-md text-slate-800 border-slate-100'">
                        <h4 class="font-bold flex items-center justify-between">
                            <span class="flex items-center gap-3">
                                <i class="fa-brands fa-whatsapp"
                                    :class="activeFeature === 2 ? 'text-white' : 'text-blue-600'"></i>
                                Tombol WhatsApp & Form Order
                            </span>
                            <i class="fa-solid fa-chevron-right text-[10px] transition-transform"
                                :class="activeFeature === 2 ? 'rotate-90' : ''"></i>
                        </h4>
                        <div x-show="activeFeature === 2" x-collapse>
                            <p class="text-sm mt-3 opacity-90 leading-relaxed">
                                Setiap halaman produk memiliki tombol WhatsApp instan dan form permintaan penawaran.
                                <br><strong>Manfaat:</strong> Mengubah pengunjung menjadi calon pembeli (leads) secara
                                otomatis tanpa mereka harus menunggu antrean chat.
                            </p>
                        </div>
                    </div>

                    <div @click="activeFeature = 3"
                        class="p-5 rounded-2xl cursor-pointer transition-all duration-300 border"
                        :class="activeFeature === 3 ? 'bg-blue-600 text-white shadow-xl shadow-blue-200 border-transparent' : 'bg-white hover:shadow-md text-slate-800 border-slate-100'">
                        <h4 class="font-bold flex items-center justify-between">
                            <span class="flex items-center gap-3">
                                <i class="fa-solid fa-mobile-screen"
                                    :class="activeFeature === 3 ? 'text-white' : 'text-blue-600'"></i>
                                100% Mobile Friendly & SEO
                            </span>
                            <i class="fa-solid fa-chevron-right text-[10px] transition-transform"
                                :class="activeFeature === 3 ? 'rotate-90' : ''"></i>
                        </h4>
                        <div x-show="activeFeature === 3" x-collapse>
                            <p class="text-sm mt-3 opacity-90 leading-relaxed">
                                Website tampil sempurna di HP dan mudah ditemukan di pencarian Google.
                                <br><strong>Manfaat:</strong> Bisnis Anda bisa diakses kapan saja dan di mana saja,
                                menjangkau lebih banyak pelanggan baru.
                            </p>
                        </div>
                    </div>

                    <div @click="activeFeature = 4"
                        class="p-5 rounded-2xl cursor-pointer transition-all duration-300 border"
                        :class="activeFeature === 4 ? 'bg-blue-600 text-white shadow-xl shadow-blue-200 border-transparent' : 'bg-white hover:shadow-md text-slate-800 border-slate-100'">
                        <h4 class="font-bold flex items-center justify-between">
                            <span class="flex items-center gap-3">
                                <i class="fa-solid fa-star"
                                    :class="activeFeature === 4 ? 'text-white' : 'text-blue-600'"></i>
                                Branding & Kepercayaan (Testimoni/Maps)
                            </span>
                            <i class="fa-solid fa-chevron-right text-[10px] transition-transform"
                                :class="activeFeature === 4 ? 'rotate-90' : ''"></i>
                        </h4>
                        <div x-show="activeFeature === 4" x-collapse>
                            <p class="text-sm mt-3 opacity-90 leading-relaxed">
                                Dilengkapi halaman testimoni pelanggan, lokasi Google Maps, dan desain profesional.
                                <br><strong>Manfaat:</strong> Membangun kredibilitas instan. Pelanggan tidak ragu untuk
                                bertransaksi karena bisnis Anda terlihat nyata dan terpercaya.
                            </p>
                        </div>
                    </div>

                    <div @click="activeFeature = 5"
                        class="p-5 rounded-2xl cursor-pointer transition-all duration-300 border"
                        :class="activeFeature === 5 ? 'bg-blue-600 text-white shadow-xl shadow-blue-200 border-transparent' : 'bg-white hover:shadow-md text-slate-800 border-slate-100'">
                        <h4 class="font-bold flex items-center justify-between">
                            <span class="flex items-center gap-3">
                                <i class="fa-solid fa-gears"
                                    :class="activeFeature === 5 ? 'text-white' : 'text-blue-600'"></i>
                                Dashboard Admin Super Mudah
                            </span>
                            <i class="fa-solid fa-chevron-right text-[10px] transition-transform"
                                :class="activeFeature === 5 ? 'rotate-90' : ''"></i>
                        </h4>
                        <div x-show="activeFeature === 5" x-collapse>
                            <p class="text-sm mt-3 opacity-90 leading-relaxed">
                                Kelola semua isi website, tambah produk baru, atau ubah harga semudah mengupdate status
                                sosial media.
                                <br><strong>Manfaat:</strong> Anda punya kendali penuh atas toko digital Anda tanpa
                                perlu bayar jasa teknis setiap ada perubahan.
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
                    Pilih Paket <span class="text-blue-600">Katalog Digital</span> Anda
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Tingkatkan kelas bisnis Anda dengan tampilan katalog produk
                    yang profesional, rapi, dan mudah diakses pelanggan.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">

                <div
                    class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm flex flex-col hover:shadow-md transition-all group">
                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Katalog Starter</h3>
                        <p class="text-slate-500 text-sm mb-6">Cocok untuk UMKM yang ingin mulai merapikan tampilan
                            produk secara online.</p>
                        <div class="flex items-baseline gap-1">
                            <span class="text-4xl font-extrabold text-slate-900">Rp 999rb</span>
                        </div>
                        <p class="text-xs text-slate-400 mt-2 line-through">Harga Normal: Rp 2jt</p>
                    </div>

                    <ul class="space-y-4 mb-10 flex-grow">
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Kapasitas Hingga 20 Produk</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Tombol Pesan via WhatsApp</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Desain Responsif (HP/Tablet)</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Gratis Hosting & Domain .biz.id</span>
                        </li>
                    </ul>

                    <a href="#"
                        class="block w-full py-4 px-6 text-center rounded-2xl border-2 border-blue-600 text-blue-600 font-bold hover:bg-blue-50 transition-colors">
                        Pilih Paket Starter
                    </a>
                </div>

                <div
                    class="bg-white p-8 rounded-3xl border-2 border-blue-600 shadow-xl flex flex-col relative transform lg:-translate-y-4">
                    <div
                        class="absolute top-0 left-1/2 -translate-x-1/2 bg-amber-400 text-amber-950 text-[10px] px-4 py-1.5 rounded-b-xl font-bold uppercase tracking-wider shadow-sm">
                        Investasi Terbaik
                    </div>

                    <div class="mb-8 mt-4">
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Katalog Pro Business</h3>
                        <p class="text-slate-500 text-sm mb-6">Solusi lengkap dengan dashboard admin untuk kelola produk
                            sendiri.</p>
                        <div class="flex items-baseline gap-1">
                            <span class="text-4xl font-extrabold text-slate-900">Rp 1,9jt</span>
                        </div>
                        <p class="text-xs text-slate-400 mt-2 line-through">Harga Normal: Rp 4jt</p>
                    </div>

                    <ul class="space-y-4 mb-10 flex-grow">
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Produk Tidak Terbatas (Unlimited)</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span><strong>Dashboard Admin (Tambah/Edit Sendiri)</strong></span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Fitur Pencarian & Kategori</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Fitur Produk Best Seller/Unggulan</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Domain .com & SSL Keamanan</span>
                        </li>
                    </ul>

                    <a href="#"
                        class="block w-full py-4 px-6 text-center rounded-2xl bg-blue-600 text-white font-bold hover:bg-blue-700 shadow-lg shadow-blue-200 transition-all">
                        Pesan Paket Pro
                    </a>
                </div>

                <div
                    class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm flex flex-col hover:shadow-md transition-all">
                    <div class="mb-8">
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Custom Showcase</h3>
                        <p class="text-slate-500 text-sm mb-6">Desain eksklusif dan fitur khusus sesuai identitas brand
                            Anda.</p>
                        <div class="flex items-baseline gap-1">
                            <span class="text-2xl font-extrabold text-slate-900 italic">Hubungi Kami</span>
                        </div>
                        <p class="text-xs text-slate-400 mt-2 italic">Custom fitur & layout</p>
                    </div>

                    <ul class="space-y-4 mb-10 flex-grow">
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Desain Custom (Bukan Template)</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Fitur Form Penawaran Harga</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Integrasi Google Maps & Galeri Foto</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-blue-600 mt-1"></i>
                            <span>Support Maintenance Eksklusif</span>
                        </li>
                    </ul>

                    <a href="#"
                        class="block w-full py-4 px-6 text-center rounded-2xl border-2 border-slate-900 text-slate-900 font-bold hover:bg-slate-900 hover:text-white transition-all">
                        Minta Penawaran
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-white" x-data="{ selected: null }">
        <div class="max-w-3xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">
                    Pertanyaan Seputar <span class="text-blue-600">Katalog Digital</span>
                </h2>
                <p class="text-slate-600">Semua yang perlu Anda ketahui tentang proses digitalisasi produk bisnis Anda
                    bersama kami.</p>
            </div>

            <div class="space-y-4">

                <div class="border border-slate-200 rounded-2xl overflow-hidden shadow-sm transition-all duration-300"
                    :class="selected === 1 ? 'border-blue-300 ring-1 ring-blue-100' : ''">
                    <button @click="selected !== 1 ? selected = 1 : selected = null"
                        class="w-full flex items-center justify-between p-6 text-left bg-white hover:bg-slate-50 transition-colors group">
                        <span class="font-bold text-slate-900" :class="selected === 1 ? 'text-blue-600' : ''">
                            Bagaimana tahapan pengerjaan website katalog saya?
                        </span>
                        <i class="fa-solid fa-chevron-down text-blue-600 transition-transform duration-300"
                            :class="selected === 1 ? 'rotate-180' : ''"></i>
                    </button>
                    <div class="px-6 pb-6 text-sm text-slate-600 leading-relaxed" x-show="selected === 1" x-collapse>
                        Kami bekerja melalui 4 tahap efisien:
                        <ul class="mt-3 space-y-2">
                            <li class="flex items-center gap-2">
                                <i class="fa-solid fa-1 text-[10px] bg-blue-100 text-blue-600 p-1 rounded"></i>
                                Kirim data produk & foto melalui WhatsApp/Email.
                            </li>
                            <li class="flex items-center gap-2">
                                <i class="fa-solid fa-2 text-[10px] bg-blue-100 text-blue-600 p-1 rounded"></i>
                                Proses desain layout katalog & input data awal.
                            </li>
                            <li class="flex items-center gap-2">
                                <i class="fa-solid fa-3 text-[10px] bg-blue-100 text-blue-600 p-1 rounded"></i>
                                Review hasil sementara & revisi minor jika diperlukan.
                            </li>
                            <li class="flex items-center gap-2">
                                <i class="fa-solid fa-4 text-[10px] bg-blue-100 text-blue-600 p-1 rounded"></i>
                                Go-Live (Penyerahan akses dashboard & video panduan).
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="border border-slate-200 rounded-2xl overflow-hidden shadow-sm transition-all duration-300"
                    :class="selected === 2 ? 'border-blue-300 ring-1 ring-blue-100' : ''">
                    <button @click="selected !== 2 ? selected = 2 : selected = null"
                        class="w-full flex items-center justify-between p-6 text-left bg-white hover:bg-slate-50 transition-colors group">
                        <span class="font-bold text-slate-900" :class="selected === 2 ? 'text-blue-600' : ''">
                            Apakah saya bisa menambah produk sendiri di kemudian hari?
                        </span>
                        <i class="fa-solid fa-chevron-down text-blue-600 transition-transform duration-300"
                            :class="selected === 2 ? 'rotate-180' : ''"></i>
                    </button>
                    <div class="px-6 pb-6 text-sm text-slate-600" x-show="selected === 2" x-collapse>
                        <p class="leading-relaxed">
                            <strong>Tentu saja!</strong> Khusus untuk paket Pro, kami memberikan akses ke Dashboard
                            Admin yang intuitif. Anda bisa menambah, mengedit harga, atau menghapus produk kapan pun
                            melalui HP atau Laptop tanpa perlu bantuan kami lagi.
                        </p>
                    </div>
                </div>

                <div class="border border-slate-200 rounded-2xl overflow-hidden shadow-sm transition-all duration-300"
                    :class="selected === 3 ? 'border-blue-300 ring-1 ring-blue-100' : ''">
                    <button @click="selected !== 3 ? selected = 3 : selected = null"
                        class="w-full flex items-center justify-between p-6 text-left bg-white hover:bg-slate-50 transition-colors group">
                        <span class="font-bold text-slate-900" :class="selected === 3 ? 'text-blue-600' : ''">
                            Apakah ada biaya langganan setiap bulannya?
                        </span>
                        <i class="fa-solid fa-chevron-down text-blue-600 transition-transform duration-300"
                            :class="selected === 3 ? 'rotate-180' : ''"></i>
                    </button>
                    <div class="px-6 pb-6 text-sm text-slate-600" x-show="selected === 3" x-collapse>
                        <p>
                            Tidak ada biaya bulanan. Harga paket sudah termasuk <strong>Domain & Hosting aktif selama 1
                                tahun</strong>. Anda hanya perlu melakukan perpanjangan domain & hosting setiap tahun
                            sekali untuk memastikan website tetap online.
                        </p>
                    </div>
                </div>

                <div class="border border-slate-200 rounded-2xl overflow-hidden shadow-sm transition-all duration-300"
                    :class="selected === 4 ? 'border-blue-300 ring-1 ring-blue-100' : ''">
                    <button @click="selected !== 4 ? selected = 4 : selected = null"
                        class="w-full flex items-center justify-between p-6 text-left bg-white hover:bg-slate-50 transition-colors group">
                        <span class="font-bold text-slate-900" :class="selected === 4 ? 'text-blue-600' : ''">
                            Bagaimana pelanggan memesan produk melalui katalog?
                        </span>
                        <i class="fa-solid fa-chevron-down text-blue-600 transition-transform duration-300"
                            :class="selected === 4 ? 'rotate-180' : ''"></i>
                    </button>
                    <div class="px-6 pb-6 text-sm text-slate-600" x-show="selected === 4" x-collapse>
                        <div class="p-4 bg-blue-50 rounded-xl flex gap-4">
                            <i class="fa-brands fa-whatsapp text-2xl text-green-500"></i>
                            <p class="leading-relaxed text-xs">
                                Kami menyematkan tombol <strong>"Pesan via WhatsApp"</strong> di setiap detail produk.
                                Saat diklik, pelanggan akan langsung terhubung ke nomor Anda dengan format pesan
                                otomatis yang berisi nama produk & link gambar produk tersebut.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="border border-slate-200 rounded-2xl overflow-hidden shadow-sm transition-all duration-300"
                    :class="selected === 5 ? 'border-blue-300 ring-1 ring-blue-100' : ''">
                    <button @click="selected !== 5 ? selected = 5 : selected = null"
                        class="w-full flex items-center justify-between p-6 text-left bg-white hover:bg-slate-50 transition-colors group">
                        <span class="font-bold text-slate-900" :class="selected === 5 ? 'text-blue-600' : ''">
                            Bagaimana jika website saya mengalami kendala teknis?
                        </span>
                        <i class="fa-solid fa-chevron-down text-blue-600 transition-transform duration-300"
                            :class="selected === 5 ? 'rotate-180' : ''"></i>
                    </button>
                    <div class="px-6 pb-6 text-sm text-slate-600" x-show="selected === 5" x-collapse>
                        <p class="mb-3 font-medium">Kami memberikan jaminan kenyamanan pasca-pengerjaan:</p>
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-shield-check text-blue-600"></i>
                                Garansi perbaikan Bug.</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-headset text-blue-600"></i>
                                Konsultasi Gratis via WA.</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-server text-blue-600"></i>
                                Monitoring Server 24/7.</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-rotate text-blue-600"></i> Backup
                                data mingguan.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 bg-blue-600 rounded-t-[3rem] text-white">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-extrabold mb-6">Siap Membangun Katalog Produk Digital Anda?</h2>
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
                            class="w-full py-4 bg-green-500 hover:bg-green-600 text-white font-bold rounded-xl transition-all shadow-lg shadow-emerald-200 flex items-center justify-center gap-2">
                            <i class="fa-brands fa-whatsapp text-xl"></i>
                            Kirim Permintaan Meeting
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>




</x-layout.app>
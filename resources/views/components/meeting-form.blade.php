{{--
    ============================================================
    KOMPONEN: x-meeting-form
    FUNGSI  : Form permintaan meeting via WhatsApp.
              Menggantikan form yang sama di web-ecommerce,
              web-toko, web-katalog, dll. — satu sumber kebenaran.

    CARA PAKAI:
        <x-meeting-form
            title="Siap Membangun Toko Online Anda?"
            subtitle="Jadwalkan konsultasi gratis untuk mendiskusikan kebutuhan bisnis Anda."
        />

    PROPS (semua opsional, ada nilai default):
        - title    : Judul section CTA (string)
        - subtitle : Paragraf di bawah judul (string)
    ============================================================
--}}
@props([
'title' => 'Siap Membangun Website Bisnis Anda?',
'subtitle' => 'Jadwalkan konsultasi gratis (Minta Meeting) untuk mendiskusikan kebutuhan spesifik bisnis Anda.',
])

<section class="py-20 bg-blue-600 rounded-t-[3rem] text-white">
    <div class="max-w-4xl mx-auto px-6 text-center">

        <h2 class="text-3xl md:text-4xl font-extrabold mb-6">{{ $title }}</h2>
        <p class="text-blue-100 mb-10 text-lg">{{ $subtitle }}</p>

        <div class="bg-white p-8 rounded-3xl shadow-2xl text-slate-900 text-left">
            {{--
                ID form sengaja dibuat unik berdasarkan URL halaman
                agar tidak konflik jika ada halaman yang load 2 komponen ini.
                Script handler sudah ada di app.blade.php (global).
            --}}
            <form id="meetingForm" class="grid grid-cols-1 md:grid-cols-2 gap-6" novalidate>

                <div class="col-span-1">
                    <label for="company" class="block text-sm font-bold mb-2">
                        Nama Perusahaan / Bisnis
                    </label>
                    <input type="text" id="company" name="company" autocomplete="organization"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition"
                        placeholder="Contoh: Toko Berkah Jaya" required>
                </div>

                <div class="col-span-1">
                    <label for="phone" class="block text-sm font-bold mb-2">
                        Nomor WhatsApp
                    </label>
                    <input type="tel" id="phone" name="phone" autocomplete="tel"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition"
                        placeholder="0812xxxxxxxx" required>
                </div>

                <div class="col-span-2">
                    <label for="meetingDate" class="block text-sm font-bold mb-2">
                        Rencana Tanggal Meeting
                    </label>
                    <input type="date" id="meetingDate" name="meetingDate"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none text-slate-500 transition"
                        required>
                </div>

                <div class="col-span-2">
                    <label for="needs" class="block text-sm font-bold mb-2">
                        Deskripsi Kebutuhan <span class="font-normal text-slate-400">(Opsional)</span>
                    </label>
                    <textarea id="needs" name="needs" rows="3"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition"
                        placeholder="Ceritakan singkat kebutuhan website Anda..."></textarea>
                </div>

                <div class="col-span-2">
                    <button type="submit" class="w-full py-4 bg-green-500 hover:bg-green-600 text-white font-bold rounded-xl
                                   transition-all shadow-lg shadow-emerald-200 flex items-center justify-center gap-2
                                   cursor-pointer focus:outline-none focus:ring-2 focus:ring-green-400">
                        <i class="fa-brands fa-whatsapp text-xl" aria-hidden="true"></i>
                        Kirim Permintaan Meeting
                    </button>
                </div>

            </form>
        </div>
    </div>
</section>
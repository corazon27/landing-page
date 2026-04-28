<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>CV Cakra Inovasi Digital</title>

    <link rel="icon" type="image/png" href="{{ asset('images/logo-cakra.png') }}" class="h-16 w-auto">

    @vite('resources/css/app.css')
</head>

<body class="bg-white text-slate-900 antialiased">
    <x-navbar />

    <main>
        {{ $slot }}

    </main>

    <div x-data="{ open: false }" class="fixed bottom-8 right-8 z-[9999] flex flex-col items-end">

        <div x-show="open" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90 translate-y-10"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
            x-transition:leave-end="opacity-0 scale-90 translate-y-10"
            class="mb-6 w-[350px] bg-white rounded-[20px] shadow-[0_10px_50px_rgba(0,0,0,0.1)] overflow-hidden border border-slate-100"
            style="display: none;">

            <div class="bg-[#25D366] p-6 text-white relative">
                <div class="flex items-center gap-4">
                    <i class="fab fa-whatsapp text-4xl"></i>
                    <div>
                        <h4 class="font-bold text-xl leading-tight">Halo</h4>
                        <p class="text-xs opacity-80 mt-1">The team typically replies in a few minutes.</p>
                    </div>
                </div>
            </div>

            <div class="p-4 space-y-3 bg-white">
                <a href="https://wa.me/6282136405273" target="_blank"
                    class="flex items-center justify-between p-4 bg-[#f8f9fa] rounded-xl hover:bg-slate-100 transition-all border-l-4 border-l-[#25D366] group">
                    <div class="flex items-center gap-4">
                        <img src="https://ui-avatars.com/api/?name=Sakti&background=0D8ABC&color=fff"
                            class="w-12 h-12 rounded-full shadow-sm" alt="Sakti">
                        <div>
                            <p class="font-bold text-slate-800">Sakti</p>
                            <p class="text-xs text-slate-500">Sales</p>
                        </div>
                    </div>
                    <i class="fab fa-whatsapp text-[#25D366] text-xl"></i>
                </a>

                <a href="https://wa.me/6282136405273" target="_blank"
                    class="flex items-center justify-between p-4 bg-[#f8f9fa] rounded-xl hover:bg-slate-100 transition-all border-l-4 border-l-[#25D366] group">
                    <div class="flex items-center gap-4">
                        <img src="https://ui-avatars.com/api/?name=Iqbal&background=E91E63&color=fff"
                            class="w-12 h-12 rounded-full shadow-sm" alt="Iqbal">
                        <div>
                            <p class="font-bold text-slate-800">Iqbal</p>
                            <p class="text-xs text-slate-500">Sales</p>
                        </div>
                    </div>
                    <i class="fab fa-whatsapp text-[#25D366] text-xl"></i>
                </a>

                <a href="https://wa.me/6282136405273" target="_blank"
                    class="flex items-center justify-between p-4 bg-[#f8f9fa] rounded-xl hover:bg-slate-100 transition-all border-l-4 border-l-[#25D366] group">
                    <div class="flex items-center gap-4">
                        <img src="https://ui-avatars.com/api/?name=Alfian&background=FF9800&color=fff"
                            class="w-12 h-12 rounded-full shadow-sm" alt="Alfian">
                        <div>
                            <p class="font-bold text-slate-800">Alfian</p>
                            <p class="text-xs text-slate-500">Sales</p>
                        </div>
                    </div>
                    <i class="fab fa-whatsapp text-[#25D366] text-xl"></i>
                </a>
            </div>
        </div>

        <button @click="open = !open"
            class="w-16 h-16 bg-[#25D366] text-white rounded-full shadow-2xl flex items-center justify-center transition-all duration-500 hover:scale-110 active:scale-95 cursor-pointer group"
            :class="open ? 'bg-[#25D366]' : 'bg-[#25D366]'">

            <div class="relative w-8 h-8 flex items-center justify-center">
                <i class="fab fa-whatsapp text-4xl absolute transition-all duration-500 transform"
                    :class="open ? 'opacity-0 rotate-180 scale-50' : 'opacity-100 rotate-0 scale-100'"></i>

                <i class="fas fa-times text-3xl absolute transition-all duration-500 transform"
                    :class="open ? 'opacity-100 rotate-0 scale-100' : 'opacity-0 -rotate-180 scale-50'"></i>
            </div>
        </button>
    </div>

    <x-footer />

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 1000, // Durasi animasi (1 detik)
        once: true, // Animasi hanya jalan sekali saat di-scroll
    });
    </script>

    <script>
    document.getElementById('meetingForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const company = document.getElementById('company').value;
        const phone = document.getElementById('phone').value;
        const date = document.getElementById('meetingDate').value;
        const needs = document.getElementById('needs').value || "Tidak ada deskripsi";
        const myNumber = "6285865405330"; // Ganti dengan nomor WA Anda

        const message = `Halo Admin, saya ingin *Minta Meeting*:%0A%0A` +
            `*Nama Perusahaan:* ${company}%0A` +
            `*No. WhatsApp PIC:* ${phone}%0A` +
            `*Rencana Tanggal:* ${date}%0A` +
            `*Deskripsi Kebutuhan:* ${needs}`;

        window.open(`https://wa.me/${myNumber}?text=${message}`, '_blank');
    });
    </script>

    {{-- Script Sederhana untuk Salin Link --}}
    <script>
    function copyToClipboard(text) {
        navigator.clipboard.writeText(text).then(() => {
            alert('Tautan berhasil disalin!');
        });
    }
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>CV Cakra Inovasi Digital</title>

    <link rel="icon" type="image/png" href="{{ asset('images/logo-cakra.png') }}" class="h-16 w-auto">

    @vite('resources/css/app.css')
</head>

<body class="bg-white text-slate-900 antialiased">
    <x-navbar />

    <main>
        {{ $slot }}

    </main>

    <a href="https://wa.me/6285865405330?text=Halo%20tim%20Cakra%20Inovasi%20Digital,%20saya%20butuh%20bantuan%20nih%20buat%20tanya-tanya%20soal%20sistem%20digital.%20Lagi%20online%20kah%3F"
        id="whatsapp-floating" target="_blank" rel="noopener noreferrer"
        class="fixed bottom-8 right-8 z-50 bg-[#25D366] text-white p-4 rounded-full shadow-2xl transition-all duration-500 translate-y-20 opacity-0 pointer-events-none hover:scale-110 flex items-center justify-center">
        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
            <path
                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-4.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.937 3.659 1.432 5.631 1.433h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
        </svg>
    </a>

    <x-footer />

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 1000, // Durasi animasi (1 detik)
        once: true, // Animasi hanya jalan sekali saat di-scroll
    });
    </script>

    <script>
    window.addEventListener('scroll', function() {
        // Cari elemen "Proyek Pilihan Kami" berdasarkan ID atau urutan section
        // Jika section tersebut belum ada ID-nya, kamu bisa menambahkannya terlebih dahulu
        const targetSection = document.getElementById('portfolio');
        const floatingWa = document.getElementById('whatsapp-floating');

        if (targetSection) {
            const sectionPos = targetSection.getBoundingClientRect().top;
            const screenPos = window.innerHeight / 1.5;

            if (sectionPos < screenPos) {
                // Tampilkan tombol
                floatingWa.classList.remove('translate-y-20', 'opacity-0', 'pointer-events-none');
                floatingWa.classList.add('translate-y-0', 'opacity-100', 'pointer-events-auto');
            } else {
                // Sembunyikan tombol jika scroll kembali ke atas
                floatingWa.classList.add('translate-y-20', 'opacity-0', 'pointer-events-none');
                floatingWa.classList.remove('translate-y-0', 'opacity-100', 'pointer-events-auto');
            }
        }
    });
    </script>
</body>

</html>
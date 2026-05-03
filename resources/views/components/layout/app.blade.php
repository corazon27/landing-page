<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- ============================================================
         SEO: Meta Tags Dasar
         Cara override di halaman:
           @php $title = 'Judul Halaman | Cakra Inovasi Digital'; @endphp
           @php $metaDescription = 'Deskripsi halaman ini...'; @endphp
           @php $metaKeywords = 'keyword1, keyword2'; @endphp
    ============================================================ --}}
    <title>{{ $title ?? 'Jasa Pembuatan Website Profesional | Cakra Inovasi Digital' }}</title>
    <meta name="description"
        content="{{ $metaDescription ?? 'Cakra Inovasi Digital menyediakan jasa pembuatan website profesional: e-commerce, company profile, toko online, dan lainnya. Hubungi kami sekarang.' }}">
    <meta name="keywords"
        content="{{ $metaKeywords ?? 'jasa pembuatan website, web developer, website profesional, e-commerce, company profile, Sukoharjo, Jawa Tengah' }}">
    <meta name="author" content="Cakra Inovasi Digital">
    <meta name="robots" content="{{ $metaRobots ?? 'index, follow' }}">
    <link rel="canonical" href="{{ $canonicalUrl ?? url()->current() }}">

    {{-- ============================================================
         SEO: Open Graph
    ============================================================ --}}
    <meta property="og:type" content="{{ $ogType ?? 'website' }}">
    <meta property="og:title" content="{{ $title ?? 'Jasa Pembuatan Website Profesional | Cakra Inovasi Digital' }}">
    <meta property="og:description"
        content="{{ $metaDescription ?? 'Cakra Inovasi Digital menyediakan jasa pembuatan website profesional untuk bisnis Anda.' }}">
    <meta property="og:url" content="{{ $canonicalUrl ?? url()->current() }}">
    <meta property="og:image" content="{{ $ogImage ?? asset('images/og-image.png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="{{ $title ?? 'Cakra Inovasi Digital' }}">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="Cakra Inovasi Digital">

    {{-- ============================================================
         SEO: Twitter Card
    ============================================================ --}}
    <meta name="twitter:card" content="{{ $twitterCard ?? 'summary_large_image' }}">
    <meta name="twitter:site" content="@CakraInovasiDig">
    <meta name="twitter:title" content="{{ $title ?? 'Jasa Pembuatan Website Profesional | Cakra Inovasi Digital' }}">
    <meta name="twitter:description"
        content="{{ $metaDescription ?? 'Cakra Inovasi Digital menyediakan jasa pembuatan website profesional untuk bisnis Anda.' }}">
    <meta name="twitter:image" content="{{ $ogImage ?? asset('images/og-image.png') }}">
    <meta name="twitter:image:alt" content="{{ $title ?? 'Cakra Inovasi Digital' }}">

    {{-- ============================================================
         SEO: Schema.org JSON-LD — [1] ProfessionalService
         PENTING: Pastikan URL "sameAs" di bawah IDENTIK
         dengan URL media sosial yang tertera di footer.blade.php
    ============================================================ --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "@id": "{{ url('/') }}/#business",
        "name": "Cakra Inovasi Digital",
        "alternateName": "CV Cakra Inovasi Digital",
        "url": "{{ url('/') }}",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('images/logo-cakra.png') }}",
            "width": 200,
            "height": 200
        },
        "image": "{{ asset('images/og-image.png') }}",
        "description": "Jasa pembuatan website profesional meliputi e-commerce, company profile, katalog produk, toko online, website rental, dan F&B. Berbasis di Sukoharjo, Jawa Tengah.",
        "telephone": "+6285865405330",
        "email": "info@cakrainovasidigital.com",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Jl. Slamet Riyadi No. 250",
            "addressLocality": "Sukoharjo",
            "addressRegion": "Jawa Tengah",
            "postalCode": "57511",
            "addressCountry": "ID"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": -7.6928,
            "longitude": 110.8421
        },
        "openingHoursSpecification": [{
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                "opens": "08:00",
                "closes": "17:00"
            },
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": "Saturday",
                "opens": "08:00",
                "closes": "14:00"
            }
        ],
        "priceRange": "Rp",
        "currenciesAccepted": "IDR",
        "paymentAccepted": "Transfer Bank, QRIS",
        "areaServed": {
            "@type": "Country",
            "name": "Indonesia"
        },
        "serviceType": [
            "Pembuatan Website E-commerce",
            "Pembuatan Website Company Profile",
            "Pembuatan Website Katalog Produk",
            "Pembuatan Website Toko Online",
            "Pembuatan Website Rental",
            "Pembuatan Website F&B"
        ],
        "sameAs": [
            "https://www.instagram.com/cakrainovasidigital.id/",
            "https://www.linkedin.com/in/cakra-inovasi-digital-9141943b3/",
            "https://www.facebook.com/cakrainovasidigital",
            "https://x.com/CakraInovasiDig"
        ]
    }
    </script>

    {{-- [2] WebSite + Sitelinks Searchbox --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "@id": "{{ url('/') }}/#website",
        "url": "{{ url('/') }}",
        "name": "Cakra Inovasi Digital",
        "description": "Jasa pembuatan website profesional untuk bisnis Anda.",
        "inLanguage": "id-ID",
        "publisher": {
            "@id": "{{ url('/') }}/#business"
        },
        "potentialAction": {
            "@type": "SearchAction",
            "target": {
                "@type": "EntryPoint",
                "urlTemplate": "{{ url('/artikel') }}?search={search_term_string}"
            },
            "query-input": "required name=search_term_string"
        }
    }
    </script>

    {{-- [3] BreadcrumbList — hanya muncul jika $breadcrumbs di-set di halaman --}}
    @if(!empty($breadcrumbs))
    @php
    $breadcrumbItems = [
    [
    '@type' => 'ListItem',
    'position' => 1,
    'name' => 'Beranda',
    'item' => url('/'),
    ]
    ];
    foreach ($breadcrumbs as $index => $crumb) {
    $breadcrumbItems[] = [
    '@type' => 'ListItem',
    'position' => $index + 2,
    'name' => $crumb['name'],
    'item' => $crumb['url'],
    ];
    }
    $breadcrumbSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => $breadcrumbItems,
    ];
    @endphp
    <script type="application/ld+json">
    {
        !!json_encode($breadcrumbSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!
    }
    </script>
    @endif

    {{-- Stack JSON-LD tambahan per halaman (FAQ, Article, Service, dll) --}}
    @stack('schema')

    {{-- ============================================================
         Assets & Libraries
    ============================================================ --}}

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('images/logo-cakra.png') }}">

    {{--
        OPTIMASI PERFORMA:
        1. preconnect → browser buka koneksi lebih awal ke CDN
        2. Font Awesome pakai jsDelivr (lebih cepat dari cdnjs di Indonesia)
           dan tambah &display=swap agar teks tetap tampil saat font loading
        3. AOS & Swiper sekarang pakai jsDelivr yang lebih andal vs unpkg
        4. Alpine.js dari jsDelivr (bukan unpkg yang kadang lambat)
    --}}

    {{-- Preconnect --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>

    {{--
        Preload LCP resource:
        Ganti href di bawah dengan path gambar hero / OG image utama
        yang menjadi elemen paling besar saat halaman pertama dimuat.
        Ini membantu Google Lighthouse LCP score.
    --}}
    <link rel="preload" as="image" href="{{ asset('images/og-image.png') }}">

    {{-- Font Awesome (jsDelivr — lebih cepat dari cdnjs untuk region Asia) --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.1/css/all.min.css"
        media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.1/css/all.min.css">
    </noscript>

    {{-- AOS CSS (jsDelivr) --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" media="print"
        onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    </noscript>

    {{-- Swiper CSS (jsDelivr) --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    {{-- Alpine.js (jsDelivr, defer) --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Stack untuk style tambahan per halaman --}}
    @stack('styles')
</head>

<body class="bg-white text-slate-900 antialiased">

    <x-navbar />

    <main id="main-content" tabindex="-1">
        {{ $slot }}
    </main>

    <x-whatsapp-widget />

    <x-footer />

    {{-- Swiper JS (jsDelivr) --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- AOS JS (jsDelivr) --}}
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                once: true,
                offset: 60,
            });
        }
    });
    </script>

    {{--
        GLOBAL UTILITIES
        Letakkan helper global DI SINI — jangan redeklerasi di setiap halaman.
        Halaman layanan (web-ecommerce, web-toko, dll) tidak perlu deklarasi ulang.
    --}}
    <script>
    /**
     * Salin teks ke clipboard.
     * Dipakai di halaman artikel, portofolio, dsb.
     * Satu deklarasi global — jangan duplikat di @push('scripts').
     */
    function copyToClipboard(text) {
        navigator.clipboard.writeText(text).then(function() {
            // Ganti alert() dengan toast notification jika tersedia
            alert('Link berhasil disalin ke clipboard!');
        }).catch(function(err) {
            console.error('Gagal menyalin link: ', err);
        });
    }

    /**
     * Handle meeting form (digunakan di semua halaman layanan).
     * Inisialisasi dilakukan setelah DOM ready agar tidak konflik
     * dengan halaman yang tidak memiliki form ini.
     */
    document.addEventListener('DOMContentLoaded', function() {
        var meetingForm = document.getElementById('meetingForm');
        if (!meetingForm) return;

        meetingForm.addEventListener('submit', function(e) {
            e.preventDefault();
            var company = document.getElementById('company').value;
            var phone = document.getElementById('phone').value;
            var date = document.getElementById('meetingDate').value;
            var needs = document.getElementById('needs').value || 'Tidak ada deskripsi';
            var number = '6285865405330';

            var message = 'Halo Admin, saya ingin *Minta Meeting*:%0A%0A' +
                '*Nama Perusahaan:* ' + encodeURIComponent(company) + '%0A' +
                '*No. WhatsApp PIC:* ' + encodeURIComponent(phone) + '%0A' +
                '*Rencana Tanggal:* ' + encodeURIComponent(date) + '%0A' +
                '*Deskripsi Kebutuhan:* ' + encodeURIComponent(needs);

            window.open('https://wa.me/' + number + '?text=' + message, '_blank');
        });
    });
    </script>

    {{-- Stack untuk script tambahan per halaman --}}
    @stack('scripts')

</body>

</html>
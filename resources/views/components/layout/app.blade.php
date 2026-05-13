<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- ================================================================
         CORE SEO META
         Prioritas: $ogTitle/$ogDescription/$ogImage dari child view
         (diset via @php di detail.blade.php) agar OG dinamis per halaman
    ================================================================ --}}

    <title>{{ $title ?? 'Jasa Pembuatan Website Profesional | Cakra Inovasi Digital' }}</title>
    <meta name="description"
        content="{{ $metaDescription ?? 'Cakra Inovasi Digital menyediakan jasa pembuatan website profesional: website automasi bisnis, kasir digital, point of sale, stok gudang, sistem manajemen bisnis, katalog, company profile, toko online, dan lainnya. Hubungi kami sekarang.' }}">
    <meta name="keywords"
        content="{{ $metaKeywords ?? 'jasa pembuatan website, web developer, website profesional, website automasi bisnis, website erp, katalog produk, kasir digital, point of sale, company profile, Magelang, Jawa Tengah' }}">
    <meta name="author" content="Cakra Inovasi Digital">
    <meta name="robots" content="{{ $metaRobots ?? 'index, follow' }}">
    <link rel="canonical" href="{{ $canonicalUrl ?? url()->current() }}">

    {{-- ================================================================
         OPEN GRAPH — Dinamis per Halaman
         Halaman artikel: $ogTitle, $ogDescription, $ogImage di-set via
         @php block di detail.blade.php sebelum @section('content')
         Halaman lain: fallback ke $title/$metaDescription/og-image.png
    ================================================================ --}}
    <meta property="og:type" content="{{ $ogType ?? 'website' }}">
    <meta property="og:site_name" content="Cakra Inovasi Digital">
    <meta property="og:locale" content="id_ID">
    <meta property="og:url" content="{{ $canonicalUrl ?? url()->current() }}">
    <meta property="og:title"
        content="{{ $ogTitle ?? $title ?? 'Jasa Pembuatan Website Profesional | Cakra Inovasi Digital' }}">
    <meta property="og:description"
        content="{{ $ogDescription ?? $metaDescription ?? 'Cakra Inovasi Digital menyediakan jasa pembuatan website profesional untuk bisnis Anda.' }}">
    <meta property="og:image" content="{{ $ogImage ?? asset('images/og-image.png') }}">
    <meta property="og:image:width" content="{{ $ogImageWidth ?? '1200' }}">
    <meta property="og:image:height" content="{{ $ogImageHeight ?? '630' }}">
    <meta property="og:image:alt" content="{{ $ogTitle ?? $title ?? 'Cakra Inovasi Digital' }}">

    {{-- ================================================================
         TWITTER CARD — Dinamis per Halaman
    ================================================================ --}}
    <meta name="twitter:card" content="{{ $twitterCard ?? 'summary_large_image' }}">
    <meta name="twitter:site" content="@CakraInovasiDig">
    <meta name="twitter:creator" content="@CakraInovasiDig">
    <meta name="twitter:title"
        content="{{ $ogTitle ?? $title ?? 'Jasa Pembuatan Website Profesional | Cakra Inovasi Digital' }}">
    <meta name="twitter:description"
        content="{{ $ogDescription ?? $metaDescription ?? 'Cakra Inovasi Digital menyediakan jasa pembuatan website profesional untuk bisnis Anda.' }}">
    <meta name="twitter:image" content="{{ $ogImage ?? asset('images/og-image.png') }}">
    <meta name="twitter:image:alt" content="{{ $ogTitle ?? $title ?? 'Cakra Inovasi Digital' }}">

    {{-- ================================================================
         SCHEMA.ORG — ProfessionalService (Global — semua halaman)
    ================================================================ --}}
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
        "description": "Jasa pembuatan website profesional meliputi company profile, katalog produk, kasir digital, dan website sistem manajemen bisnis (ERP). Berbasis di Magelang, Jawa Tengah.",
        "telephone": "+6285865405330",
        "email": "info@cakrainovasidigital.com",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Jl. Slamet Riyadi No. 250",
            "addressLocality": "Magelang",
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
            "Pembuatan Website Kasir Digital / Point of Sale (POS)",
            "Pembuatan Website Company Profile",
            "Pembuatan Website Katalog Produk",
            "Pembuatan Website Sistem Manajemen Bisnis (ERP)"
        ],
        "sameAs": [
            "https://www.instagram.com/cakrainovasidigital.id/",
            "https://www.linkedin.com/in/cakra-inovasi-digital-9141943b3/",
            "https://www.facebook.com/cakrainovasidigital",
            "https://x.com/CakraInovasiDig"
        ]
    }
    </script>

    {{-- ================================================================
         SCHEMA.ORG — WebSite (Global)
    ================================================================ --}}
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

    {{-- ================================================================
         SCHEMA.ORG — BreadcrumbList (Opsional, jika $breadcrumbs dikirim)
    ================================================================ --}}
    @if(!empty($breadcrumbs))
    @php
    $breadcrumbItems = [[
    '@type' => 'ListItem',
    'position' => 1,
    'name' => 'Beranda',
    'item' => url('/'),
    ]];
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

    {{-- ================================================================
         SCHEMA.ORG — Article / BlogPosting (hanya halaman detail artikel)
         Di-push dari detail.blade.php via @push('schema')
    ================================================================ --}}
    @stack('schema')

    {{-- ============================================================
         FAVICON & PRECONNECT
    ============================================================ --}}
    <link rel="icon" type="image/png" href="{{ asset('images/logo-cakra.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="preload" as="image" href="{{ $ogImage ?? asset('images/og-image.png') }}">

    {{-- ============================================================
         CSS — Lazy load non-critical
    ============================================================ --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.1/css/all.min.css"
        media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.1/css/all.min.css">
    </noscript>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" media="print"
        onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    </noscript>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @stack('styles')
</head>

<body class="bg-white text-slate-900 antialiased max-w-full overflow-x-hidden">

    <x-navbar />

    <main id="main-content" tabindex="-1">
        {{ $slot }}
    </main>

    <x-whatsapp-widget />

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                once: true, // Animasi hanya jalan sekali (mencegah konten hilang saat scroll balik)
                mirror: false,
                offset: 50,
            });
        }
    });

    function copyToClipboard(text) {
        navigator.clipboard.writeText(text)
            .then(function() {
                // Toast feedback — lebih elegan dari alert()
                const toast = document.getElementById('copy-toast');
                if (toast) {
                    toast.classList.remove('opacity-0', 'translate-y-4');
                    toast.classList.add('opacity-100', 'translate-y-0');
                    setTimeout(() => {
                        toast.classList.add('opacity-0', 'translate-y-4');
                        toast.classList.remove('opacity-100', 'translate-y-0');
                    }, 2500);
                }
            })
            .catch(function(err) {
                console.error('Gagal menyalin link:', err);
            });
    }
    </script>

    @stack('scripts')
    @livewireScripts

    {{-- ============================================================
         Toast Notifikasi Copy Link — Global, dipakai semua halaman
    ============================================================ --}}
    <div id="copy-toast" class="fixed bottom-8 left-1/2 -translate-x-1/2 z-[9999]
                bg-slate-900 text-white text-sm font-semibold
                px-6 py-3 rounded-2xl shadow-2xl
                flex items-center gap-2.5
                opacity-0 translate-y-4
                transition-all duration-300 pointer-events-none">
        <i class="fa-solid fa-circle-check text-emerald-400"></i>
        Link berhasil disalin!
    </div>

</body>

</html>
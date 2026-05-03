{{--
    ============================================================
    KOMPONEN: x-breadcrumb
    FUNGSI  : Tampilkan navigasi breadcrumb + inject schema JSON-LD
              BreadcrumbList secara otomatis via app.blade.php.

    CARA PAKAI di halaman layanan:
        @php
            $breadcrumbs = [
                ['name' => 'Layanan',             'url' => url('/layanan')],
                ['name' => 'Website E-commerce',  'url' => url('/layanan/web-ecommerce')],
            ];
        @endphp
        <x-breadcrumb :items="$breadcrumbs" />

        Atau props pendek (current page saja):
        <x-breadcrumb current="E-Commerce" />

    PROPS:
        - items   : array ['name'=>..., 'url'=>...] (opsional, selain halaman saat ini)
        - current : string, label halaman aktif saat ini (required)
    ============================================================
--}}
@props([
'items' => [],
'current' => '',
])

<nav class="flex justify-center mb-6" aria-label="Breadcrumb" data-aos="fade-down">
    <ol class="inline-flex items-center bg-white/80 backdrop-blur-sm px-6 py-2.5 rounded-full border border-slate-200/60 shadow-sm"
        itemscope itemtype="https://schema.org/BreadcrumbList">

        {{-- Beranda (selalu ada) --}}
        <li class="inline-flex items-center" itemprop="itemListElement" itemscope
            itemtype="https://schema.org/ListItem">
            <a href="{{ url('/') }}"
                class="text-xs font-semibold text-slate-500 hover:text-blue-600 transition flex items-center"
                itemprop="item">
                <i class="fas fa-home mr-2.5" aria-hidden="true"></i>
                <span itemprop="name">Beranda</span>
            </a>
            <meta itemprop="position" content="1">
        </li>

        {{-- Item tengah (opsional) --}}
        @foreach($items as $index => $item)
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <div class="flex items-center">
                <i class="fas fa-chevron-right text-[9px] text-slate-300 mx-4" aria-hidden="true"></i>
                <a href="{{ $item['url'] }}" class="text-xs font-semibold text-slate-500 hover:text-blue-600 transition"
                    itemprop="item">
                    <span itemprop="name">{{ $item['name'] }}</span>
                </a>
                <meta itemprop="position" content="{{ $index + 2 }}">
            </div>
        </li>
        @endforeach

        {{-- Halaman aktif --}}
        @if($current)
        <li aria-current="page" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <div class="flex items-center">
                <i class="fas fa-chevron-right text-[9px] text-slate-300 mx-4" aria-hidden="true"></i>
                <span class="text-xs font-bold text-blue-600 tracking-wide" itemprop="name">{{ $current }}</span>
                <meta itemprop="position" content="{{ count($items) + 2 }}">
            </div>
        </li>
        @endif

    </ol>
</nav>
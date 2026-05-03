{{--
    ============================================================
    KOMPONEN: x-faq-schema
    FUNGSI  : Inject JSON-LD FAQPage schema untuk SEO Google

    CARA PAKAI di halaman:
        @php
            $faqsData = [
                ['question' => '...', 'answer' => '...'],
            ];
        @endphp
        @push('schema')
            <x-faq-schema :faqs="$faqsData" />
        @endpush

    CATATAN : 'answer' boleh mengandung HTML — akan di-strip_tags
              untuk schema Google, tapi tetap ditampilkan rich di UI.
    ============================================================
--}}
@props(['faqs' => []])

@if(!empty($faqs))
@php
$schemaItems = collect($faqs)->map(function ($faq) {
return [
'@type' => 'Question',
'name' => $faq['question'],
'acceptedAnswer' => [
'@type' => 'Answer',
'text' => strip_tags($faq['answer']),
],
];
})->values()->all();

$faqSchema = [
'@context' => 'https://schema.org',
'@type' => 'FAQPage',
'mainEntity' => $schemaItems,
];
@endphp
<script type="application/ld+json">
{
    !!json_encode($faqSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!
}
</script>
@endif
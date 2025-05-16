<x-layouts.main>
    <x-slot name="title">Es Teh Maxwin</x-slot>

    <!-- Features Section -->
    <x-landing.main-slider />
    <x-landing.features-item />
    <x-landing.categories />
    <x-landing.about />
    <x-landing.banner-disc />
    <x-landing.video-cta />
    <x-landing.products :products="$products" />
    <x-landing.galery />
    <x-landing.hot-deals />
    <x-landing.testimonial />
    <x-landing.contact />

</x-layouts.main>

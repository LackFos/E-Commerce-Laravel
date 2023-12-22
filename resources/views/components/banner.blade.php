<<<<<<< Updated upstream
<div class="swiper-banner relative overflow-hidden rounded-lg">
    <div class="swiper-wrapper flex gap-4">
        @foreach ($banners as $banner)
            <div class="swiper-slide">
                <img class="h-80 w-full rounded-lg bg-[#f0f0f0] object-cover" src="{{ $banner->image }}" alt="{{ $banner->name }}">
            </div>
        @endforeach
=======
<div class="relative overflow-hidden rounded-lg swiper-banner">
    <div class="flex gap-4 swiper-wrapper">
        <div class="swiper-slide">
            <img class="h-80 w-full rounded-lg bg-[#f0f0f0]" src="" alt="afha">
        </div>
        <div class="swiper-slide">
            <img class="h-80 w-full rounded-lg bg-[#f0f0f0]" src="" alt="afha">
        </div>
        <div class="swiper-slide">
            <img class="h-80 w-full rounded-lg bg-[#f0f0f0]" src="" alt="afha">
        </div>
        <div class="swiper-slide">
            <img class="h-80 w-full rounded-lg bg-[#f0f0f0]" src="" alt="afha">
        </div>
>>>>>>> Stashed changes
    </div>
    <div class="swiper-pagination"></div>
</div>

<div class="relative overflow-hidden rounded-lg swiper-banner">
    <div class="flex gap-4 swiper-wrapper">
        @foreach ($banners as $banner)
            <div class="swiper-slide">
                <img class="h-80 w-full rounded-lg bg-[#f0f0f0] object-cover" src="{{ $banner->image }}" alt="{{ $banner->name }}">
            </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
</div>

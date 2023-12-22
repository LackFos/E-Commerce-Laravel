<div class="swiper-banner relative overflow-hidden rounded-lg">
    <div class="swiper-wrapper flex gap-4">
        @foreach ($banners as $banner)
            <div class="swiper-slide">
                <img class="h-80 w-full rounded-lg bg-[#f0f0f0] object-cover" src="{{ $banner->image }}" alt="{{ $banner->name }}">
            </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
</div>

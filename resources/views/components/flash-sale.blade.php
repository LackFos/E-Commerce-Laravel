<div class="flex flex-col gap-4 rounded-lg bg-[#f8f9fb] py-6">
    <div class="flex justify-between px-6">
        <span class="text-2xl font-bold">Flash Sale</span>
        <a href="" class="font-semibold text-primary">Lihat Semua</a>
    </div>

    <div class="swiper-flash-sale overflow-hidden">
        <div class="swiper-wrapper">
            @foreach ($flashsale->chunk(5) as $chunk)
                <div class="swiper-slide">
                    <div class="grid grid-cols-5 gap-4 px-6">
                        @foreach ($chunk as $fs)
                            <x-product-card :product="$fs->product" :price_after_discount="$fs->price_after_discount" />
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="relative">
        <div
            class="swiper-button-prev-fs absolute left-[-2rem] top-[-14rem] z-10 flex h-14 w-14 items-center justify-center rounded-full bg-white p-3 text-2xl text-gray-400 shadow-lg">
            <x-icons.chevron class="rotate-180" />
        </div>
        <div
            class="swiper-button-next-fs absolute right-[-2rem] top-[-14rem] z-10 flex h-14 w-14 items-center justify-center rounded-full bg-white p-3 text-2xl text-gray-400 shadow-lg">
            <x-icons.chevron />
        </div>
    </div>
</div>

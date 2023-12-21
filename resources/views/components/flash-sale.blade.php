<div class="flex flex-col gap-4 rounded-lg bg-[#f8f9fb] py-6">
    <div class="flex justify-between px-6">
        <span class="text-2xl font-bold">Flash Sale</span>
        <a href="" class="font-semibold text-primary">Lihat Semua</a>
    </div>  
    <div class="overflow-hidden swiper-flash-sale">
        <div class="swiper-wrapper">
            @foreach ($flashsale->chunk(5) as $chunk)
            <div class="swiper-slide">
                <div class="grid grid-cols-5 gap-4 px-6 ">
                    @foreach ($chunk as $fs)
                        <x-product-card :product="$fs->product" :price_after_discount="$fs->price_after_discount" />
                    @endforeach
                </div>
            </div>
        @endforeach         
        </div>
    </div>
    <div class="relative">
        <div class="absolute flex items-center justify-center p-3 text-2xl text-gray-400 bg-white rounded-full left-[-2rem] w-14 h-14 swiper-button-prev-fs top-[-14rem]"><x-icons.chevron class="rotate-180" /></div>
        <div class="absolute flex items-center justify-center p-3 text-2xl text-gray-400 bg-white rounded-full right-[-2rem] w-14 h-14 swiper-button-next-fs top-[-14rem]"><x-icons.chevron/></div>
    </div>
</div>
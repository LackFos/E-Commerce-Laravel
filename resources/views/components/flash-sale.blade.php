<div class="flex flex-col gap-4 rounded-lg bg-[#f8f9fb] py-6">
    <div class="flex justify-between px-6">
        <span class="text-2xl font-bold">Flash Sale</span>
        <a href="" class="font-semibold text-primary">Lihat Semua</a>
    </div>
    <div class="max-w-full pr-6">
        <div class="flex w-full justify-start gap-4 px-6">

            @foreach ($flashsale as $fs)
                <x-product-card :product="$fs->product" :price_after_discount="$fs->price_after_discount" />
            @endforeach

        </div>
    </div>
</div>

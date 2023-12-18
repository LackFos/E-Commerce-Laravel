<div class="flex flex-col gap-4 py-6 rounded-lg">
    <div class="flex justify-between">
        <span class="text-2xl font-bold">Produk Terbaru</span>
        <a href="" class="font-semibold text-primary">Lihat Semua</a>
    </div>
    <div class="flex flex-col gap-6">
        <div class="grid grid-cols-6 gap-4 max-sm:grid-cols-2 max-md:grid-cols-3 max-lg:grid-cols-4">

            @foreach ($products as $product)
            <x-card :product="$product"/>
            @endforeach

        </div>
    </div>
</div>

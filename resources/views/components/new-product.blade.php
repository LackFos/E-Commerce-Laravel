<div class="flex flex-col gap-4 rounded-lg py-6">
    <div class="flex justify-between">
        <span class="text-2xl font-bold">Produk Terbaru</span>
        <a href={{ route('product.search', ['sort' => 'latest']) }} class="font-semibold text-primary">Lihat Semua</a>
    </div>

    <div class="flex flex-col gap-6">
        <div class="grid grid-cols-6 gap-4 max-lg:grid-cols-4 max-md:grid-cols-3 max-sm:grid-cols-2">

            @foreach ($products as $product)
                <x-product-card :product="$product" :price_after_discount="$product->flashsale?->price_after_discount" />
            @endforeach

        </div>
    </div>
</div>

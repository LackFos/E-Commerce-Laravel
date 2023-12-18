<div class="flex flex-col gap-4 py-6 rounded-lg">
    <div class="flex justify-between">
        <span class="text-2xl font-bold">Produk Terbaru</span>
        <a href="" class="font-semibold text-primary">Lihat Semua</a>
    </div>
    <div class="flex flex-col gap-6">
        <div class="grid grid-cols-12 gap-4">

            @foreach ($products as $product)
                <div class="flex flex-col col-span-6 bg-white sm:col-span-6 md:col-span-4 lg:col-span-2 xl:col-span-2 rounded-2xl">
                    <a href="/produk/{{ $product->slug }}" class="block">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-full bg-gray-300 h-60 rounded-t-2xl" />
                    </a>
                    <div class="flex flex-col w-full gap-4 p-4 bg-white rounded-b-2xl">
                        <div class="flex flex-col justify-start gap-2">
                            <span class="text-base font-medium">{{ $product->name }}</span>
                            <div class="flex flex-col gap-1">
                                <span class="text-xl font-bold text-primary">
                                    @money($product->price)
                                </span>
                            </div>
                        </div>
                        <a href="/kategori/{{ $product->category->slug }}" class="text-sm text-gray-400">{{ $product->category->name }}</a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>

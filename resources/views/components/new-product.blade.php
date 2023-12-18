<div class="flex flex-col gap-4 rounded-lg py-6">
    <div class="flex justify-between">
        <span class="text-2xl font-bold">Produk Terbaru</span>
        <a href="" class="font-semibold text-primary">Lihat Semua</a>
    </div>
    <div class="flex flex-col gap-6">
        <div class="grid grid-cols-5 gap-4">

            @foreach ($products as $product)
                <div class="flex flex-col rounded-2xl border border-gray-300 bg-white">
                    <a href="/produk/{{ $product->slug }}" class="block">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="h-60 w-full rounded-t-2xl bg-gray-300" />
                    </a>
                    <div class="flex w-full flex-col gap-4 rounded-b-2xl bg-white p-4">
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

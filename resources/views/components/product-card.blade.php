@props(['product', 'price_after_discount'])

<div class="flex flex-col rounded-2xl">
    <a href="/produk/{{ $product->slug }}" class="block">
        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-full bg-gray-300 h-60 rounded-t-2xl" />
    </a>

    <div class="flex flex-col w-full gap-4 p-4 bg-white rounded-b-2xl">
        <div class="flex flex-col justify-start gap-2">
            <span class="text-base font-medium">{{ $product->name }}</span>
            <div class="flex flex-col gap-1">
                <span class="text-xl font-bold text-primary">
                    @money($product->price_after_discount ?? $product->price)
                </span>
                @isset($price_after_discount)
                    <div class="flex items-center gap-1">
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-primary-light text-primary">{{ (($product->price - $price_after_discount) / $product->price) * 100 }}%</span>
                        <span class="text-xs text-gray-400 line-through">@money($product->price)</span>
                    </div>
                @endisset
            </div>
        </div>
        <a href="/kategori/{{ $product->category->slug }}" class="text-sm text-gray-400">{{ $product->category->name }}</a>
    </div>
</div>

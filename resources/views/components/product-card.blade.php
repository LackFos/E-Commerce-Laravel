@props(['product', 'price_after_discount'])

<a href="/produk/{{ $product->slug }}" class="flex flex-col rounded-2xl">
    <div class="block">
        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="h-60 w-full rounded-t-2xl bg-gray-300" />
    </div>

    <div class="flex w-full flex-col gap-4 rounded-b-2xl bg-white p-4">
        <div class="flex flex-col justify-start gap-2">
            <span class="text-base font-medium">{{ $product->name }}</span>
            <div class="flex flex-col gap-1">
                <span class="text-xl font-bold text-primary">
                    @money($product->price_after_discount)
                </span>
                @isset($price_after_discount)
                    <div class="flex items-center gap-1">
                        <span
                            class="rounded-full bg-primary-light px-2 py-1 text-xs font-medium text-primary">{{ round((($product->price - $price_after_discount) / $product->price) * 100) }}%</span>
                        <span class="text-xs text-gray-400 line-through">@money($product->price)</span>
                    </div>
                @endisset
            </div>
        </div>
        <div class="text-sm text-gray-400">{{ $product->category->name }}</div>
    </div>
</a>

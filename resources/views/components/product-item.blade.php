@props(['product'])

<div class='my-3 flex w-full flex-col items-start justify-center font-light text-gray-500'>
    <div class="flex items-center gap-4">
        <img src="{{ $product->image }}" class="h-20 w-20 rounded-2xl bg-gray-300" alt="{{ $product->name }}">
        <span class="font-medium leading-8">{{ $product->name }}</span>
    </div>
</div>

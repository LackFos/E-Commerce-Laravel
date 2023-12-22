@props(['product'])

<div class='flex flex-col items-start justify-center w-full my-3 font-light text-gray-500'>
    <div class="flex items-center gap-4">
        <img src="{{ $product->image }}" class="w-20 h-20 bg-gray-300 rounded-2xl" alt="{{ $product->name }}">
        <span class="font-medium leading-8">{{ $product->name }}</span>
    </div>
</div>
@extends('index')

@section('page')
    <div class="flex justify-center my-10">
        <form action='/order' method='POST' class="flex w-full max-w-[1440px] justify-center gap-6">
            @csrf

            <div class="flex flex-col w-full gap-4">

                @foreach ($cart['products'] as $index => $cartItem)
                    <div class="flex w-full gap-6 p-6 bg-white border border-gray-200 border-solid product-card rounded-2xl">
                        <input type="hidden" name="products[{{ $index }}][product_id]" value={{ $cartItem['product']->id }}>
                        <input type="hidden" name="products[{{ $index }}][product_quantity]" value={{ $cartItem['product_quantity'] }}>
                        <div class="flex justify-between w-full">
                            <div class="flex gap-6">
                                <img class="h-36 w-full min-w-[144px] rounded-2xl bg-gray-300" src="{{ asset($cartItem['product']->image) }}" alt="">
                                <div class="flex flex-col justify-start gap-6">
                                    <div class="flex gap-2">
                                        <span class="font-medium">{{ $cartItem['product']->name }}</span>
                                        <div class="flex items-center justify-center w-6 h-6 text-xs text-white rounded-full bg-primary">{{ $cartItem['product_quantity'] }}</div>
                                    </div>
                                    <div class="flex gap-2">
                                        <span class="px-6 py-2 bg-gray-200 rounded-full">{{ $cartItem['product']->size }}</span>
                                        <span class="px-6 py-2 bg-gray-200 rounded-full">{{ $cartItem['product']->color }}</span>
                                    </div>
                                    <span class="text-lg font-bold">@money($cartItem['product']->price)<span class="text-xs leading-8">/ item</span></span>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between">
                                <div data-product-id={{ $cartItem['product']->id }} class="flex justify-end remove-from-cart">X</div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class='flex flex-col justify-center w-full gap-6 p-6 '>
                    <div class="flex flex-col items-center justify-center gap-2 py-10">
                        <x-icons.basket />
                        <h2 class="text-[#808080]">Tidak ada pesanan</h1>
                    </div>
                </div>

            </div>

            <div class="order-summary flex h-fit w-full max-w-[420px] flex-col rounded-2xl border border-solid border-gray-200 bg-white">
                <div class="flex justify-start p-6 border-b border-gray-200 border-solid"><span class="text-xl font-bold">Ringkasan Belanja</span></div>

                @foreach ($cart['products'] as $cartItem)
                    <div data-product-id={{ $cartItem['product']->id }} class="flex items-end justify-between px-6 py-4 border-b border-gray-200 border-solid">
                        <span class='flex gap-2'>{{ $cartItem['product']->name }} <sub>x{{ $cartItem['product_quantity'] }}</sub></span>
                        <span> @money($cartItem['product']->price * $cartItem['product_quantity'])</span>
                    </div>
                @endforeach

                <div class="flex items-end justify-between p-6 border-b border-gray-200 border-solid">
                    <span class="text-lg font-bold">Total Harga</span>
                    <span id="total-price"class="text-lg font-bold text-primary">@money($cart['total_price'])</span>
                </div>
                <div class="flex items-end justify-between p-6">
                    <button type='submit' class="flex justify-center w-full py-4 font-semibold text-white rounded-full bg-primary">Buat Pesanan</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    @vite('resources/js/cart.js')
@endpush

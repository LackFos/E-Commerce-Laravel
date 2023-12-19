@extends('index')

@section('page')
    <div class="my-10 flex justify-center">
        <div class="flex w-full max-w-[1440px] justify-center gap-6">
            <div class="flex w-full flex-col gap-4">

                @foreach ($cart['products'] as $cartItem)
                    <div class="product-card flex w-full gap-6 rounded-2xl border border-solid border-gray-200 bg-white p-6">
                        <div class="flex w-full justify-between">
                            <div class="flex gap-6">
                                <img class="h-36 w-full min-w-[144px] rounded-2xl bg-gray-300" src="{{ asset($cartItem['product']->image) }}" alt="">
                                <div class="flex flex-col justify-start gap-6">
                                    <div class="flex gap-2">
                                        <span class="font-medium">{{ $cartItem['product']->name }}</span>
                                        <div class="flex h-6 w-6 items-center justify-center rounded-full bg-primary text-xs text-white">{{ $cartItem['product_quantity'] }}</div>
                                    </div>
                                    <div class="flex gap-2">
                                        <span class="rounded-full bg-gray-200 px-6 py-2">{{ $cartItem['product']->size }}</span>
                                        <span class="rounded-full bg-gray-200 px-6 py-2">{{ $cartItem['product']->color }}</span>
                                    </div>
                                    <span class="text-lg font-bold">@money($cartItem['product']->price)<span class="text-xs leading-8">/ item</span></span>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between">
                                <button data-product-id={{ $cartItem['product']->id }} class="remove-from-cart flex justify-end">X</button>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="order-summary flex h-fit w-full max-w-[420px] flex-col rounded-2xl border border-solid border-gray-200 bg-white">
                <div class="flex justify-start border-b border-solid border-gray-200 p-6"><span class="text-xl font-bold">Ringkasan Belanja</span></div>

                @foreach ($cart['products'] as $cartItem)
                    <div data-product-id={{ $cartItem['product']->id }} class="flex items-end justify-between border-b border-solid border-gray-200 px-6 py-4">
                        <span class='flex gap-2'>{{ $cartItem['product']->name }} <sub>x{{ $cartItem['product_quantity'] }}</sub></span>
                        <span> @money($cartItem['product']->price * $cartItem['product_quantity'])</span>
                    </div>
                @endforeach

                <div class="flex items-end justify-between border-b border-solid border-gray-200 p-6">
                    <span class="text-lg font-bold">Total Harga</span>
                    <span id="total-price"class="text-lg font-bold text-primary">@money($cart['total_price'])</span>
                </div>
                <div class="flex items-end justify-between border-b border-solid border-gray-200 p-6">
                    <button class="flex w-full justify-center rounded-full bg-primary py-4 font-semibold text-white">Buat Pesanan</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @vite('resources/js/cart.js')
@endpush

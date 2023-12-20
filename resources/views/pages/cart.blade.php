@extends('index')

@section('page')
    <div class="my-10 flex justify-center">
        <form action='/order' method='POST' class="flex w-full max-w-[1440px] justify-center gap-6">
            @csrf

            <div class="flex w-full flex-col gap-4">

                @if (count($cart['products']) > 0)
                    @foreach ($cart['products'] as $index => $cartItem)
                        <div class="product-card flex w-full gap-6 rounded-2xl border border-solid border-gray-200 bg-white p-6">
                            <input type="hidden" class="product_id" name="products[{{ $index }}][product_id]" value={{ $cartItem['product']->id }}>
                            <input type="hidden" class="product_price" value={{ $cartItem['product']->price }}>

                            <div class="flex w-full justify-between">
                                <div class="flex gap-6">
                                    <img class="h-36 w-full min-w-[144px] rounded-2xl bg-gray-300" src="{{ asset($cartItem['product']->image) }}"
                                        alt="{{ $cartItem['product']->name }}">
                                    <div class="flex flex-col justify-start gap-6">
                                        <span class="font-medium">{{ $cartItem['product']->name }}</span>
                                        <div class="flex gap-2">
                                            <span class="rounded-full bg-gray-200 px-6 py-2">{{ $cartItem['product']->size }}</span>
                                            <span class="rounded-full bg-gray-200 px-6 py-2">{{ $cartItem['product']->color }}</span>
                                        </div>
                                        <span class="text-lg font-bold">@money($cartItem['product']->price)<span class="text-xs leading-8">/ item</span></span>
                                    </div>
                                </div>
                                <div class="flex flex-col justify-between">
                                    <div data-product-id={{ $cartItem['product']->id }} class="remove-from-cart flex justify-end">X</div>

                                    <div class="flex w-36 items-center justify-between rounded-full bg-gray-300 p-4">
                                        <div class="reduce-item w-9 text-center text-3xl font-bold">-</div>

                                        <input type="number" min="1" max="{{ $cartItem['product']->stock }}" value={{ $cartItem['product_quantity'] }}
                                            name='products[{{ $index }}][product_quantity]' placeholder="1"
                                            class="item-quantity w-10 bg-transparent text-center text-black outline-none placeholder:text-base placeholder:text-black" readonly />
                                        <div class="add-item w-9 text-center text-3xl font-bold">+</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class='flex w-full flex-col justify-center gap-6 p-6'>
                        <div class="flex flex-col items-center justify-center gap-2 py-10">
                            <x-icons.basket />
                            <h2 class="text-[#808080]">Keranjang Kosong</h1>
                        </div>
                    </div>
                @endif

            </div>

            <div class="order-summary flex h-fit w-full max-w-[420px] flex-col rounded-2xl border border-solid border-gray-200 bg-white">
                <div class="flex justify-start border-b border-solid border-gray-200 p-6"><span class="text-xl font-bold">Ringkasan Belanja</span></div>

                @foreach ($cart['products'] as $cartItem)
                    <div data-product-id={{ $cartItem['product']->id }} class="product-price-card flex items-end justify-between border-b border-solid border-gray-200 px-6 py-4">
                        <div class="flex gap-2">
                            <span class="font-medium">{{ $cartItem['product']->name }}</span>
                            <div class="product-quantity flex h-6 w-6 items-center justify-center rounded-full bg-primary text-xs text-white">{{ $cartItem['product_quantity'] }}</div>
                        </div>
                        <span class='product-price'> @money($cartItem['product']->price * $cartItem['product_quantity'])</span>
                    </div>
                @endforeach

                <div class="flex items-end justify-between border-b border-solid border-gray-200 p-6">
                    <span class="text-lg font-bold">Total Harga</span>
                    <input type="hidden" id="total-price" value={{ $cart['total_price'] }}>
                    <span class="total-price text-lg font-bold text-primary">@money($cart['total_price'])</span>
                </div>
                <div class="flex items-end justify-between p-6">
                    <button type='submit'
                        class="{{ count($cart['products']) === 0 ? 'bg-gray-300' : 'bg-primary' }} flex w-full justify-center rounded-full py-4 font-semibold text-white"
                        @if (count($cart['products']) === 0) disabled @endif>
                        Buat Pesanan
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    @vite('resources/js/cart.js')
@endpush

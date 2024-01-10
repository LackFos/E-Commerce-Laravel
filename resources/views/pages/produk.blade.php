@extends('index')

@section('page')
    <x-layout.user>
        <div class="flex justify-center my-10">
            <div class="flex w-full max-w-[1440px] flex-col px-8 gap-10">
                <div class="flex justify-start w-full gap-2">
                    <span class="font-semibold"><a href="{{ route('home') }}" class="text-black">Home</a></span>
                    <span>•</span>
                    <span aria-current="page" class="text-gray-500 active:font-semibold">Produk</span>
                    <span>•</span>
                    <span aria-current="page" class="text-gray-500 active:font-semibold">{{ $product->name }}</span>
                </div>

                <div class="flex gap-6">
                    <img class="h-[396px] min-w-[396px] rounded-2xl bg-gray-300" src="{{ $product->image }}" alt="{{ $product->name }}">
                    <div class="flex flex-col w-full gap-6 p-6 bg-white border border-gray-300 border-solid rounded-2xl">
                        <div class="flex flex-col gap-4">
                            <span class="text-4xl font-bold text-black">{{ $product->name }}</span>
                            <span class="text-2xl font-bold text-primary">
                                @money($product->price_after_discount)
                            </span>
                            @if (isset($product->flashsale))
                                <div class="flex items-center gap-2">
                                    <span
                                        class="px-3 py-2 text-sm font-medium rounded-full bg-primary-light text-primary">{{ round((($product->price - $product->flashsale->price_after_discount) / $product->price) * 100) }}
                                        %</span>
                                    <span class="text-sm text-gray-400 line-through">@money($product->price)</span>
                                </div>
                            @endif

                        </div>
                        <div class="flex flex-col">
                            <div class="flex justify-between py-2 border-b border-dashed">
                                <span>Warna</span>
                                <span>{{ $product->color }}</span>
                            </div>
                            <div class="flex justify-between py-2 border-b border-dashed">
                                <span>Ukuran</span>
                                <span>{{ $product->size }}</span>
                            </div>
                            <div class="flex justify-between py-2 border-b border-dashed">
                                <span>Sisa Stok</span>
                                <span>{{ $product->stock }}</span>
                            </div>
                            <div class="flex justify-between py-2 border-b border-dashed">
                                <span>Kategori</span>
                                <a href="/kategori/{{ $product->category?->slug }}" class="font-semibold text-primary">{{ $product->category?->name }}</a>
                            </div>
                        </div>
                    </div>

                    <form method='POST' action='' class="product flex h-fit min-w-[306px] flex-col gap-6 rounded-2xl border border-solid border-gray-300 bg-white p-6">
                        @csrf
                        <input type="hidden" id="product-id" name='products[0][product_id]' value="{{ $product->id }}">
                        <input type="hidden" id="product-price" value="{{ $product->price_after_discount }}">

                        <span class="flex justify-start text-xl font-bold">Subtotal</span>
                        <div class="flex flex-col gap-8">
                            <div class="flex items-center gap-4">
                                <div class="flex items-center justify-between p-4 bg-gray-300 rounded-full w-36">
                                    <div class="text-3xl font-bold text-center reduce-item w-9">-</div>

                                    <input type="number" min="1" max="{{ $product->stock }}" value="1" name='products[0][product_quantity]' placeholder="1"
                                        class="w-10 text-center text-black bg-transparent outline-none item-quantity placeholder:text-base placeholder:text-black" readonly />
                                    <div class="text-3xl font-bold text-center add-item w-9">+</div>
                                </div>
                                <span>Stok: <span class="font-bold">Sisa {{ $product->stock }}</span></span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-300">Sub Total</span>
                                <span class="text-xl font-bold total-price text-primary">
                                    @money($product->price_after_discount)
                                </span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <button formaction='/cart' type='submit' class="px-16 py-4 font-medium text-center text-white rounded-full bg-primary">+ Keranjang</button>
                            <button formaction='/order' type='submit'
                                class="px-16 py-4 font-medium text-center bg-white border border-solid rounded-full border-primary text-primary">Beli
                                Sekarang</button>
                        </div>
                    </form>
                </div>
                <div class="flex flex-col justify-start w-full gap-4 p-6 bg-white border border-gray-200 border-solid rounded-2xl">
                    <h2>Deskripsi Produk</h2>
                    <span>{{ $product->description }}</span>
                </div>
            </div>
        </div>
    </x-layout.user>
@endsection

@push('scripts')
    @vite('resources/js/product-detail.js')
@endpush

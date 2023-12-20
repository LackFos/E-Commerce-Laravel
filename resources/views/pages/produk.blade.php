@extends('index')

@section('page')
    @if (session('success'))
        <x-alert :message="session('success')" type="success" />
    @endif

    @if (session('error'))
        <x-alert :message="session('error')" type="alert" />
    @endif

    <div class="my-10 flex justify-center">
        <div class="flex w-full max-w-[1440px] flex-col gap-10">
            <div class="flex w-full justify-start gap-2">
                <span class="font-semibold"><a href="{{ route('home') }}" class="text-black">Home</a></span>
                <span>•</span>
                <span aria-current="page" class="text-gray-500 active:font-semibold">Product Detail</span>
            </div>

            <div class="flex gap-6">
                <img class="h-[396px] min-w-[396px] rounded-2xl bg-gray-300" src="{{ $product->image }}" alt="{{ $product->name }}">
                <div class="flex w-full flex-col gap-6 rounded-2xl border border-solid border-gray-300 bg-white p-6">
                    <div class="flex flex-col gap-4">
                        <span class="text-4xl font-bold text-black">{{ $product->name }}</span>
                        <span class="text-2xl font-bold text-primary">@money($product->price)</span>
                        <div class="flex items-center gap-2">
                            <span class="rounded-full bg-primary-light px-3 py-2 text-sm font-medium text-primary">30%</span>
                            <span class="text-sm text-gray-400 line-through">@money($product->price)</span>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex justify-between border-b border-dashed py-2">
                            <span>Warna</span>
                            <span>{{ $product->color }}</span>
                        </div>
                        <div class="flex justify-between border-b border-dashed py-2">
                            <span>Ukuran</span>
                            <span>{{ $product->size }}</span>
                        </div>
                        <div class="flex justify-between border-b border-dashed py-2">
                            <span>Sisa Stok</span>
                            <span>{{ $product->stock }}</span>
                        </div>
                        <div class="flex justify-between border-b border-dashed py-2">
                            <span>Kategori</span>
                            <a href="/kategori/{{ $product->category->slug }}" class="font-semibold text-primary">{{ $product->category->name }}</a>
                        </div>
                    </div>
                </div>

                <form method='POST' action='' class="product flex h-fit min-w-[306px] flex-col gap-6 rounded-2xl border border-solid border-gray-300 bg-white p-6">
                    @csrf
                    <input type="hidden" id="product-id" name='products[0][product_id]' value="{{ $product->id }}">
                    <input type="hidden" id="product-price" value="{{ $product->price }}">

                    <span class="flex justify-start text-xl font-bold">Subtotal</span>
                    <div class="flex flex-col gap-8">
                        <div class="flex items-center gap-4">
                            <div class="flex w-36 items-center justify-between rounded-full bg-gray-300 p-4">
                                <div class="reduce-item w-9 text-center text-3xl font-bold">-</div>

                                <input type="number" min="1" max="{{ $product->stock }}" value="1" name='products[0][product_quantity]' placeholder="1"
                                    class="item-quantity w-10 bg-transparent text-center text-black outline-none placeholder:text-base placeholder:text-black" readonly />
                                <div class="add-item w-9 text-center text-3xl font-bold">+</div>
                            </div>
                            <span>Stok: <span class="font-bold">Sisa {{ $product->stock }}</span></span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-300">Sub Total</span>
                            <span class="total-price text-xl font-bold text-primary">@money($product->price)</span>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <button formaction='/cart' type='submit' class="rounded-full bg-primary px-16 py-4 text-center font-medium text-white">+ Keranjang</button>
                        <button formaction='/order' type='submit' class="rounded-full border border-solid border-primary bg-white px-16 py-4 text-center font-medium text-primary">Beli
                            Sekarang</button>
                    </div>
                </form>
            </div>
            <div class="flex w-full flex-col justify-start gap-4 rounded-2xl border border-solid border-gray-200 bg-white p-6">
                <h2>Deskripsi Produk</h2>
                <span>{{ $product->description }}</span>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @vite('resources/js/product-detail.js')
@endpush

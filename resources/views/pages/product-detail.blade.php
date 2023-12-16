@extends('index')

@section('page')
    <div class="flex justify-center my-10">
        <div class="flex w-full max-w-[1440px] flex-col gap-10">
            <div class="flex justify-start w-full gap-2">
                <span class="font-semibold"><a href="{{ route('home') }}" class="text-black">Home</a></span>
                <span>> </span>
                <span aria-current="page" class="text-gray-500 active:font-semibold">Product Detail</span>
            </div>

            <div class="flex gap-6">
                <img class="h-[396px] min-w-[396px] rounded-2xl bg-gray-300" src="{{ $product->image }}" alt="{{ $product->name }}">
                <div class="flex flex-col w-full gap-6 p-6 bg-white border border-gray-300 border-solid rounded-2xl">
                    <div class="flex flex-col gap-4">
                        <span class="text-4xl font-bold text-black">{{ $product->name }}</span>
                        <span class="text-2xl font-bold text-primary">{{ $product->price }}</span>
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
                            <span class="font-semibold text-primary">{{ $product->category->name }}</span>
                        </div>
                    </div>
                </div>
                <div class="flex h-fit min-w-[306px] flex-col gap-6 rounded-2xl border border-solid border-gray-300 bg-white p-6">
                    <span class="flex justify-start text-xl font-bold">Subtotal</span>
                    <div class="flex flex-col gap-8">
                        <div class="flex items-center gap-4">
                            <div class="flex justify-between p-4 bg-gray-300 rounded-full w-36">
                                <button class="text-xl font-bold">-</button>
                                <span>1</span>
                                <button class="text-xl font-bold">+</button>
                            </div>
                            <span>Stok: <span class="font-bold">Sisa {{ $product->stock }}</span></span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-300">Sub Total</span>
                            <span class="text-xl font-bold text-primary">Rp 100.00</span>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <button class="px-16 py-4 font-medium text-white rounded-full bg-primary">+ Keranjang</button>
                        <button class="px-16 py-4 font-medium bg-white border border-solid rounded-full border-primary text-primary">Beli Sekarang</button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-start w-full gap-4 p-6 bg-white border border-gray-200 border-solid rounded-2xl">
                <h2>Deskripsi Produk</h2>
                <span>{{ $product->description }}</span>
            </div>
        </div>
    </div>
@endsection

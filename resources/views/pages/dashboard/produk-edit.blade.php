@extends('index')

@section('page')
    <div class="flex gap-2">
        <x-layout.sidebar />
        <div class="flex w-full max-w-[1440px] justify-center p-10">
            <form class="flex w-full flex-col gap-6">
                <div class="flex w-full justify-start gap-2">
                    <span class="font-semibold"><a href="/dashboard/produk" class="text-black">Produk</a></span>
                    <span>•</span>
                    <span aria-current="page" class="text-gray-500 active:font-semibold">Edit Produk</span>
                </div>
                <div class="flex w-full flex-col rounded-lg border border-solid border-gray-200 bg-white">
                    <span class="flex justify-start rounded-t-lg border-b border-solid border-gray-200 bg-white p-6 text-lg font-bold">Detail Barang</span>
                    <div class="flex gap-6 px-6 py-4">
                        <span class="flex w-1/2 items-center justify-start font-medium">Nama Barang</span>
                        <input class="w-1/2 rounded-lg border border-solid border-gray-200 px-4 py-1" type="text" name="" value="{{ $product->name }}">
                    </div>

                    <div class="flex gap-6 px-6 py-4">
                        <span class="flex w-1/2 items-center justify-start font-medium">Harga Barang</span>
                        <div class="relative w-1/2">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-2 text-gray-600">Rp.</span>
                            <input type="text" class="w-full rounded-lg border border-solid border-gray-200 px-4 py-1 pl-8" name="rupiahInput" value="{{ $product->price }}">
                        </div>
                    </div>

                    <div class="flex gap-6 px-6 py-4">
                        <span class="flex w-1/2 items-center justify-start font-medium">Warna</span>
                        <input class="w-1/2 rounded-lg border border-solid border-gray-200 px-4 py-1" type="text" name="" value="{{ $product->color }}">
                    </div>
                    <div class="flex gap-6 px-6 py-4">
                        <span class="flex w-1/2 items-center justify-start font-medium">Ukuran</span>
                        <input class="w-1/2 rounded-lg border border-solid border-gray-200 px-4 py-1" type="text" name="" value="{{ $product->size }}">
                    </div>
                    <div class="flex flex-col justify-start gap-4 px-6 py-6 pt-4">
                        <span class="font-medium leading-8">Foto Produk</span>
                        <img class="h-20 w-20 rounded-2xl bg-gray-300" src="{{ $product->image }}" alt="{{ $product->name }}">
                    </div>
                </div>
                <div class="flex w-full flex-col rounded-lg border border-solid border-gray-200 bg-white">
                    <span class="flex justify-start rounded-t-lg border-b border-solid border-gray-200 bg-white p-6 text-lg font-bold">Kategori</span>
                    <div class="flex w-full gap-6 px-6 py-4">

                        @foreach ($categories as $category)
                            <div class="flex w-1/2 justify-between">
                                <input type="checkbox" id="outOfStock" name="product" class="hidden">
                                <label for="outOfStock" class="relative flex w-full cursor-pointer items-center justify-between font-medium">
                                    {{ $category->name }}
                                    <div class="flex w-1/2 justify-center">
                                        <div class="flex h-6 w-6 items-center justify-center rounded-md border border-gray-300 bg-white">
                                            <span class="absolute text-white transition-opacity" id="checkIcon">✓</span>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="flex w-full flex-col rounded-lg border border-solid border-gray-200 bg-white">
                    <span class="flex justify-start rounded-t-lg border-b border-solid border-gray-200 bg-white p-6 text-lg font-bold">Flash Sale</span>
                    <div class="flex justify-between px-6 py-4">
                        <span class="flex w-fit items-center justify-start font-medium">Flash Sale</span>
                        <div class="flex gap-4">

                            <label class="relative flex items-center">
                                <input type="radio" name="flashsale" value={{ true }} {{ $product->flashsale ? 'checked' : '' }}
                                    class="absolute left-0 top-0 h-0 w-0 opacity-0" />
                                <span
                                    class="{{ $product->flashsale ? 'border border-primary focus:bg-primary shadow-input' : 'border-gray-500' }} relative mr-2 inline-block h-6 w-6 rounded-full border">
                                    @if ($product->flashsale)
                                        <span class="absolute left-1/2 top-1/2 h-4 w-4 -translate-x-1/2 -translate-y-1/2 transform rounded-full bg-primary"></span>
                                    @endif
                                </span>
                                <span class="ml-2">Ya</span>
                            </label>


                            <label class="relative flex items-center">
                                <input type="radio" name="flashsale" value={{ true }} {{ !$product->flashsale ? 'checked' : '' }}
                                    class="absolute left-0 top-0 h-0 w-0 opacity-0" />
                                <span
                                    class="{{ !$product->flashsale ? 'border border-primary focus:bg-primary shadow-input' : 'border-gray-500' }} relative mr-2 inline-block h-6 w-6 rounded-full border">
                                    @if (!$product->flashsale)
                                        <span class="absolute left-1/2 top-1/2 h-4 w-4 -translate-x-1/2 -translate-y-1/2 transform rounded-full bg-primary"></span>
                                    @endif
                                </span>
                                <span class="ml-2">Tidak</span>
                            </label>

                        </div>
                    </div>
                    <div class="flex justify-between px-6 py-4">
                        <span class="flex w-1/2 items-center justify-start font-medium">Harga Flashsale</span>
                        <div class="relative w-40">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-2 text-gray-600">Rp.</span>
                            <input type="text" class="w-full rounded-lg border border-solid border-gray-200 px-4 py-1 pl-8"
                                value="{{ $product->flashsale ? $product->price_after_discount : '' }}" name="rupiahInput" id="rupiahInput">
                        </div>
                    </div>
                </div>
                <div class="flex w-full flex-col rounded-lg border border-solid border-gray-200 bg-white">
                    <span class="flex justify-start rounded-t-lg border-b border-solid border-gray-200 bg-white p-6 text-lg font-bold">Deskripsi Barang</span>
                    <div class="flex w-full gap-6 px-6 py-6">
                        <input type="text" class="h-full w-full rounded-lg border border-solid border-gray-200 px-4 py-2" value="{{ $product->description }}">
                    </div>
                </div>
                <button class="w-full rounded-lg bg-primary px-6 py-2 text-center font-semibold leading-8 text-white">Simpan</button>
            </form>
        </div>
    </div>
@endsection

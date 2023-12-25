@extends('index')

@section('page')
    <div class="flex gap-2">
        <div class="flex w-full max-w-[1440px] justify-center">
            <x-layout.sidebar />

            <form method="POST" enctype="multipart/form-data" class="flex w-full flex-col gap-6 p-10">
                @csrf
                @method('PATCH')

                <div class="flex w-full justify-start gap-2">
                    <span class="font-semibold"><a href="/dashboard/produk" class="text-black">Produk</a></span>
                    <span>•</span>
                    <span aria-current="page" class="text-gray-500 active:font-semibold">Edit Produk</span>
                </div>

                <div class="flex w-full flex-col rounded-lg border border-solid border-gray-200 bg-white">
                    <span class="flex justify-start rounded-t-lg border-b border-solid border-gray-200 bg-white p-6 text-lg font-bold">Detail Barang</span>

                    <div class="flex gap-6 px-6 py-4">
                        <span class="flex w-1/2 items-center justify-start font-medium">Nama Barang</span>
                        <input class="w-1/2 rounded-lg border border-solid border-gray-200 px-4 py-1" type="text" name="name" value="{{ $product->name }}">
                    </div>

                    <div class="flex gap-6 px-6 py-4">
                        <span class="flex w-1/2 items-center justify-start font-medium">Harga Barang</span>
                        <div class="relative w-1/2">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-2 text-gray-600">Rp.</span>
                            <input type="number" class="w-full rounded-lg border border-solid border-gray-200 px-4 py-1 pl-8" name="price" placeholder="-"
                                value="{{ $product->price }}" min="1">
                        </div>
                    </div>

                    <div class="flex gap-6 px-6 py-4">
                        <span class="flex w-1/2 items-center justify-start font-medium">Warna</span>
                        <input class="w-1/2 rounded-lg border border-solid border-gray-200 px-4 py-1" type="text" name="color" value="{{ $product->color }}">
                    </div>

                    <div class="flex gap-6 px-6 py-4">
                        <span class="flex w-1/2 items-center justify-start font-medium">Ukuran</span>
                        <input class="w-1/2 rounded-lg border border-solid border-gray-200 px-4 py-1" type="text" name="size" value="{{ $product->size }}">
                    </div>

                    <div class="flex gap-6 px-6 py-4">
                        <span class="flex w-1/2 items-center justify-start font-medium">Stock</span>
                        <input class="w-1/2 rounded-lg border border-solid border-gray-200 px-4 py-1" type="text" name="stock" value="{{ $product->stock }}">
                    </div>

                    <div class="relative flex flex-col justify-start gap-4 px-6 py-6 pt-4">
                        <span class="font-medium leading-8">Foto Produk</span>
                        <label for="imageInput" class="flex cursor-pointer justify-start text-2xl font-semibold text-gray-400">
                            <div class="flex h-20 w-20 items-center justify-center rounded-lg bg-transparent">
                                <img class="h-20 w-20 rounded-2xl bg-gray-300" src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                <input type="file" id="imageInput" name="image" class="absolute left-0 top-0 h-0 w-0 opacity-0" accept="image/*" />
                            </div>
                        </label>
                    </div>
                </div>
                <div class="flex w-full flex-col rounded-lg border border-solid border-gray-200 bg-white">
                    <span class="flex justify-start rounded-t-lg border-b border-solid border-gray-200 bg-white p-6 text-lg font-bold">Kategori</span>
                    <div class="flex w-full gap-6 px-6 py-4">

                        @foreach ($categories as $category)
                            <label class="flex w-1/2 gap-3">
                                <input type='radio' name='category_id' value='{{ $category->id }}' {{ $category->id == $product->category_id ? 'checked' : '' }} />
                                <span for="outOfStock" class="flex cursor-pointer items-center justify-start font-medium">
                                    {{ $category->name }}
                                </span>
                            </label>
                        @endforeach

                    </div>
                </div>

                <div class="flex w-full flex-col rounded-lg border border-solid border-gray-200 bg-white">
                    <span class="flex justify-start rounded-t-lg border-b border-solid border-gray-200 bg-white p-6 text-lg font-bold">Flash Sale</span>
                    <div class="flex justify-between px-6 py-4">
                        <span class="flex w-1/2 items-center justify-start font-medium">Harga Setelah Diskon</span>
                        <div class="relative w-40">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-black">Rp.</span>
                            <input type="number" class="w-full rounded-lg border border-solid border-gray-200 px-4 py-1 pl-10"
                                value="{{ $product->flashsale?->price_after_discount }}" name="flashsale" id="rupiahInput">
                        </div>
                    </div>
                </div>

                <div class="flex w-full flex-col rounded-lg border border-solid border-gray-200 bg-white">
                    <span class="flex justify-start rounded-t-lg border-b border-solid border-gray-200 bg-white p-6 text-lg font-bold">Deskripsi Barang</span>
                    <div class="flex w-full gap-6 px-6 py-6">
                        <textarea name="description" class="h-60 max-h-60 w-full rounded-lg border border-solid border-gray-200 px-4 py-2 text-left">{{ $product->description }}</textarea>
                    </div>
                </div>
                <button class="w-full rounded-lg bg-primary px-6 py-2 text-center font-semibold leading-8 text-white">Simpan</button>
            </form>
        </div>
    </div>
@endsection

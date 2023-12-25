@extends('index')

@section('page')
    <div class="flex gap-2">
        <div class="flex w-full max-w-[1440px]">
            <x-layout.sidebar />
            <x-layout.content>
                <form method="POST" enctype="multipart/form-data" class="flex flex-col w-full gap-6 p-10">
                    @csrf
                @method('PATCH')

                <div class="flex justify-start w-full gap-2">
                    <span class="font-semibold"><a href="/dashboard/produk" class="text-black">Produk</a></span>
                    <span>•</span>
                    <span aria-current="page" class="text-gray-500 active:font-semibold">Edit Produk</span>
                </div>

                <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                    <span class="flex justify-start p-6 text-lg font-bold bg-white border-b border-gray-200 border-solid rounded-t-lg">Detail Barang</span>

                    <div class="flex gap-6 px-6 py-4">
                        <span class="flex items-center justify-start w-1/2 font-medium">Nama Barang</span>
                        <input class="w-1/2 px-4 py-1 border border-gray-200 border-solid rounded-lg" type="text" name="name" value="{{ $product->name }}">
                    </div>

                    <div class="flex gap-6 px-6 py-4">
                        <span class="flex items-center justify-start w-1/2 font-medium">Harga Barang</span>
                        <div class="relative w-1/2">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-2 text-gray-600">Rp.</span>
                            <input type="number" class="w-full px-4 py-1 pl-8 border border-gray-200 border-solid rounded-lg" name="price" placeholder="-"
                                value="{{ $product->price }}" min="1">
                        </div>
                    </div>

                    <div class="flex gap-6 px-6 py-4">
                        <span class="flex items-center justify-start w-1/2 font-medium">Warna</span>
                        <input class="w-1/2 px-4 py-1 border border-gray-200 border-solid rounded-lg" type="text" name="color" value="{{ $product->color }}">
                    </div>

                    <div class="flex gap-6 px-6 py-4">
                        <span class="flex items-center justify-start w-1/2 font-medium">Ukuran</span>
                        <input class="w-1/2 px-4 py-1 border border-gray-200 border-solid rounded-lg" type="text" name="size" value="{{ $product->size }}">
                    </div>

                    <div class="flex gap-6 px-6 py-4">
                        <span class="flex items-center justify-start w-1/2 font-medium">Stock</span>
                        <input class="w-1/2 px-4 py-1 border border-gray-200 border-solid rounded-lg" type="text" name="stock" value="{{ $product->stock }}">
                    </div>
                    
                    <div class="relative flex flex-col justify-start gap-4 px-6 py-6 pt-4">
                        <span class="font-medium leading-8">Foto Produk</span>
                        <label for="imageInput" class="flex justify-start text-2xl font-semibold text-gray-400 cursor-pointer">
                            <div class="flex items-center justify-center w-20 h-20 bg-transparent rounded-lg">
                                <img class="w-20 h-20 bg-gray-300 rounded-2xl" src="{{ asset($product->image) }}" alt="{{ $product->name }}" id="imagePreview">
                                <input type="file" id="imageInput" name="image" class="absolute top-0 left-0 w-0 h-0 opacity-0" accept="image/*" />
                            </div>
                        </label>
                    </div>
                </div>
                <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                    <span class="flex justify-start p-6 text-lg font-bold bg-white border-b border-gray-200 border-solid rounded-t-lg">Kategori</span>
                    <div class="flex w-full gap-6 px-6 py-4">

                        <div class="grid w-full grid-cols-2 gap-4">
                            @foreach ($categories as $category)
                                <label class="flex w-full gap-3">
                                    <input type='radio' name='category_id' value='{{ $category->id }}' @if (old('category_id') == $category->id) checked @endif />
                                    <span class="flex items-center justify-start font-medium cursor-pointer">
                                        {{ $category->name }}
                                    </span>
                                </label>
                            @endforeach
                        </div>

                        </div>
                        <div class='flex min-h-[64px] items-center gap-6 border-t border-solid border-gray-200 px-6'>
                            <a href="/dashboard/kategori" class="font-medium text-primary">+ Tambah Kategori</a>
                        </div>
                </div>
                <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                    <span class="flex justify-start p-6 text-lg font-bold bg-white border-b border-gray-200 border-solid rounded-t-lg">Flash Sale</span>
                    <div class="flex justify-between px-6 py-4">
                        <span class="flex items-center justify-start w-1/2 font-medium">Harga Setelah Diskon</span>
                        <div class="relative w-40">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-black">Rp.</span>
                            <input type="number" class="w-full px-4 py-1 pl-10 border border-gray-200 border-solid rounded-lg"
                            value="{{ $product->flashsale?->price_after_discount }}" name="flashsale" id="rupiahInput">
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                    <span class="flex justify-start p-6 text-lg font-bold bg-white border-b border-gray-200 border-solid rounded-t-lg">Deskripsi Barang</span>
                    <div class="flex w-full gap-6 px-6 py-6">
                        <textarea name="description" class="w-full px-4 py-2 text-left border border-gray-200 border-solid rounded-lg h-60 max-h-60">{{ $product->description }}</textarea>
                    </div>
                </div>
                <button class="w-full px-6 py-2 font-semibold leading-8 text-center text-white rounded-lg bg-primary">Simpan</button>
            </form>
        </x-layout.content>
        </div>
    </div>
@endsection

@push('scripts')
    @vite('resources/js/imageInput.js')
@endpush

@extends('index')

@section('page')
    <div class="flex gap-2">
        <div class="flex w-full max-w-[1440px] justify-center">
            <x-layout.sidebar />
            <div class="flex flex-col w-full gap-6 p-10">
                <h2>Daftar Produk</h2>
                <form class="flex w-full gap-6 p-6 bg-white rounded-lg">
                    <input placeholder="Cari nama barang" class="w-2/5 px-4 py-1 border border-gray-200 border-solid rounded-lg" type="text" name="sort" id="sort">
                    <select id="sort" name="sort" class="w-[20%] rounded-md bg-slate-200 py-2 pl-3 text-base text-black">
                        <option value="harga-terendah">Pilih Kategori</option>
                        <option value="harga-tertinggi">Edit</option>
                        <option value="terbaru">Terbaru</option>
                    </select>
                    <div class="flex w-[20%] items-center gap-4">
                        <input type="checkbox" id="outOfStock" name="product" class="hidden">
                        <label for="outOfStock" class="relative flex w-full gap-4 text-base font-bold cursor-pointer">
                            Tampilkan Produk Habis
                            <div class="flex items-center justify-center w-6 h-6 bg-white border border-gray-300 rounded-md">
                                <span class="absolute text-white transition-opacity" id="checkIcon">✓</span>
                            </div>
                        </label>
                    </div>
                    <button type="submit" class="flex items-center justify-center px-4 py-1 font-semibold text-white rounded-md whitespace-nowrap bg-primary">Terapkan Filter</button>
                </form>
                <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                    <div class='flex min-h-[64px] items-center gap-6 px-6'>
                        <div class='flex h-full min-h-[64px] w-full'>
                            <div class='flex flex-col items-start justify-center w-full font-bold g-4'>Barang</div>
                            <div class='flex flex-col items-start justify-center w-full font-bold g-4'>Harga</div>
                            <div class='flex flex-col items-start justify-center w-full font-bold g-4'>Stok</div>
                            <div class='flex flex-col items-start justify-center w-full font-bold g-4'>Aksi</div>
                        </div>
                    </div>
                    @foreach ($products as $product)
                        <div class='flex min-h-[64px] items-center gap-6 border-t border-solid border-gray-200 px-6'>
                            <div class='flex h-full min-h-[64px] w-full'>
                                <x-product-item :product="$product" />
                                <div class='flex flex-col items-start justify-center w-full font-light text-gray-500'>
                                    <span class="text-gray-600 rounded-lg w-fit">@money($product->price)</span>
                                </div>
                                <div class='flex flex-col items-start justify-center w-full font-light text-gray-500'>
                                    <div class="flex gap-4">
                                        <span class="text-gray-600 rounded-lg w-fit">{{ $product->stock }}</span>
                                    </div>
                                </div>
                                <div class='flex flex-col items-start justify-center w-full'>
                                    <div class='flex items-center justify-start w-full gap-4'>
                                        <a class="px-4 py-2 font-semibold text-white bg-blue-500 rounded-lg hover:bg-blue-400" href="produk/{{ $product->slug }}">Edit</a>
                                        <button class="px-2 py-2 rounded-lg bg-primary hover:bg-opacity-80" type="submit"><x-icons.trash/></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endsection

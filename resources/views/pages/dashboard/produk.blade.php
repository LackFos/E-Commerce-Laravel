@extends('index')

@section('page')
    <x-layout.admin>

        <div class="flex gap-2">
            <div class="flex w-full">
                <div class="flex flex-col w-full gap-6 p-10">
                    <h2>Daftar Produk</h2>
                    <form class="flex w-full gap-6 p-6 bg-white rounded-lg">
                        <input placeholder="Cari nama barang" class="w-2/5 px-4 py-1 border border-gray-200 border-solid rounded-lg" type="text" name="q">
                        <select id="sort" name="sort" class="w-[20%] rounded-md bg-slate-200 px-3 py-2 text-base text-black">
                            <option value="" disabled selected>Pilih Kategori</option>
                            <option value="latest">Produk Terbaru</option>
                            <option value="oldest">Produk Terlama</option>
                            <option value="highest">Harga Tertinggi</option>
                            <option value="lowest">Harga Terendah</option>
                        </select>

                        <div class="flex w-[20%] flex-grow items-center gap-4">
                            <input type="checkbox" id="outofstock" class="hidden" @if ($showEmptyProduct) checked @endif>
                            <label for="outofstock" class="relative flex items-center w-full gap-4 text-base font-bold cursor-pointer">
                                Tampilkan Produk Habis
                                <div class="flex items-center justify-center w-6 h-6 bg-white border border-gray-300 rounded-md">
                                    <span class="absolute text-white transition-opacity" id="checkIcon">✓</span>
                                </div>
                            </label>
                        </div>

                        <button type="submit" class="flex items-center justify-center px-4 py-1 font-semibold text-white rounded-md whitespace-nowrap bg-primary">Cari Barang
                        </button>
                    </form>
                    <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                        <div class='flex min-h-[64px] items-center gap-6 px-6'>
                            <div class='flex h-full min-h-[64px] w-full'>
                                <div class='flex flex-col items-start justify-center w-full font-bold g-4'>Barang</div>
                                <div class='flex flex-col items-start justify-center w-full font-bold g-4'>Harga</div>
                                <div class='flex flex-col items-start justify-center w-full font-bold g-4'>Stok</div>
                                <div class='flex flex-col items-start justify-center w-full font-bold g-4'>Harga Setelah Diskon</div>
                                <div class='flex flex-col items-start justify-center w-full font-bold g-4'>Aksi</div>
                            </div>
                        </div>
                        @foreach ($products as $product)
                            <form action="{{ route('product.destroy', ['product' => $product->slug]) }}" method="POST"
                                class='flex min-h-[64px] items-center gap-6 border-t border-solid border-gray-200 px-6'>
                                @csrf
                                @method('DELETE')
                                <div class='flex h-full min-h-[64px] w-full'>
                                    <div class='flex flex-col items-start justify-center w-full my-3 font-light text-gray-500'>
                                        <div class="flex items-center gap-4">
                                            <img src="{{ $product->image }}" class="w-20 h-20 bg-gray-300 rounded-2xl" alt="{{ $product->name }}">
                                            <span class="font-medium leading-8">{{ $product->name }}</span>
                                        </div>
                                    </div>
                                    <div class='flex flex-col items-start justify-center w-full font-light text-gray-500'>
                                        <span class="text-gray-600 rounded-lg w-fit">@money($product->price)</span>
                                    </div>
                                    <div class='flex items-center w-full gap-8 font-light text-gray-500'>
                                        <span class="text-gray-600 rounded-lg w-fit">{{ $product->stock }}</span>
                                        <span class="text-red-500">{{ $product->stock === 0 ? 'Stok Habis' : '' }}</span>
                                    </div>
                                    <div class='flex items-center w-full gap-10 font-light text-gray-500'>
                                        @if ($product->flashsale)
                                            <span class="text-gray-600 rounded-lg w-fit">@money($product->flashsale->price_after_discount)</span>
                                        @else
                                            <span class="text-gray-600 rounded-lg w-fit">Tidak ada diskon</span>
                                        @endif
                                    </div>
                                    <div class='flex flex-col items-start justify-center w-full'>
                                        <div class='flex items-center justify-start w-full gap-4'>
                                            <a class="px-4 py-2 font-semibold text-white bg-blue-500 rounded-lg hover:bg-blue-400"
                                                href="{{ route('product.edit', ['product' => $product->slug]) }}">Edit</a>
                                            <button type="submit" class="px-2 py-2 rounded-lg bg-primary hover:bg-opacity-80" type="submit"><x-icons.trash /></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            @endforeach
                        </div>
                        <div class='flex flex-col justify-center w-full gap-6 p-6 bg-white border border-gray-200 border-solid rounded-2xl'>
                            <div class="flex flex-col items-center justify-center gap-2 py-10">
                                <x-icons.box />
                                <h2 class="text-[#808080]">Barang Tidak Ditemukan</h1>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </x-layout.admin>
@endsection

@push('scripts')
    @vite('resources/js/sort.js')
@endpush

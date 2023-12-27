@extends('index')

@section('page')
    <x-layout.admin>

        <div class="flex gap-2">
            <div class="flex w-full">
                <div class="flex w-full flex-col gap-6 p-10">
                    <h2>Daftar Produk</h2>
                    <form class="flex w-full gap-6 rounded-lg bg-white p-6">
                        <input placeholder="Cari nama barang" class="w-2/5 rounded-lg border border-solid border-gray-200 px-4 py-1" type="text" name="q">
                        <select id="sort" name="sort" class="w-[20%] rounded-md bg-slate-200 px-3 py-2 text-base text-black">
                            <option value="" disabled selected>Pilih Kategori</option>
                            <option value="latest">Produk Terbaru</option>
                            <option value="oldest">Produk Terlama</option>
                            <option value="highest">Harga Tertinggi</option>
                            <option value="lowest">Harga Terendah</option>
                        </select>

                        <div class="flex w-[20%] flex-grow items-center gap-4">
                            <input type="checkbox" id="outofstock" class="hidden" @if ($showEmptyProduct) checked @endif>
                            <label for="outofstock" class="relative flex w-full cursor-pointer items-center gap-4 text-base font-bold">
                                Tampilkan Produk Habis
                                <div class="flex h-6 w-6 items-center justify-center rounded-md border border-gray-300 bg-white">
                                    <span class="absolute text-white transition-opacity" id="checkIcon">✓</span>
                                </div>
                            </label>
                        </div>

                        <button type="submit" class="flex items-center justify-center whitespace-nowrap rounded-md bg-primary px-4 py-1 font-semibold text-white">Cari Barang
                        </button>
                    </form>
                    <div class="flex w-full flex-col rounded-lg border border-solid border-gray-200 bg-white">
                        <div class='flex min-h-[64px] items-center gap-6 px-6'>
                            <div class='flex h-full min-h-[64px] w-full'>
                                <div class='g-4 flex w-full flex-col items-start justify-center font-bold'>Barang</div>
                                <div class='g-4 flex w-full flex-col items-start justify-center font-bold'>Harga</div>
                                <div class='g-4 flex w-full flex-col items-start justify-center font-bold'>Stok</div>
                                <div class='g-4 flex w-full flex-col items-start justify-center font-bold'>Harga Setelah Diskon</div>
                                <div class='g-4 flex w-full flex-col items-start justify-center font-bold'>Aksi</div>
                            </div>
                        </div>
                        @foreach ($products as $product)
                            <form action="{{ route('product.destroy', ['product' => $product->slug]) }}" method="POST"
                                class='flex min-h-[64px] items-center gap-6 border-t border-solid border-gray-200 px-6'>
                                @csrf
                                @method('DELETE')
                                <div class='flex h-full min-h-[64px] w-full'>
                                    <div class='my-3 flex w-full flex-col items-start justify-center font-light text-gray-500'>
                                        <div class="flex items-center gap-4">
                                            <img src="{{ $product->image }}" class="h-20 w-20 rounded-2xl bg-gray-300" alt="{{ $product->name }}">
                                            <span class="font-medium leading-8">{{ $product->name }}</span>
                                        </div>
                                    </div>
                                    <div class='flex w-full flex-col items-start justify-center font-light text-gray-500'>
                                        <span class="w-fit rounded-lg text-gray-600">@money($product->price)</span>
                                    </div>
                                    <div class='flex w-full items-center gap-8 font-light text-gray-500'>
                                        <span class="w-fit rounded-lg text-gray-600">{{ $product->stock }}</span>
                                        <span class="text-red-500">{{ $product->stock === 0 ? 'Stok Habis' : '' }}</span>
                                    </div>
                                    <div class='flex w-full items-center gap-10 font-light text-gray-500'>
                                        @if ($product->flashsale)
                                            <span class="w-fit rounded-lg text-gray-600">@money($product->flashsale->price_after_discount)</span>
                                        @else
                                            <span class="w-fit rounded-lg text-gray-600">Tidak ada diskon</span>
                                        @endif
                                    </div>
                                    <div class='flex w-full flex-col items-start justify-center'>
                                        <div class='flex w-full items-center justify-start gap-4'>
                                            <a class="rounded-lg bg-blue-500 px-4 py-2 font-semibold text-white hover:bg-blue-400"
                                                href="{{ route('product.edit', ['product' => $product->slug]) }}">Edit</a>
                                            <button type="submit" class="rounded-lg bg-primary px-2 py-2 hover:bg-opacity-80" type="submit"><x-icons.trash /></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </x-layout.admin>
@endsection

@push('scripts')
    @vite('resources/js/sort.js')
@endpush

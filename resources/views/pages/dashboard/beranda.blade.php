@extends('index')

@section('page')
    <div class="flex gap-2">
        <x-layout.sidebar />
        <div class="flex w-full max-w-[1440px] justify-center p-10">
            <div class="flex flex-col w-full gap-12">
                <div class="flex flex-col w-full gap-6">
                    <h2>Beranda</h2>

                    <div class="flex gap-4">
                        @foreach ($orderStatuses as $orderStatus)
                            <a href="" class="flex flex-col w-full p-6 bg-white rounded-lg">
                                <span class="leading-8">{{ $orderStatus['name'] }}</span>
                                <span class="text-xl font-bold">{{ $orderStatus['total'] }}</span>
                            </a>
                        @endforeach

                        <div class="flex flex-col w-full p-6 bg-white rounded-lg">
                            <span class="leading-8">Stok Habis</span>
                            <span class="text-xl font-bold">{{ count($emptyStockProduct) }}</span>
                        </div>
                    </div>

                </div>
                <form class="flex flex-col w-full gap-6">
                    <h2>Segera Habis</h2>

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

                        @foreach ($emptyStockProduct as $product)
                            <div class='flex min-h-[64px] items-center gap-6 border-t border-solid border-gray-200 px-6'>
                                <div class='flex h-full min-h-[64px] w-full'>
                                    <x-product-item :product="$product" />
                                    <div class='flex flex-col items-start justify-center w-full font-light text-gray-500'>
                                        <span class="text-gray-600 rounded-lg w-fit">@money($product->price)</span>
                                    </div>
                                    <div class='flex items-center w-full gap-10 font-light text-gray-500'>
                                        <span class="text-gray-600 rounded-lg w-fit">{{ $product->stock }}</span>
                                        <span class="flex items-center text-primary">Stok Habis</span>
                                    </div>
                                    <div class='flex items-center w-full gap-10 font-light text-gray-500'>
                                        <span class="text-gray-600 rounded-lg w-fit">@money(100000)</span>
                                    </div>
                                    <div class='flex flex-col items-start justify-center w-full'>
                                        <div class='flex items-center justify-start w-full gap-4'>
                                            <a class="px-4 py-2 font-semibold text-white bg-blue-500 rounded-lg hover:bg-blue-400" href="dashboard/produk/{{ $product->slug }}">Edit</a>
                                            <button class="px-2 py-2 rounded-lg bg-primary hover:bg-opacity-80" type="submit"><x-icons.trash/></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        @foreach ($almostEmptyStockProduct as $product)
                            <div class='flex min-h-[64px] items-center gap-6 border-t border-solid border-gray-200 px-6'>
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
                                    <div class='flex flex-col items-start justify-center w-full font-light text-gray-500'>
                                        <span class="text-gray-600 rounded-lg w-fit">{{ $product->stock }}</span>
                                    </div>
                                    <div class='flex items-center w-full gap-10 font-light text-gray-500'>
                                        <span class="text-gray-600 rounded-lg w-fit">@money(100000)</span>
                                    </div>
                                    <div class='flex flex-col items-start justify-center w-full'>
                                        <div class='flex items-center justify-start w-full gap-4'>
                                            <a  class="px-4 py-2 font-semibold text-white bg-blue-500 rounded-lg hover:bg-blue-400" href="dashboard/produk/{{ $product->slug }}">Edit</a>
                                            <button class="px-2 py-2 rounded-lg bg-primary hover:bg-opacity-80" type="submit"><x-icons.trash/></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

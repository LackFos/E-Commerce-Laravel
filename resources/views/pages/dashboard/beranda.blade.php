@extends('index')

@section('page')
    <div class="flex gap-2">
        <x-layout.sidebar />

        <div class="flex w-full max-w-[1440px] justify-center p-10">
            <div class="flex w-full flex-col gap-12">
                <div class="flex w-full flex-col gap-6">
                    <h2>Beranda</h2>

                    <div class="flex gap-4">
                        @foreach ($orderStatuses as $orderStatus)
                            <a href="" class="flex w-full flex-col rounded-lg bg-white p-6">
                                <span class="leading-8">{{ $orderStatus['name'] }}</span>
                                <span class="text-xl font-bold">{{ $orderStatus['total'] }}</span>
                            </a>
                        @endforeach

                        <div class="flex w-full flex-col rounded-lg bg-white p-6">
                            <span class="leading-8">Stok Habis</span>
                            <span class="text-xl font-bold">{{ count($emptyStockProduct) }}</span>
                        </div>
                    </div>

                </div>
                <div class="flex w-full flex-col gap-6">
                    <h2>Segera Habis</h2>

                    <div class="flex w-full flex-col rounded-lg border border-solid border-gray-200 bg-white">
                        <div class='flex min-h-[64px] items-center gap-6 px-6'>
                            <div class='flex h-full min-h-[64px] w-full'>
                                <div class='g-4 flex w-full flex-col items-start justify-center font-bold'>Barang</div>
                                <div class='g-4 flex w-full flex-col items-start justify-center font-bold'>Harga</div>
                                <div class='g-4 flex w-full flex-col items-start justify-center font-bold'>Stok</div>
                                <div class='g-4 flex w-full flex-col items-start justify-center font-bold'>Aksi</div>
                            </div>
                        </div>

                        @foreach ($almostEmptyStockProduct as $product)
                            <div class='flex min-h-[64px] items-center gap-6 border-t border-solid border-gray-200 px-6'>
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
                                    <div class='flex w-full flex-col items-start justify-center font-light text-gray-500'>
                                        <span class="w-fit rounded-lg text-gray-600">{{ $product->stock }}</span>
                                    </div>
                                    <div class='flex w-full flex-col items-start justify-center font-light text-gray-500'>
                                        <div class='flex w-full items-center justify-start gap-4 font-light text-gray-500'>
                                            <a href="/demodashboard/product/edit">Edit</a>
                                            <button>Hapus</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        @foreach ($emptyStockProduct as $product)
                            <div class='flex min-h-[64px] items-center gap-6 border-t border-solid border-gray-200 px-6'>
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
                                    <div class='flex w-full items-center gap-10 font-light text-gray-500'>
                                        <span class="w-fit rounded-lg text-gray-600">{{ $product->stock }}</span>
                                        <span class="flex items-center text-primary">Stok Habis</span>
                                    </div>
                                    <div class='flex w-full flex-col items-start justify-center font-light text-gray-500'>
                                        <div class='flex w-full items-center justify-start gap-4 font-light text-gray-500'>
                                            <a href="/demodashboard/product/edit">Edit</a>
                                            <button>Hapus</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

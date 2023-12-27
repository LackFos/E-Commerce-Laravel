@extends('index')

@section('page')
    <x-layout.admin>
        <div class="flex gap-2">
            <div class="flex w-full">

                <div class="flex w-full flex-col gap-6 p-10">
                    <div class="flex w-full justify-start gap-2">
                        <span class="font-semibold"><a href="/dashboard/pesanan/?status=pending" class="text-black">Pesanan</a></span>
                        <span>•</span>
                        <span aria-current="page" class="text-gray-500 active:font-semibold">Detail Pesanan</span>
                    </div>
                    <h2>Rincian Pesanan</h2>
                    <div class="flex w-full flex-col gap-4 rounded-lg border border-solid border-gray-200 bg-white p-6">
                        <div class="flex gap-6">
                            <div class="flex w-1/2 items-center justify-start gap-2">
                                <span class="w-36 font-medium">Nama Pembeli:</span>
                                <span>{{ $order->user->username }}</span>
                            </div>
                            <a href="" class="flex w-1/2 justify-end font-semibold text-primary">Hubungi Pemebeli</a>
                        </div>
                        <div class="flex gap-6">
                            <div class="flex w-1/2 items-center justify-start gap-2">
                                <span class="w-36 font-medium">Status Pesanan:</span>
                                <span class="font-bold">{{ $order->orderStatus->name }}</span>
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="flex w-1/2 items-center justify-start gap-2">
                                <span class="w-36 font-medium">Nomor Pesanan:</span>
                                <span>{{ $order->id }}</span>
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="flex w-1/2 items-center justify-start gap-2">
                                <span class="w-36 font-medium">Tanggal Pesanan:</span>
                                <span>@date($order->created_at)</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-full flex-col rounded-lg border border-solid border-gray-200 bg-white pb-6">
                        <span class="flex justify-start rounded-t-lg bg-white p-6 text-lg font-bold">Informasi Pesanan</span>
                        <div class="flex flex-col gap-6 px-6">


                            @foreach ($order->orderItems as $item)
                                <div class="product-card flex w-full gap-6 rounded-2xl border border-solid border-gray-200 bg-white p-6">
                                    <div class="flex w-full justify-between">
                                        <div class="flex gap-6">
                                            <img class="h-36 w-full min-w-[144px] rounded-2xl bg-gray-300" src="{{ $item->product->image }}" alt="{{ $item->product->name }}">
                                            <div class="flex flex-col justify-start gap-6">
                                                <div class="flex gap-2">
                                                    <span class="font-medium">{{ $item->product->name }}</span>
                                                </div>
                                                <div class="flex gap-2">
                                                    <span class="rounded-full bg-gray-200 px-6 py-2">{{ $item->product->size }}</span>
                                                    <span class="rounded-full bg-gray-200 px-6 py-2">{{ $item->product->color }}</span>
                                                </div>
                                                <span class="text-gray-400">{{ $item->quantity }} x <span class="text-gray-400">@money($item->product->flashsale?->price_after_discount ?? $item->product->price)</span></span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col justify-between">
                                            <a href="/produk/{{ $item->product->slug }}" class="flex justify-end font-semibold text-primary">Lihat Produk</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="flex flex-col rounded-2xl bg-white">
                        <div class="flex items-center justify-between border-b border-solid border-gray-100 p-6">
                            <span class="text-xl font-bold">Detail Transaksi</span>
                        </div>
                        <div class="flex flex-col">
                            @foreach ($order->orderItems as $item)
                                <div class="flex justify-between px-6 py-4">
                                    <div class='flex gap-2'>
                                        {{ $item->product->name }}
                                        <span class="flex h-6 w-6 items-center justify-center rounded-full bg-primary text-xs text-white">x{{ $item->quantity }}</span>
                                    </div>
                                    <span class="text-gray-400">@money($item->price)</span>
                                </div>
                            @endforeach
                        </div>
                        <div class="flex items-center justify-between border-t border-solid border-gray-100 p-6">
                            <span class="text-lg font-bold">Total Harga</span>
                            <span class="text-lg font-bold text-primary">@money($order->price_amount)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-layout.admin>
@endsection

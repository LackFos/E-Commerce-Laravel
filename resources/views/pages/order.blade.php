@extends('index')

@section('page')
    <div class="flex justify-center py-10">
        <div class="flex w-full max-w-[1440px] flex-col gap-4">
            <div class="flex flex-col rounded-2xl bg-white">
                <div class="flex items-center justify-between border-b border-solid border-gray-100 p-6">
                    <span class="text-xl font-bold">Invoice</span>
                    <span class="font-medium text-gray-400">{{ $order->id }}</span>
                </div>
                <div class="flex flex-col">
                    @foreach ($order->orderItems as $item)
                        <div class="flex justify-between px-6 py-4">
                            <div class='flex gap-2'>
                                {{ $item->product->name }}
                                <span class="flex h-6 w-6 items-center justify-center rounded-full bg-primary text-xs text-white">x{{ $item->quantity }}</span>
                            </div>
                            <span class="text-gray-400">@money($item->price * $item->quantity)</span>
                        </div>
                    @endforeach
                </div>
                <div class="flex items-center justify-between border-t border-solid border-gray-100 p-6">
                    <span class="text-lg font-bold">Total Harga</span>
                    <span class="text-lg font-bold text-primary">@money($order->price_amount)</span>
                </div>
                <div class="flex items-center justify-between border-t border-solid border-gray-100 p-6">
                    <a href="/profile/orders/pending" class="flex justify-between gap-2 rounded-full border border-solid border-black bg-white px-6 py-2"><x-icons.arrowleft />Back</a>
                    <form action="" class="flex flex-col justify-end">
                        <div class="flex gap-2">
                            <label for="fileInput" class="flex cursor-pointer items-center justify-center gap-2 rounded-full bg-primary px-6 py-2 text-sm font-medium text-white">
                                Upload Bukti
                                <x-icons.archive />
                                <input type="submit" type="file" id="fileInput" name="FotoProfil" class="absolute left-0 top-0 h-0 w-0 opacity-0" />
                            </label>
                            <button onclick="" class="flex cursor-pointer items-center justify-center gap-2 rounded-full bg-primary px-6 py-2 text-sm font-medium text-white">
                                Lihat Bukti
                                <x-icons.paper />
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            @foreach ($order->orderItems as $item)
                <div class="flex items-center justify-between rounded-2xl bg-white p-6">
                    <div class="flex gap-6">
                        <img class="h-36 w-36 overflow-hidden rounded-2xl bg-gray-300" src="{{ asset($item->product->image) }}" alt="{{ $item->product->name }}">
                        <div class="flex flex-col justify-between gap-2">
                            <span class="font-medium">{{ $item->product->name }}</span>
                            <span class="flex items-center justify-center rounded-full bg-gray-200 px-6 py-2">{{ $item->product->size }}</span>
                            <span class="text-gray-400"> {{ $item->quantity }} x @money($item->price)</span>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <span>Total Harga</span>
                        <span class="text-lg font-bold">@money($item->price * $item->quantity)</span>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection

@extends('index')

@section('page')
    <div class="flex justify-center py-10">
        <div class="flex w-[1440px] flex-col gap-4">
            <div class="flex flex-col rounded-2xl bg-white">
                <div class="flex items-center justify-between border-b border-solid border-gray-100 p-6">
                    <span class="text-xl font-bold">Invoice</span>
                    <span class="font-medium text-gray-400">{{ $order->id }}</span>
                </div>
                <div class="flex flex-col">
                    @foreach ($order->orderItems as $item)
                        <div class="flex justify-between px-6 py-4">
                            <span class="text-gray-400">{{ $item->product->name }} x {{ $item->quantity }}</span>
                            <span class="text-gray-400">{{ $item->product->price * $item->quantity }}</span>
                        </div>
                    @endforeach
                </div>
                <div class="flex items-center justify-between border-t border-solid border-gray-100 p-6">
                    <span class="text-lg font-bold">Total Harga</span>
                    <span class="text-lg font-bold text-primary">{{ $order->price_amount }}</span>
                </div>
            </div>

            @foreach ($order->orderItems as $item)
                <div class="flex items-center justify-between rounded-2xl bg-white p-6">
                    <div class="flex gap-6">
                        <img class="h-36 w-36 overflow-hidden rounded-2xl bg-gray-300" src="{{ asset($item->product->image) }}" alt="{{ $item->product->name }}">
                        <div class="flex flex-col justify-between gap-2">
                            <span class="font-medium">{{ $item->product->name }}</span>
                            <span class="flex items-center justify-center rounded-full bg-gray-200 px-6 py-2">{{ $item->product->size }}</span>
                            <span class="text-gray-400"> {{ $item->quantity }} x {{ $item->product->price }}</span>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <span>Total Harga</span>
                        <span class="text-lg font-bold">{{ $item->product->price * $item->quantity }}</span>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection

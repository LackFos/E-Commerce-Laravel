@extends('index')

@section('page')
    <div class="flex justify-center py-10">
        <div class="flex w-[1440px] flex-col gap-4">
            <div class="flex flex-col bg-white rounded-2xl">
                <div class="flex items-center justify-between p-6 border-b border-gray-100 border-solid">
                    <span class="text-xl font-bold">Invoice</span>
                    <span class="font-medium text-gray-400">{{ $order->id }}</span>
                </div>
                <div class="flex flex-col">
                    @foreach ($order->orderItems as $item)
                        <div class="flex justify-between px-6 py-4">
                            <span class="text-gray-400">{{ $item->product->name }} x {{ $item->quantity }}</span>
                            <span class="text-gray-400">Rp {{ number_format($item->product->price * $item->quantity, 0, ',', '.') }}</span>
                        </div>
                    @endforeach
                </div>
                <div class="flex items-center justify-between p-6 border-t border-gray-100 border-solid">
                    <span class="text-lg font-bold">Total Harga</span>
                    <span class="text-lg font-bold text-primary">Rp {{ number_format($order->price_amount, 0, ',', '.') }}</span>
                </div>
                <div class="flex items-center justify-center p-6 border-t border-gray-100 border-solid">
                    <label for="fileInput" class="flex items-center justify-center gap-2 px-6 py-2 text-sm font-medium text-white rounded-full cursor-pointer bg-primary">
                        Upload Bukti
                        <x-icons.archive/>
                        <input type="file" id="fileInput" name="FotoProfil" class="absolute top-0 left-0 w-0 h-0 opacity-0" />
                    </label>
                </div>
            </div>

            @foreach ($order->orderItems as $item)
                <div class="flex items-center justify-between p-6 bg-white rounded-2xl">
                    <div class="flex gap-6">
                        <img class="overflow-hidden bg-gray-300 h-36 w-36 rounded-2xl" src="{{ asset($item->product->image) }}" alt="{{ $item->product->name }}">
                        <div class="flex flex-col justify-between gap-2">
                            <span class="font-medium">{{ $item->product->name }}</span>
                            <span class="flex items-center justify-center px-6 py-2 bg-gray-200 rounded-full">{{ $item->product->size }}</span>
                            <span class="text-gray-400"> {{ $item->quantity }} x Rp {{ number_format($item->product->price,0, ',','.') }}</span>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <span>Total Harga</span>
                        <span class="text-lg font-bold">Rp {{ number_format($item->product->price * $item->quantity, 0, ',', '.') }}</span>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection

@extends('index')


@section('page')
    <x-layout.profile :username="$user->username" :image="$user->image">
        <div class='flex flex-col justify-start w-full gap-8 p-6 bg-white rounded-2xl'>
            <span class='font-bold ftext-xl'>Daftar Transaksi</span>
            <div class='flex gap-2'>

                @foreach ($orderStatuses as $status)
                    <div
                        class='{{ $selectedStatus->slug === $status->slug ? 'border-primary bg-primary-light text-primary' : '' }} flex h-10 items-center justify-center rounded-full border border-solid border-gray-100 px-6 py-1 hover:border-primary hover:bg-primary-light hover:text-primary'>
                        <a href={{ $status->slug }}>{{ $status->name }}</a>
                    </div>
                @endforeach

            </div>
        </div>

        @if ($userOrders->count() > 0)
            @foreach ($userOrders as $order)
            @php
            $formattedDate = \Carbon\Carbon::parse($order->created_at)->format('d F Y, H:i');
            @endphp
                <div class='flex flex-col w-full gap-6 p-6 bg-white border border-gray-100 border-solid rounded-2xl'>
                    <div class='flex justify-between'>
                        <div class='flex items-center gap-6'>
                            <span class='text-base font-medium'>{{ $formattedDate }}</span>
                        </div>
                        <a href="{{ route('order.detail', ['id' => $order->id]) }}" class='text-base font-semibold text-primary'>Lihat Detail</a>
                    </div>

                    @foreach ($order->orderItems as $item)
                        <div class='flex justify-start gap-6'>

                            <img src="{{ asset($item->product->image) }}" alt="{{ $item->product->name }}" class='bg-gray-200 h-36 w-36 rounded-2xl'>

                            <div class='flex flex-col justify-between'>
                                <span class='text-base font-medium'>{{ $item->product->name }}</span>
                                <div class='flex items-center justify-center px-6 py-2 bg-gray-200 rounded-full'><span class='text-black opacity-60'>{{ $item->product->size }}</span>
                                </div>
                                <span class='text-lg font-bold'>Rp {{ number_format($item->product->price, 0, ',', '.') }}</span>
                            </div>
                        </div>
                    @endforeach

                    <div class='flex justify-between py-4'>
                        <span class='text-lg font-bold'>Total Pesanan</span>
                        <span class='text-lg font-bold text-primary'>{{ number_format($order->price_amount, 0, ',', '.') }}</span>
                    </div>
                    <div class='flex justify-between py-4'>
                        <div class='flex flex-col gap-4'>
                            <h2>Transfer ke:</h2>

                            @foreach ($paymentAccount as $payment)
                                <div>
                                    <span>{{ $payment->bank_name }}: {{ $payment->bank_number }} ({{ $payment->bank_owner }})</span>
                                </div>
                            @endforeach

                        </div>
                        <div class='flex flex-col justify-end'>
                            <label for="fileInput" class="flex justify-center px-6 py-2 text-sm font-medium text-white rounded-full cursor-pointer bg-primary">
                                Upload Bukti
                                <input type="file" id="fileInput" name="FotoProfil" class="absolute top-0 left-0 w-0 h-0 opacity-0" />
                            </label>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class='flex flex-col justify-center w-full gap-6 p-6 bg-white border border-gray-100 border-solid rounded-2xl'>
                <div class="flex flex-col items-center justify-center gap-2 py-10">
                    <x-icons.box/>
                    <h2 class="text-[#808080]">Tidak ada pesanan</h1>
                </div>
            </div>
        @endif
    </x-layout.profile>
@endsection

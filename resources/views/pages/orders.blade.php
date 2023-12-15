@extends('index')

@section('page')
    <x-layout.profile :username="$user->username" :image="$user->image">
        <div class='flex w-full flex-col justify-start gap-8 rounded-2xl bg-white p-6'>
            <span class='ftext-xl font-bold'>Daftar Transaksi</span>
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
                <div class='flex w-full flex-col gap-6 rounded-2xl border border-solid border-gray-100 bg-white p-6'>
                    <div class='flex justify-between'>
                        <div class='flex items-center gap-6'>
                            <span class='text-base font-medium'>{{ $order->created_at }}</span>
                        </div>
                        <a href="/transactionDetail" class='text-base font-semibold text-primary'> Detail Transaksi</a>
                    </div>

                    @foreach ($order->orderItems as $item)
                        <div class='flex justify-start gap-6'>

                            <img src="{{ asset($item->product->image) }}" alt="{{ $item->product->name }}" class='h-36 w-36 rounded-2xl bg-gray-200'>

                            <div class='flex flex-col justify-between'>
                                <span class='text-base font-medium'>{{ $item->product->name }}</span>
                                <div class='flex items-center justify-center rounded-full bg-gray-200 px-6 py-2'><span class='text-black opacity-60'>{{ $item->product->size }}</span>
                                </div>
                                <span class='text-lg font-bold'>{{ $item->product->price }}</span>
                            </div>
                        </div>
                    @endforeach

                    <div class='flex justify-between py-4'>
                        <span class='text-lg font-bold'>Total Pesanan</span>
                        <span class='text-lg font-bold text-primary'>{{ $order->price_amount }}</span>
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
                            <button class='rounded-full bg-primary px-6 py-2'><span class='text-sm font-medium text-white'>Upload
                                    Bukti</span></button>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class='flex w-full flex-col gap-6 rounded-2xl border border-solid border-gray-100 bg-white p-6'>
                <h1>Tidak ada Pesanan</h1>
            </div>
        @endif
    </x-layout.profile>
@endsection

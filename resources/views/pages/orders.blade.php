@extends('index')

@section('page')
    <x-layout.profile :username="$user->username" :image="$user->image">
        <div class='flex flex-col justify-start w-full gap-8 p-6 bg-white rounded-2xl'>
            <h1>Daftar Transaksi</h1>
            <div class='flex gap-2'>

                @foreach ($orderStatuses as $status)
                    <div>
                        <a class='{{ $selectedStatus->slug === $status->slug ? 'border-primary bg-primary-light text-primary' : '' }} flex h-10 items-center justify-center rounded-full border border-solid border-gray-100 px-6 py-1 hover:border-primary hover:bg-primary-light hover:text-primary' href={{ $status->slug }}>{{ $status->name }}</a>
                    </div>
                @endforeach

            </div>
        </div>

        @if ($userOrders->count() > 0)
            @foreach ($userOrders as $index => $order)
                <div class='flex flex-col w-full gap-6 p-6 bg-white border border-gray-100 border-solid rounded-2xl'>
                    <div class='flex justify-between'>
                        <div class='flex items-center gap-6'>
                            <span class='text-base font-medium'>@date($order->created_at)</span>
                        </div>
                        <a href="{{ route('order.detail', ['id' => $order->id]) }}" class='text-base font-semibold text-primary'>Lihat Detail</a>
                    </div>

                    @foreach ($order->orderItems as $item)
                        <div class='flex justify-start gap-6'>

                            <img src="{{ asset($item->product->image) }}" alt="{{ $item->product->name }}" class='bg-gray-200 h-36 w-36 rounded-2xl'>

                            <div class='flex flex-col justify-between'>
                                <div class='flex gap-2'>
                                    {{ $item->product->name }}
                                    <span class="flex items-center justify-center w-6 h-6 text-xs text-white rounded-full bg-primary">x{{ $item->quantity }}</span>
                                </div>
                                <div class='flex items-center justify-center px-6 py-2 bg-gray-200 rounded-full'><span class='text-black opacity-60'>{{ $item->product->size }}</span>
                                </div>
                                <span class='text-lg font-bold'>@money($item->product->price)</span>
                            </div>
                        </div>
                    @endforeach

                    <div class='flex justify-between py-4'>
                        <span class='text-lg font-bold'>Total Pesanan</span>
                        <span class='text-lg font-bold text-primary'>@money($order->price_amount)</span>
                    </div>

                    <div class='flex flex-col justify-between gap-4 py-4'>
                        <span class='text-lg font-bold'>Bukti Pembayaran</span>
                        @if (isset($order->payment_proof))
                            <img class="w-1/4" src="{{ asset($order->payment_proof) }}" alt="{{ $order->id }}">
                        @else
                            <span class='text-red-600'>Belum ada bukti pembayaran</span>
                        @endif
                    </div>

                    <div class='flex justify-between py-4'>
                        <div class='flex flex-col gap-4'>
                            <h2>Transfer ke:</h2>

                            @foreach ($paymentAccount as $payment)
                                <div class='flex flex-col gap-4 pt-4'>
                                    <span>{{ $payment->bank_name }}: {{ $payment->bank_number }}</span>
                                    <span>A/N {{ $payment->bank_owner }}</span>
                                </div>
                            @endforeach

                        </div>

                        <form method="PATCH" action="/order/payment" class="flex flex-col justify-end order">
                            <div class="flex gap-2">
                                <label for="payment-image-{{ $index }}"
                                    class="relative flex items-center justify-center gap-2 px-6 py-2 text-sm font-medium text-white rounded-full cursor-pointer bg-primary">
                                    Upload Bukti
                                    <x-icons.archive />
                                    <input type="file" type="file" accept="image/*" id="payment-image-{{ $index }}" name="FotoProfil"
                                        class="absolute top-0 left-0 w-0 h-0 opacity-0 payment-proof" />
                                </label>
                                <div class="flex items-center justify-center gap-2 px-6 py-2 text-sm font-medium text-white rounded-full cursor-pointer view-payment bg-primary">
                                    Lihat Bukti
                                    <x-icons.paper />
                                </div>
                                <button type="submit" class="flex items-center justify-center gap-2 px-6 py-2 text-sm font-medium text-white rounded-full cursor-pointer bg-primary">
                                    Submit Bukti
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        @else
            <div class='flex flex-col justify-center w-full gap-6 p-6 bg-white border border-gray-100 border-solid rounded-2xl'>
                <div class="flex flex-col items-center justify-center gap-2 py-10">
                    <x-icons.box />
                    <h2 class="text-[#808080]">Tidak ada pesanan</h1>
                </div>
            </div>
        @endif


        <div id='payment-overlay' class="fixed inset-0 items-center justify-center hidden bg-black/75">
            <img id='payment-image' src="" alt="">
        </div>
    </x-layout.profile>
@endsection

@push('scripts')
    @vite('resources/js/orders.js')
@endpush

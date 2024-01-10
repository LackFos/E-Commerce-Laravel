@extends('index')

@section('page')
    <x-layout.profile :username="$user->username" :image="$user->image">
        <div class='flex w-full flex-col justify-start gap-8 rounded-2xl bg-white p-6'>
            <h1>Daftar Transaksi</h1>
            <div class='flex gap-2'>

                @foreach ($orderStatuses as $status)
                    <div>
                        <a class='{{ $selectedStatus->slug === $status->slug ? 'border-primary bg-primary-light text-primary' : '' }} flex h-10 items-center justify-center rounded-full border border-solid border-gray-100 px-6 py-1 hover:border-primary hover:bg-primary-light hover:text-primary'
                            href={{ $status->slug }}>{{ $status->name }}</a>
                    </div>
                @endforeach

            </div>
        </div>

        @if ($userOrders->count() > 0)
            @foreach ($userOrders as $index => $order)
                <div class='flex w-full flex-col gap-6 rounded-2xl border border-solid border-gray-100 bg-white p-6'>
                    <div class='flex justify-between'>
                        <div class='flex items-center gap-6'>
                            <span class='text-base font-medium'>@date($order->created_at)</span>
                        </div>
                        <a href="{{ route('order.detail', ['id' => $order->id]) }}" class='text-base font-semibold text-primary'>Lihat Detail</a>
                    </div>

                    @foreach ($order->orderItems as $item)
                        <div class='flex justify-start gap-6'>

                            <img src="{{ asset($item->product->image) }}" alt="{{ $item->product->name }}" class='h-36 w-36 rounded-2xl bg-gray-200'>

                            <div class='flex flex-col justify-between'>
                                <div class='flex gap-2'>
                                    {{ $item->product->name }}
                                    <span class="flex h-6 w-6 items-center justify-center rounded-full bg-primary text-xs text-white">x{{ $item->quantity }}</span>
                                </div>
                                <div class='flex items-center justify-center rounded-full bg-gray-200 px-6 py-2'><span class='text-black opacity-60'>{{ $item->product->size }}</span>
                                </div>
                                <span class='text-lg font-bold'>@money($item->price)</span>
                            </div>
                        </div>
                    @endforeach

                    <div class='flex justify-between py-4'>
                        <span class='text-lg font-bold'>Total Pesanan</span>
                        <span class='text-lg font-bold text-primary'>@money($order->price_amount)</span>
                    </div>

                    <div class='flex flex-col justify-between gap-4 py-4'>
                        <span class='text-lg font-bold'>Bukti Pembayaran</span>
                        @if (isset($order->payment_receipt))
                            <img class="w-1/6" src="{{ asset($order->payment_receipt) }}" alt="{{ $order->id }}">
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

                        <form method="post" action="/order/payment" enctype="multipart/form-data" class="order flex flex-col justify-end">
                            @csrf
                            @method('PATCH')

                            <div class="flex gap-2">
                                <label for="payment-image-{{ $index }}"
                                    class="relative flex cursor-pointer items-center justify-center gap-2 rounded-full bg-primary px-6 py-2 text-sm font-medium text-white">
                                    Upload Bukti
                                    <x-icons.archive />
                                    <input type="hidden" name="order_id" value={{ $order->id }}>
                                    <input type="file" type="file" accept="image/*" id="payment-image-{{ $index }}" name="payment_receipt"
                                        class="payment-receipt absolute left-0 top-0 h-0 w-0 opacity-0" />
                                </label>
                                <div class="view-payment flex cursor-pointer items-center justify-center gap-2 rounded-full bg-primary px-6 py-2 text-sm font-medium text-white">
                                    Lihat Bukti
                                    <x-icons.paper />
                                </div>
                                <button type="submit" class="flex cursor-pointer items-center justify-center gap-2 rounded-full bg-primary px-6 py-2 text-sm font-medium text-white">
                                    Submit Bukti
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach

            {{ $userOrders->links() }}
        @else
            <div class='flex w-full flex-col justify-center gap-6 rounded-2xl border border-solid border-gray-100 bg-white p-6'>
                <div class="flex flex-col items-center justify-center gap-2 py-10">
                    <x-icons.box />
                    <h2 class="text-[#808080]">Tidak ada pesanan</h1>
                </div>
            </div>
        @endif
    </x-layout.profile>

    <div id='payment-overlay' class="fixed inset-0 hidden items-center justify-center bg-black/75 p-20">
        <img id='payment-image' class='h-full w-1/2' src="" alt="">
    </div>
@endsection

@push('scripts')
    @vite('resources/js/orders.js')
@endpush

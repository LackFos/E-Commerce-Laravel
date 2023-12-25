@extends('index')

@section('page')
    <x-layout.admin>
        <div class="flex gap-2">
            <div class="flex w-full">
                <div class="flex w-full flex-col gap-6 p-10">
                    <h2>Pesanan</h2>
                    <div class="flex w-full flex-col overflow-hidden rounded-lg border border-solid border-gray-200 bg-white">
                        <div class='flex min-h-[64px] items-center gap-6'>
                            <div class='flex h-full min-h-[64px] w-full'>

                                @foreach ($orderStatuses as $status)
                                    <a href="?status={{ $status->slug }}"
                                        class='{{ $selectedStatus->slug === $status->slug ? 'border-b-4 border-solid' : 'border-b-4 border-solid border-transparent' }} g-4 flex w-full flex-col items-center justify-center border-primary font-bold'>{{ $status->name }}</a>
                                @endforeach

                            </div>
                        </div>
                    </div>

                    @if (count($orders) > 0)
                        @foreach ($orders as $order)
                            <div class='flex w-full flex-col gap-6 rounded-2xl border border-solid border-gray-100 bg-white p-6'>
                                <div class='flex items-center justify-between'>
                                    <div class='flex items-center gap-6'>
                                        <span class='text-base font-medium'>@date($order->created_at)</span>
                                    </div>
                                    <a href="/dashboard/pesanan/{{ $order->id }}" class='text-base font-semibold text-primary'>Detail Transaksi</a>
                                </div>

                                @foreach ($order->orderItems as $item)
                                    <div class='flex justify-start gap-6'>
                                        <img src="{{ $item->product->image }}" alt="{{ $item->product->name }}" class='h-36 w-36 rounded-2xl bg-gray-200'>
                                        <div class='flex flex-col justify-between'>
                                            <div class='flex gap-2'>
                                                {{ $item->product->name }}
                                                <span class="flex h-6 w-6 items-center justify-center rounded-full bg-primary text-xs text-white">x{{ $item->quantity }}</span>
                                            </div>
                                            <div class='flex items-center justify-center rounded-full bg-gray-200 px-6 py-2'><span
                                                    class='text-black opacity-60'>{{ $item->product->size }}</span>
                                            </div>
                                            <span class='text-lg font-bold'>@money($item->product->price) x {{ $item->quantity }}</span>
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
                                        <img class="w-1/4" src="{{ asset($order->payment_receipt) }}" alt="{{ $order->id }}">
                                    @else
                                        <span class='text-red-600'>Belum ada bukti pembayaran</span>
                                    @endif
                                </div>

                                <div class='flex justify-end py-4'>
                                    @if ($selectedStatus->slug === 'pending')
                                        <form method="POST">
                                            @csrf
                                            @method('patch')

                                            <div class="flex justify-end gap-2">
                                                <button formaction="{{ $order->id }}/accept" type="submit"
                                                    class="flex cursor-pointer items-center justify-center gap-2 rounded-full bg-primary px-6 py-2 text-sm font-medium text-white">
                                                    Terima Pesanan
                                                </button>
                                                <button formaction="{{ $order->id }}/reject" type="submit"
                                                    class="flex cursor-pointer items-center justify-center gap-2 rounded-full bg-primary px-6 py-2 text-sm font-medium text-white">
                                                    Batalkan Pesanan
                                                    <x-icons.cancel />
                                                </button>
                                            </div>
                                        </form>
                                    @elseif($selectedStatus->slug === 'on-going')
                                        <form action="{{ $order->id }}" method="POST">
                                            @csrf
                                            @method('patch')

                                            <div class="flex justify-end gap-2">
                                                <button formaction="{{ $order->id }}/complete" type="submit"
                                                    class="flex cursor-pointer items-center justify-center gap-2 rounded-full bg-primary px-6 py-2 text-sm font-medium text-white">
                                                    Pesanan Selesai
                                                </button>
                                                <button formaction="{{ $order->id }}/reject" type="submit"
                                                    class="flex cursor-pointer items-center justify-center gap-2 rounded-full bg-primary px-6 py-2 text-sm font-medium text-white">
                                                    Batalkan Pesanan
                                                    <x-icons.cancel />
                                                </button>
                                            </div>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class='flex w-full flex-col justify-center gap-6 rounded-2xl border border-solid border-gray-200 bg-white p-6'>
                            <div class="flex flex-col items-center justify-center gap-2 py-10">
                                <x-icons.box />
                                <h2 class="text-[#808080]">Tidak ada pesanan</h1>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </x-layout.admin>
@endsection

@extends('index')

@section('page')
    <div class="flex gap-2">
        <div class="flex w-full max-w-[1440px]">
            <x-layout.sidebar />
            <x-layout.content>
                <div class="flex flex-col w-full gap-6 p-10">
                    <h2>Pesanan</h2>
                    <div class="flex flex-col w-full overflow-hidden bg-white border border-gray-200 border-solid rounded-lg">
                        <div class='flex min-h-[64px] items-center gap-6'>
                            <div class='flex h-full min-h-[64px] w-full'>

                                @foreach ($orderStatuses as $status)
                                    <a href="?status={{ $status->slug }}"
                                        class='{{ $selectedStatus->slug === $status->slug ? 'border-b-4 border-solid' : 'border-b-4 border-solid border-transparent' }} g-4 flex w-full flex-col items-center justify-center border-primary font-bold'>{{ $status->name }}</a>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    @foreach ($orders as $order)
                        <div class='flex flex-col w-full gap-6 p-6 bg-white border border-gray-100 border-solid rounded-2xl'>
                            <div class='flex items-center justify-between'>
                                <div class='flex items-center gap-6'>
                                    <span class='text-base font-medium'>@date($order->created_at)</span>
                                </div>
                                <a href="/dashboard/pesanan/{{ $order->id }}" class='text-base font-semibold text-primary'>Detail Transaksi</a>
                            </div>

                            @foreach ($order->orderItems as $item)
                                <div class='flex justify-start gap-6'>
                                    <img src="{{ $item->product->image }}" alt="{{ $item->product->name }}" class='bg-gray-200 h-36 w-36 rounded-2xl'>
                                    <div class='flex flex-col justify-between'>
                                        <div class='flex gap-2'>
                                            {{ $item->product->name }}
                                            <span class="flex items-center justify-center w-6 h-6 text-xs text-white rounded-full bg-primary">x{{ $item->quantity }}</span>
                                        </div>
                                        <div class='flex items-center justify-center px-6 py-2 bg-gray-200 rounded-full'><span
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
                                                class="flex items-center justify-center gap-2 px-6 py-2 text-sm font-medium text-white rounded-full cursor-pointer bg-primary">
                                                Terima Pesanan
                                            </button>
                                            <button formaction="{{ $order->id }}/reject" type="submit"
                                                class="flex items-center justify-center gap-2 px-6 py-2 text-sm font-medium text-white rounded-full cursor-pointer bg-primary">
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
                                                class="flex items-center justify-center gap-2 px-6 py-2 text-sm font-medium text-white rounded-full cursor-pointer bg-primary">
                                                Pesanan Selesai
                                            </button>
                                            <button formaction="{{ $order->id }}/reject" type="submit"
                                                class="flex items-center justify-center gap-2 px-6 py-2 text-sm font-medium text-white rounded-full cursor-pointer bg-primary">
                                                Batalkan Pesanan
                                                <x-icons.cancel />
                                            </button>
                                        </div>
                                    </form>
                                @endif
                            </div>
                        </div>
                    @endforeach
                    <div class='flex flex-col justify-center w-full gap-6 p-6 bg-white border border-gray-200 border-solid rounded-2xl'>
                        <div class="flex flex-col items-center justify-center gap-2 py-10">
                            <x-icons.box />
                            <h2 class="text-[#808080]">Tidak ada pesanan</h1>
                        </div>
                    </div>
                </div>
            </x-layout.content>
        </div>
    </div>
@endsection

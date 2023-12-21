@extends('index')

@section('page')
    <div class="flex gap-2">
        <x-layout.sidebar />
        <div class="flex w-full max-w-[1440px] justify-center p-10">
            <div class="flex w-full flex-col gap-6">
                <h2>Pesanan</h2>
                <div class="flex w-full flex-col rounded-lg border border-solid border-gray-200 bg-white">
                    <div class='flex min-h-[64px] items-center gap-6'>
                        <div class='flex h-full min-h-[64px] w-full'>

                            @foreach ($orderStatuses as $status)
                                <a href="?status={{ $status->slug }}"
                                    class='{{ $selectedStatus->slug === $status->slug ? 'rounded-bl-lg border-b-4 border-solid ' : '' }}border-primary g-4 flex w-full flex-col items-center justify-center font-bold'>{{ $status->name }}</a>
                            @endforeach

                        </div>
                    </div>
                </div>

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
                        <div class='flex justify-end py-4'>
                            <form action="" class="flex flex-col justify-end">
                                <div class="flex gap-2">
                                    <button onclick=""
                                        class="flex cursor-pointer items-center justify-center gap-2 rounded-full bg-primary px-6 py-2 text-sm font-medium text-white">
                                        Lihat Bukti
                                        <x-icons.paper />
                                    </button>
                                    <button type="submit"
                                        class="flex cursor-pointer items-center justify-center gap-2 rounded-full bg-primary px-6 py-2 text-sm font-medium text-white">
                                        Pesanan Selesai
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    @endsection

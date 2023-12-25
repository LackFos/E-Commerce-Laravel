@extends('index')

@section('page')
    <div id='payment-overlay' class="fixed inset-0 items-center justify-center hidden p-20 bg-black/75">
        <img id='payment-image' class='w-1/2 h-full' src="" alt="">
    </div>

    <x-layout.user>
        <div class="flex justify-center py-10">
            <div class="flex w-full max-w-[1440px] px-8 flex-col gap-4">
                <div class="flex flex-col bg-white rounded-2xl">
                    <div class="flex items-center justify-between p-6 border-b border-gray-100 border-solid">
                        <span class="text-xl font-bold">Invoice</span>
                        <span class="font-medium text-gray-400">{{ $order->id }}</span>
                    </div>
                    <div class="flex flex-col">
                        @foreach ($order->orderItems as $item)
                            <div class="flex justify-between px-6 py-4">
                                <div class='flex gap-2'>
                                    {{ $item->product->name }}
                                    <span class="flex items-center justify-center w-6 h-6 text-xs text-white rounded-full bg-primary">x{{ $item->quantity }}</span>
                                </div>
                                <span class="text-gray-400">@money($item->price * $item->quantity)</span>
                            </div>
                        @endforeach
                    </div>
                    <div class="flex items-center justify-between p-6 border-t border-gray-100 border-solid">
                        <span class="text-lg font-bold">Total Harga</span>
                        <span class="text-lg font-bold text-primary">@money($order->price_amount)</span>
                    </div>
                    <div class="flex items-center justify-between p-6 border-t border-gray-100 border-solid">
                        <a href="/profile/orders/pending"
                            class="flex justify-between gap-2 px-6 py-2 bg-white border border-black border-solid rounded-full"><x-icons.arrowleft />Back</a>

                        <form method="post" action="/order/payment" enctype="multipart/form-data" class="flex flex-col justify-end order">
                            @csrf
                            @method('PATCH')

                            <div class="flex gap-2">
                                <label for="payment-image-[0]"
                                    class="relative flex items-center justify-center gap-2 px-6 py-2 text-sm font-medium text-white rounded-full cursor-pointer bg-primary">
                                    Upload Bukti
                                    <x-icons.archive />
                                    <input type="hidden" name="order_id" value={{ $order->id }}>
                                    <input type="file" type="file" accept="image/*" id="payment-image-[0]" name="payment_receipt"
                                        class="absolute top-0 left-0 w-0 h-0 opacity-0 payment-receipt" />
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

                @foreach ($order->orderItems as $item)
                    <div class="flex items-center justify-between p-6 bg-white rounded-2xl">
                        <div class="flex gap-6">
                            <img class="overflow-hidden bg-gray-300 h-36 w-36 rounded-2xl" src="{{ asset($item->product->image) }}" alt="{{ $item->product->name }}">
                            <div class="flex flex-col justify-between gap-2">
                                <span class="font-medium">{{ $item->product->name }}</span>
                                <span class="flex items-center justify-center px-6 py-2 bg-gray-200 rounded-full">{{ $item->product->size }}</span>
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
    </x-layout.user>
@endsection

@push('scripts')
    @vite('resources/js/orders.js')
@endpush

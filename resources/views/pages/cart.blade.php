@extends('index')

@section('page')
<div class="flex justify-center my-10">
    <div class="flex max-w-[1440px] gap-6">
        <div class="flex flex-col gap-4">
            <div class="flex flex-col p-6 gap-6 bg-white rounded-2xl max-w-[788px] border border-solid border-gray-200">
                <div class="flex gap-80">
                    <div class="flex gap-6">
                        <img class="w-36 h-36 bg-gray-300 rounded-2xl" src="" alt="">
                        <div class="flex flex-col gap-6 justify-start">
                            <span class="font-medium">Cardigan</span>
                            <div class="flex gap-2">
                                <span class="py-2 px-6 bg-gray-200 rounded-full">Hijau</span>
                                <span class="py-2 px-6 bg-gray-200 rounded-full">Hijau</span>
                            </div>
                            <span class="font-bold text-lg">Rp 100.000 <span class="text-xs leading-8">/ item</span></span>
                        </div>
                    </div>
                    <div class="flex items-start justify-end">
                        <button>X</button>
                    </div>
                </div>
                <div class="flex justify-between">
                    <button class="text-primary font-medium text-sm">Tambahkan Wishlist</button>
                    <div class="flex justify-between p-4 bg-gray-300 rounded-full w-36">
                        <button class="font-bold text-xl">-</button>
                        <span>1</span>
                        <button class="font-bold text-xl">+</button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col p-6 gap-6 bg-white rounded-2xl max-w-[788px] border border-solid border-gray-200">
                <div class="flex justify-between">
                    <div class="flex gap-6">
                        <img class="w-36 h-36 bg-gray-300 rounded-2xl" src="" alt="">
                        <div class="flex flex-col gap-6 justify-start">
                            <span class="font-medium">Cardigan</span>
                            <div class="flex gap-2">
                                <span class="py-2 px-6 bg-gray-200 rounded-full">Hijau</span>
                                <span class="py-2 px-6 bg-gray-200 rounded-full">Hijau</span>
                            </div>
                            <span class="font-bold text-lg">Rp 100.000 <span class="text-xs leading-8">/ item</span></span>
                        </div>
                    </div>
                    <div class="flex items-start justify-end">
                        <button>X</button>
                    </div>
                </div>
                <div class="flex justify-between">
                    <button class="text-primary font-medium text-sm">Tambahkan Wishlist</button>
                    <div class="flex justify-between p-4 bg-gray-300 rounded-full w-36">
                        <button class="font-bold text-xl">-</button>
                        <span>1</span>
                        <button class="font-bold text-xl">+</button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col p-6 gap-6 bg-white rounded-2xl max-w-[788px] border border-solid border-gray-200">
                <div class="flex justify-between">
                    <div class="flex gap-6">
                        <img class="w-36 h-36 bg-gray-300 rounded-2xl" src="" alt="">
                        <div class="flex flex-col gap-6 justify-start">
                            <span class="font-medium">Cardigan</span>
                            <div class="flex gap-2">
                                <span class="py-2 px-6 bg-gray-200 rounded-full">Hijau</span>
                                <span class="py-2 px-6 bg-gray-200 rounded-full">Hijau</span>
                            </div>
                            <span class="font-bold text-lg">Rp 100.000 <span class="text-xs leading-8">/ item</span></span>
                        </div>
                    </div>
                    <div class="flex items-start justify-end">
                        <button>X</button>
                    </div>
                </div>
                <div class="flex justify-between">
                    <button class="text-primary font-medium text-sm">Tambahkan Wishlist</button>
                    <div class="flex justify-between p-4 bg-gray-300 rounded-full w-36">
                        <button class="font-bold text-xl">-</button>
                        <span>1</span>
                        <button class="font-bold text-xl">+</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col h-fit min-w-[420px] bg-white rounded-2xl border border-solid border-gray-200">
            <div class="p-6 flex justify-start border-b border-solid border-gray-200"><span class="font-bold text-xl">Ringkasan Belanja</span></div>
            <div class="flex border-b border-solid border-gray-200 justify-between items-end py-4 px-6">
                <span>Cardigan x3</span>
                <span>Rp 300.000</span>
            </div>
            <div class="flex border-b border-solid border-gray-200 justify-between items-end py-4 px-6">
                <span>Cardigan x3</span>
                <span>Rp 300.000</span>
            </div>
            <div class="flex border-b border-solid border-gray-200 justify-between items-end py-4 px-6">
                <span>Cardigan x3</span>
                <span>Rp 300.000</span>
            </div>
            <div class="flex border-b border-solid border-gray-200 justify-between items-end p-6">
                <span class="font-bold text-lg ">Total Harga</span>
                <span class="font-bold text-lg text-primary">Rp 900.000</span>
            </div>
            <div class="flex border-b border-solid border-gray-200 justify-between items-end p-6">
                <button class="w-full py-4 flex rounded-full font-semibold justify-center bg-primary text-white">Lanjut ke Pembayaran</button>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('index')

@section('page')
<div class="flex justify-center my-10">
    <div class="flex max-w-[1440px] justify-center w-full gap-6">
        <div class="flex flex-col gap-4">
            <div class="flex flex-col p-6 gap-6 bg-white rounded-2xl max-w-[788px] w-full border border-solid border-gray-200">
                <div class="flex gap-80">
                    <div class="flex gap-6">
                        <img class="bg-gray-300 min-w-[144px] w-full h-36 rounded-2xl" src="" alt="">
                        <div class="flex flex-col justify-start gap-6">
                            <span class="font-medium">Cardigan</span>
                            <div class="flex gap-2">
                                <span class="px-6 py-2 bg-gray-200 rounded-full">Hijau</span>
                                <span class="px-6 py-2 bg-gray-200 rounded-full">Hijau</span>
                            </div>
                            <span class="text-lg font-bold">Rp 100.000 <span class="text-xs leading-8">/ item</span></span>
                        </div>
                    </div>
                    <div class="flex items-start justify-end">
                        <button>X</button>
                    </div>
                </div>
                <div class="flex justify-end">
                    <div class="flex justify-between p-4 bg-gray-300 rounded-full w-36">
                        <button class="text-xl font-bold">-</button>
                        <span>1</span>
                        <button class="text-xl font-bold">+</button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col p-6 gap-6 bg-white rounded-2xl max-w-[788px] w-full border border-solid border-gray-200">
                <div class="flex gap-80">
                    <div class="flex gap-6">
                        <img class="bg-gray-300 min-w-[144px] w-full h-36 rounded-2xl" src="" alt="">
                        <div class="flex flex-col justify-start gap-6">
                            <span class="font-medium">Cardigan</span>
                            <div class="flex gap-2">
                                <span class="px-6 py-2 bg-gray-200 rounded-full">Hijau</span>
                                <span class="px-6 py-2 bg-gray-200 rounded-full">Hijau</span>
                            </div>
                            <span class="text-lg font-bold">Rp 100.000 <span class="text-xs leading-8">/ item</span></span>
                        </div>
                    </div>
                    <div class="flex items-start justify-end">
                        <button>X</button>
                    </div>
                </div>
                <div class="flex justify-end">
                    <div class="flex justify-between p-4 bg-gray-300 rounded-full w-36">
                        <button class="text-xl font-bold">-</button>
                        <span>1</span>
                        <button class="text-xl font-bold">+</button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col p-6 gap-6 bg-white rounded-2xl max-w-[788px] w-full border border-solid border-gray-200">
                <div class="flex gap-80">
                    <div class="flex gap-6">
                        <img class="bg-gray-300 min-w-[144px] w-full h-36 rounded-2xl" src="" alt="">
                        <div class="flex flex-col justify-start gap-6">
                            <span class="font-medium">Cardigan</span>
                            <div class="flex gap-2">
                                <span class="px-6 py-2 bg-gray-200 rounded-full">Hijau</span>
                                <span class="px-6 py-2 bg-gray-200 rounded-full">Hijau</span>
                            </div>
                            <span class="text-lg font-bold">Rp 100.000 <span class="text-xs leading-8">/ item</span></span>
                        </div>
                    </div>
                    <div class="flex items-start justify-end">
                        <button>X</button>
                    </div>
                </div>
                <div class="flex justify-end">
                    <div class="flex justify-between p-4 bg-gray-300 rounded-full w-36">
                        <button class="text-xl font-bold">-</button>
                        <span>1</span>
                        <button class="text-xl font-bold">+</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col h-fit max-w-[420px] w-full bg-white rounded-2xl border border-solid border-gray-200">
            <div class="flex justify-start p-6 border-b border-gray-200 border-solid"><span class="text-xl font-bold">Ringkasan Belanja</span></div>
            <div class="flex items-end justify-between px-6 py-4 border-b border-gray-200 border-solid">
                <span>Cardigan x3</span>
                <span>Rp 300.000</span>
            </div>
            <div class="flex items-end justify-between px-6 py-4 border-b border-gray-200 border-solid">
                <span>Cardigan x3</span>
                <span>Rp 300.000</span>
            </div>
            <div class="flex items-end justify-between px-6 py-4 border-b border-gray-200 border-solid">
                <span>Cardigan x3</span>
                <span>Rp 300.000</span>
            </div>
            <div class="flex items-end justify-between p-6 border-b border-gray-200 border-solid">
                <span class="text-lg font-bold ">Total Harga</span>
                <span class="text-lg font-bold text-primary">Rp 900.000</span>
            </div>
            <div class="flex items-end justify-between p-6 border-b border-gray-200 border-solid">
                <button class="flex justify-center w-full py-4 font-semibold text-white rounded-full bg-primary">Lanjut ke Pembayaran</button>
            </div>
        </div>
    </div>
</div>
@endsection
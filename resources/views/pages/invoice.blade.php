@extends('index')

@section('page')
    <div class="flex justify-center py-10">
        <div class="flex w-[1440px] flex-col gap-4">
            <div class="flex flex-col rounded-2xl bg-white">
                <div class="flex items-center justify-between border-b border-solid border-gray-200 p-6">
                    <span class="text-xl font-bold">Invoice</span>
                    <span class="font-medium text-gray-400">INV/20230725/MPL/3364453394</span>
                </div>
                <div class="flex flex-col">
                    <div class="flex justify-between px-6 py-4">
                        <span class="text-gray-400">Cardigan x3</span>
                        <span class="text-gray-400">Rp 300.000</span>
                    </div>
                    <div class="flex justify-between px-6 py-4">
                        <span class="text-gray-400">Cardigan x3</span>
                        <span class="text-gray-400">Rp 300.000</span>
                    </div>
                    <div class="flex justify-between px-6 py-4">
                        <span class="text-gray-400">Cardigan x3</span>
                        <span class="text-gray-400">Rp 300.000</span>
                    </div>
                </div>
                <div class="flex items-center justify-between border-t border-solid border-red-500 p-6">
                    <span class="text-lg font-bold">Total Harga</span>
                    <span class="text-lg font-bold text-primary">Rp 900.000</span>
                </div>
            </div>
            <div class="flex items-center justify-between rounded-2xl bg-white p-6">
                <div class="flex gap-6">
                    <img class="h-36 w-36 rounded-2xl bg-gray-300" src="" alt="">
                    <div class="flex flex-col justify-between gap-2">
                        <span class="font-medium">Cardigan</span>
                        <span class="flex items-center justify-center rounded-full bg-gray-200 px-6 py-2">Large</span>
                        <span class="text-gray-400">3 x Rp 100.000</span>
                    </div>
                </div>
                <div class="flex flex-col gap-1">
                    <span>Total Harga</span>
                    <span class="text-lg font-bold">Rp 300.00</span>
                </div>
            </div>
            <div class="flex items-center justify-between rounded-2xl bg-white p-6">
                <div class="flex gap-6">
                    <img class="h-36 w-36 rounded-2xl bg-gray-300" src="" alt="">
                    <div class="flex flex-col justify-between gap-2">
                        <span class="font-medium">Cardigan</span>
                        <span class="flex items-center justify-center rounded-full bg-gray-200 px-6 py-2">Large</span>
                        <span class="text-gray-400">3 x Rp 100.000</span>
                    </div>
                </div>
                <div class="flex flex-col gap-1">
                    <span>Total Harga</span>
                    <span class="text-lg font-bold">Rp 300.00</span>
                </div>
            </div>
            <div class="flex items-center justify-between rounded-2xl bg-white p-6">
                <div class="flex gap-6">
                    <img class="h-36 w-36 rounded-2xl bg-gray-300" src="" alt="">
                    <div class="flex flex-col justify-between gap-2">
                        <span class="font-medium">Cardigan</span>
                        <span class="flex items-center justify-center rounded-full bg-gray-200 px-6 py-2">Large</span>
                        <span class="text-gray-400">3 x Rp 100.000</span>
                    </div>
                </div>
                <div class="flex flex-col gap-1">
                    <span>Total Harga</span>
                    <span class="text-lg font-bold">Rp 300.00</span>
                </div>
            </div>
        </div>
    </div>
@endsection

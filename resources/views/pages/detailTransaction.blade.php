@extends('index')

@section('page')
@include('partial.navbar')
<div class="flex justify-center py-10">
    <div class="flex flex-col gap-4 w-[1440px]">
        <div class="flex flex-col bg-white rounded-2xl">
            <div class="flex items-center justify-between p-6 border-b border-gray-200 border-solid">
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
            <div class="flex items-center justify-between p-6 border-t border-gray-200 border-solid">
                <span class="text-lg font-bold">Total Harga</span>
                <span class="text-lg font-bold text-primary">Rp 900.000</span>
            </div>
        </div>
        <div class="flex items-center justify-between p-6 bg-white rounded-2xl">
            <div class="flex gap-6">
                <img class="bg-gray-300 w-36 h-36 rounded-2xl" src="" alt="">
                <div class="flex flex-col justify-between gap-2">
                    <span class="font-medium">Cardigan</span>
                    <span class="flex items-center justify-center px-6 py-2 bg-gray-200 rounded-full">Large</span>
                    <span class="text-gray-400">3 x Rp 100.000</span>
                </div>
            </div>
            <div class="flex flex-col gap-1">
                <span>Total Harga</span>
                <span class="text-lg font-bold">Rp 300.00</span>
            </div>
        </div>
        <div class="flex items-center justify-between p-6 bg-white rounded-2xl">
            <div class="flex gap-6">
                <img class="bg-gray-300 w-36 h-36 rounded-2xl" src="" alt="">
                <div class="flex flex-col justify-between gap-2">
                    <span class="font-medium">Cardigan</span>
                    <span class="flex items-center justify-center px-6 py-2 bg-gray-200 rounded-full">Large</span>
                    <span class="text-gray-400">3 x Rp 100.000</span>
                </div>
            </div>
            <div class="flex flex-col gap-1">
                <span>Total Harga</span>
                <span class="text-lg font-bold">Rp 300.00</span>
            </div>
        </div>
        <div class="flex items-center justify-between p-6 bg-white rounded-2xl">
            <div class="flex gap-6">
                <img class="bg-gray-300 w-36 h-36 rounded-2xl" src="" alt="">
                <div class="flex flex-col justify-between gap-2">
                    <span class="font-medium">Cardigan</span>
                    <span class="flex items-center justify-center px-6 py-2 bg-gray-200 rounded-full">Large</span>
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
@extends('index')

@section('page')
<div class="flex gap-2 ">
    <x-layout.sidebar/>
        <div class="flex justify-center max-w-[1440px] w-full p-10">
                <div class="flex flex-col w-full gap-6">
                    <div class="flex justify-start w-full gap-2">
                        <span class="font-semibold"><a href="/demodashboard/pesanan" class="text-black">Pesanan</a></span>
                        <span>•</span>
                        <span aria-current="page" class="text-gray-500 active:font-semibold">Detail Pesanan</span>
                    </div>
                    <h2>Rincian Pesanan</h2>
                    <div class="flex flex-col w-full gap-4 p-6 bg-white border border-gray-200 border-solid rounded-lg">                        
                        <div class="flex gap-6">
                            <div class="flex items-center justify-start w-1/2 gap-2">
                                <span class="font-medium w-36">Nama Pembeli:</span>
                                <span>John Doe</span>
                            </div>
                            <a href="" class="flex justify-end w-1/2 font-semibold text-primary">Hubungi Pemebeli</a>
                        </div>
                        <div class="flex gap-6">
                            <div class="flex items-center justify-start w-1/2 gap-2">
                                <span class="font-medium w-36">Status Pesanan:</span>
                                <span class="font-bold">Butuh Diproses</span>
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="flex items-center justify-start w-1/2 gap-2">
                                <span class="font-medium w-36">Nomor Pesanan:</span>
                                <span>INV/20230725/MPL/3364453394</span>
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="flex items-center justify-start w-1/2 gap-2">
                                <span class="font-medium w-36">Tanggal Pesanan:</span>
                                <span>25 Juli 2023, 17:24 WIB</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col w-full pb-6 bg-white border border-gray-200 border-solid rounded-lg">
                        <span class="flex justify-start p-6 text-lg font-bold bg-white rounded-t-lg">Informasi Pesanan</span>
                        <div class="flex flex-col gap-6 px-6">
                            <div class="flex w-full gap-6 p-6 bg-white border border-gray-200 border-solid product-card rounded-2xl">
                                <div class="flex justify-between w-full">
                                    <div class="flex gap-6">
                                        <img class="h-36 w-full min-w-[144px] rounded-2xl bg-gray-300" src="" alt="">
                                        <div class="flex flex-col justify-start gap-6">
                                            <div class="flex gap-2">
                                                <span class="font-medium">Cardigan</span>                                            </div>
                                            <div class="flex gap-2">
                                                <span class="px-6 py-2 bg-gray-200 rounded-full">Large</span>
                                                <span class="px-6 py-2 bg-gray-200 rounded-full">red</span>
                                            </div>
                                            <span class="text-gray-400">2 x<span class="text-gray-400">Rp 100.000</span></span>
                                        </div>
                                    </div>
                                    <div class="flex flex-col justify-between">
                                        <div class="flex justify-end font-semibold text-primary">Lihat Produk</div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex w-full gap-6 p-6 bg-white border border-gray-200 border-solid product-card rounded-2xl">
                                <div class="flex justify-between w-full">
                                    <div class="flex gap-6">
                                        <img class="h-36 w-full min-w-[144px] rounded-2xl bg-gray-300" src="" alt="">
                                        <div class="flex flex-col justify-start gap-6">
                                            <div class="flex gap-2">
                                                <span class="font-medium">Cardigan</span>                                            
                                            </div>
                                            <div class="flex gap-2">
                                                <span class="px-6 py-2 bg-gray-200 rounded-full">Large</span>
                                                <span class="px-6 py-2 bg-gray-200 rounded-full">red</span>
                                            </div>
                                            <span class="text-gray-400">2 x<span class="text-gray-400">Rp 100.000</span></span>
                                        </div>
                                    </div>
                                    <div class="flex flex-col justify-between">
                                        <div class="flex justify-end font-semibold text-primary">Lihat Produk</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col bg-white rounded-2xl">
                        <div class="flex items-center justify-between p-6 border-b border-gray-100 border-solid">
                            <span class="text-xl font-bold">Detail Transaksi</span>
                        </div>
                        <div class="flex flex-col">
                                <div class="flex justify-between px-6 py-4">
                                    <div class='flex gap-2'>
                                        Cardigan
                                        <span class="flex items-center justify-center w-6 h-6 text-xs text-white rounded-full bg-primary">x 3</span>
                                    </div>
                                    <span class="text-gray-400">Rp 300.000</span>
                                </div>
                                <div class="flex justify-between px-6 py-4">
                                    <div class='flex gap-2'>
                                        Cardigan
                                        <span class="flex items-center justify-center w-6 h-6 text-xs text-white rounded-full bg-primary">x 3</span>
                                    </div>
                                    <span class="text-gray-400">Rp 300.000</span>
                                </div>
                        </div>
                        <div class="flex items-center justify-between p-6 border-t border-gray-100 border-solid">
                            <span class="text-lg font-bold">Total Harga</span>
                            <span class="text-lg font-bold text-primary">Rp 300.000</span>
                        </div>
                    </div>
                </div>
        </div>
</div>
@endsection

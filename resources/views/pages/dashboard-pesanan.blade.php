@extends('index')

@section('page')
<div class="flex gap-2 ">
    <x-layout.sidebar/>
        <div class="flex justify-center max-w-[1440px] w-full p-10">
            <div class="flex flex-col w-full gap-6">
                <h2>Pesanan</h2>
                <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                        <div class='flex items-center gap-6 min-h-[64px]'>
                          <div class='flex w-full h-full min-h-[64px]'>
                            <a href="#" class='flex flex-col items-center justify-center w-full font-bold border-b-4 border-solid rounded-bl-lg border-primary g-4'>Perlu Diproses</a>
                            <a href="#" class='flex flex-col items-center justify-center w-full font-bold g-4'>Sedang Berlangsung</a>
                            <a href="#" class='flex flex-col items-center justify-center w-full font-bold g-4'>Selesai</a>
                            <a href="#" class='flex flex-col items-center justify-center w-full font-bold g-4'>Dibatalkan</a>
                          </div>
                        </div>
                </div>
                    <div class='flex flex-col w-full gap-6 p-6 bg-white border border-gray-100 border-solid rounded-2xl'>
                        <div class='flex items-center justify-between'>
                            <div class='flex items-center gap-6'>
                                <span class='text-base font-medium'>25 Juli 2023, 17:24 WIB</span>
                                <span class="px-4 py-1 leading-8 text-orange-500 bg-orange-100 rounded-full">Butuh Diproses</span>
                            </div>
                            <a href="/demodashboard/pesanan/detail" class='text-base font-semibold text-primary'>Detail Transaksi</a>
                        </div>
                            <div class='flex justify-start gap-6'>
                                <img src="" alt="" class='bg-gray-200 h-36 w-36 rounded-2xl'>
                                <div class='flex flex-col justify-between'>
                                    <div class='flex gap-2'>
                                        Cardigan
                                        <span class="flex items-center justify-center w-6 h-6 text-xs text-white rounded-full bg-primary">2</span>
                                    </div>
                                    <div class='flex items-center justify-center px-6 py-2 bg-gray-200 rounded-full'><span class='text-black opacity-60'>Large</span>
                                    </div>
                                    <span class='text-lg font-bold'>Rp 100.000 x 2</span>
                                </div>
                            </div>
    
                        <div class='flex justify-between py-4'>
                            <span class='text-lg font-bold'>Total Pesanan</span>
                            <span class='text-lg font-bold text-primary'>Rp. 200.000</span>
                        </div>
                        <div class='flex justify-end py-4'>
                            <form action="" class="flex flex-col justify-end">
                                <div class="flex gap-2">                                    
                                    <button onclick="" class="flex items-center justify-center gap-2 px-6 py-2 text-sm font-medium text-white rounded-full cursor-pointer bg-primary">
                                        Lihat Bukti
                                        <x-icons.paper />
                                    </button>
                                    <button type="submit" class="flex items-center justify-center gap-2 px-6 py-2 text-sm font-medium text-white rounded-full cursor-pointer bg-primary">
                                        Pesanan Selesai
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class='flex flex-col w-full gap-6 p-6 bg-white border border-gray-100 border-solid rounded-2xl'>
                        <div class='flex items-center justify-between'>
                            <div class='flex items-center gap-6'>
                                <span class='text-base font-medium'>25 Juli 2023, 17:24 WIB</span>
                                <span class="px-4 py-1 leading-8 text-orange-500 bg-orange-100 rounded-full">Butuh Diproses</span>
                            </div>
                            <a href="/demodashboard/pesanan/detail" class='text-base font-semibold text-primary'>Detail Transaksi</a>
                        </div>
                            <div class='flex justify-start gap-6'>
                                <img src="" alt="" class='bg-gray-200 h-36 w-36 rounded-2xl'>
                                <div class='flex flex-col justify-between'>
                                    <div class='flex gap-2'>
                                        Cardigan
                                        <span class="flex items-center justify-center w-6 h-6 text-xs text-white rounded-full bg-primary">2</span>
                                    </div>
                                    <div class='flex items-center justify-center px-6 py-2 bg-gray-200 rounded-full'><span class='text-black opacity-60'>Large</span>
                                    </div>
                                    <span class='text-lg font-bold'>Rp 100.000 x 2</span>
                                </div>
                            </div>
    
                        <div class='flex justify-between py-4'>
                            <span class='text-lg font-bold'>Total Pesanan</span>
                            <span class='text-lg font-bold text-primary'>Rp. 200.000</span>
                        </div>
                        <div class='flex justify-end py-4'>
                            <form action="" class="flex flex-col justify-end">
                                <div class="flex gap-2">                                    
                                    <button onclick="" class="flex items-center justify-center gap-2 px-6 py-2 text-sm font-medium text-white rounded-full cursor-pointer bg-primary">
                                        Lihat Bukti
                                        <x-icons.paper />
                                    </button>
                                    <button type="submit" class="flex items-center justify-center gap-2 px-6 py-2 text-sm font-medium text-white rounded-full cursor-pointer bg-primary">
                                        Pesanan Selesai
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
        </div>
</div>
@endsection

@extends('index')

@section('page')
    <div class="flex justify-center my-10">
        <div class="flex max-w-[1440px] flex-col gap-10">
            <div class="flex gap-6">
                <img class="max-w-[396px] bg-gray-300 max-h-[396px] rounded-2xl" src="" alt="">
                <div class="flex flex-col max-w-[482px] gap-6 p-6 bg-white rounded-2xl">
                    <div class="flex flex-col gap-4">
                        <span class="text-4xl font-bold text-black">Cardigan</span>
                        <span class="text-2xl font-bold text-primary">Rp 100.000</span>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex justify-between py-2 border-b border-dashed">
                            <span>Warna</span>
                            <span>hijau</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-dashed">
                            <span>Warna</span>
                            <span>hijau</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-dashed">
                            <span>Warna</span>
                            <span>hijau</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-dashed">
                            <span>Warna</span>
                            <span>hijau</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-dashed">
                            <span>Kategori</span>
                            <span class="font-semibold text-primary">Outwear</span>
                        </div>
                    </div>
                </div>
                <div class="max-w-[306px] h-fit flex flex-col p-6 bg-white rounded-2xl gap-6">
                    <span class="flex justify-start text-xl font-bold">Subtotal</span>
                    <div class="flex flex-col gap-8">
                        <div class="flex items-center gap-4">
                            <div class="flex justify-between p-4 bg-gray-300 rounded-full w-36">
                                <button>-</button>
                                <span>1</span>
                                <button>+</button>
                            </div>
                            <span>Stok: <span class="font-bold">Sisa 9</span></span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-300">Sub Total</span>
                            <span class="text-xl font-bold text-primary">Rp 100.00</span>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <button class="px-16 py-4 font-medium text-white rounded-full bg-primary">+ Keranjang</button>
                        <button class="px-16 py-4 font-medium bg-white border border-solid rounded-full text-primary border-primary">Beli Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    {{-- <div class="w-full">
        <div class="flex justify-start w-full gap-2">
                <span class=""><a href="{{ route('home') }}" class="text-black">Home</a></span>
                <span aria-current="page" class="text-gray-500">Product Detail</span>
        </div>
    </div> --}}
    
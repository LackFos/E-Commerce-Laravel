@extends('index')

@section('page')
<div class="flex gap-2 ">
    <x-layout.sidebar/>
        <div class="flex justify-center max-w-[1440px] w-full p-10">
                <div class="flex flex-col w-full gap-6">
                    <h2>Edit Produk</h2>
                    <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                        <span class="flex justify-start p-6 text-lg font-bold bg-white border-b rounded-t-lg border-gray-200 border-solid">Detail Barang</span>
                        <div class="flex gap-6 px-6 py-4">
                            <span class="flex items-center justify-start w-1/2 font-medium">Nama Barang</span>
                            <input class="w-1/2 px-4 py-1 border border-gray-200 border-solid rounded-lg" type="text" name="" id="">
                        </div>
                        <div class="flex gap-6 px-6 py-4">
                            <span class="flex items-center justify-start w-1/2 font-medium">Harga Barang</span>
                            <div class="relative w-1/2">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-2 text-gray-600">Rp.</span>
                                <input type="text" class="pl-8 px-4 py-1 border w-full border-gray-200 border-solid rounded-lg" name="rupiahInput" id="rupiahInput">
                              </div>                         </div>
                        <div class="flex gap-6 px-6 py-4">
                            <span class="flex items-center justify-start w-1/2 font-medium">Warna</span>
                            <input class="w-1/2 px-4 py-1 border border-gray-200 border-solid rounded-lg" type="text" name="" id="">
                        </div>
                        <div class="flex gap-6 px-6 py-4">
                            <span class="flex items-center justify-start w-1/2 font-medium">Ukuran</span>
                            <input class="w-1/2 px-4 py-1 border border-gray-200 border-solid rounded-lg" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col gap-4 pt-4 px-6 py-6 justify-start">
                            <span class="font-medium leading-8">Foto Produk</span>
                            <img class="w-20 h-20 rounded-2xl bg-gray-300" src="" alt="">
                        </div>
                    </div>
                    <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                        <span class="flex justify-start p-6 text-lg font-bold bg-white border-b rounded-t-lg border-gray-200 border-solid">Kategori</span>
                        <div class="flex gap-6 w-full px-6 py-4">
                            <div class=" flex justify-between w-1/2">
                                <span class="flex items-center justify-start w-full font-medium">Nama Barang</span>
                                <input class="w-full px-4 py-1 border border-gray-200 border-solid rounded-lg" type="checkbox" name="" id="">
                            </div>
                            <div class=" flex justify-between w-1/2">
                                <span class="flex items-center justify-start w-full font-medium">Nama Barang</span>
                                <input class="w-full px-4 py-1 border border-gray-200 border-solid rounded-lg" type="checkbox" name="" id="">
                            </div>
                        </div>
                        <div class="flex gap-6 w-full px-6 py-4">
                            <div class=" flex justify-between w-1/2">
                                <span class="flex items-center justify-start w-full font-medium">Nama Barang</span>
                                <input class="w-full px-4 py-1 border border-gray-200 border-solid rounded-lg" type="checkbox" name="" id="">
                            </div>
                            <div class=" flex justify-between w-1/2">
                                <span class="flex items-center justify-start w-full font-medium">Nama Barang</span>
                                <input class="w-full px-4 py-1 border border-gray-200 border-solid rounded-lg" type="checkbox" name="" id="">
                            </div>
                        </div>
                        <div class="flex gap-6 w-full px-6 py-4">
                            <div class=" flex justify-between w-1/2">
                                <span class="flex items-center justify-start w-full font-medium">Nama Barang</span>
                                <input class="w-full px-4 py-1 border border-gray-200 border-solid rounded-lg" type="checkbox" name="" id="">
                            </div>
                            <div class=" flex justify-between w-1/2">
                                <span class="flex items-center justify-start w-full font-medium">Nama Barang</span>
                                <input class="w-full px-4 py-1 border border-gray-200 border-solid rounded-lg" type="checkbox" name="" id="">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                        <span class="flex justify-start p-6 text-lg font-bold bg-white border-b rounded-t-lg border-gray-200 border-solid">Deskripsi Barang</span>
                        <div class="flex gap-6 w-full px-6 py-6">
                            <input type="text" class="w-full h-full border border-solid border-gray-200 rounded-lg py-2 px-4">
                        </div>
                    </div>
                    <button class="flex flex-col w-full text-white bg-primary rounded-lg py-2 px-6 font-semibold leading-8">Simpan</button>
                </div>
        </div>
</div>
@endsection

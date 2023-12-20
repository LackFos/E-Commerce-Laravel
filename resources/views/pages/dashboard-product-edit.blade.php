@extends('index')

@section('page')
<div class="flex gap-2 ">
    <x-layout.sidebar/>
        <div class="flex justify-center max-w-[1440px] w-full p-10">
                <form class="flex flex-col w-full gap-6">
                    <div class="flex justify-start w-full gap-2">
                        <span class="font-semibold"><a href="/demodashboard/product" class="text-black">Produk</a></span>
                        <span>•</span>
                        <span aria-current="page" class="text-gray-500 active:font-semibold">Edit Produk</span>
                    </div>
                    <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                        <span class="flex justify-start p-6 text-lg font-bold bg-white border-b border-gray-200 border-solid rounded-t-lg">Detail Barang</span>
                        <div class="flex gap-6 px-6 py-4">
                            <span class="flex items-center justify-start w-1/2 font-medium">Nama Barang</span>
                            <input class="w-1/2 px-4 py-1 border border-gray-200 border-solid rounded-lg" type="text" name="" id="">
                        </div>
                        <div class="flex gap-6 px-6 py-4">
                            <span class="flex items-center justify-start w-1/2 font-medium">Harga Barang</span>
                            <div class="relative w-1/2">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-2 text-gray-600">Rp.</span>
                                <input type="text" class="w-full px-4 py-1 pl-8 border border-gray-200 border-solid rounded-lg" name="rupiahInput" id="rupiahInput">
                              </div>                         </div>
                        <div class="flex gap-6 px-6 py-4">
                            <span class="flex items-center justify-start w-1/2 font-medium">Warna</span>
                            <input class="w-1/2 px-4 py-1 border border-gray-200 border-solid rounded-lg" type="text" name="" id="">
                        </div>
                        <div class="flex gap-6 px-6 py-4">
                            <span class="flex items-center justify-start w-1/2 font-medium">Ukuran</span>
                            <input class="w-1/2 px-4 py-1 border border-gray-200 border-solid rounded-lg" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col justify-start gap-4 px-6 py-6 pt-4">
                            <span class="font-medium leading-8">Foto Produk</span>
                            <img class="w-20 h-20 bg-gray-300 rounded-2xl" src="" alt="">
                        </div>
                    </div>
                    <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                        <span class="flex justify-start p-6 text-lg font-bold bg-white border-b border-gray-200 border-solid rounded-t-lg">Kategori</span>
                        <div class="flex w-full gap-6 px-6 py-4">
                            <div class="flex justify-between w-1/2 ">
                                <input type="checkbox" id="outOfStock" name="product" class="hidden">
                                <label for="outOfStock" class="relative flex items-center justify-between w-full font-medium cursor-pointer">
                                     Tampilkan Produk Habis
                                     <div class="flex justify-center w-1/2">
                                        <div class="flex items-center justify-center w-6 h-6 bg-white border border-gray-300 rounded-md">
                                           <span class="absolute text-white transition-opacity" id="checkIcon">✓</span>
                                        </div>
                                     </div>
                                </label> 
                            </div>
                            <div class="flex justify-between w-1/2 ">
                                <input type="checkbox" id="outOfStock" name="product" class="hidden">
                                <label for="outOfStock" class="relative flex items-center justify-between w-full font-medium cursor-pointer">
                                     Tampilkan Produk Habis
                                     <div class="flex justify-center w-1/2">
                                        <div class="flex items-center justify-center w-6 h-6 bg-white border border-gray-300 rounded-md">
                                           <span class="absolute text-white transition-opacity" id="checkIcon">✓</span>
                                        </div>
                                     </div>
                                </label> 
                            </div>
                        </div>
                        <div class="flex w-full gap-6 px-6 py-4">
                            <div class="flex justify-between w-1/2 ">
                                <input type="checkbox" id="outOfStock" name="product" class="hidden">
                                <label for="outOfStock" class="relative flex items-center justify-between w-full font-medium cursor-pointer">
                                     Tampilkan Produk Habis
                                     <div class="flex justify-center w-1/2">
                                        <div class="flex items-center justify-center w-6 h-6 bg-white border border-gray-300 rounded-md">
                                           <span class="absolute text-white transition-opacity" id="checkIcon">✓</span>
                                        </div>
                                     </div>
                                </label> 
                            </div>
                            <div class="flex justify-between w-1/2 ">
                                <input type="checkbox" id="outOfStock" name="product" class="hidden">
                                <label for="outOfStock" class="relative flex items-center justify-between w-full font-medium cursor-pointer">
                                     Tampilkan Produk Habis
                                     <div class="flex justify-center w-1/2">
                                        <div class="flex items-center justify-center w-6 h-6 bg-white border border-gray-300 rounded-md">
                                           <span class="absolute text-white transition-opacity" id="checkIcon">✓</span>
                                        </div>
                                     </div>
                                </label> 
                            </div>
                        </div>
                        <div class="flex w-full gap-6 px-6 py-4">
                            <div class="flex justify-between w-1/2 ">
                                <input type="checkbox" id="outOfStock" name="product" class="hidden">
                                <label for="outOfStock" class="relative flex items-center justify-between w-full font-medium cursor-pointer">
                                     Tampilkan Produk Habis
                                     <div class="flex justify-center w-1/2">
                                        <div class="flex items-center justify-center w-6 h-6 bg-white border border-gray-300 rounded-md">
                                           <span class="absolute text-white transition-opacity" id="checkIcon">✓</span>
                                        </div>
                                     </div>
                                </label> 
                            </div>
                            <div class="flex justify-between w-1/2 ">
                                <input type="checkbox" id="outOfStock" name="product" class="hidden">
                                <label for="outOfStock" class="relative flex items-center justify-between w-full font-medium cursor-pointer">
                                     Tampilkan Produk Habis
                                     <div class="flex justify-center w-1/2">
                                        <div class="flex items-center justify-center w-6 h-6 bg-white border border-gray-300 rounded-md">
                                           <span class="absolute text-white transition-opacity" id="checkIcon">✓</span>
                                        </div>
                                     </div>
                                </label> 
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                        <span class="flex justify-start p-6 text-lg font-bold bg-white border-b border-gray-200 border-solid rounded-t-lg">Deskripsi Barang</span>
                        <div class="flex w-full gap-6 px-6 py-6">
                            <input type="text" class="w-full h-full px-4 py-2 border border-gray-200 border-solid rounded-lg">
                        </div>
                    </div>
                    <button class="flex flex-col w-full px-6 py-2 font-semibold leading-8 text-white rounded-lg bg-primary">Simpan</button>
                </form>
        </div>
</div>
@endsection

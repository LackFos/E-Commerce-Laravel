@extends('index')

@section('page')
    <div class="flex gap-2">
        <div class="flex w-full max-w-[1440px] justify-center">
            <x-layout.sidebar />
            <form class="flex flex-col w-full gap-6 p-10">
                <div class="flex justify-start w-full gap-2">
                    <span class="font-semibold"><a href="/demodashboard/product" class="text-black">Produk</a></span>
                    <span>•</span>
                    <span aria-current="page" class="text-gray-500 active:font-semibold">Tambah Kategori</span>
                </div>
                <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                    <span class="flex justify-start p-6 text-lg font-bold bg-white border-b border-gray-200 border-solid rounded-t-lg">Kategori</span>
                    <div class="flex gap-6 px-6 py-4">
                        <div class="flex flex-col justify-start w-1/2 gap-1">
                            <span class="flex font-medium">Nama Kategori</span>
                        </div>
                        <input class="w-1/2 px-4 py-1 border border-gray-200 border-solid rounded-lg" type="text" name="" id="">
                    </div>
                    <div class="px-6 py-4">
                        <button type="submit" class="flex flex-col w-full px-6 py-2 font-semibold leading-8 text-white rounded-lg bg-primary">Simpan</button>
                    </div>
                </div>
                    <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                        <span class="flex justify-start p-6 text-lg font-bold bg-white border-b border-gray-200 border-solid rounded-t-lg"> Hapus Kategori</span>
                        <div class="flex flex-col w-full gap-6 px-6 py-4">
                            <div class="flex justify-between w-full ">
                                <span for="outOfStock" class="relative flex items-center justify-between w-full font-medium cursor-pointer">Tampilkan Produk Habis</span> 
                                <div class="flex justify-center w-1/2 gap-2">
                                    <button class="px-2 py-2 text-white rounded-lg bg-primary"><x-icons.trash/></button>
                                </div>
                            </div>
                            <div class="flex justify-between w-full ">
                                <span for="outOfStock" class="relative flex items-center justify-between w-full font-medium cursor-pointer">Tampilkan Produk Habis</span> 
                                <div class="flex justify-center w-1/2 gap-2">
                                    <button class="px-2 py-2 text-white rounded-lg bg-primary"><x-icons.trash/></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

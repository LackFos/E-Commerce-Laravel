@extends('index')

@section('page')
<div class="flex gap-2 ">
    <x-layout.sidebar/>
        <div class="flex justify-center max-w-[1440px] w-full p-10">
                <form class="flex flex-col w-full gap-6">
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
                    </div>
                    <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                        <span class="flex justify-start p-6 text-lg font-bold bg-white border-b border-gray-200 border-solid rounded-t-lg">Kategori</span>
                        <div class="flex w-full gap-6 px-6 py-4">
                            <div class="flex justify-between w-1/2 ">
                                <span class="flex items-center justify-start w-full font-medium">Nama Kategori</span>
                                <input class="w-full px-4 py-1 border border-gray-200 border-solid rounded-lg" type="checkbox" name="" id="">
                            </div>
                            <div class="flex justify-between w-1/2 ">
                                <span class="flex items-center justify-start w-full font-medium">Nama Kategori</span>
                                <input class="w-full px-4 py-1 border border-gray-200 border-solid rounded-lg" type="checkbox" name="" id="">
                            </div>
                        </div>
                        <div class="flex w-full gap-6 px-6 py-4">
                            <div class="flex justify-between w-1/2 ">
                                <span class="flex items-center justify-start w-full font-medium">Nama Kategori</span>
                                <input class="w-full px-4 py-1 border border-gray-200 border-solid rounded-lg" type="checkbox" name="" id="">
                            </div>
                            <div class="flex justify-between w-1/2 ">
                                <span class="flex items-center justify-start w-full font-medium">Nama Kategori</span>
                                <input class="w-full px-4 py-1 border border-gray-200 border-solid rounded-lg" type="checkbox" name="" id="">
                            </div>
                        </div>
                        <div class="flex w-full gap-6 px-6 py-4">
                            <div class="flex justify-between w-1/2 ">
                                <span class="flex items-center justify-start w-full font-medium">Nama Kategori</span>
                                <input class="w-full px-4 py-1 border border-gray-200 border-solid rounded-lg" type="checkbox" name="" id="">
                            </div>
                            <div class="flex justify-between w-1/2 ">
                                <span class="flex items-center justify-start w-full font-medium">Nama Kategori</span>
                                <input class="w-full px-4 py-1 border border-gray-200 border-solid rounded-lg" type="checkbox" name="" id="">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="flex flex-col w-full px-6 py-2 font-semibold leading-8 text-white rounded-lg bg-primary">Simpan</button>
                </form>
        </div>
</div>
@endsection

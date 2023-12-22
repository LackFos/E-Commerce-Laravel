@extends('index')

@section('page')
    <div class="flex gap-2">
        <x-layout.sidebar />
        <div class="flex w-full max-w-[1440px] justify-center p-10">
            <form class="flex w-full flex-col gap-6">
                <div class="flex w-full justify-start gap-2">
                    <span class="font-semibold"><a href="/demodashboard/product" class="text-black">Produk</a></span>
                    <span>•</span>
                    <span aria-current="page" class="text-gray-500 active:font-semibold">Tambah Kategori</span>
                </div>
                <div class="flex w-full flex-col rounded-lg border border-solid border-gray-200 bg-white">
                    <span class="flex justify-start rounded-t-lg border-b border-solid border-gray-200 bg-white p-6 text-lg font-bold">Kategori</span>
                    <div class="flex gap-6 px-6 py-4">
                        <div class="flex w-1/2 flex-col justify-start gap-1">
                            <span class="flex font-medium">Nama Kategori</span>
                        </div>
                        <input class="w-1/2 rounded-lg border border-solid border-gray-200 px-4 py-1" type="text" name="" id="">
                    </div>
                    <div class="px-6 py-4">
                        <button type="submit" class="flex w-full flex-col rounded-lg bg-primary px-6 py-2 font-semibold leading-8 text-white">Simpan</button>
                    </div>
                </div>
                <div class="flex w-full flex-col rounded-lg border border-solid border-gray-200 bg-white">
                    <span class="flex justify-start rounded-t-lg border-b border-solid border-gray-200 bg-white p-6 text-lg font-bold"> Hapus Kategori</span>
                    <div class="flex w-full flex-col gap-6 px-6 py-4">
                        <div class="flex w-full justify-between">
                            <span for="outOfStock" class="relative flex w-full cursor-pointer items-center justify-between font-medium">Tampilkan Produk Habis</span>
                            <div class="flex w-1/2 justify-center gap-2">
                                <button class="rounded-lg bg-primary px-4 py-2 text-white">dfd</button>
                            </div>
                        </div>
                        <div class="flex w-full justify-between">
                            <span for="outOfStock" class="relative flex w-full cursor-pointer items-center justify-between font-medium">Tampilkan Produk Habis</span>
                            <div class="flex w-1/2 justify-center gap-2">
                                <button class="rounded-lg bg-primary px-4 py-2 text-white">dfd</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

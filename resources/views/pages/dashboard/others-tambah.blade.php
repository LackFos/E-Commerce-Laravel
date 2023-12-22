@extends('index')

@section('page')
    <div class="flex gap-2">
        <x-layout.sidebar />
        <div class="flex w-full max-w-[1440px] justify-center p-10">
            <form class="flex flex-col w-full gap-6">
                <div class="flex justify-start w-full gap-2">
                    <span class="font-semibold"><a href="/dashboard/others" class="text-black">Rekening</a></span>
                    <span>•</span>
                    <span aria-current="page" class="text-gray-500 active:font-semibold">Tambah Rekening</span>
                </div>
                <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                    <span class="flex justify-start p-6 text-lg font-bold bg-white border-b border-gray-200 border-solid rounded-t-lg">Tambah Rekening</span>
                    <div class="flex gap-6 px-6 py-2">
                        <div class="flex flex-col justify-start w-1/2 gap-1">
                            <span class="flex font-medium">Nama Penerima:</span>
                        </div>
                        <input placeholder="Masukan Nama Penerima" class="w-1/2 px-4 py-1 border border-gray-200 border-solid rounded-lg" type="text" name="" id="">
                    </div>
                    <div class="flex gap-6 px-6 py-2">
                        <div class="flex flex-col justify-start w-1/2 gap-1">
                            <span class="font-medium leading-8">Nama Bank:</span>
                        </div>
                        <input placeholder="Masukan Nama Bank" class="w-1/2 px-4 py-1 border border-gray-200 border-solid rounded-lg" type="text" name="" id="">
                    </div>
                    <div class="flex gap-6 px-6 py-2">
                        <div class="flex flex-col justify-start w-1/2 gap-1">
                            <span class="font-medium leading-8">No Rekening:</span>
                        </div>
                        <input placeholder="Masukan No Rekening" class="w-1/2 px-4 py-1 border border-gray-200 border-solid rounded-lg" type="number" name="" id="">
                    </div>
                </div>
                <button type="submit" class="w-full px-6 py-2 font-semibold leading-8 text-center text-white rounded-lg bg-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection

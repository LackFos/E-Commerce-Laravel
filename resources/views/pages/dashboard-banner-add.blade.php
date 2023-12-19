@extends('index')

@section('page')
<div class="flex gap-2 ">
    <x-layout.sidebar/>
        <div class="flex justify-center max-w-[1440px] w-full p-10">
                <form class="flex flex-col w-full gap-6">
                    <div class="flex justify-start w-full gap-2">
                        <span class="font-semibold"><a href="/demodashboard/banner" class="text-black">Banner</a></span>
                        <span>•</span>
                        <span aria-current="page" class="text-gray-500 active:font-semibold">Tambah Banner</span>
                    </div>
                    <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                        <span class="flex justify-start p-6 text-lg font-bold bg-white border-b border-gray-200 border-solid rounded-t-lg">Tambah Banner</span>
                        <div class="flex gap-6 px-6 py-4">
                            <div class="flex flex-col justify-start w-1/2 gap-1">
                                <span class="flex font-medium">Nama Banner</span>
                                <span class="text-sm text-gray-400">Tulis Nama Banner</span>
                            </div>
                            <input class="w-1/2 px-4 py-1 border border-gray-200 border-solid rounded-lg" type="text" name="" id="">
                        </div>
                        <div class="flex gap-6 px-6 py-6 pt-4">
                            <div class="flex flex-col justify-start w-1/2 gap-1">
                                <span class="font-medium leading-8">Foto Banner</span>
                                <span class="text-sm text-gray-400">Pastikan ukuran gambar maksimal 5MB dan berformat .JPG / .PNG / .JPLG</span>
                            </div>
                            <div class="flex items-start justify-start w-1/2">
                                <label for="imageInput" class="flex justify-start text-2xl font-semibold text-gray-400 cursor-pointer">
                                    <div class="flex items-center justify-center h-32 bg-transparent border border-gray-300 border-dashed rounded-lg w-80">
                                        +
                                        <input type="file" id="imageInput" name="image" class="absolute top-0 left-0 w-0 h-0 opacity-0" accept="image/*" />
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="flex flex-col w-full px-6 py-2 font-semibold leading-8 text-white rounded-lg bg-primary">Simpan</button>
                </form>
        </div>
</div>
@endsection

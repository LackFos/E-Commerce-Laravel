@extends('index')

@section('page')
    <div class="flex gap-2">
        <x-layout.sidebar />
        <div class="flex w-full max-w-[1440px] justify-center p-10">
            <form class="flex w-full flex-col gap-6">
                <div class="flex w-full justify-start gap-2">
                    <span class="font-semibold"><a href="/dashboard/banner" class="text-black">Banner</a></span>
                    <span>•</span>
                    <span aria-current="page" class="text-gray-500 active:font-semibold">Tambah Banner</span>
                </div>
                <div class="flex w-full flex-col rounded-lg border border-solid border-gray-200 bg-white">
                    <span class="flex justify-start rounded-t-lg border-b border-solid border-gray-200 bg-white p-6 text-lg font-bold">Tambah Banner</span>
                    <div class="flex gap-6 px-6 py-4">
                        <div class="flex w-1/2 flex-col justify-start gap-1">
                            <span class="flex font-medium">Nama Banner</span>
                            <span class="text-sm text-gray-400">Tulis Nama Banner</span>
                        </div>
                        <input class="w-1/2 rounded-lg border border-solid border-gray-200 px-4 py-1" type="text" name="" id="">
                    </div>
                    <div class="flex gap-6 px-6 py-6 pt-4">
                        <div class="flex w-1/2 flex-col justify-start gap-1">
                            <span class="font-medium leading-8">Foto Banner</span>
                            <span class="text-sm text-gray-400">Pastikan ukuran gambar maksimal 5MB dan berformat .JPG / .PNG / .JPLG</span>
                        </div>
                        <div class="flex w-1/2 items-start justify-start">
                            <label for="imageInput" class="flex cursor-pointer justify-start text-2xl font-semibold text-gray-400">
                                <div class="flex h-32 w-80 items-center justify-center rounded-lg border border-dashed border-gray-300 bg-transparent">
                                    +
                                    <input type="file" id="imageInput" name="image" class="absolute left-0 top-0 h-0 w-0 opacity-0" accept="image/*" />
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="w-full rounded-lg bg-primary px-6 py-2 text-center font-semibold leading-8 text-white">Simpan</button>
            </form>
        </div>
    </div>
@endsection

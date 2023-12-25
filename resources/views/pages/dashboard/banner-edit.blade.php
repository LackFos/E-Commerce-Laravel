@extends('index')

@section('page')
    <div class="flex gap-2">
        <div class="flex w-full max-w-[1440px] justify-center">
            <x-layout.sidebar />
            <form action="{{ route('banner.update', ['banner' => $banner->id]) }}" method="POST" enctype="multipart/form-data" class="flex w-full flex-col gap-12 p-10">
                @csrf
                @method('PATCH')

                <div class="flex w-full justify-start gap-2">
                    <span class="font-semibold"><a href="/dashboard/banner" class="text-black">Banner</a></span>
                    <span>•</span>
                    <span aria-current="page" class="text-gray-500 active:font-semibold">Edit Banner</span>
                </div>
                <div class="flex w-full flex-col rounded-lg border border-solid border-gray-200 bg-white">
                    <span class="flex justify-start rounded-t-lg border-b border-solid border-gray-200 bg-white p-6 text-lg font-bold">Edit Banner</span>
                    <div class="flex gap-6 px-6 py-4">
                        <div class="flex w-1/2 flex-col justify-start gap-1">
                            <span class="flex font-medium">Nama Banner</span>
                            <span class="text-sm text-gray-400">Tulis Nama Banner</span>
                        </div>
                        <input class="w-1/2 rounded-lg border border-solid border-gray-200 px-4 py-1" type="text" name="name" value="{{ $banner->name }}">
                    </div>
                    <div class="flex gap-6 px-6 py-6 pt-4">
                        <div class="flex w-1/2 flex-col justify-start gap-1">
                            <span class="font-medium leading-8">Foto Banner</span>
                            <span class="text-sm text-gray-400">Pastikan ukuran gambar maksimal 5MB dan berformat .JPG / .PNG / .JPLG</span>
                        </div>
                        <div class="flex w-1/2 flex-col items-start justify-start gap-2">
                            <img class="h-32 w-80 rounded-2xl bg-gray-300 object-cover" src="{{ asset($banner->image) }}" alt="{{ $banner->name }}" id="imagePreview">
                            <label for="imageInput" class="flex cursor-pointer justify-start font-semibold text-primary">
                                Ubah Foto Banner
                                <input type="file" id="imageInput" name="image" class="absolute left-0 top-0 h-0 w-0 opacity-0" name="image" accept="image/*" />
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="w-full rounded-lg bg-primary px-6 py-2 text-center font-semibold leading-8 text-white">Simpan</button>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    @vite('resources/js/imageInput.js')
@endpush

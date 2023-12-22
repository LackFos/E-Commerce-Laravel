@extends('index')

@section('page')
    <div class="flex gap-2">
        <x-layout.sidebar />
        <div class="flex w-full max-w-[1440px] justify-center p-10">
            <div class="flex flex-col w-full gap-6">
                <h2>Banner</h2>
                <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                    <div class='flex min-h-[64px] items-center gap-6 px-6'>
                        <div class='flex h-full min-h-[64px] w-full'>
                            <div class='flex flex-col items-start justify-center w-full font-bold'>Banner</div>
                            <div class='flex flex-col items-start justify-center w-full font-bold'>Nama</div>
                            <div class='flex flex-col items-start justify-center w-full font-bold'>Aksi</div>
                        </div>
                    </div>

                    @foreach ($banners as $banner)
                        <form class='flex min-h-[64px] items-center gap-6 border-t border-solid border-gray-200 px-6'>
                            <div class='flex h-full min-h-[64px] w-full'>
                                <div class='flex flex-col items-start justify-center w-full my-3 font-light text-gray-500'>
                                    <div class="flex items-center gap-4">
                                        <img src="{{ asset($banner->image) }}" class="object-cover bg-gray-300 h-28 w-72 rounded-2xl" alt="{{ $banner->name }}">
                                    </div>
                                </div>
                                <div class='flex flex-col items-start justify-center w-full font-light text-gray-500'>
                                    <div class="flex gap-4">
                                        <span class="font-medium leading-8">{{ $banner->name }}</span>
                                    </div>
                                </div>
                                <div class='flex items-center justify-start w-full gap-4'>
                                    <a class="px-4 py-2 font-semibold text-white bg-blue-500 rounded-lg hover:bg-blue-400" href="/dashboard/banner/{{ $banner->slug }}">Edit</a>
                                    <button class="px-2 py-2 rounded-lg bg-primary hover:bg-opacity-80" type="submit"><x-icons.trash/></button>
                                </div>
                            </div>
                        </form>
                    @endforeach

                    <div class='flex min-h-[64px] items-center gap-6 border-t border-solid border-gray-200 px-6'>
                        <a href="/dashboard/banner/tambah" class="font-medium text-primary">+ Tambah Banner</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('index')

@section('page')
    <div class="flex gap-2">
        <x-layout.sidebar />
        <div class="flex w-full max-w-[1440px] justify-center p-10">
            <div class="flex w-full flex-col gap-6">
                <h2>Banner</h2>
                <div class="flex w-full flex-col rounded-lg border border-solid border-gray-200 bg-white">
                    <div class='flex min-h-[64px] items-center gap-6 px-6'>
                        <div class='flex h-full min-h-[64px] w-full'>
                            <div class='flex w-full flex-col items-start justify-center font-bold'>Banner</div>
                            <div class='flex w-full flex-col items-start justify-center font-bold'>Nama</div>
                            <div class='flex w-full flex-col items-start justify-center font-bold'>Aksi</div>
                        </div>
                    </div>

                    @foreach ($banners as $banner)
                        <div class='flex min-h-[64px] items-center gap-6 border-t border-solid border-gray-200 px-6'>
                            <div class='flex h-full min-h-[64px] w-full'>
                                <div class='my-3 flex w-full flex-col items-start justify-center font-light text-gray-500'>
                                    <div class="flex items-center gap-4">
                                        <img src="{{ asset($banner->image) }}" class="h-20 w-72 rounded-2xl bg-gray-300" alt="{{ $banner->name }}">
                                    </div>
                                </div>
                                <div class='flex w-full flex-col items-start justify-center font-light text-gray-500'>
                                    <div class="flex gap-4">
                                        <span class="font-medium leading-8">{{ $banner->name }}</span>
                                    </div>
                                </div>
                                <div class='flex w-full items-center justify-start gap-4 font-light text-gray-500'>
                                    <a href="/dashboard/banner/{{ $banner->slug }}">Edit</a>
                                    <button>Hapus</button>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class='flex min-h-[64px] items-center gap-6 border-t border-solid border-gray-200 px-6'>
                        <a href="/dashboard/banner/tambah" class="font-medium text-primary">+ Tambah Banner</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

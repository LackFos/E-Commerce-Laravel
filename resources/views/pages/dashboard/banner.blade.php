@extends('index')

@section('page')
    <x-layout.admin>
        <div class="flex gap-2">
            <div class="flex w-full">

                <div class="flex w-full flex-col gap-6 p-10">
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
                            <form method="POST" action="{{ route('banner.destroy', ['banner' => $banner->id]) }}"
                                class='flex min-h-[64px] items-center gap-6 border-t border-solid border-gray-200 px-6'>
                                @csrf
                                @method('DELETE')
                                <div class='flex h-full min-h-[64px] w-full'>
                                    <div class='my-3 flex w-full flex-col items-start justify-center font-light text-gray-500'>
                                        <div class="flex items-center gap-4">
                                            <img src="{{ asset($banner->image) }}" class="h-28 w-72 rounded-2xl bg-gray-300 object-cover" alt="{{ $banner->name }}">
                                        </div>
                                    </div>
                                    <div class='flex w-full flex-col items-start justify-center font-light text-gray-500'>
                                        <div class="flex gap-4">
                                            <span class="font-medium leading-8">{{ $banner->name }}</span>
                                        </div>
                                    </div>
                                    <div class='flex w-full items-center justify-start gap-4'>
                                        <a class="rounded-lg bg-blue-500 px-4 py-2 font-semibold text-white hover:bg-blue-400"
                                            href="{{ route('banner.edit', ['banner' => $banner->id]) }}">Edit</a>
                                        <button class="rounded-lg bg-primary px-2 py-2 hover:bg-opacity-80" type="submit"><x-icons.trash /></button>
                                    </div>
                                </div>
                            </form>
                        @endforeach

                        <div class='flex min-h-[64px] items-center gap-6 border-t border-solid border-gray-200 px-6'>
                            <a href="{{ route('banner.create') }}" class="font-medium text-primary">+ Tambah Banner</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-layout.admin>
@endsection

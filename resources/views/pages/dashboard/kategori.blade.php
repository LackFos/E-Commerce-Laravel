@extends('index')

@section('page')
    <div class="flex gap-2">
        <div class="flex w-full max-w-[1440px]">
            <x-layout.sidebar />
            <x-layout.content>

                <div class="flex flex-col w-full gap-6 p-10">
                    <form action="" method="POST" class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                    @csrf
                    <span class="flex justify-start p-6 text-lg font-bold bg-white border-b border-gray-200 border-solid rounded-t-lg">Kategori</span>
                    <div class="flex gap-6 px-6 py-4">
                        <div class="flex flex-col justify-start w-1/2 gap-1">
                            <span class="flex font-medium">Nama Kategori</span>
                        </div>
                        <input class="w-1/2 px-4 py-1 border border-gray-200 border-solid rounded-lg" type="text" name="name" id="">
                    </div>
                    <div class="px-6 py-4">
                        <button type="submit" class="flex flex-col w-full px-6 py-2 font-semibold leading-8 text-white rounded-lg bg-primary">Simpan</button>
                    </div>
                </form>

                <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                    <span class="flex justify-start p-6 text-lg font-bold bg-white border-b border-gray-200 border-solid rounded-t-lg"> Hapus Kategori</span>
                    <div class="flex flex-col w-full gap-6 px-6 py-4">

                        @foreach ($categories as $category)
                            <form method="POST" action="{{ route('category.destroy', ['category' => $category->slug]) }}" class="flex justify-between w-full">
                                @csrf
                                @method('DELETE')
                                <span for="outOfStock" class="relative flex items-center justify-between w-full font-medium cursor-pointer">{{ $category->name }}</span>
                                <div class="flex justify-center w-1/2 gap-2">
                                    <button type="submit" class="px-2 py-2 text-white rounded-lg bg-primary"><x-icons.trash /></button>
                                </div>
                            </form>
                        @endforeach
                    </div>
                </div>
            </form>
        </x-layout.content>
        </div>
    </div>
@endsection

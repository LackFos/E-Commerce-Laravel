@extends('index')

@section('page')
    <x-layout.admin>
        <div class="flex gap-2">
            <div class="flex w-full">

                <div class="flex w-full flex-col gap-6 p-10">
                    <form action="" method="POST" class="flex w-full flex-col rounded-lg border border-solid border-gray-200 bg-white">
                        @csrf
                        <span class="flex justify-start rounded-t-lg border-b border-solid border-gray-200 bg-white p-6 text-lg font-bold">Kategori</span>
                        <div class="flex gap-6 px-6 py-4">
                            <div class="flex w-1/2 flex-col justify-start gap-1">
                                <span class="flex font-medium">Nama Kategori</span>
                            </div>
                            <input class="w-1/2 rounded-lg border border-solid border-gray-200 px-4 py-1" type="text" name="name" id="">
                        </div>
                        <div class="px-6 py-4">
                            <button type="submit" class="flex w-full justify-center rounded-lg bg-primary px-6 py-2 font-semibold leading-8 text-white">Simpan</button>
                        </div>
                    </form>

                    <div class="flex w-full flex-col rounded-lg border border-solid border-gray-200 bg-white">
                        <span class="flex justify-start rounded-t-lg border-b border-solid border-gray-200 bg-white p-6 text-lg font-bold"> Hapus Kategori</span>
                        <div class="flex w-full flex-col gap-6 px-6 py-4">

                            @foreach ($categories as $category)
                                <form method="POST" action="{{ route('category.destroy', ['category' => $category->slug]) }}" class="flex w-full justify-between">
                                    @csrf
                                    @method('DELETE')
                                    <span for="outOfStock" class="relative flex w-full cursor-pointer items-center justify-between font-medium">{{ $category->name }}</span>
                                    <div class="flex w-1/2 justify-end gap-2">
                                        <button type="submit" class="rounded-lg bg-primary px-2 py-2 text-white"><x-icons.trash /></button>
                                    </div>
                                </form>
                            @endforeach
                        </div>
                    </div>
                    </form>
                </div>
            </div>
    </x-layout.admin>
@endsection

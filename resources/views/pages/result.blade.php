@extends('index')

@section('page')
<div class="flex justify-center my-10">
    <div class="flex max-w-[1440px] w-full flex-col gap-10">
        <div class="flex justify-start w-full gap-2">
            <span class="font-semibold"><a href="{{ route('home') }}" class="text-black">Home</a></span>
            <span>></span>
            <span aria-current="page" class="text-gray-500 active:font-semibold">Cari</span>
        </div>
        <div class="flex flex-col gap-4 py-6 rounded-lg">
            <div class="flex items-center justify-between">
                <span class="text-4xl font-bold">Produk “Cardigan”</span>
                <div class="flex items-center gap-2">
                    <span>Urutkan:</span>
                    <div class="">
                        <select id="sort" name="sort" class="w-full py-2 pl-3 text-base bg-transparent rounded-md text-primary">
                            <option value="harga-terendah">Harga Terendah</option>
                            <option value="harga-tertinggi">Harga Tertinggi</option>
                            <option value="terbaru">Terbaru</option>
                            <option value="terpopuler">Terpopuler</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-6 ">
                <div class="grid grid-cols-8 gap-4">
                    <div class="flex flex-col col-span-4 bg-white sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 rounded-2xl">
                        <img class="bg-gray-300 h-60 rounded-t-2xl">
                        <div class="flex flex-col gap-4 p-4 bg-white border border-gray-200 border-solid rounded-b-2xl">
                            <div class="flex flex-col justify-start gap-2">
                                <span class="text-base font-medium">Cardigan</span>
                                <div class="flex flex-col gap-1">
                                    <span class="text-xl font-bold text-primary">Rp 45.000</span>
                                </div>
                            </div>
                            <span class="text-sm text-gray-400">Outwear</span>
                        </div>
                    </div>
                    <div class="flex flex-col col-span-4 bg-white sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 rounded-2xl">
                        <img class="w-full bg-gray-300 h-60 rounded-t-2xl">
                        <div class="flex flex-col w-full gap-4 p-4 bg-white border border-gray-200 border-solid rounded-b-2xl">
                            <div class="flex flex-col justify-start gap-2">
                                <span class="text-base font-medium">Cardigan</span>
                                <div class="flex flex-col gap-1">
                                    <span class="text-xl font-bold text-primary">Rp 45.000</span>
                                </div>
                            </div>
                            <span class="text-sm text-gray-400">Outwear</span>
                        </div>
                    </div>
                    <div class="flex flex-col col-span-4 bg-white sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 rounded-2xl">
                        <img class="w-full bg-gray-300 h-60 rounded-t-2xl">
                        <div class="flex flex-col w-full gap-4 p-4 bg-white border border-gray-200 border-solid rounded-b-2xl">
                            <div class="flex flex-col justify-start gap-2">
                                <span class="text-base font-medium">Cardigan</span>
                                <div class="flex flex-col gap-1">
                                    <span class="text-xl font-bold text-primary">Rp 45.000</span>
                                </div>
                            </div>
                            <span class="text-sm text-gray-400">Outwear</span>
                        </div>
                    </div>
                    <div class="flex flex-col col-span-4 bg-white sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 rounded-2xl">
                        <img class="w-full bg-gray-300 h-60 rounded-t-2xl">
                        <div class="flex flex-col w-full gap-4 p-4 bg-white border border-gray-200 border-solid rounded-b-2xl">
                            <div class="flex flex-col justify-start gap-2">
                                <span class="text-base font-medium">Cardigan</span>
                                <div class="flex flex-col gap-1">
                                    <span class="text-xl font-bold text-primary">Rp 45.000</span>
                                </div>
                            </div>
                            <span class="text-sm text-gray-400">Outwear</span>
                        </div>
                    </div>
            </div>
            <div class="grid grid-cols-8 gap-4">
                <div class="flex flex-col col-span-4 bg-white sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 rounded-2xl">
                    <img class="w-full bg-gray-300 h-60 rounded-t-2xl">
                    <div class="flex flex-col w-full gap-4 p-4 bg-white border border-gray-200 border-solid rounded-b-2xl">
                        <div class="flex flex-col justify-start gap-2">
                            <span class="text-base font-medium">Cardigan</span>
                            <div class="flex flex-col gap-1">
                                <span class="text-xl font-bold text-primary">Rp 45.000</span>
                            </div>
                        </div>
                        <span class="text-sm text-gray-400">Outwear</span>
                    </div>
                </div>
                <div class="flex flex-col col-span-4 bg-white sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 rounded-2xl">
                    <img class="w-full bg-gray-300 h-60 rounded-t-2xl">
                    <div class="flex flex-col w-full gap-4 p-4 bg-white border border-gray-200 border-solid rounded-b-2xl">
                        <div class="flex flex-col justify-start gap-2">
                            <span class="text-base font-medium">Cardigan</span>
                            <div class="flex flex-col gap-1">
                                <span class="text-xl font-bold text-primary">Rp 45.000</span>
                            </div>
                        </div>
                        <span class="text-sm text-gray-400">Outwear</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

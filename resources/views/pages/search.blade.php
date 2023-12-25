@extends('index')

@section('page')
    <x-layout.user>
        <div class="my-10 flex justify-center">
            <div class="flex w-full max-w-[1440px] flex-col gap-10">
                <x-breadcrumb :breadcrumb="$breadcrumb" />

                <div class="flex flex-col gap-4 rounded-lg py-6">
                    <div class="flex items-center justify-between">
                        <span class="text-4xl font-bold">Produk "{{ $keyword }}"</span>
                        <div class="flex items-center gap-2">
                            <span class='whitespace-nowrap'>Urutkan Berdasarkan :</span>

                            <select id="sort" name="sort" class="w-full rounded-md bg-transparent py-2 pl-3 text-base text-primary">
                                <option value="" disabled selected>Pilih Opsi</option>
                                <option value="newest">Produk Terbaru</option>
                                <option value="oldest">Produk Terlama</option>
                                <option value="highest">Harga Tertinggi</option>
                                <option value="lowest">Harga Terendah</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-6 gap-4 max-lg:grid-cols-4 max-md:grid-cols-3 max-sm:grid-cols-2">

                        @foreach ($products as $product)
                            <x-product-card :product="$product" />
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </x-layout.user>
@endsection

@push('scripts')
    @vite('resources/js/sort.js')
@endpush

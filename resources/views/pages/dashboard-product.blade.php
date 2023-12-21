@extends('index')

@section('page')
    <div class="flex gap-2">
        <x-layout.sidebar />
        <div class="flex w-full max-w-[1440px] justify-center p-10">
            <div class="flex w-full flex-col gap-6">
                <h2>Daftar Produk</h2>
                <form class="flex w-full gap-6 rounded-lg bg-white p-6">
                    <input placeholder="Cari nama barang" class="w-1/2 rounded-lg border border-solid border-gray-200 px-4 py-1" type="text" name="sort" id="sort">
                    <select id="sort" name="sort" class="w-[20%] rounded-md bg-slate-200 py-2 pl-3 text-base text-black">
                        <option value="harga-terendah">Pilih Kategori</option>
                        <option value="harga-tertinggi">Edit</option>
                        <option value="terbaru">Terbaru</option>
                    </select>
                    <div class="flex w-[20%] items-center gap-4">
                        <input type="checkbox" id="outOfStock" name="product" class="hidden">
                        <label for="outOfStock" class="relative flex w-full cursor-pointer gap-4 text-base font-bold">
                            Tampilkan Produk Habis
                            <div class="flex h-6 w-6 items-center justify-center rounded-md border border-gray-300 bg-white">
                                <span class="absolute text-white transition-opacity" id="checkIcon">✓</span>
                            </div>
                        </label>
                    </div>
                    <button type="submit" class="left-8 flex w-[10%] items-center justify-center rounded-md bg-primary px-2 py-1 font-semibold text-white">Submit</button>
                </form>
                <div class="flex w-full flex-col rounded-lg border border-solid border-gray-200 bg-white">
                    <div class='flex min-h-[64px] items-center gap-6 px-6'>
                        <div class='flex h-full min-h-[64px] w-full'>
                            <div class='g-4 flex w-full flex-col items-start justify-center font-bold'>Barang</div>
                            <div class='g-4 flex w-full flex-col items-start justify-center font-bold'>Harga</div>
                            <div class='g-4 flex w-full flex-col items-start justify-center font-bold'>Stok</div>
                            <div class='g-4 flex w-full flex-col items-start justify-center font-bold'>Aksi</div>
                        </div>
                    </div>
                    <div class='flex min-h-[64px] items-center gap-6 border-t border-solid border-gray-200 px-6'>
                        <div class='flex h-full min-h-[64px] w-full'>
                            <div class='my-3 flex w-full flex-col items-start justify-center font-light text-gray-500'>
                                <div class="flex items-center gap-4">
                                    <img src="" class="h-20 w-20 rounded-2xl bg-gray-300" alt="">
                                    <span class="font-medium leading-8">Cardigan</span>
                                </div>
                            </div>
                            <div class='flex w-full flex-col items-start justify-center font-light text-gray-500'>
                                <span class="w-fit max-w-[132px] rounded-lg border border-solid border-gray-200 px-4 py-2 text-gray-600">Rp. 100.000</span>
                            </div>
                            <div class='flex w-full flex-col items-start justify-center font-light text-gray-500'>
                                <div class="flex gap-4">
                                    <span class="w-[132px] rounded-lg border border-solid border-gray-200 px-4 py-2 text-gray-600">10</span>
                                </div>
                            </div>
                            <div class='flex w-full flex-col items-start justify-center font-light text-gray-500'>
                                <div class='flex w-full items-center justify-start gap-4 font-light text-gray-500'>
                                    <a href="/demodashboard/product/edit">Edit</a>
                                    <button>Hapus</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='flex min-h-[64px] items-center gap-6 border-t border-solid border-gray-200 px-6'>
                        <div class='flex h-full min-h-[64px] w-full'>
                            <div class='my-3 flex w-full flex-col items-start justify-center font-light text-gray-500'>
                                <div class="flex items-center gap-4">
                                    <img src="" class="h-20 w-20 rounded-2xl bg-gray-300" alt="">
                                    <span class="font-medium leading-8">Cardigan</span>
                                </div>
                            </div>
                            <div class='flex w-full flex-col items-start justify-center font-light text-gray-500'>
                                <span class="w-fit max-w-[132px] rounded-lg border border-solid border-gray-200 px-4 py-2 text-gray-600">Rp. 100.000</span>
                            </div>
                            <div class='flex w-full flex-col items-start justify-center font-light text-gray-500'>
                                <div class="flex gap-4">
                                    <span class="w-[132px] rounded-lg border border-solid border-gray-200 px-4 py-2 text-gray-600">0</span>
                                    <span class="flex items-center text-primary">Stok Habis</span>
                                </div>
                            </div>
                            <div class='flex w-full flex-col items-start justify-center font-light text-gray-500'>
                                <div class='flex w-full items-center justify-start gap-4 font-light text-gray-500'>
                                    <a href="/demodashboard/product/edit">Edit</a>
                                    <button>Hapus</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

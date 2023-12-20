@extends('index')

@section('page')
<div class="flex gap-2 ">
    <x-layout.sidebar/>
        <div class="flex justify-center max-w-[1440px] w-full p-10">
                <form class="flex flex-col w-full gap-6">
                    <div class="flex justify-start w-full gap-2">
                        <span class="font-semibold"><a href="/demodashboard/product" class="text-black">Produk</a></span>
                        <span>•</span>
                        <span aria-current="page" class="text-gray-500 active:font-semibold">Tambah Produk</span>
                    </div>
                    <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                        <span class="flex justify-start p-6 text-lg font-bold bg-white border-b border-gray-200 border-solid rounded-t-lg">Tambah Produk</span>
                        <div class="flex gap-6 px-6 py-4">
                            <span class="flex items-center justify-start w-1/2 font-medium">Nama Barang</span>
                            <input class="w-1/2 px-4 py-1 border border-gray-200 border-solid rounded-lg" placeholder="Masukan Nama Barang" type="text" name="" id="">
                        </div>
                        <div class="flex gap-6 px-6 py-4">
                            <span class="flex items-center justify-start w-1/2 font-medium">Harga Barang</span>
                            <div class="relative w-1/2">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-2 text-gray-600">Rp.</span>
                                <input type="text" class="w-full px-4 py-1 pl-8 border border-gray-200 border-solid rounded-lg placeholder:text-black" placeholder="0" name="rupiahInput" id="rupiahInput">
                              </div>                         </div>
                        <div class="flex gap-6 px-6 py-4">
                            <span class="flex items-center justify-start w-1/2 font-medium">Warna</span>
                            <input class="w-1/2 px-4 py-1 border border-gray-200 border-solid rounded-lg" placeholder="Masukan Warna" type="text" name="" id="">
                        </div>
                        <div class="flex gap-6 px-6 py-4">
                            <span class="flex items-center justify-start w-1/2 font-medium">Ukuran</span>
                            <input class="w-1/2 px-4 py-1 border border-gray-200 border-solid rounded-lg" placeholder="Masukan Ukuran" type="text" name="" id="">
                        </div>
                        <div class="flex flex-col justify-start gap-4 px-6 py-6 pt-4">
                            <span class="font-medium leading-8">Foto Produk</span>
                            <label for="imageInput" class="flex justify-start text-2xl font-semibold text-gray-400 cursor-pointer">
                                <div class="flex items-center justify-center w-20 h-20 bg-transparent border border-gray-300 border-dashed rounded-lg">
                                    +
                                    <input type="file" id="imageInput" name="image" class="absolute top-0 left-0 w-0 h-0 opacity-0" accept="image/*" />
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                        <span class="flex justify-start p-6 text-lg font-bold bg-white border-b border-gray-200 border-solid rounded-t-lg">Kategori</span>
                        <div class="flex w-full gap-6 px-6 py-4">
                            <div class="flex justify-between w-1/2 ">
                                <input type="checkbox" id="outOfStock" name="product" class="hidden">
                                <label for="outOfStock" class="relative flex items-center justify-between w-full font-medium cursor-pointer">
                                     Tampilkan Produk Habis
                                     <div class="flex justify-center w-1/2">
                                        <div class="flex items-center justify-center w-6 h-6 bg-white border border-gray-300 rounded-md">
                                           <span class="absolute text-white transition-opacity" id="checkIcon">✓</span>
                                        </div>
                                     </div>
                                </label> 
                            </div>
                            <div class="flex justify-between w-1/2 ">
                                <input type="checkbox" id="outOfStock" name="product" class="hidden">
                                <label for="outOfStock" class="relative flex items-center justify-between w-full font-medium cursor-pointer">
                                     Tampilkan Produk Habis
                                     <div class="flex justify-center w-1/2">
                                        <div class="flex items-center justify-center w-6 h-6 bg-white border border-gray-300 rounded-md">
                                           <span class="absolute text-white transition-opacity" id="checkIcon">✓</span>
                                        </div>
                                     </div>
                                </label> 
                            </div>
                        </div>
                        <div class="flex w-full gap-6 px-6 py-4">
                            <div class="flex justify-between w-1/2 ">
                                <input type="checkbox" id="outOfStock" name="product" class="hidden">
                                <label for="outOfStock" class="relative flex items-center justify-between w-full font-medium cursor-pointer">
                                     Tampilkan Produk Habis
                                     <div class="flex justify-center w-1/2">
                                        <div class="flex items-center justify-center w-6 h-6 bg-white border border-gray-300 rounded-md">
                                           <span class="absolute text-white transition-opacity" id="checkIcon">✓</span>
                                        </div>
                                     </div>
                                </label> 
                            </div>
                            <div class="flex justify-between w-1/2 ">
                                <input type="checkbox" id="outOfStock" name="product" class="hidden">
                                <label for="outOfStock" class="relative flex items-center justify-between w-full font-medium cursor-pointer">
                                     Tampilkan Produk Habis
                                     <div class="flex justify-center w-1/2">
                                        <div class="flex items-center justify-center w-6 h-6 bg-white border border-gray-300 rounded-md">
                                           <span class="absolute text-white transition-opacity" id="checkIcon">✓</span>
                                        </div>
                                     </div>
                                </label> 
                            </div>
                        </div>
                        <div class="flex w-full gap-6 px-6 py-4">
                            <div class="flex justify-between w-1/2 ">
                                <input type="checkbox" id="outOfStock" name="product" class="hidden">
                                <label for="outOfStock" class="relative flex items-center justify-between w-full font-medium cursor-pointer">
                                     Tampilkan Produk Habis
                                     <div class="flex justify-center w-1/2">
                                        <div class="flex items-center justify-center w-6 h-6 bg-white border border-gray-300 rounded-md">
                                           <span class="absolute text-white transition-opacity" id="checkIcon">✓</span>
                                        </div>
                                     </div>
                                </label> 
                            </div>
                            <div class="flex justify-between w-1/2 ">
                                <input type="checkbox" id="outOfStock" name="product" class="hidden">
                                <label for="outOfStock" class="relative flex items-center justify-between w-full font-medium cursor-pointer">
                                     Tampilkan Produk Habis
                                     <div class="flex justify-center w-1/2">
                                        <div class="flex items-center justify-center w-6 h-6 bg-white border border-gray-300 rounded-md">
                                           <span class="absolute text-white transition-opacity" id="checkIcon">✓</span>
                                        </div>
                                     </div>
                                </label> 
                            </div>
                        </div>
                        <div class='flex items-center border-t border-solid border-gray-200 px-6 gap-6 min-h-[64px]'>
                            <a href="/demodashboard/product/category" class="font-medium text-primary">+ Tambah Kategori</a>
                        </div>
                    </div>
                    <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                        <span class="flex justify-start p-6 text-lg font-bold bg-white border-b border-gray-200 border-solid rounded-t-lg">Flash Sale</span>
                        <div class="flex justify-between px-6 py-4">
                            <span class="flex items-center justify-start font-medium w-fit">Flash Sale</span>
                            <div class="flex gap-4">
                                <label class="flex items-center">
                                    <input
                                        type="radio"
                                        name="flashsale"
                                        value="Ya"
                                        {{ $flashsale === 'Ya' ? 'checked' : '' }}
                                        class="absolute top-0 left-0 w-0 h-0 opacity-0"
                                    />
                                    <span
                                        class="relative inline-block w-6 h-6 mr-2 border rounded-full
                                        {{ $flashsale === 'Ya' ? 'border border-primary focus:bg-primary shadow-input' : 'border-gray-500' }}"
                                    >
                                        @if($flashsale === 'Ya')
                                            <span class="absolute w-4 h-4 transform -translate-x-1/2 -translate-y-1/2 rounded-full bg-primary top-1/2 left-1/2"></span>
                                        @endif
                                    </span>
                                    <span class="ml-2">Ya</span>
                                </label>
                                <label class="flex items-center">
                                    <input
                                        type="radio"
                                        name="flashsale"
                                        value="Tidak"
                                        {{ $flashsale === 'Tidak' ? 'checked' : '' }}
                                        class="absolute top-0 left-0 w-0 h-0 opacity-0"
                                    />
                                    <span
                                        class="relative inline-block w-6 h-6 mr-2 border rounded-full
                                        {{ $flashsale === 'Tidak' ? 'border border-primary focus:bg-primary shadow-input' : 'border-gray-500' }}"
                                    >
                                        @if($flashsale === 'Tidak')
                                            <span class="absolute w-4 h-4 transform -translate-x-1/2 -translate-y-1/2 rounded-full bg-primary top-1/2 left-1/2"></span>
                                        @endif
                                    </span>
                                    <span class="ml-2">Tidak</span>
                                </label>
                            </div>
                        </div>
                        <div class="flex justify-between px-6 py-4">
                            <span class="flex items-center justify-start w-1/2 font-medium">Diskon Barang</span>
                            <div class="relative w-20">
                                <span class="absolute inset-y-0 right-0 flex items-center pr-2 text-gray-600">%</span>
                                <input type="text" class="w-full px-4 py-1 pr-8 border border-gray-200 border-solid rounded-lg" name="rupiahInput" id="rupiahInput">
                              </div>                         
                        </div>
                    </div>
                    <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                        <span class="flex justify-start p-6 text-lg font-bold bg-white border-b border-gray-200 border-solid rounded-t-lg">Deskripsi Barang</span>
                        <div class="flex w-full gap-6 px-6 py-6">
                            <textarea class="w-full h-full px-4 py-2 text-left border border-gray-200 border-solid rounded-lg max-h-60"></textarea>                        
                        </div>
                    </div>
                    <button type="submit" class="flex flex-col w-full px-6 py-2 font-semibold leading-8 text-white rounded-lg bg-primary">Simpan</button>
                </form>
        </div>
</div>
@endsection

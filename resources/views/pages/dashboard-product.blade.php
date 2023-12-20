@extends('index')

@section('page')
<div class="flex gap-2 ">
    <x-layout.sidebar/>
        <div class="flex justify-center max-w-[1440px] w-full p-10">
            <div class="flex flex-col w-full gap-6">
                <h2>Daftar Produk</h2>
                <div class="flex w-full gap-6 p-6 bg-white rounded-lg">
                    <input placeholder="Cari nama barang" class="w-1/2 px-4 py-1 border border-gray-200 border-solid rounded-lg" type="text" name="sort" id="sort" >
                    <select id="sort" name="sort" class="w-[25%] py-2 pl-3 text-base text-black rounded-md bg-slate-200">
                        <option value="harga-terendah">Pilih Kategori</option>
                        <option value="harga-tertinggi">Edit</option>
                        <option value="terbaru">Terbaru</option>
                    </select>
                    <div class="flex items-center justify-between w-[25%] gap-4">
                        <input type="checkbox" id="outOfStock" name="product" class="hidden">
                        <label for="outOfStock" class="relative flex justify-between w-full ml-2 text-base font-bold cursor-pointer">
                          Tampilkan Produk Habis
                          <div class="flex items-center justify-center w-6 h-6 bg-white border border-gray-300 rounded-md">
                            <span class="absolute text-white transition-opacity" id="checkIcon">✓</span>
                          </div>
                        </label> 
                    </div>
                </div>
                <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                        <div class='flex items-center px-6 gap-6 min-h-[64px]'>
                          <div class='flex w-full h-full min-h-[64px]'>
                            <div class='flex flex-col items-start justify-center w-full font-bold g-4'>Barang</div>
                            <div class='flex flex-col items-start justify-center w-full font-bold g-4'>Harga</div>
                            <div class='flex flex-col items-start justify-center w-full font-bold g-4'>Stok</div>
                            <div class='flex flex-col items-start justify-center w-full font-bold g-4'>Aksi</div>
                          </div>
                        </div>
                        <div class='flex items-center border-t border-solid border-gray-200 px-6 gap-6 min-h-[64px]'>
                          <div class='flex w-full h-full min-h-[64px]'>
                            <div class='flex flex-col items-start justify-center w-full my-3 font-light text-gray-500'>
                              <div class="flex items-center gap-4">
                                <img src="" class="w-20 h-20 bg-gray-300 rounded-2xl" alt="">
                                <span class="font-medium leading-8">Cardigan</span>
                              </div>
                            </div>
                            <div class='flex flex-col items-start justify-center w-full font-light text-gray-500'>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2 text-gray-600">Rp.</span>
                                    <input type="text" class="pl-8 px-4 py-1 border max-w-[120px] w-full border-gray-200 border-solid rounded-lg" name="rupiahInput" id="rupiahInput">
                                  </div>                                  
                            </div>
                            <div class='flex flex-col items-start justify-center w-full font-light text-gray-500'>
                                <div class="flex gap-4">
                                    <input type="text" class="px-4 py-1 border max-w-[120px] w-full border-gray-200 border-solid rounded-lg" name="" id="">
                                </div>
                            </div>
                            <div class='flex flex-col items-start justify-center w-full font-light text-gray-500'>
                              <div class='flex items-center justify-start w-full gap-4 font-light text-gray-500'>
                                  <a href="/demodashboard/product/edit">Edit</a>
                                  <button>Hapus</button>
                              </div>
                            </div>
                          </div>
                </div>
                <div class='flex items-center border-t border-solid border-gray-200 px-6 gap-6 min-h-[64px]'>
                    <div class='flex w-full h-full min-h-[64px]'>
                      <div class='flex flex-col items-start justify-center w-full my-3 font-light text-gray-500'>
                        <div class="flex items-center gap-4">
                          <img src="" class="w-20 h-20 bg-gray-300 rounded-2xl" alt="">
                          <span class="font-medium leading-8">Cardigan</span>
                        </div>
                      </div>
                      <div class='flex flex-col items-start justify-center w-full font-light text-gray-500'>
                          <div class="relative">
                              <span class="absolute inset-y-0 left-0 flex items-center pl-2 text-gray-600">Rp.</span>
                              <input type="text" class="pl-8 px-4 py-1 border max-w-[120px] w-full border-gray-200 border-solid rounded-lg" name="rupiahInput" id="rupiahInput">
                            </div>                                  
                      </div>
                      <div class='flex flex-col items-start justify-center w-full font-light text-gray-500'>
                        <div class="flex gap-4">
                            <input type="text" class="px-4 py-1 border max-w-[120px] w-full border-gray-200 border-solid rounded-lg" name="" id="">
                            <span class="leading-8 text-primary">Stok Habis</span>
                        </div>
                      </div>
                      <div class='flex flex-col items-start justify-center w-full font-light text-gray-500'>
                        <div class='flex items-center justify-start w-full gap-4 font-light text-gray-500'>
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

@extends('index')

@section('page')
<div class="flex gap-2 ">
    <x-layout.sidebar/>
        <div class="flex justify-center max-w-[1440px] w-full p-10">
            <div class="flex flex-col w-full gap-6">
                <h2>Daftar Produk</h2>
                <form class="flex w-full gap-6 p-6 bg-white rounded-lg">
                    <input placeholder="Cari nama barang" class="w-1/2 px-4 py-1 border border-gray-200 border-solid rounded-lg" type="text" name="sort" id="sort" >
                    <select id="sort" name="sort" class="w-[20%] py-2 pl-3 text-base text-black rounded-md bg-slate-200">
                        <option value="harga-terendah">Pilih Kategori</option>
                        <option value="harga-tertinggi">Edit</option>
                        <option value="terbaru">Terbaru</option>
                    </select>
                    <div class="flex items-center w-[20%] gap-4">
                        <input type="checkbox" id="outOfStock" name="product" class="hidden">
                        <label for="outOfStock" class="relative flex w-full gap-4 text-base font-bold cursor-pointer">
                          Tampilkan Produk Habis
                          <div class="flex items-center justify-center w-6 h-6 bg-white border border-gray-300 rounded-md">
                            <span class="absolute text-white transition-opacity" id="checkIcon">✓</span>
                          </div>
                        </label> 
                    </div>
                    <button type="submit" class="w-[10%] py-1 px-2 left-8 font-semibold text-white flex justify-center items-center bg-primary rounded-md">Submit</button>
                </form>
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
                                    <span class="border max-w-[132px] px-4 py-2 w-fit border-gray-200 border-solid rounded-lg text-gray-600">Rp. 100.000</span>                                 
                            </div>
                            <div class='flex flex-col items-start justify-center w-full font-light text-gray-500'>
                                <div class="flex gap-4">
                                  <span class="border w-[132px] px-4 py-2  border-gray-200 border-solid rounded-lg text-gray-600">10</span>   
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
                        <span class="border max-w-[132px] px-4 py-2 w-fit border-gray-200 border-solid rounded-lg text-gray-600">Rp. 100.000</span>                                   
                      </div>
                      <div class='flex flex-col items-start justify-center w-full font-light text-gray-500'>
                        <div class="flex gap-4">
                          <span class="border w-[132px] px-4 py-2 border-gray-200 border-solid rounded-lg text-gray-600">0</span>   
                          <span class="flex items-center text-primary">Stok Habis</span>
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

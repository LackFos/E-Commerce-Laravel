@extends('index')

@section('page')
<div class="flex gap-2 ">
    <x-layout.sidebar/>
        <div class="flex justify-center max-w-[1440px] w-full p-10">
            <div class="flex flex-col w-full gap-12">
                <div class="flex flex-col w-full gap-6">
                    <h2>Beranda</h2>
                    <div class="flex gap-4 ">
                        <div class="flex flex-col w-full p-6 bg-white rounded-lg">
                            <span class="leading-8">Perlu Diproses</span>
                            <span class="text-xl font-bold">0</span>
                        </div>
                        <div class="flex flex-col w-full p-6 bg-white rounded-lg">
                            <span class="leading-8">Sedang Diproses</span>
                            <span class="text-xl font-bold">0</span>
                        </div>
                        <div class="flex flex-col w-full p-6 bg-white rounded-lg">
                            <span class="leading-8">Menunggu Konfirmasi</span>
                            <span class="text-xl font-bold">0</span>
                        </div>
                        <div class="flex flex-col w-full p-6 bg-white rounded-lg">
                            <span class="leading-8">Stok Habis</span>
                            <span class="text-xl font-bold">0</span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-full gap-6">
                    <h2>Segera Habis</h2>
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
    </div>
</div>
@endsection

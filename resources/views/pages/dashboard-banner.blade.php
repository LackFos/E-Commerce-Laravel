@extends('index')

@section('page')
<div class="flex gap-2 ">
    <x-layout.sidebar/>
        <div class="flex justify-center max-w-[1440px] w-full p-10">
            <div class="flex flex-col w-full gap-6">
                <h2>Banner</h2>
                <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                        <div class='flex items-center px-6 gap-6 min-h-[64px]'>
                          <div class='flex w-full h-full min-h-[64px]'>
                            <div class='flex flex-col items-start justify-center w-full font-bold g-4'>Banner</div>
                            <div class='flex flex-col items-start justify-center w-full font-bold g-4'>Nama</div>
                            <div class='flex flex-col items-start justify-center w-full font-bold g-4'>Aksi</div>
                          </div>
                        </div>
                        <div class='flex items-center border-t border-solid border-gray-200 px-6 gap-6 min-h-[64px]'>
                          <div class='flex w-full h-full min-h-[64px]'>
                            <div class='flex flex-col items-start justify-center w-full my-3 font-light text-gray-500'>
                              <div class="flex items-center gap-4">
                                <img src="" class="h-20 bg-gray-300 w-72 rounded-2xl" alt="">
                              </div>
                            </div> 
                            <div class='flex flex-col items-start justify-center w-full font-light text-gray-500'>
                                <div class="flex gap-4">
                                    <span class="font-medium leading-8">Diskon Akhir Tahun</span>
                                </div>
                            </div>
                            <div class='flex items-center justify-start w-full gap-4 font-light text-gray-500'>
                                <a href="/demodashboard/banner/edit">Edit</a>
                                <button>Hapus</button>
                            </div>
                          </div>
                </div>
                <div class='flex items-center border-t border-solid border-gray-200 px-6 gap-6 min-h-[64px]'>
                    <div class='flex w-full h-full min-h-[64px]'>
                      <div class='flex flex-col items-start justify-center w-full my-3 font-light text-gray-500'>
                        <div class="flex items-center gap-4">
                          <img src="" class="h-20 bg-gray-300 w-72 rounded-2xl" alt="">
                        </div>
                      </div>
                      <div class='flex flex-col items-start justify-center w-full font-light text-gray-500'>
                        <div class="flex gap-4">
                            <span class="font-medium leading-8">Flashsale</span>
                        </div>
                      </div>
                      <div class='flex items-center justify-start w-full gap-4 font-light text-gray-500'>
                          <a href="/demodashboard/banner/edit">Edit</a>
                          <button>Hapus</button>
                      </div>
                    </div>
          </div>
          <div class='flex items-center border-t border-solid border-gray-200 px-6 gap-6 min-h-[64px]'>
              <a href="/demodashboard/banner/add" class="font-medium text-primary">+ Tambah Banner</a>
          </div>
                </div>
        </div>
</div>
@endsection

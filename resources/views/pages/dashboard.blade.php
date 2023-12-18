@extends('index')

@section('page')
<div class="flex gap-2 ">
    <x-layout.sidebar/>
        <div class="flex justify-center max-w-[1440px] w-full p-10">
            <div class="flex flex-col w-full gap-6">
                <h2>Daftar Produk</h2>
                <div class="flex w-full gap-6 p-6 bg-white rounded-lg">
                    <input placeholder="Cari nama barang" class="w-3/5 px-4 py-1 border border-gray-200 border-solid rounded-lg" type="text" name="sort" id="sort" >
                    <select id="sort" name="sort" class="w-1/5 py-2 pl-3 text-base text-black rounded-md bg-slate-200">
                        <option value="harga-terendah">Pilih Kategori</option>
                        <option value="harga-tertinggi">Harga Tertinggi</option>
                        <option value="terbaru">Terbaru</option>
                        <option value="terpopuler">Terpopuler</option>
                    </select>
                    <div class="flex items-center justify-between w-1/5 gap-4">
                        <span class="font-bold leading-8">Tampilkan Produk Habis</span>
                        <input type="checkbox" name="habis" id="habis">
                    </div>
                </div>
                <div class="flex flex-col w-full bg-white border-gray-200 rounded-lg">
                        <div class='flex items-center px-6 gap-6 min-h-[64px]'>
                          <div class='flex w-full h-full min-h-[64px]'>
                            <div class='flex flex-col items-start justify-center w-full font-bold g-4'>Transaksi</div>
                            <div class='flex flex-col items-start justify-center w-full font-bold g-4'>Tanggal</div>
                            <div class='flex flex-col items-start justify-center w-full font-bold g-4'>Total</div>
                            <div class='flex flex-col items-start justify-center w-full font-bold g-4'>Status</div>
                          </div>
                        </div>
                </div>
            </div>
        </div>
</div>
@endsection

@extends('index')

@section('page')
    <div class="flex justify-center my-10">
        <div class="flex max-w-[1440px] flex-col gap-10">
            <div class="flex justify-start w-full gap-2">
                <span class="font-semibold"><a href="{{ route('home') }}" class="text-black">Home</a></span>
                <span>> </span>
                <span aria-current="page" class="active:font-semibold text-gray-500">Product Detail</span>
            </div>
            <div class="flex gap-6">
                <img class="min-w-[396px] bg-gray-300 h-[396px] rounded-2xl" src="" alt="">
                <div class="flex flex-col w-full gap-6 p-6 bg-white border border-solid border-gray-300 rounded-2xl">
                    <div class="flex flex-col gap-4">
                        <span class="text-4xl font-bold text-black">Cardigan</span>
                        <span class="text-2xl font-bold text-primary">Rp 100.000</span>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex justify-between py-2 border-b border-dashed">
                            <span>Warna</span>
                            <span>hijau</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-dashed">
                            <span>Warna</span>
                            <span>hijau</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-dashed">
                            <span>Warna</span>
                            <span>hijau</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-dashed">
                            <span>Warna</span>
                            <span>hijau</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-dashed">
                            <span>Kategori</span>
                            <span class="font-semibold text-primary">Outwear</span>
                        </div>
                    </div>
                </div>
                <div class="min-w-[306px] h-fit flex flex-col p-6 bg-white border border-solid border-gray-300 rounded-2xl gap-6">
                    <span class="flex justify-start text-xl font-bold">Subtotal</span>
                    <div class="flex flex-col gap-8">
                        <div class="flex items-center gap-4">
                            <div class="flex justify-between p-4 bg-gray-300 rounded-full w-36">
                                <button class="font-bold text-xl">-</button>
                                <span>1</span>
                                <button class="font-bold text-xl">+</button>
                            </div>
                            <span>Stok: <span class="font-bold">Sisa 9</span></span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-300">Sub Total</span>
                            <span class="text-xl font-bold text-primary">Rp 100.00</span>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <button class="px-16 py-4 font-medium text-white rounded-full bg-primary">+ Keranjang</button>
                        <button class="px-16 py-4 font-medium bg-white border border-solid rounded-full text-primary border-primary">Beli Sekarang</button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-4 p-6 bg-white border border-solid border-gray-200 rounded-2xl w-full justify-start">
                <span class="font-bold text-2xl">Deskripsi Produk</span>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Senectus et netus et malesuada fames. Condimentum vitae sapien pellentesque habitant morbi tristique senectus et. Sit amet consectetur adipiscing elit duis tristique sollicitudin. Phasellus vestibulum lorem sed risus ultricies tristique. Pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus. Sed sed risus pretium quam vulputate dignissim. Dignissim sodales ut eu sem. Aliquam ut porttitor leo a diam sollicitudin tempor. Rhoncus urna neque viverra justo nec ultrices dui sapien. Orci phasellus egestas tellus rutrum tellus pellentesque eu.</span>
            </div>
        </div>
    </div>
    @endsection

    
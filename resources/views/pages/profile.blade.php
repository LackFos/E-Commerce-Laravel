@extends('index')

@section('page')
<nav class="p-4 bg-white">
    <div class="container flex items-center justify-between gap-20 mx-auto">
        <!-- Logo atau Nama Aplikasi -->
        <div>
            <a href="/" class="text-lg font-semibold text-black">Logo</a>
        </div>
        <!-- Item Navbar -->
        <div class="">
            <input type="text" class="p-2 border border-solid rounded-lg w-[815px]" placeholder="Cari...">
        </div>
        <div class="flex items-center gap-6">
            <!-- Search -->

            <!-- Cart -->
            <div class="mr-6">
                <a href="/cart" class="text-black">Keranjang</a>
            </div>
            <div class='w-px h-10 bg-gray-200'></div>

            <!-- Profile -->
            <div>
                <a href="/profile" class="text-black">Profil</a>
            </div>
        </div>
    </div>
</nav>
<div class='flex items-center justify-center py-10'>
    <div class='flex w-3/4'>
         <div class='flex flex-col justify-start gap-6'>
            <div class='flex flex-col bg-white border border-gray-100 border-solid w-80 rounded-2xl'>
                <div class='flex items-center justify-center h-32'>John Doe</div>
                <div class='flex items-center justify-center h-16'>Profil Akun</div>
                <div class='flex items-center justify-center h-16'>Detail Transaksi</div>
            </div>
            <div class='flex items-center justify-center h-16 bg-white rounded-2xl'>Detail Transaksi</div>
         </div>
    </div>
</div>

@endsection
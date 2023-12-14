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
            <input type="text" class="w-[155%] p-2 border border-solid rounded-lg" placeholder="Cari...">
        </div>
        <div class="flex items-center gap-6">
            <!-- Search -->

            <!-- Cart -->
            <div class="mr-6">
                <a href="/cart" class="text-black"><img src="{{ asset('icons/cart.svg') }}" alt=""></a>
            </div>
            <div class='flex justify-center w-px h-10 bg-gray-200'></div>

            <!-- Profile -->
            <div class='flex items-center justify-start gap-4'>
                <div class='w-10 h-10 bg-gray-300 rounded-full'></div>
                <a href="/profile" class="text-black">Profil</a>
            </div>
        </div>
    </div>
</nav>
<div class='flex items-center justify-center py-10'>
    <div class='flex w-3/4 gap-6'>
         <div class='flex flex-col justify-start w-1/4 gap-6'>
            <div class='flex flex-col w-full bg-white border border-gray-100 border-solid rounded-2xl'>
                <div class='flex items-center justify-start h-32 gap-6 p-6'><div class='w-20 h-20 bg-gray-300 rounded-full'></div><span>John Doe</span></div>
                <div class='flex items-center justify-start h-16 gap-4 px-6 py-4'><img src="{{ asset('icons/profile.svg') }}" alt=""><a href="{{ route('profile.account') }}"  class='text-base text-black'>Profil Akun</a></div>
                <div class='flex items-center justify-start h-16 gap-4 px-6 py-4'><img src="{{ asset('icons/document.svg') }}" alt=""><a href="{{ route('profile.transaction') }}" class='text-base text-black'>Detail Transaksi</a></div>
            </div>
            <div class='flex items-center justify-start h-16 gap-4 px-6 py-4 bg-white rounded-2xl'><img src="{{ asset('icons/logout.svg') }}" alt=""><a href='/' class='text-base text-red-500'>Keluar akun</a></div>
         </div>
         <div class='flex flex-col w-full gap-6'>
            @yield('profile-content')
         </div>
    </div>
</div>

@endsection
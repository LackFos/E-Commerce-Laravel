@props(['username', 'image'])



<nav class="bg-white p-4">
    <div class="container mx-auto flex items-center justify-between gap-20">
        <!-- Logo atau Nama Aplikasi -->
        <div>
            <a href="/" class="text-lg font-semibold text-black">Logo</a>
        </div>
        <!-- Item Navbar -->
        <div class="">
            <input type="text" class="w-[155%] rounded-lg border border-solid p-2" placeholder="Cari...">
        </div>
        <div class="flex items-center gap-6">
            <!-- Search -->

            <!-- Cart -->
            <div class="mr-6">
                <a href="/cart" class="text-black"><img src="{{ asset('icons/cart.svg') }}" alt=""></a>
            </div>

            <div class='flex h-10 w-px justify-center bg-gray-200'></div>

            <!-- Profile -->
            <div class='flex items-center justify-start gap-4'>
                <div class='h-10 w-10 rounded-full bg-gray-300'></div>
                <a href="/profile" class="text-black">Profil</a>
            </div>
        </div>
    </div>
</nav>

<div class='flex min-h-[calc(100vh-300px)] items-center justify-center py-10'>
    <div class='flex w-3/4 gap-6'>
        <div class='flex w-1/4 flex-col justify-start gap-6'>
            <div class='flex w-full flex-col rounded-2xl border border-solid border-gray-100 bg-white'>
                <div class='flex h-32 items-center justify-start gap-6 p-6'>
                    <img src={{ asset($image) }} class='h-20 w-20 rounded-full bg-gray-300'></img><span>{{ $username }}</span>
                </div>
                <div class='flex h-16 items-center justify-start gap-4 px-6 py-4'>
                    <x-icons.user />
                    <a href="{{ route('profile') }}" class='text-base text-black'>Profil Akun</a>
                </div>
                <div class='flex h-16 items-center justify-start gap-4 px-6 py-4'>
                    <x-icons.document />
                    <a href="/profile/orders/menunggu-pembayaran" class='text-base text-black'>Daftar Pesanan</a>
                </div>
            </div>

            <form action={{ route('logout') }} method="POST" class='flex h-16 items-center rounded-2xl bg-white px-6'>
                @csrf
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <button class="flex gap-4" type="submit">
                    <x-icons.logout />
                    <div class='text-base text-red-500'>Keluar akun</div>
                </button>
            </form>
        </div>

        <div class='flex w-full flex-col gap-6'>
            {{ $slot }}
        </div>
    </div>
</div>

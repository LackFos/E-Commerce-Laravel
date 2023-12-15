@props(['username', 'image'])



@include('partial.navbar')

<div class='flex min-h-[calc(100vh-300px)] items-center justify-center py-10'>
    <div class='flex w-[1440px] gap-6'>
        <div class='flex flex-col justify-start w-1/4 gap-6'>
            <div class='flex flex-col w-full bg-white border border-gray-100 border-solid rounded-2xl'>
                <div class='flex items-center justify-start h-32 gap-6 p-6'>
                    <img src={{ asset($image) }} class='w-20 h-20 bg-gray-300 rounded-full'></img><span>{{ $username }}</span>
                </div>
                <div class='flex items-center justify-start h-16 gap-4 px-6 py-4'>
                    <x-icons.user />
                    <a href="{{ route('profile') }}" class='text-base text-black'>Profil Akun</a>
                </div>
                <div class='flex items-center justify-start h-16 gap-4 px-6 py-4'>
                    <x-icons.document />
                    <a href="/profile/orders/menunggu-pembayaran" class='text-base text-black'>Daftar Pesanan</a>
                </div>
            </div>

            <form action={{ route('logout') }} method="POST" class='flex items-center h-16 px-6 bg-white rounded-2xl'>
                @csrf
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <button class="flex gap-4" type="submit">
                    <x-icons.logout />
                    <div class='text-base text-red-500'>Keluar akun</div>
                </button>
            </form>
        </div>

        <div class='flex flex-col w-full gap-6'>
            {{ $slot }}
        </div>
    </div>
</div>

@props(['username', 'image'])

<div class='flex justify-center py-10'>
    <div class='flex w-[1440px] gap-6'>
        <div class='flex w-1/4 flex-col justify-start gap-6'>
            <div class='flex w-full flex-col rounded-2xl border border-solid border-gray-100 bg-white'>
                <div class='flex h-32 items-center justify-start gap-6 p-6'>
                    <img src={{ asset($image) }} class='h-20 w-20 rounded-full bg-white'></img><span>{{ $username }}</span>
                </div>
                <div class='flex h-16 items-center justify-start gap-4 px-6 py-4'>
                    <x-icons.user />
                    <a href="{{ route('profile') }}" class='text-base text-black'>Profil Akun</a>
                </div>
                <div class='flex h-16 items-center justify-start gap-4 px-6 py-4'>
                    <x-icons.document />
                    <a href="/profile/orders/pending" class='text-base text-black'>Daftar Pesanan</a>
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

@extends('index')

@section('page')
    <x-layout.profile :username="$user->username" :image="$user->image">
        <span class='text-2xl font-bold'>Profile Akun</span>

        <div class='flex flex-col w-full gap-8 p-6 bg-white rounded-2xl'>
            <div class='flex flex-col justify-start gap-4 w-fit'>
                <img src={{ asset($user->image) }} class='object-cover w-40 h-40 bg-gray-300 rounded-full'></img>
                <span class='flex justify-center text-base font-semibold text-primary'>Ganti Foto Profil</span>
            </div>
            <form action="">
                <div class='flex flex-col gap-6'>
                    <div class='flex justify-start gap-6 pr-16'>
                        <div class='flex items-center justify-start w-60'><span>Nama</span></div>
                        <input type="text" name='nama' placeholder="Nama" class='w-[500px] px-4 py-1 border border-solid rounded-lg' value={{ $user->username }}>
                    </div>
                    <div class='flex justify-start gap-6 pr-16'>
                        <div class='flex items-center justify-start w-60'><span>Email</span></div>
                        <input type="text" name='Email' placeholder="Email" class='w-[500px] px-4 py-1 border border-solid rounded-lg' value={{ $user->email }}>
                    </div>
                    <div class='flex justify-start gap-6 pr-16'>
                        <div class='flex items-center justify-start w-60'><span>Nomor Handphone</span></div>
                        <input type="text" name='Nomor Handphone' placeholder="Nomor Handphone" class='w-[500px] px-4 py-1 border border-solid rounded-lg' value={{ $user->phone_number }}>
                    </div>
                    <div class='flex justify-start gap-6 pr-16'>
                        <div class='flex items-center justify-start w-60'><span></span></div>
                        <button type="submit" class="px-6 py-2 rounded-full bg-primary"><span class='text-sm font-medium text-white'>Simpan</span></button>
                    </div>
                </div>
            </form>
        </div>
    </x-layout.profile>
@endsection

@extends('index')

@section('page')
    <x-layout.profile :username="$user->username" :image="$user->image">
        <span class='text-2xl font-bold'>Profile Akun</span>

        <div class='flex w-full flex-col gap-8 rounded-2xl bg-white p-6'>
            <div class='flex w-fit flex-col justify-start gap-4'>
                <img src={{ asset($user->image) }} class='h-40 w-40 rounded-full bg-white'></img>
                <span class='flex justify-center text-base font-semibold text-primary'>Ganti Foto Profil</span>
            </div>
            <form action="">
                <div class='flex flex-col gap-6'>
                    <div class='flex justify-start gap-6 pr-16'>
                        <div class='flex w-60 items-center justify-start'><span>Nama</span></div>
                        <input type="text" name='nama' placeholder="Nama" class='w-[500px] rounded-lg border border-solid px-4 py-1' value={{ $user->username }}>
                    </div>
                    <div class='flex justify-start gap-6 pr-16'>
                        <div class='flex w-60 items-center justify-start'><span>Email</span></div>
                        <input type="text" name='Email' placeholder="Email" class='w-[500px] rounded-lg border border-solid px-4 py-1' value={{ $user->email }}>
                    </div>
                    <div class='flex justify-start gap-6 pr-16'>
                        <div class='flex w-60 items-center justify-start'><span>Nomor Handphone</span></div>
                        <input type="text" name='Nomor Handphone' placeholder="Nomor Handphone" class='w-[500px] rounded-lg border border-solid px-4 py-1'
                            value={{ $user->phone_number }}>
                    </div>
                    <div class='flex justify-start gap-6 pr-16'>
                        <div class='flex w-60 items-center justify-start'><span></span></div>
                        <button type="submit" class="rounded-full bg-primary px-6 py-2"><span class='text-sm font-medium text-white'>Simpan</span></button>
                    </div>
                </div>
            </form>
        </div>
    </x-layout.profile>
@endsection

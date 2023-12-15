@extends('index')

@section('page')
    <x-layout.profile :username="$user->username" :image="$user->image">
        <span class='text-2xl font-bold'>Profile Akun</span>

        <div class='flex flex-col w-full gap-8 p-6 bg-white rounded-2xl'>
            <div class='flex flex-col justify-start gap-4 w-fit'>
                <img src={{ asset($user->image) }} class='w-40 h-40 bg-white rounded-full'></img>
                <label for="fileInput" class="flex justify-center font-semibold cursor-pointer text-primary">
                    Ganti Foto Profil
                    <input type="file" id="fileInput" name="FotoProfil" class="absolute top-0 left-0 w-0 h-0 opacity-0" />
                </label>
            </div>
            <form action="">
                <div class='flex flex-col gap-6'>
                    <div class='flex justify-start gap-6 pr-16'>
                        <div class='flex items-center justify-start w-60'><span>Nama</span></div>
                        <input type="text" name='nama' placeholder="Nama" class='w-[500px] rounded-lg border border-solid px-4 py-1' value={{ $user->username }}>
                    </div>
                    <div class='flex justify-start gap-6 pr-16'>
                        <div class='flex items-center justify-start w-60'><span>Email</span></div>
                        <input type="text" name='Email' placeholder="Email" class='w-[500px] rounded-lg border border-solid px-4 py-1' value={{ $user->email }}>
                    </div>
                    <div class='flex justify-start gap-6 pr-16'>
                        <div class='flex items-center justify-start w-60'><span>Nomor Handphone</span></div>
                        <input type="text" name='Nomor Handphone' placeholder="Nomor Handphone" class='w-[500px] rounded-lg border border-solid px-4 py-1'
                            value={{ $user->phone_number }}>
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

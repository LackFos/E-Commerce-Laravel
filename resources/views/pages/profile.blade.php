@extends('index')

@section('page')
    <x-layout.profile :username="$user->username" :image="$user->image">

        <div class='flex flex-col gap-6 rounded-2xl bg-white p-6'>
            <h1>Profile Akun</h1>

            <form class='flex flex-col gap-8' action="">
                <div class='flex w-fit flex-col gap-4'>
                    <img src={{ asset($user->image) }} class='h-40 w-40 rounded-full bg-white'></img>

                    <label for="fileInput" class="flex cursor-pointer justify-center font-semibold text-primary">
                        Ganti Foto Profil
                        <input type="file" id="fileInput" name="FotoProfil" class="absolute left-0 top-0 h-0 w-0 opacity-0" accept="image/*" />
                    </label>
                </div>

                <div class='flex flex-col gap-6'>
                    <div class='flex gap-6 pr-16'>
                        <div class='flex w-60 items-center'><span>Nama</span></div>
                        <input type="text" name='nama' placeholder="Nama" class='w-[500px] rounded-lg border border-solid px-4 py-1' value={{ $user->username }}>
                    </div>
                    <div class='flex gap-6 pr-16'>
                        <div class='flex w-60 items-center'><span>Email</span></div>
                        <input type="text" name='Email' placeholder="Email" class='w-[500px] rounded-lg border border-solid px-4 py-1' value={{ $user->email }}>
                    </div>
                    <div class='flex gap-6 pr-16'>
                        <div class='flex w-60 items-center'><span>Nomor Handphone</span></div>
                        <input type="text" name='Nomor Handphone' placeholder="Nomor Handphone" class='w-[500px] rounded-lg border border-solid px-4 py-1'
                            value={{ $user->phone_number }}>
                    </div>

                    <div class='flex gap-6 pr-16'>
                        <div class='flex w-60 items-center'><span></span></div>
                        <button type="submit" class="rounded-full bg-primary px-6 py-2"><span class='text-sm font-medium text-white'>Simpan</span></button>
                    </div>
                </div>
            </form>
        </div>
    </x-layout.profile>
@endsection

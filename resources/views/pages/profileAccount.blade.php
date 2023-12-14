@extends('components.profile')
@section('profile-content')
<span class='text-2xl font-bold'>Profile Akun</span>
            <div class='flex flex-col w-full gap-8 p-6 bg-white rounded-2xl'>
                <div class='flex flex-col justify-start gap-4 w-fit'>
                    <div class='w-40 h-40 bg-gray-300 rounded-full'></div>
                    <span class='flex justify-center text-base font-semibold text-primary'>Ganti Foto Profil</span>
                </div>
                <div class='flex flex-col gap-6'>
                    <div class='flex justify-start gap-6 pr-16'>
                        <div class='flex items-center justify-start w-60'><span>Nama</span></div>
                        <input type="text" name='nama' class='w-4/5 px-4 py-1 border border-solid rounded-lg'>
                    </div>
                    <div class='flex justify-start gap-6 pr-16'>
                        <div class='flex items-center justify-start w-60'><span>Email</span></div>
                        <input type="text" name='Email' class='w-4/5 px-4 py-1 border border-solid rounded-lg'>
                    </div>
                    <div class='flex justify-start gap-6 pr-16'>
                        <div class='flex items-center justify-start w-60'><span>Nomor Handphone</span></div>
                        <input type="text" name='Nomor Handphone' class='w-4/5 px-4 py-1 border border-solid rounded-lg'>
                    </div>
                </div>
            </div>
@endsection


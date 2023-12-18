@extends('index')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-red-600">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@section('page')
    @if (session('success'))
        <x-alert :message="session('success')" />
    @endif

    @if (session('error'))
        <x-alert :message="session('error')" />
    @endif


    <x-layout.profile :username="$user->username" :image="$user->image">

        <div class='flex flex-col gap-6 p-6 bg-white rounded-2xl'>
            <h1>Profile Akun</h1>

            <form class='flex flex-col gap-8' action="{{ route('profile.update') }}" method='POST' enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                <div class='flex flex-col gap-4 w-fit'>
                    <img id='imagePreview' src={{ asset($user->image) }} class='object-cover w-40 h-40 bg-white rounded-full'></img>

                    <label for="imageInput" class="flex justify-center font-semibold cursor-pointer text-primary">
                        Ganti Foto Profil
                        <input type="file" id="imageInput" name="image" class="absolute top-0 left-0 w-0 h-0 opacity-0" accept="image/*" />
                    </label>
                </div>

                <div class='flex flex-col gap-6'>
                    <div class='flex gap-6 pr-16'>
                        <div class='flex items-center w-60'><span>Nama</span></div>
                        <input type="text" name='username' placeholder="Nama" class='w-[500px] rounded-lg border border-solid px-4 py-1' value={{ $user->username }}>
                    </div>
                    <div class='flex gap-6 pr-16'>
                        <div class='flex items-center w-60'><span>Email</span></div>
                        <input type="text" name='email' placeholder="Email" class='w-[500px] rounded-lg border border-solid px-4 py-1' value={{ $user->email }}>
                    </div>
                    <div class='flex gap-6 pr-16'>
                        <div class='flex items-center w-60'><span>Nomor Handphone</span></div>
                        <input type="text" name='phone_number' placeholder="Nomor Handphone" class='w-[500px] rounded-lg border border-solid px-4 py-1'
                            value={{ $user->phone_number }}>
                    </div>

                    <div class='flex gap-6 pr-16'>
                        <div class='flex items-center w-60'></div>
                        <button type="submit" class="px-6 py-2 text-sm font-medium text-white rounded-full bg-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </x-layout.profile>
@endsection

@extends('index')

@section('page')
    <main>
        <<<<<<< Updated upstream <div
            class='absolute left-1/2 top-1/2 flex translate-x-[-50%] translate-y-[-50%] flex-col items-center rounded-[40px] bg-white p-20'>
            <form action="" method="post" class='flex flex-col gap-6'>
                @csrf
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                <div class='flex justify-center'>
                    <h1>LOGO</h1>
                </div>

                <div class='flex flex-col gap-4'>
                    <input
                        class='h-14 w-96 rounded-2xl border border-solid border-gray-300 bg-white px-6 py-3 focus:border-primary focus:shadow-input focus:outline-none'
                        name="username" type="text" placeholder='Nama' value="{{ old('username') }}" required>
                    name="username" type="text" placeholder='Nama' value="{{ old('username') }}" required>
                    @error('username')
                        <p class="text-red-600">{{ $message }}</p>
                    @enderror

                    <input
                        class='h-14 w-96 rounded-2xl border border-solid border-gray-300 bg-white px-6 py-3 focus:border-primary focus:shadow-input focus:outline-none'
                        name="email" type="email" placeholder='Email' value="{{ old('email') }}" required>
                    @error('email')
                        <p class="text-red-600">{{ $message }}</p>
                    @enderror

                    <input
                        class='h-14 w-96 rounded-2xl border border-solid border-gray-300 bg-white px-6 py-3 focus:border-primary focus:shadow-input focus:outline-none'
                        name="phone_number" type="tel" pattern="[0-9]{9,15}" placeholder='Nomor Handphone'
                        value="{{ old('phone_number') }}" required>
                    @error('phone_number')
                        <p class="text-red-600">{{ $message }}</p>
                    @enderror

                    <input
                        class='h-14 w-96 rounded-2xl border border-solid border-gray-300 bg-white px-6 py-3 focus:border-primary focus:shadow-input focus:outline-none'
                        name="phone_number" type="tel" pattern="[0-9]{9,15}" placeholder='Nomor Handphone'
                        value="{{ old('phone_number') }}" required>
                    @error('phone_number')
                        <p class="text-red-600">{{ $message }}</p>
                    @enderror

                    <input
                        class='h-14 w-96 rounded-2xl border border-solid border-gray-300 bg-white px-6 py-3 focus:border-primary focus:shadow-input focus:outline-none'
                        name="password" type="password" placeholder='Password' required>
                    @error('password')
                        <p class="text-red-600">{{ $message }}</p>
                    @enderror

                    <input
                        class='h-14 w-96 rounded-2xl border border-solid border-gray-300 bg-white px-6 py-3 focus:border-primary focus:shadow-input focus:outline-none'
                        name="confirm_password" type="password" placeholder='Ulangi Password' required>
                    @error('confirm_password')
                        name="confirm_password" type="password" placeholder='Ulangi Password' required>
                        @error('confirm_password')
                            <p class="text-red-600">{{ $message }}</p>
                        @enderror
                        =======
                        <div
                            class='absolute left-1/2 top-1/2 flex w-[567px] translate-x-[-50%] translate-y-[-50%] flex-col items-center rounded-[40px] bg-white p-20'>
                            <form action="" method="" class='flex flex-col gap-6'>
                                <div class='flex justify-center'>
                                    <h1>LOGO</h1>
                                </div>

                                <div class='flex flex-col gap-4'>
                                    <input
                                        class='h-14 w-96 rounded-2xl border border-solid border-gray-100 bg-white px-6 py-3 focus:border-primary focus:shadow-input focus:outline-none'
                                        name="username" type="text" placeholder='Username'>
                                    <input
                                        class='h-14 w-96 rounded-2xl border border-solid border-gray-100 bg-white px-6 py-3 focus:border-primary focus:shadow-input focus:outline-none'
                                        name="email" type="text" placeholder='Email'>
                                    <input
                                        class='h-14 w-96 rounded-2xl border border-solid border-gray-100 bg-white px-6 py-3 focus:border-primary focus:shadow-input focus:outline-none'
                                        name="password" type="password" placeholder='Password'>
                                    <input
                                        class='h-14 w-96 rounded-2xl border border-solid border-gray-100 bg-white px-6 py-3 focus:border-primary focus:shadow-input focus:outline-none'
                                        name="ConfirmPassword" type="password" placeholder='Confirm Password'>
                                </div>
                                <div>
                                    <button
                                        class='h-14 w-96 rounded-2xl bg-primary text-base font-semibold text-white hover:bg-opacity-75'>Masuk</button>
                                </div>

                                <div class='flex justify-center gap-2'>
                                    <a class='text-base'>Sudah punya akun? <a href='/login'
                                            class='text-base font-semibold text-primary'>Login Sekarang</a></a>
                                </div>
                                >>>>>>> Stashed changes
                        </div>


                        <div>
                            <button
                                class='h-14 w-96 rounded-2xl bg-primary text-base font-semibold text-white hover:bg-opacity-75'>Daftar
                                Akun</button>
                        </div>

                        <div class='flex justify-center'>
                            <a class='text-base'>Sudah punya akun? <a href='/login'
                                    class='text-base font-semibold text-primary'>Login Sekarang</a></a>
                        </div>
                    </div>
                </form>
                </div>
        </main>
    @endsection

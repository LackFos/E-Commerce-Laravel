@extends('index')

@section('page')
    <main>
        <div class='absolute left-1/2 top-1/2 flex w-[567px] translate-x-[-50%] translate-y-[-50%] flex-col items-center rounded-[40px] bg-white p-20'>
            <form action="" method="post" class='flex flex-col gap-6'>
                @csrf

                <div class='flex justify-center'>
                    <h1>LOGO</h1>
                </div>

                <div class='flex flex-col gap-4'>
                    <input class='px-6 py-3 bg-white border border-gray-100 border-solid h-14 w-96 rounded-2xl focus:border-primary focus:shadow-input focus:outline-none' name="email"
                        type="text" placeholder='Email'>
                    <input class='px-6 py-3 bg-white border border-gray-100 border-solid h-14 w-96 rounded-2xl focus:border-primary focus:shadow-input focus:outline-none'
                        name="password" type="password" placeholder='Password'>
                    @error('email')
                        <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class='flex flex-col gap-8'>
                    <div class='flex justify-between'>
                        <div class='flex items-center'>
                            <input type="checkbox" id="rememberMe" name="remember">
                            <label for="rememberMe" class='block ml-2 text-base text-black'>Remember me</label>
                        </div>
                        <span class='text-base text-primary'>Lupa Kata Sandi?</span>
                    </div>

                    <div>
                        <button class='text-base font-semibold text-white h-14 w-96 rounded-2xl bg-primary hover:bg-opacity-75'>Masuk</button>
                    </div>

                    <div class='flex justify-center gap-2'>
                        <a class='text-base'>Belum punya akun? <a href='/register' class='text-base font-semibold text-primary'>Daftar Sekarang</a></a>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection

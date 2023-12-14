@extends('index')

@section('page')
    <main>
<<<<<<< Updated upstream
        <div
            class='absolute left-1/2 top-1/2 flex translate-x-[-50%] translate-y-[-50%] flex-col items-center rounded-[40px] bg-white p-20'>
            <form action="" method="post" class='flex flex-col gap-6'>
=======
        <div class='w-[567px] p-20 rounded-[40px] bg-white absolute translate-x-[-50%] translate-y-[-50%] flex flex-col items-center top-1/2 left-1/2'>
             <form action="" method="post" class='flex flex-col gap-6'>
>>>>>>> Stashed changes
                @csrf
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                <div class='flex justify-center'>
                    <h1>LOGO</h1>
                </div>
<<<<<<< Updated upstream

                <div class='flex flex-col gap-4'>
                    <input
                        class='h-14 w-96 rounded-2xl border border-solid border-gray-300 bg-white px-6 py-3 focus:border-primary focus:shadow-input focus:outline-none'
                        name="email" type="text" placeholder='Email' required>
                    @error('email')
                        <p class="text-red-600">{{ $message }}</p>
                    @enderror
                    <input
                        class='h-14 w-96 rounded-2xl border border-solid border-gray-300 bg-white px-6 py-3 focus:border-primary focus:shadow-input focus:outline-none'
                        name="password" type="password" placeholder='Password' required>
                    @error('email')
                        <p class="text-red-600">{{ $message }}</p>
                    @enderror
=======
                
                 <div class='flex flex-col gap-4'>
                     <input class='px-6 py-3 bg-white border border-gray-100 border-solid focus:border-primary focus:outline-none focus:shadow-input w-96 h-14 rounded-2xl' name="email" type="text" placeholder='Email'>
                     <input class='px-6 py-3 bg-white border border-gray-100 border-solid focus:border-primary focus:outline-none focus:shadow-input w-96 h-14 rounded-2xl' name="password" type="password" placeholder='Password'>
                     @error('email')
                            <p class="text-red-600">{{ $message }}</p>
                        @enderror
>>>>>>> Stashed changes
                </div>

                <div class='flex flex-col gap-8'>
                    <div class='flex justify-between'>
                        <div class='flex items-center'>
                            <input type="checkbox" id="rememberMe" name="remember" class="h-4 w-4">
                            <label for="rememberMe" class='ml-2 block text-base text-black'>Remember me</label>
                        </div>
                        <span class='text-base text-primary'>Lupa Kata Sandi?</span>
                    </div>

                    <div>
                        <button
                            class='h-14 w-96 rounded-2xl bg-primary text-base font-semibold text-white hover:bg-opacity-75'>Masuk</button>
                    </div>
<<<<<<< Updated upstream

                    <div class='flex justify-center'>
                        <a class='text-base'>Belum punya akun?<a href='/register'
                                class='text-base font-semibold text-primary'>Daftar Sekarang</a></a>
=======
                    
                    <div class='flex justify-center gap-2'>
                        <a class='text-base'>Belum punya akun?   <a href='/register' class='text-base font-semibold text-primary'>Daftar Sekarang</a></a>
>>>>>>> Stashed changes
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection

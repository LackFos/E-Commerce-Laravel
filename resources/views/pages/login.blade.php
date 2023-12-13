@extends('index')

@section('page')
    <main>
        <div class='w-3/5 p-20 rounded-[40px] bg-white absolute translate-x-[-50%] translate-y-[-50%] flex flex-col items-center top-1/2 left-1/2'>
             <form action="" method="post" class='flex flex-col gap-6'>
                @csrf
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                <div class='flex justify-center'>
                    <h1>LOGO</h1>
                </div>
                
                 <div class='flex flex-col gap-4'>
                     <input class='px-6 py-3 bg-white border border-gray-100 border-solid focus:border-primary focus:outline-none focus:shadow-input w-96 h-14 rounded-2xl' name="email" type="text" placeholder='Email'>
                     @error('email')
                            <p class="text-red-600">{{ $message }}</p>
                        @enderror
                     <input class='px-6 py-3 bg-white border border-gray-100 border-solid focus:border-primary focus:outline-none focus:shadow-input w-96 h-14 rounded-2xl' name="password" type="password" placeholder='Password'>
                     @error('email')
                            <p class="text-red-600">{{ $message }}</p>
                        @enderror
                </div>

                <div class='flex flex-col gap-8'>
                    <div class='flex justify-between'>
                        <div class='flex'>
                            <input type="checkbox" id="rememberMe" name="remember" class="w-6 h-6 focus:text-primary focus:shadow-input" >
                            <label for="rememberMe" class='block ml-2 text-base text-black'>Remember me</label>
                        </div>
                        <span class='text-base text-primary'>Lupa Kata Sandi?</span>
                    </div>
                    
                    <div>
                        <button class='text-base font-semibold text-white hover:bg-opacity-75 w-96 h-14 rounded-2xl bg-primary'>Masuk</button>
                    </div>
                    
                    <div class='flex flex-col justify-center'>

                        <button href="/register" type="submit" class='text-base'>Belum punya akun? <span href='/register' class='text-base font-semibold text-primary'>Daftar Sekarang</span></button>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
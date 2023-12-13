@extends('index')

@section('page')
    <main>
        <div class='w-3/5 p-20 rounded-[40px] bg-white absolute translate-x-[-50%] translate-y-[-50%] flex flex-col items-center top-1/2 left-1/2'>
             <div class='flex flex-col gap-6'>
                <div class='flex justify-center'>
                    <h1>LOGO</h1>
                </div>
                 <div class='flex flex-col gap-4'>
                     <input class='px-6 py-3 bg-white border border-gray-100 border-solid focus:border-primary focus:outline-none focus:shadow-input w-96 h-14 rounded-2xl' type="text" placeholder='Email'>
                     <input class='px-6 py-3 bg-white border border-gray-100 border-solid focus:border-primary focus:outline-none focus:shadow-input w-96 h-14 rounded-2xl' type="password" placeholder='Password'>
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
                    <div class='flex justify-center'>
                        <span class='text-base'>Belum punya akun? <span class='text-base font-semibold text-primary'>Daftar Sekarang</span></span>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@extends('index')

@section('page')
    <main>
        <div class='w-3/5 p-20 rounded-[40px] bg-white absolute translate-x-[-50%] translate-y-[-50%] flex flex-col items-center top-1/2 left-1/2'>
             <form action="" method="" class='flex flex-col gap-6'>
                <div class='flex justify-center'>
                    <h1>LOGO</h1>
                </div>
                
                 <div class='flex flex-col gap-4'>
                 <input class='px-6 py-3 bg-white border border-gray-100 border-solid focus:border-primary focus:outline-none focus:shadow-input w-96 h-14 rounded-2xl' name="username" type="text" placeholder='Username'>
                     <input class='px-6 py-3 bg-white border border-gray-100 border-solid focus:border-primary focus:outline-none focus:shadow-input w-96 h-14 rounded-2xl' name="email" type="text" placeholder='Email'>
                     <input class='px-6 py-3 bg-white border border-gray-100 border-solid focus:border-primary focus:outline-none focus:shadow-input w-96 h-14 rounded-2xl' name="password" type="password" placeholder='Password'>
                     <input class='px-6 py-3 bg-white border border-gray-100 border-solid focus:border-primary focus:outline-none focus:shadow-input w-96 h-14 rounded-2xl' name="ConfirmPassword" type="password" placeholder='Confirm Password'>
                </div>               
                    <div>
                        <button class='text-base font-semibold text-white hover:bg-opacity-75 w-96 h-14 rounded-2xl bg-primary'>Masuk</button>
                    </div>
                    
                    <div class='flex justify-center'>
                        <a class='text-base'>Sudah punya akun?   <a href='/login' class='text-base font-semibold text-primary'>Login Sekarang</a></a>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
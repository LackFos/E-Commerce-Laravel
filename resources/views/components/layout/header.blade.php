<header class="flex justify-center bg-white">
    <nav class="flex h-[72px] max-w-[1440px] items-center">
        <div class="container flex items-center justify-between gap-20 mx-auto">
            <!-- Logo atau Nama Aplikasi -->
            <div>
                <a href="/" class="text-lg font-semibold">Logo</a>
            </div>
            <!-- Item Navbar -->
            <div class="w-full">
                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg" placeholder="Cari...">
            </div>

            <div class="flex items-center justify-between gap-6">
                <!-- Search -->
                @if ($user)
                <!-- Cart -->
                <a href="/cart" class="text-black"><x-icons.cart /></a>
                
                <div class='flex flex-shrink-0 w-px h-10 bg-gray-200'></div>

                <!-- Profile -->
                <a href="/profile" class="flex items-center gap-2">
                    <img class="w-10 h-10 bg-gray-200 rounded-full" src={{ asset($user->image) }} alt="">
                    <span class="">{{$user->username}}</span>
                </a>
                @else
                    <!-- Cart -->
                    <a href="/cart" class="text-black"><x-icons.cart /></a>
                    <div class='flex flex-shrink-0 w-px h-10 bg-gray-200'></div>

                    <!-- Profile -->
                    <div class='flex items-center justify-start gap-4'>
                        <a href="/login" class='px-6 py-2 rounded-full bg-primary'><span class='text-sm font-medium text-white'>Login</span></a>
                    </div>
                @endif
            </div>
        </div>
    </nav>
</header>

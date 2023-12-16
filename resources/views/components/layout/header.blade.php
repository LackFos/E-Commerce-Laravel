<header class="flex justify-center bg-white">
    <nav class="flex h-[72px] w-full max-w-[1440px] items-center">
        <div class="container mx-auto flex items-center justify-between gap-20">
            <!-- Logo atau Nama Aplikasi -->
            <div>
                <a href="/" class="text-lg font-semibold">Logo</a>
            </div>
            <!-- Item Navbar -->
            <div class="w-80">
                <input type="text" class="w-full rounded-lg border border-gray-300 px-4 py-2" placeholder="Cari...">
            </div>

            <div class="flex items-center justify-between gap-6">
                <!-- Search -->
                @if ($user)
                    <!-- Cart -->
                    <a href="/cart" class="text-black"><x-icons.cart /></a>

                    <div class='flex h-10 w-px flex-shrink-0 bg-gray-200'></div>

                    <!-- Profile -->
                    <a href="/profile" class="flex items-center gap-2">
                        <img class="h-10 w-10 rounded-full bg-gray-200" src={{ asset($user->image) }} alt="">
                        <span class="">{{ $user->username }}</span>
                    </a>
                @else
                    <!-- Cart -->
                    <a href="/cart" class="text-black"><x-icons.cart /></a>
                    <div class='flex h-10 w-px flex-shrink-0 bg-gray-200'></div>

                    <!-- Profile -->
                    <div class='flex items-center justify-start gap-4'>
                        <a href="/login" class='rounded-full bg-primary px-6 py-2'><span class='text-sm font-medium text-white'>Login</span></a>
                    </div>
                @endif
            </div>
        </div>
    </nav>
</header>

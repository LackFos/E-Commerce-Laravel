<header class="flex justify-center">
    <nav class="w-[1440px] bg-white p-4">
        <div class="container mx-auto flex items-center justify-between gap-20">
            <!-- Logo atau Nama Aplikasi -->
            <div>
                <a href="/" class="text-lg font-semibold text-black">Logo</a>
            </div>
            <!-- Item Navbar -->
            <div class="">
                <input type="text" class="w-[155%] rounded-lg border border-solid p-2" placeholder="Cari...">
            </div>
            <div class="flex items-center gap-6">
                <!-- Search -->

                <!-- Cart -->
                <div class="mr-6">
                    <a href="/cart" class="text-black"><x-icons.cart /></a>
                </div>
                <div class='flex h-10 w-px justify-center bg-gray-200'></div>

                <!-- Profile -->
                <div class='flex items-center justify-start gap-4'>
                    <a href="/login" class='rounded-full bg-primary px-6 py-2'><span class='text-sm font-medium text-white'>Login</span></a href="/login">
                </div>
            </div>
        </div>
    </nav>
</header>

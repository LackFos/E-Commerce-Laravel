<div class="h-screen border-t border-solid border-gray-100 p-6 bg-white w-full max-w-[284px] flex-">
    <!-- Sidebar content goes here -->
    <div class="flex flex-col gap-4">
        <ul>
            <li class="flex flex-col">
                <span class="flex gap-4 p-4 font-semibold text-black px hover:text-gray-300">
                    <x-icons.document/>
                    Toko
                </span>
                <a href="/demodashboard" class="w-full py-2 px-14"> Beranda</a>
                <a href="/demodashboard/banner" class="w-full py-2 px-14">Banner</a>
            </li>
        </ul>
        <ul>
            <li class="flex flex-col">
                <span class="flex gap-4 p-4 font-semibold text-black px hover:text-gray-300">
                    <x-icons.document/>
                    Pesanan
                </span>
                <a href="#" class="w-full py-2 px-14">Riwayat Pesanan</a>
            </li>
        </ul>
        <ul>
            <li class="flex flex-col">
                <span class="flex gap-4 p-4 font-semibold text-black px hover:text-gray-300">
                    <x-icons.document/>
                    Produk
                </span>
                <a href="/demodashboard/product" class="w-full py-2 px-14">Daftar Produk</a>
                <a href="/demodashboard/product/add" class="w-full py-2 px-14">Tambah Produk</a>
                <a href="/demodashboard/product/category" class="w-full py-2 px-14">Tambah Kategori</a>
            </li>
        </ul>
    </div>
</div>
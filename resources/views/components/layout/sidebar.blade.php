<div class="flex fixed h-full w-full max-w-[284px] border-t border-solid border-gray-100 bg-white p-6">
    <!-- Sidebar content goes here -->
    <div class="flex flex-col gap-4">
        <ul>
            <li class="flex flex-col">
                <span class="flex gap-4 p-4 font-semibold text-black px">
                    <x-icons.home />
                    Toko
                </span>
                <a href="/dashboard" class="w-full py-2 px-14 hover:text-gray-400"> Beranda</a>
                <a href="/dashboard/banner" class="w-full py-2 px-14 hover:text-gray-400">Banner</a>
            </li>
        </ul>
        <ul>
            <li class="flex flex-col">
                <span class="flex gap-4 p-4 font-semibold text-black px">
                    <x-icons.paper-dark />
                    Pesanan
                </span>
                <a href="/dashboard/pesanan/?status=pending" class="w-full py-2 px-14 hover:text-gray-400">Riwayat Pesanan</a>
            </li>
        </ul>
        <ul>
            <li class="flex flex-col">
                <span class="flex gap-4 p-4 font-semibold text-black px">
                    <x-icons.product />
                    Produk
                </span>
                <a href="/dashboard/produk" class="w-full py-2 px-14 hover:text-gray-400">Daftar Produk</a>
                <a href="/dashboard/produk/tambah" class="w-full py-2 px-14 hover:text-gray-400">Tambah Produk</a>
                <a href="/dashboard/kategori" class="w-full py-2 px-14 hover:text-gray-400">Tambah Kategori</a>
            </li>
        </ul>
        <ul>
            <li class="flex flex-col">
                <span class="flex gap-4 p-4 font-semibold text-black px">
                    <x-icons.card />
                    Others
                </span>
                <a href="/dashboard/rekening" class="w-full py-2 px-14 hover:text-gray-400">Rekening</a>
            </li>
        </ul>
    </div>
</div>

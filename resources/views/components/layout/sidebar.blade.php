<div class="flex h-screen w-full max-w-[284px] border-t border-solid border-gray-100 bg-white p-6">
    <!-- Sidebar content goes here -->
    <div class="flex flex-col gap-4">
        <ul>
            <li class="flex flex-col">
                <span class="flex gap-4 p-4 font-semibold text-black px">
                    <x-icons.document />
                    Toko
                </span>
                <a href="/dashboard" class="w-full py-2 px-14"> Beranda</a>
                <a href="/dashboard/banner" class="w-full py-2 px-14">Banner</a>
            </li>
        </ul>
        <ul>
            <li class="flex flex-col">
                <span class="flex gap-4 p-4 font-semibold text-black px">
                    <x-icons.document />
                    Pesanan
                </span>
                <a href="/dashboard/pesanan/?status=pending" class="w-full py-2 px-14">Riwayat Pesanan</a>
            </li>
        </ul>
        <ul>
            <li class="flex flex-col">
                <span class="flex gap-4 p-4 font-semibold text-black px">
                    <x-icons.document />
                    Produk
                </span>
                <a href="/dashboard/produk" class="w-full py-2 px-14">Daftar Produk</a>
                <a href="/dashboard/produk/tambah" class="w-full py-2 px-14">Tambah Produk</a>
                <a href="/dashboard/kategori" class="w-full py-2 px-14">Tambah Kategori</a>
            </li>
        </ul>
        <ul>
            <li class="flex flex-col">
                <span class="flex gap-4 p-4 font-semibold text-black px">
                    <x-icons.document />
                    Others
                </span>
                <a href="/dashboard/others" class="w-full py-2 px-14">Rekening</a>
            </li>
        </ul>
    </div>
</div>

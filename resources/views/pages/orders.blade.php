@extends('index')

@section('page')
    <x-layout.profile>
        <div class='flex w-full flex-col justify-start gap-8 rounded-2xl bg-white p-6'>
            <span class='ftext-xl font-bold'>Daftar Transaksi</span>
            <div class='flex gap-2'>
                <div
                    class='flex h-10 items-center justify-center rounded-full border border-solid border-gray-100 px-6 py-1'>
                    <a href="/profile/orders/menunggu-pembayaran">Menunggu Pembayaran</a>
                </div>
                <div
                    class='flex h-10 items-center justify-center rounded-full border border-solid border-gray-100 px-6 py-1'>
                    <a href="/profile/orders/menunggu-validasi">Menunggu Validasi</a>
                </div>
                <div
                    class='flex h-10 items-center justify-center rounded-full border border-solid border-gray-100 px-6 py-1'>
                    <a href="/profile/orders/berlangsung">Berlangsung</a>
                </div>
                <div
                    class='flex h-10 items-center justify-center rounded-full border border-solid border-gray-100 px-6 py-1'>
                    <a href="/profile/orders/selesai">Selesai</a>
                </div>
            </div>
        </div>

        <div class='flex w-full flex-col gap-6 rounded-2xl border border-solid border-gray-100 bg-white p-6'>
            <div class='flex justify-between'>
                <div class='flex items-center gap-6'>
                    <span class='text-base font-medium'>25 Juli 2023, 17:24 WIB</span>
                    <div
                        class='flex h-10 items-center justify-center rounded-full border border-none bg-orange-100 px-6 py-1'>
                        <span class='text-base text-orange-500'>Menunggu Pemabayaran</span>
                    </div>
                </div>
                <a href="/transactionDetail" class='text-base font-semibold text-primary'> Detail Transaksi</a>
            </div>
            <div class='flex justify-start gap-6'>
                <img src="{{ asset('image/cardigan.jpg') }}" alt="product" class='h-36 w-36 rounded-2xl'>
                <div class='flex flex-col justify-between'>
                    <span class='text-base font-medium'>Cardigan</span>
                    <div class='flex items-center justify-center rounded-full bg-gray-200 px-6 py-2'><span
                            class='text-black opacity-60'>Large</span></div>
                    <span class='text-lg font-bold'>Rp 100.000</span>
                </div>
            </div>
            <div class='flex justify-between py-4'>
                <span class='text-lg font-bold'>Total Pesanan</span>
                <span class='text-lg font-bold text-primary'>Rp 100.000</span>
            </div>
            <div class='flex justify-between py-4'>
                <div class='flex flex-col gap-4'>
                    <span class='text-xl font-bold'>Tampilkan Bukti Pembayaran</span>
                    <span>Transfer ke:</span>
                    <div>
                        <span>BCA: 16839472003(John Doe)</span>
                    </div>
                    <div>
                        <span>Mandiri: 16839472003(Chris)</span>
                    </div>
                </div>
                <div class='flex flex-col justify-end'>
                    <button class='rounded-full bg-primary px-6 py-2'><span class='text-sm font-medium text-white'>Upload
                            Bukti</span></button>
                </div>
            </div>
        </div>
    </x-layout.profile>
@endsection

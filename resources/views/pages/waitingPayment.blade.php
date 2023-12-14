<div class='flex flex-col w-full gap-6 p-6 bg-white border border-gray-100 border-solid rounded-2xl'>
    <div class='flex justify-between'>
        <div class='flex items-center gap-6'>
            <span class='text-base font-medium'>25 Juli 2023, 17:24 WIB</span>
            <div class='flex items-center justify-center h-10 px-6 py-1 bg-orange-100 border border-none rounded-full'><span class='text-base text-orange-500'>Menunggu Pemabayaran</span></div>
        </div>
        <a href="/transactionDetail" class='text-base font-semibold text-primary'> Detail Transaksi</a>
    </div>
    <div class='flex justify-start gap-6'>
        <img src="{{asset('image/cardigan.jpg')}}" alt="product" class='w-36 h-36 rounded-2xl'>
        <div class='flex flex-col justify-between'>
            <span class='text-base font-medium'>Cardigan</span>
            <div class='flex items-center justify-center px-6 py-2 bg-gray-200 rounded-full'><span class='text-black opacity-60'>Large</span></div>
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
            <button class='px-6 py-2 rounded-full bg-primary'><span class='text-sm font-medium text-white'>Upload Bukti</span></button>
        </div>
    </div>
</div>
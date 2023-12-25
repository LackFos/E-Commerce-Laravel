@extends('index')

@section('page')
    <div class="flex gap-2">
        <div class="flex w-full max-w-[1440px]">
            <x-layout.sidebar />
            <x-layout.content>
                <div class="flex flex-col w-full gap-6 p-10">
                    <h2>Rekening</h2>
                    
                    <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                        <div class='flex min-h-[64px] items-center gap-6 px-6'>
                        <div class='flex h-full min-h-[64px] w-full'>
                            <div class='flex flex-col items-start justify-center w-full font-bold g-4'>Nama</div>
                            <div class='flex flex-col items-start justify-center w-full font-bold g-4'>Bank</div>
                            <div class='flex flex-col items-start justify-center w-full font-bold g-4'>Nomor Rekening</div>
                            <div class='flex flex-col items-start justify-center w-full font-bold g-4'>Aksi</div>
                        </div>
                    </div>

                    @foreach ($paymentAccounts as $paymentAccount)
                    <form action="{{ route('paymentaccount.destroy', ['paymentAccount' => $paymentAccount->id]) }}" method="POST"
                        class='flex min-h-[64px] items-center gap-6 border-t border-solid border-gray-200 px-6'>
                            @csrf
                            @method('DELETE')

                            <div class='flex h-full min-h-[64px] w-full'>
                                <div class='flex flex-col items-start justify-center w-full font-light text-gray-500'>
                                    <span class="text-gray-600 rounded-lg w-fit">{{ $paymentAccount->bank_owner }}</span>
                                </div>
                                <div class='flex flex-col items-start justify-center w-full font-light text-gray-500'>
                                    <span class="text-gray-600 rounded-lg w-fit">{{ $paymentAccount->bank_name }}</span>
                                </div>
                                <div class='flex flex-col items-start justify-center w-full font-light text-gray-500'>
                                    <div class="flex gap-4">
                                        <span class="text-gray-600 rounded-lg w-fit">{{ $paymentAccount->bank_number }}</span>
                                    </div>
                                </div>
                                <div class='flex flex-col items-start justify-center w-full'>
                                    <div class='flex items-center justify-start w-full gap-4'>
                                        <button class="px-2 py-2 rounded-lg bg-primary hover:bg-opacity-80" type="submit"><x-icons.trash /></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    @endforeach

                    <div class='flex min-h-[64px] items-center gap-6 border-t border-solid border-gray-200 px-6'>
                        <a href="{{ route('paymentaccount.create') }}" class="font-medium text-primary">+ Tambah Rekening</a>
                    </div>
                </div>
            </div>
        </x-layout.content>
        </div>
    </div>
@endsection

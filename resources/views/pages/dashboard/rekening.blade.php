@extends('index')

@section('page')
    <div class="flex gap-2">
        <div class="flex w-full max-w-[1440px] justify-center">
            <x-layout.sidebar />
            <form class="flex w-full flex-col gap-6 p-10">
                <h2>Rekening</h2>

                <div class="flex w-full flex-col rounded-lg border border-solid border-gray-200 bg-white">
                    <div class='flex min-h-[64px] items-center gap-6 px-6'>
                        <div class='flex h-full min-h-[64px] w-full'>
                            <div class='g-4 flex w-full flex-col items-start justify-center font-bold'>Nama</div>
                            <div class='g-4 flex w-full flex-col items-start justify-center font-bold'>Bank</div>
                            <div class='g-4 flex w-full flex-col items-start justify-center font-bold'>Nomor Rekening</div>
                            <div class='g-4 flex w-full flex-col items-start justify-center font-bold'>Aksi</div>
                        </div>
                    </div>
                    <div class='flex min-h-[64px] items-center gap-6 border-t border-solid border-gray-200 px-6'>
                        <div class='flex h-full min-h-[64px] w-full'>
                            <div class='flex w-full flex-col items-start justify-center font-light text-gray-500'>
                                <span class="w-fit rounded-lg text-gray-600">John Doe</span>
                            </div>
                            <div class='flex w-full flex-col items-start justify-center font-light text-gray-500'>
                                <span class="w-fit rounded-lg text-gray-600">BCA</span>
                            </div>
                            <div class='flex w-full flex-col items-start justify-center font-light text-gray-500'>
                                <div class="flex gap-4">
                                    <span class="w-fit rounded-lg text-gray-600">122344</span>
                                </div>
                            </div>
                            <div class='flex w-full flex-col items-start justify-center'>
                                <div class='flex w-full items-center justify-start gap-4'>
                                    <button class="rounded-lg bg-primary px-2 py-2 hover:bg-opacity-80" type="submit"><x-icons.trash /></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='flex min-h-[64px] items-center gap-6 border-t border-solid border-gray-200 px-6'>
                        <a href="{{ route('paymentaccount.create') }}" class="font-medium text-primary">+ Tambah Rekening</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

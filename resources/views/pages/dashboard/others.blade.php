@extends('index')

@section('page')
    <div class="flex gap-2">
        <div class="flex w-full max-w-[1440px] justify-center">
            <x-layout.sidebar />
            <form class="flex flex-col w-full gap-6 p-10">
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
                    <div class='flex min-h-[64px] items-center gap-6 border-t border-solid border-gray-200 px-6'>
                        <div class='flex h-full min-h-[64px] w-full'>
                            <div class='flex flex-col items-start justify-center w-full font-light text-gray-500'>
                                <span class="text-gray-600 rounded-lg w-fit">John Doe</span>
                            </div>
                            <div class='flex flex-col items-start justify-center w-full font-light text-gray-500'>
                                <span class="text-gray-600 rounded-lg w-fit">BCA</span>
                            </div>
                            <div class='flex flex-col items-start justify-center w-full font-light text-gray-500'>
                                <div class="flex gap-4">
                                    <span class="text-gray-600 rounded-lg w-fit">122344</span>
                                 </div>
                            </div>
                            <div class='flex flex-col items-start justify-center w-full'>
                                <div class='flex items-center justify-start w-full gap-4'>
                                    <button class="px-2 py-2 rounded-lg bg-primary hover:bg-opacity-80" type="submit"><x-icons.trash/></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='flex min-h-[64px] items-center gap-6 border-t border-solid border-gray-200 px-6'>
                        <a href="/dashboard/others/tambah" class="font-medium text-primary">+ Tambah Rekening</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

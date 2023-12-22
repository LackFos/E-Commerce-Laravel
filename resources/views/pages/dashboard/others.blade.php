@extends('index')

@section('page')
    <div class="flex gap-2">
        <x-layout.sidebar />
        <div class="flex w-full max-w-[1440px] justify-center p-10">
            <form class="flex flex-col w-full gap-6">
                <div class="flex flex-col w-full bg-white border border-gray-200 border-solid rounded-lg">
                    <span class="flex justify-start p-6 text-lg font-bold bg-white border-b border-gray-200 border-solid rounded-t-lg">Others</span>
                    <div class="flex flex-col w-full px-6 py-4">
                        <div class="flex flex-col w-full gap-4 p-6 bg-white border border-gray-200 border-solid rounded-lg">
                            <div class="flex gap-6">
                                <div class="flex items-center justify-start w-full gap-2">
                                    <span class="w-64 font-medium">Nama Penerima:</span>
                                    <span>John Doe</span>
                                </div>
                                <button href="" class="flex justify-end w-1/2 font-semibold text-primary">Hapus</button>
                            </div>
                            <div class="flex gap-6">
                                <div class="flex items-center justify-start w-full gap-2">
                                    <span class="w-64 font-medium">Nomor Rekening:</span>
                                    <span class="font-bold">1821829383903</span>
                                </div>
                            </div>
                            <div class="flex gap-6">
                                <div class="flex items-center justify-start w-full gap-2">
                                    <span class="w-64 font-medium">Nama Bank:</span>
                                    <span>BCA</span>
                                </div>
                            </div>
                            <div class="flex gap-6">
                                <div class="flex items-center justify-start w-full gap-2">
                                    <span class="w-64 font-medium">Nomor Whatsapp:</span>
                                    <span>081237849393</span>
                                </div>
                            </div>
                            <div class="flex gap-6">
                                <div class="flex items-center justify-start w-full gap-2">
                                    <span class="w-64 font-medium">Link URL Instagram:</span>
                                    <span>https://www.instagram.com/nanotech.dev?utm_source=ig_web_button_share_sheet&igsh=OGQ5ZDc2ODk2ZA==</span>
                                </div>
                            </div>
                            <div class="flex gap-6">
                                <div class="flex items-center justify-start w-full gap-2">
                                    <span class="w-64 font-medium">Link URL Facebook:</span>
                                    <span>https://www.instagram.com/nanotech.dev?utm_source=ig_web_button_share_sheet&igsh=OGQ5ZDc2ODk2ZA==</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="w-full px-6 py-2 font-semibold leading-8 text-center text-white rounded-lg bg-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection

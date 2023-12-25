@extends('index')

@section('page')
    <div class="flex gap-2">
        <div class="flex w-full max-w-[1440px] justify-center">
            <x-layout.sidebar />
            <form method="POST" action="{{ route('paymentaccount.store') }}" class="flex w-full flex-col gap-6 p-10">
                @csrf
                <div class="flex w-full justify-start gap-2">
                    <span class="font-semibold"><a href="/dashboard/rekening" class="text-black">Rekening</a></span>
                    <span>•</span>
                    <span aria-current="page" class="text-gray-500 active:font-semibold">Tambah Rekening</span>
                </div>
                <div class="flex w-full flex-col rounded-lg border border-solid border-gray-200 bg-white">
                    <span class="flex justify-start rounded-t-lg border-b border-solid border-gray-200 bg-white p-6 text-lg font-bold">Tambah Rekening</span>
                    <div class="flex gap-6 px-6 py-2">
                        <div class="flex w-1/2 flex-col justify-start gap-1">
                            <span class="flex font-medium">Nama Penerima:</span>
                        </div>
                        <input placeholder="Masukan Nama Penerima" class="w-1/2 rounded-lg border border-solid border-gray-200 px-4 py-1" type="text" name="bank_owner"
                            name="bank_owner" value="{{ old('bank_owner') }}">
                    </div>
                    <div class="flex gap-6 px-6 py-2">
                        <div class="flex w-1/2 flex-col justify-start gap-1">
                            <span class="font-medium leading-8">Nama Bank:</span>
                        </div>
                        <input placeholder="Masukan Nama Bank" class="w-1/2 rounded-lg border border-solid border-gray-200 px-4 py-1" type="text" name="bank_name"
                            value="{{ old('bank_name') }}">
                    </div>
                    <div class="flex gap-6 px-6 py-2">
                        <div class="flex w-1/2 flex-col justify-start gap-1">
                            <span class="font-medium leading-8">No Rekening:</span>
                        </div>
                        <input placeholder="Masukan No Rekening" class="w-1/2 rounded-lg border border-solid border-gray-200 px-4 py-1" type="texxt" name="bank_number"
                            value="{{ old('bank_number') }}">
                    </div>
                </div>
                <button type="submit" class="w-full rounded-lg bg-primary px-6 py-2 text-center font-semibold leading-8 text-white">Simpan</button>
            </form>
        </div>
    </div>
@endsection

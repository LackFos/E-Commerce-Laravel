@extends('index')

@section('page')
    <div class="flex justify-center my-10">
        <div class="flex max-w-[1440px] w-full flex-col gap-10">
            <x-layout.banner/>
            <x-layout.flash-sale/>
            <x-layout.category/>
            <x-layout.new-product/>
        </div>
    </div>
@endsection

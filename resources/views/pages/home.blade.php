@extends('index')

@section('page')
    <div class="flex justify-center my-10">
        <div class="flex max-w-[1440px] flex-col gap-10">
            @include('components.banner')
            @include('components.flash-sale')
            @include('components.category')
            @include('components.new-product')
        </div>
    </div>
@endsection

@extends('index')

@section('page')
    <div class="my-10 flex justify-center">
        <div class="flex w-full max-w-[1440px] flex-col gap-10">
            <x-banner />
            <x-flash-sale :flashsale="$flashsale" />
            <x-categories :categories="$categories" />
            <x-new-product :products="$latestProducts" />
        </div>
    </div>
@endsection

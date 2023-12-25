@extends('index')

@section('page')
    <x-layout.user>
        <div class="my-10 flex justify-center">
            <div class="flex w-full max-w-[1440px] flex-col gap-10">
                <x-banner :banners="$banners" />
                <x-flash-sale :flashsale="$flashsale" />
                <x-categories :categories="$categories" />
                <x-new-product :products="$latestProducts" />
            </div>
        </div>
    </x-layout.user>
@endsection

@push('scripts')
    @vite('resources/js/swiper.js')
@endpush

@extends('components.profile')
@section('profile-content')

@include('partial.transactionList')
@php
$segment = request()->segment(4);
@endphp

@if($segment == 'waitingValidation')
    @include('pages.waitingValidation')
@elseif($segment == 'onGoing')
    @include('pages.onGoing')
@elseif($segment == 'done')
    @include('pages.done')
@else
    @include('pages.waitingPayment')
@endif
@endsection


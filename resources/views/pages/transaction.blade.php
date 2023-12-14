@extends('components.profile')
@section('profile-content')

@include('partial.transactionList')
    @include('pages.waitingPayment')
@endsection


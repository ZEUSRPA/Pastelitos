@extends('layouts.master')

@section('content')

<link href="{{ asset('css/zeus.css') }}" rel="stylesheet">
    <coupons-details v-bind:coupon="{{$coupon}}"/>
@endsection

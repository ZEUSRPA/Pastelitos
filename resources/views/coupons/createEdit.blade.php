@extends('layouts.master')

@section('content')
<link href="{{ asset('css/zeus.css') }}" rel="stylesheet">
    <coupons-create-edit v-bind:coupon="{{$coupon}}"/>
@endsection
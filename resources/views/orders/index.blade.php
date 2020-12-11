@extends('layouts.master')

@section('content')
<link href="{{ asset('css/zeus.css') }}" rel="stylesheet">
    <orders-index v-bind:orders="{{$orders}}"/>
@endsection

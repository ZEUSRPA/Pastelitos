@extends('layouts.master')

@section('content')

<link href="{{ asset('css/zeus.css') }}" rel="stylesheet">
    <orders-details v-bind:order="{{$order}}"/>
@endsection
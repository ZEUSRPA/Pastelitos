@extends('layouts.master')

@section('content')
<link href="{{ asset('css/zeus.css') }}" rel="stylesheet">
    <orders-create-edit v-bind:order="{{$order}}"/>
@endsection
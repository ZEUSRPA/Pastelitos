@extends('layouts.master')

@section('content')

<link href="{{ asset('css/zeus.css') }}" rel="stylesheet">
    <devolutions-details v-bind:devolution="{{$devolution}}"/>
@endsection

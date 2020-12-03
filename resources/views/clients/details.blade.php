@extends('layouts.master')

@section('content')

<link href="{{ asset('css/zeus.css') }}" rel="stylesheet">
    <clients-details v-bind:client="{{$client}}"/>
@endsection

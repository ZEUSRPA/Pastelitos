@extends('layouts.master')

@section('content')

<link href="{{ asset('css/zeus.css') }}" rel="stylesheet">
    <sales-details v-bind:sale="{{$sale}}"/>
@endsection

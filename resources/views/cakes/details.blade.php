@extends('layouts.app')

@section('content')

<link href="{{ asset('css/zeus.css') }}" rel="stylesheet">
    <cakes-details v-bind:cake="{{$cake}}"/>
@endsection

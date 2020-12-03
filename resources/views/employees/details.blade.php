@extends('layouts.master')

@section('content')

<link href="{{ asset('css/zeus.css') }}" rel="stylesheet">
    <employees-details v-bind:employee="{{$employee}}"/>
@endsection

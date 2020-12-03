@extends('layouts.master')

@section('content')
<link href="{{ asset('css/zeus.css') }}" rel="stylesheet">
    <employees-create-edit v-bind:employee="{{$employee}}"/>
@endsection
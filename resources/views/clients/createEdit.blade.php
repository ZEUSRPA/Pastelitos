@extends('layouts.master')

@section('content')
<link href="{{ asset('css/zeus.css') }}" rel="stylesheet">
    <clients-create-edit v-bind:client="{{$client}}"/>
@endsection
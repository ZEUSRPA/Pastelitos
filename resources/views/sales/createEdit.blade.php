@extends('layouts.master')

@section('content')
<link href="{{ asset('css/zeus.css') }}" rel="stylesheet">
    <sales-create-edit v-bind:sale="{{$sale}}"/>
@endsection
@extends('layouts.master')

@section('content')
<link href="{{ asset('css/zeus.css') }}" rel="stylesheet">
    <devolutions-create-edit v-bind:devolution="{{$devolution}}"/>
@endsection
@extends('layouts.app')

@section('content')
<link href="{{ asset('css/zeus.css') }}" rel="stylesheet">
    <cakes-create-edit v-bind:cake="{{$cake}}"/>
@endsection

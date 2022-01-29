@extends('products/layout')

@section('navbar')
    @include('components.navbar')
@stop

@section('content')
    @include('components.product')
@stop

@section('footer')
    @include('components.footer')
@stop
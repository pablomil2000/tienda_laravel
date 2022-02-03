@extends('layout')

@section('navbar')
    @include('components.navbar')
@stop

{{-- @section('header')
    @include('components.header')
@stop --}}

@section('products')
    @include('components.carrito')
@stop

@section('footer')
    @include('components.footer')
@stop


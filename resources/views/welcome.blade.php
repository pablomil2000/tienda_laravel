@extends('layout')

@section('navbar')
    @include('components.navbar')
@stop

@section('header')
    {{-- @include('components.header') --}}

    @include('components.carrito')

@stop

@section('products')
    @include('components.products')
@stop

@section('footer')
    @include('components.footer')
@stop
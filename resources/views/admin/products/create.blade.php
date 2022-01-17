@extends('admin/layout')

@section('navbar')
    @include('components/navbar')
@stop
@section('footer')
    @include('components/footer')
@stop

@section('content')
    <h2>Alta de producto</h2>

    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div></form>

@stop


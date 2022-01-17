@extends('admin/layout')

@section('navbar')
    @include('components/navbar')
@stop
@section('footer')
    @include('components/footer')
@stop

@section('content')
<div class="container-lg">
    {{-- {{ dd($categories) }} --}}
    <h2>Alta de producto</h2>
    <form action="{{ route('admin.products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <p>Nombre</p>
            <input type="text" class="form-control" name="nombre" id="name" placeholder="" value="{{ old('nombre') }}">
            <p>Descripcion corta</p>
            <input type="text" name="intro_description" class="form-control" id="intro_description" aria-describedby="emailHelp" placeholder="">
            <p>Descripcion larga</p>
            <textarea class="form-control" name="full_description" id="full_description" cols="60" rows="10"></textarea>
            <p>Precio</p>
            <input type="text" name="price" class="form-control" id="price aria-describedby="emailHelp" placeholder="">
            <p>Categoria</p>
            <select type="text" name="category" id="" class="form-control">
                <option value="0">Sin categoria</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <br>
            <p>
                <input type="submit" class="btn btn-primary" value="Enviar">
            </p>
        </div>
    </form>
</div>

@stop


@extends('admin/layout')

@section('css')
    @include('admin/components/tablaCss')
@stop

@section('js')
    @include('admin/components/tablaJs')
@stop

@section('navbar')
    @include('components/navbar')
@stop
@section('footer')
    @include('components/footer')
@stop

@section('content')
    <div class="container-lg">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2>Employee <b>Details</b></h2>
                        </div>
                        <div class="col-sm-4">
                            <a href="{{ route('admin.products.create') }}"><button type="button"
                                    class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button></a>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Categria</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->intro_description }}</td>
                                <td>{{ $product->category_id }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <a href="{{ url('/admin/products/' . $product->id . '/edit') }}" class="edit">
                                        <i class="material-icons">&#xE254;</i>
                                    </a>

                                    <a href="{{ url('/admin/products/'.$product->id . '/imagenes') }}" class="succes">
                                        <i class="material-icons">image</i>
                                    </a>

                                    {{-- <a href="{{ url('/admin/products/'.$product->id.'/delete') }}" class="delete">
                                        <i class="material-icons">&#xE872;</i>
                                    </a> --}}
                                    <form action="{{ url('/admin/products/'.$product->id) }}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn btn-xs" title="Borrar producto" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $products->links() }}
            </div>
        </div>
    </div>
@stop

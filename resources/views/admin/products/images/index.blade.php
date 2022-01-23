@extends('admin/layout')

@section('navbar')
    @include('components/navbar')
@stop
@section('footer')
    @include('components/footer')
@stop

@section('content')
    <section class="features-icons bb-light text-center">
        <div class="container">
            <div class="section text-center">
                <h2 class="title">Imagenes del producto</b></h2>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="foto" required="required">
                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>Subir nueva imagen</button>
            </form>
            <a href="/admin/products" class="btn btn-warning"><i class="fas fa-arrow-left"></i>Volver</a>
        </div>
    </section>

    <section class="testimonials text-center bg-light">
        <div class="container">
            <div class="row">
                @foreach ($ProductImages as $imagen)
                    <div class="class panel-body">
                        <img width="225" src="{{ $imagen->getUrlAttribute(); }}" alt="">
                        <form action="" method="post">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="id_imagen_a_borrar" value="{{ $imagen->id }}">
                            <button class="btn btn-danger">
                                <i class="fa fa-trash"></i>Borrar imagen
                            </button>

                            @if ($imagen->destacada)
                            <a href="{{ url('/admin/product/'.$id.'/images/select/'.$imagen->id) }}"><button type="button" class="btn btn-danger btn-sm"><i class="material-icons">favorite</i></button></a>
                            @else
                            <a href="{{ url('/admin/product/'.$id.'/images/select/'.$imagen->id) }}" class="btn btn-primary btn-sm" rel="tolltip" title="Imagen destacada de este producto"><i class="material-icons">favorite</i></a>
                            @endif

                            
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@stop
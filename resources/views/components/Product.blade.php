<section class="testimonials text-center bg-light">
    <div class="container">
        <h2 class="mb-5">Productos</h2>
        <div class="row">
            {{-- {{ var_dump($product->productimages->first()) }} --}}
            <div class="col-lg-6">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="{{ $product->productimages->first()->image }}"
                        alt="..." />
                    <h4 style="color:#0b47ec">Producto: {{ $product->name }}</h4>
                    <p style="color:#ff8040">Categoria: {{ $product->category->name }}</p>
                    <p style="color:red">Precio: {{ $product->price }}€</p>
                    <p style="color:green" class="font-weight-light mb-0">Detalles:</p>
                    <p style="color:green" class="font-weight-light mb-0">{{ $product->full_description }}</p>

                    @if (auth()->check() && !auth()->user()->admin)
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                            data-target="#myModal">Comprar</button>
                    @endif

                    <a href="{{ route('home') }}"><button type="button"class="btn btn-outline-secondary">Volver</button></a>

                </div>
            </div>
        </div>
    </div>
</section>



@include('components.modalCarrito')

<section class="testimonials text-center bg-light">
    <div class="container">
        <h2 class="mb-5">Carrito</h2>
        <div class="row">
            @auth
                <?php $total = 0;?>
                {{-- @dd(auth()->user()->carrito->details) --}}
                <table>
                    <thead>
                        <td>Imagen</td>
                        <td>Producto</td>
                        <td>precio</td>
                        <td>Cantidad</td>
                        <td>subtodal</td>
                        <td>Operaciones</td>
                    </thead>
                    @foreach (auth()->user()->carrito->details as $details)
                        <tbody>
                            <td><img width="128" height="128" class="img-fluid"
                                    src="{{ $details->product->productimages->first()->image }}" alt="..." /></td>
                            <td>{{ $details->product->name }}</td>
                            <td>{{ $details->product->price }}</td>
                            <td>{{ $details->cantidad }}</td>
                            <td>{{ $details->cantidad * $details->product->price }}</td>
                            <td>
                                <a href="{{ url('products/' . $details->product->id) }}"><i
                                        class="fas fa-trash">ver</i></a>
                                <a href="{{ url('cart/' . $details->id . '/delete') }}"><i
                                        class="fas fa-pencil-ruler">borrar</i></a>
                            </td>
                        </tbody>
                        <?php $total+=$details->cantidad * $details->product->price; ?>
                    @endforeach
                    <tfoot>
                        <tr>
                            <td colspan="6"><h5>Nº de articulos: {{ auth()->user()->carrito->details->count() }}</h5></td>
                        </tr>
                        <tr>
                            <td colspan="6"><h5>Total a pagar: {{ $total }}</h5></td>
                        </tr>

                        <tr>
                            <td colspan="6">
                                @if (auth()->user()->carrito->details->count())
                                    <a href="{{ route('pedido') }}">Confirmar pedido</a>
                                @endif
                            </td>
                        </tr>

                        @isset ($aviso)
                            {{ $aviso }}
                        @endisset
                    </tfoot>
                </table>
            @endauth
        </div>
    </div>
</section>

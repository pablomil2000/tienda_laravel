<header class="masthead">
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="text-center text-white">
                    @auth
                    {{-- @dd(auth()->user()->carrito->details) --}}
                    <table>
                        <tr>
                            <td>Imagen</td>
                            <td>Producto</td>
                            <td>precio</td>
                            <td>Cantidad</td>
                            <td>subtodal</td>
                            <td>Operaciones</td>
                        </tr>
                        @foreach (auth()->user()->carrito->details as $details)
                            <tr>
                                <td><img width="128" height="128"class="img-fluid" src="{{ $details->product->productimages->first()->image }}" alt="..." /></td>
                                <td>{{ $details->product->name }}</td>
                                <td>{{ $details->product->price }}</td>
                                <td>{{ $details->cantidad }}</td>
                                <td>{{ $details->cantidad * $details->product->price}}</td>
                                <td>Operaciones.. </td>
                            </tr>
                        @endforeach
                    </table>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            {{-- @dd(auth()->user()->id_carrito) --}}
            <form action="{{ url('/cart') }}" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Cuanto quieres comprar?</h4>
                </div>
                <div class="modal-body">
                    <input class="form-control" type="number" name="cantidad" placeholder="Unidades">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Añadir</button>
                </div>
            </form>

        </div>

    </div>
</div>

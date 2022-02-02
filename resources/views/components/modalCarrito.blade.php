<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            {{-- @dd(auth()->user()->id_carrito) --}}
            <form action="{{ route('carrito.store') }}" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <input type="number" name="cantidad" class="form-label text-center" style="width:29em"
                    placeholder="Cantidad">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Añadir al carrito</button>
            </form>

        </div>

    </div>
</div>

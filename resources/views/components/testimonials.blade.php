<section class="testimonials text-center bg-light">
    <div class="container">
        <h2 class="mb-5">What people are saying...</h2>
        <div class="row">
            @foreach ($products as $product)
            {{-- {{ var_dump($product->productimages->first()) }} --}}
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="{{ $product->productimages->first()->image }}" alt="..." />
                        <h5>{{ $product->name }}</h5>
                        {{-- <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p> --}}
                    </div>
                </div>
            @endforeach
                {{-- {{ $products->links() }} --}}
        </div>
    </div>
</section>

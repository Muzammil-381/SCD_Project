<x-web-layout title="Detail -  MARK-X">
    <div class="container my-5">
        <div class="row">
            <!-- Product Image Section -->
            <div class="col-md-6">
                <div class="mb-4">
                @if($product->image)
                                <img class="img-fluid" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" >
                            @else
                                <span>No Image</span>
                            @endif	
                </div>
            </div>

            <!-- Product Information Section -->
            <div class="col-md-6">
                <h1 class="h3">{{ $product->name }}</h1>
                <p class="text-danger h4">{{$product->price}}</p>
                <p class="text-muted">
                    A brief description of the product goes here. Highlight the main features and benefits to engage customers.
                </p>
                <button class="btn btn-success btn-lg mb-3">Add to Cart</button>
                
                <div class="reviews">
                    <h5>Customer Reviews</h5>
                    <p class="text-warning">★★★★☆ (4.0)</p>
                </div>
            </div>
        </div>
    </div>
</x-web-layout>
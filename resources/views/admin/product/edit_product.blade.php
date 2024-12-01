<x-app-layout>
    <x-slot name="header">
        <div class="head">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('products.update', $product['id']) }}">
                @csrf
                @method('PUT') <!-- Required for PUT or PATCH -->
                <div class="form-group">
                    <label for="p_name">Product Name</label>
                    <input type="text" class="form-control" id="p_name" name="p_name" value="{{ $product['name'] }}" placeholder="Enter Product Name">
                </div>
                <div class="form-group">
                    <label for="p_image">Image</label>
                    <input type="text" class="form-control" id="p_image" name="p_image" value="{{ $product['image'] }}" placeholder="Enter Image URL">
                </div>
                <div class="form-group">
                    <label for="p_status">Status</label>
                    <input type="text" class="form-control" id="p_status" name="p_status" value="{{ $product['status'] }}" placeholder="Enter Status">
                </div>
                <div class="form-group">
                    <label for="p_price">Price</label>
                    <input type="number" class="form-control" id="p_price" name="p_price" value="{{ $product['price'] }}">
                </div>
                <div class="form-group">
                    <label for="p_details">Details</label>
                    <textarea class="form-control" name="p_details" id="p_details" rows="3">{{ $product['details'] }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</x-app-layout>

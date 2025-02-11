@extends('createEntryForm')
@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">
        Product Entry Form
    </h1>
    
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg p-4 bg-white rounded">
                <form action="/submit-form" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="product_name" class="form-label">Product Name:</label>
                        <input type="text" class="form-control" id="product_name" placeholder="Enter Product Name" name="product_name" required>
                    </div>

                    <div class="mb-3">
                            <label for="Catgory" class="form-label">Catrgory:</label>
                            <select class="form-select" id="Catgory" name="Catgory" required>
                                <option value="">Select Category</option>
                                <option value="Clothes">Clothes</option>
                                <option value="Eletronics">Eletronics</option>
                                <option value="Grocery">Grocery</option>
                                <option value="Furniture">Furniture</option>               
                            </select>
                        </div>

                    <div class="mb-3">
                        <label for="Price" class="form-label">Price:</label>
                        <input type="number" class="form-control" name="Price"  min="10" step="0.01" required>
                    </div>

                    <div class="mb-3">
                        <label for="Stock_Quantity" class="form-label">Stock_Quantity:</label>
                        <input type="number" class="form-control" name="Stock_Quantity" value="1" min="1" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

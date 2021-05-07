@extends('cms.layouts.index')
@section('title', 'Products')
@section('body')
    <div class="container pt-5">
        <h1>Edit Product</h1>
        <br>
        <br>
        <form method="post" action="{{ URL::route('cms.products.update', ['id' => $data->id ]) }}" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-sm-12">
                    <div class="mb-3">
                        <label for="productName" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="productName" value="{{ $data->name }}">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="mb-3">
                        <label for="productCategory" class="form-label">Category</label>
                        <input type="text" name="category" class="form-control" id="productCategory" value="{{ $data->category }}">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="mb-3">
                        <label for="productPrice" class="form-label">Price</label>
                        <input type="number" name="price" class="form-control" id="productPrice" value="{{ $data->price }}">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="mb-3">
                        <label for="productDetails" class="form-label">Details</label>
                        <input type="text" name="details" class="form-control" id="productDetails" value="{{ $data->details }}">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="mb-3">
                        <label for="productImage1" class="form-label">Image 1</label>
                        <input type="file" name="file1" class="form-control" id="productImage1" accept="image/*">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="mb-3">
                        <label for="productImage2" class="form-label">Image 2</label>
                        <input type="file" name="file2" class="form-control" id="productImage2" accept="image/*">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="mb-3">
                        <label for="productImage3" class="form-label">Image 3</label>
                        <input type="file" name="file3" class="form-control" id="productImage3" accept="image/*">
                    </div>
                </div>
            </div>
    
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        
    </div>
@endsection
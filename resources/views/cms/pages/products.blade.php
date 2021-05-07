@extends('cms.layouts.index')
@section('title', 'Products')
@section('body')
    <div class="container pt-5">
        <h1>Products</h1>
        <a href="{{ URL::route('cms.products.add') }}" class="btn btn-success">Add Product</a>
        <br>
        <br>

        <table class="table table-bordered">
            <tr>
                <th></th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Details</th>
                <th></th>
            </tr>
            @foreach ($data as $item)

            <tr>
                <td></td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->category }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->details }}</td>
                <td style="width: 175px">
                    <a href="{{ URL::route('cms.products.edit', ['id' => $item->id]) }}" class="btn btn-success">Update</a>
                    <a href="{{ URL::route('cms.products.destroy', ['id' => $item->id]) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
                
            @endforeach
            
        </table>
    </div>
@endsection
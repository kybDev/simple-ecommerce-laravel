@extends('cms.layouts.index')
@section('title', 'Products')
@section('body')
    <div class="container pt-5">
        <h1>Products</h1>
        <a class="btn btn-success">Add Product</a>
        <br>
        <br>

        <table class="table table-bordered">
            <tr>
                <th></th>
                <th>Name</th>
                <th></th>
            </tr>
            <tr>
                <td></td>
                <td>Egg</td>
                <th>
                    <a class="btn btn-success">Update</a>
                    <a class="btn btn-danger">Delete</a>
                </th>
            </tr>
        </table>
    </div>
@endsection
@extends('layouts.app')
@section('pagetitle')
    Edit Product
@endsection

@section('content')

@include('utilities.redirectmessage')

<div class="row">
    <div class="col-md-12">
        <div class="top-campaign">
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <h3 class="title-3 m-b-30">Edit Product</h3>
                </div>
                <div class="table-data__tool-right">
                    <a class="btn btn-danger au-btn--small" href="{{ url('products') }}">
                        <i class="fa fa-ban"></i> Cancel
                    </a>
                </div>
            </div>
            <div>
                <form action="{{ action('ProductsController@update', $product->id) }}" method="post" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label class=" form-control-label">Suppliers</label>
                        <select name="supplier_id" class="form-control" required>
                            @foreach ($suppliers as $supplier)
                            <option value="{{ $supplier->id }}" {{ $supplier->supplier_id == $supplier->id ? 'selected="selected"' : '' }}>{{ $supplier->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Product Category</label>
                        <select name="product_category_id" class="form-control" required>
                            @foreach ($productcategories as $category)
                            <option value="{{ $category->id }}" {{ $product->product_category_id == $category->id ? 'selected="selected"' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Name</label>
                        <input type="text" name="name" placeholder="Enter Name.." class="form-control" value="{{ $product->name }}" required>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Serial No.</label>
                        <input type="text" name="serial" placeholder="Enter Product Serial.." class="form-control" value="{{ $product->serial }}" required>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Description</label>
                        <input type="text" name="description" placeholder="Enter Description.." class="form-control" value="{{ $product->description }}" required>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Usage</label>
                        <input type="text" name="usage" placeholder="Enter Usage.." value="{{ $product->usage }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Product Status</label>
                        <select name="product_status" class="form-control" required>
                            <option {{ $product->product_status == 'available' ? 'selected="selected"' : '' }}>available</option>
                            <option {{ $product->product_status == 'unavailable' ? 'selected="selected"' : '' }}>unavailable</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Update product image</label>
                        <input type="file" name="product_image" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

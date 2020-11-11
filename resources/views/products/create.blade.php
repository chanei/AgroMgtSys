@extends('layouts.app')
@section('pagetitle')
    Create Product
@endsection

@section('content')

@include('utilities.redirectmessage')

<div class="row">
    <div class="col-md-12">
        <div class="top-campaign">
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <h3 class="title-3 m-b-30">Create New Product</h3>
                </div>
                <div class="table-data__tool-right">
                    <a class="btn btn-danger au-btn--small" href="{{ url('products') }}">
                        <i class="fa fa-ban"></i> Cancel
                    </a>
                </div>
            </div>
            <div>
                <form action="{{ url('products') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label class=" form-control-label">Product Category</label>
                        <select name="product_category_id" class="form-control" required>
                            @foreach ($productcategories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Name</label>
                        <input type="text" name="name" placeholder="Enter Name.." class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Description</label>
                        <input type="text" name="description" placeholder="Enter Description.." class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Usage</label>
                        <input type="text" name="usage" placeholder="Enter Usage.." class="form-control">
                    </div>
                    {{-- <div class="form-group">
                        <label class=" form-control-label">Upload product image</label>
                        <input type="text" name="product_image" class="form-control">
                    </div> --}}
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

@extends('layouts.app')
@section('pagetitle')
    Report Product
@endsection

@section('content')

@include('utilities.redirectmessage')

<div class="row">
    <div class="col-md-12">
        <div class="top-campaign">
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <h3 class="title-3 m-b-30">Report Product</h3>
                </div>
                <div class="table-data__tool-right">
                    <a class="btn btn-danger au-btn--small" href="{{ url('reportproducts') }}">
                        <i class="fa fa-ban"></i> Cancel
                    </a>
                </div>
            </div>
            <div>
                <form action="{{ url('reportproducts') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class=" form-control-label">Name</label>
                        <input type="text" name="name" placeholder="Enter Your Name.." class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Phone Number</label>
                        <input type="text" name="phone_number" placeholder="Enter Your Phone Number.." class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Product Name</label>
                        <input type="text" name="product_name" placeholder="Enter Product Name.." class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Product Dealer</label>
                        <input type="text" name="product_dealer" placeholder="Enter The Product Dealer.." class="form-control">
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Why are you reporting this product?</label>
                        <input type="text" name="reason" placeholder="Enter Your Reason.." class="form-control" required>
                    </div>
                    {{-- <div class="form-group">
                        <label class=" form-control-label">Upload Image</label>
                        <input type="file" name="product_image" class="form-control">
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

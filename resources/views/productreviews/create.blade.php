@extends('layouts.app')
@section('pagetitle')
    Create Product Review
@endsection

@section('content')

@include('utilities.redirectmessage')

<div class="row">
    <div class="col-md-12">
        <div class="top-campaign">
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <h3 class="title-3 m-b-30">Create New Review</h3>
                </div>
                <div class="table-data__tool-right">
                    <a class="btn btn-danger au-btn--small" href="{{ url('productreviews') }}">
                        <i class="fa fa-ban"></i> Cancel
                    </a>
                </div>
            </div>
            <div>
                <form action="{{ url('productreviews') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label class=" form-control-label">Product</label>
                        <select name="product_id" class="form-control" required>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Product Status</label>
                        <select name="product_status" class="form-control" required>
                            <option>Genuine</option>
                            <option>Counterfeit</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Product Rating</label>
                        <select name="rating" class="form-control">
                            <option value="1">1 star</option>
                            <option value="2">2 stars</option>
                            <option value="3">3 stars</option>
                            <option value="4">4 stars</option>
                            <option value="5">5 stars</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Review</label>
                        <input type="text" name="review" placeholder="Enter Review.." class="form-control">
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

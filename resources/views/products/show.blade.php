@extends('layouts.app')
@section('pagetitle')
Product Details
@endsection

@section('content')

@include('utilities.redirectmessage')

<div class="row">
    <div class="col-lg-12">
        <div class="top-campaign">
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <h3 class="title-3 m-b-30">Product Details - {{ $product->name }}</h3>
                </div>
            </div>
            <div class="table-responsive">
                <div class="row">
                    <div class="col-md-3">
                        @if($product->product_image == null)
                        <img src="{{ asset('template/images/icon/logo-mini.png') }}"style="width: 100%; height: auto;"/>
                        @else
                        <img src="{{ asset('uploads/products/'.$product->product_image) }}" style="width: 100%; height: auto;" />
                        @endif
                    </div>
                    <div class="col-md-4">
                        <p>Supplier</p>
                        <p>{{ $product->supplier->name }}</p>
                        <hr>
                        <p>Category</p>
                        <p>{{ $product->productcategory->name }}
                        <hr>
                        <p>Name</p>
                        <p>{{ $product->name }}</p>
                        <hr>
                        <p>Serial</p>
                        <p>{{ $product->serial }}</p>
                        <hr>
                    </div>
                    <div class="col-md-5">
                        <p>Description</p>
                        <p>{{ $product->description }}</p>
                        <hr>
                        <p>Usage</p>
                        <p>{{ $product->usage }}</p>
                        <hr>
                    </div>
                </div>

                <div class="row" style="margin-top: 100px">
                    <div class="col-md-12">
                        <h4>Product Reviews</h4>
                        <hr>
                    </div>
                    @foreach ($reviews as $review)
                    <div class="col-md-12">
                        <h5>
                            {{ $review->user->name.'  ' }}
                            @if($review->rating == 1)
                            <span class="fa fa-star"></span>
                            @elseif($review->rating == 2)
                            <span class="fa fa-star"></span><span class="fa fa-star"></span>
                            @elseif($review->rating == 3)
                            <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                            @elseif($review->rating == 4)
                            <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                            @elseif($review->rating == 5)
                            <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                            @else
                            @endif
                        </h5>
                        <br>
                        <p>{{ $review->review }}</p>
                        <hr>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

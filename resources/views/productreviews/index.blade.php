@extends('layouts.app')
@section('pagetitle')
Product Reviews
@endsection

@section('content')

@include('utilities.redirectmessage')

<div class="row">
    <div class="col-lg-12">
        <div class="top-campaign">
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <h3 class="title-3 m-b-30">Product Reviews</h3>
                </div>
                <div class="table-data__tool-right">
                    <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="{{ url('productreviews/create') }}">
                        <i class="zmdi zmdi-plus"></i>add item
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Product</th>
                            <th>Statius</th>
                            <th>Rating</th>
                            <th>Review</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productreviews as $review)
                        <tr>
                            <td>{{ $review->user->name }}</td>
                            <td>{{ $review->product->name }}</td>
                            <td>{{ $review->product_status }}</td>
                            <td>
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
                            </td>
                            <td>{{ $review->review }}</td>
                            <td>
                                <div class="table-data-feature">
                                    <a class="item" href="{{ action('ProductReviewsController@edit', $review->id) }}" title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </a>
                                    <button class="item" data-toggle="modal" data-target="#delete_modal{{ $review->id }}" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                </div>
                            </td>
                            @include('productreviews.modals.delete')
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection

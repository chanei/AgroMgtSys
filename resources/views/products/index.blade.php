@extends('layouts.app')
@section('pagetitle')
Products
@endsection

@section('content')

@include('utilities.redirectmessage')

<div class="row">
    <div class="col-lg-12">
        <div class="top-campaign">
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <h3 class="title-3 m-b-30">Products</h3>
                </div>
                @if(Auth::user()->isAdmin())
                <div class="table-data__tool-right">
                    <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="{{ url('products/create') }}">
                        <i class="zmdi zmdi-plus"></i>add new product
                    </a>
                </div>
                @endif
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Supplier</th>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Serial</th>
                            <th>Description</th>
                            <th>Usage</th>
                            <th>Status</th>
                            @if(Auth::user()->isAdmin())
                            <th></th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>
                                @if($product->product_image == null)
                                <img src="{{ asset('template/images/icon/logo-mini.png') }}" height="100" width="100" />
                                @else
                                <img src="{{ asset('uploads/products/'.$product->product_image) }}" height="100" width="100" />
                                @endif
                            </td>
                            <td>{{ $product->supplier->name }}</td>
                            <td>{{ $product->productcategory->name }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->serial }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->usage }}</td>
                            <td>
                                @if($product->product_status == 'available')
                                    <span class="badge badge-success">available</span>
                                @else
                                    <span class="badge badge-danger">unavailable</span>
                                @endif
                            </td>
                            @if(Auth::user()->isAdmin())
                            <td>
                                <div class="table-data-feature">
                                    <a class="item" href="{{ action('ProductsController@show', $product->id) }}" title="View">
                                        <i class="zmdi zmdi-eye"></i>
                                    </button>
                                    <a class="item" href="{{ action('ProductsController@edit', $product->id) }}" title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </a>
                                    <button class="item" data-toggle="modal" data-target="#delete_modal{{ $product->id }}" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                </div>
                            </td>
                            @include('products.modals.delete')
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection

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
                            <th>Category</th>
                            <th>Name</th>
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
                            <td>{{ $product->productcategory->name }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->usage }}</td>
                            <td>
                                @if($product->product_status == null)
                                Not set
                                @else
                                {{ $product->product_status }}
                                @endif
                            </td>
                            @if(Auth::user()->isAdmin())
                            <td>
                                <div class="table-data-feature">
                                    {{-- <button class="item" data-toggle="tooltip" data-placement="top" title="View">
                                        <i class="zmdi zmdi-eye"></i>
                                    </button> --}}
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

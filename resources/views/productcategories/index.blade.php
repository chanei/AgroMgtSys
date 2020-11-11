@extends('layouts.app')
@section('pagetitle')
Product Categories
@endsection

@section('content')

@include('utilities.redirectmessage')

<div class="row">
    <div class="col-lg-12">
        <div class="top-campaign">
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <h3 class="title-3 m-b-30">Product Categories</h3>
                </div>
                @if(Auth::user()->isAdmin())
                <div class="table-data__tool-right">
                    <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="{{ url('productcategories/create') }}">
                        <i class="zmdi zmdi-plus"></i>add category
                    </a>
                </div>
                @endif
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            @if(Auth::user()->isAdmin())
                            <th></th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productcategories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            @if(Auth::user()->isAdmin())
                            <td>
                                <div class="table-data-feature">
                                    <a class="item" href="{{ action('ProductCategoriesController@edit', $category->id) }}" title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </a>
                                    <button class="item" data-toggle="modal" data-target="#delete_modal{{ $category->id }}" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                </div>
                            </td>
                            @include('productcategories.modals.delete')
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

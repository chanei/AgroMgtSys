@extends('layouts.app')
@section('pagetitle')
    Dashboard
@endsection

@section('content')
<div class="top-campaign">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <h3 class="title-3 m-b-30">Dashboard</h3>
                    <p class="title-2">Welcome back {{ Auth::user()->name }}!</p>
                </div>
                <div class="table-data__tool-right"></div>
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="title-5">Users</h3>
                    <br>
                    <h3 class="title-1">{{ $users }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="title-5">Product Categories</h3>
                    <br>
                    <h3 class="title-1">{{ $productcategories }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="title-5">Products</h3>
                    <br>
                    <h3 class="title-1">{{ $products }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

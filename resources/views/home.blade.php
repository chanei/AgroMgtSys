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
        <div class="col-lg-12">
            <br>
            <br>
            <h4>Check Product</h4>
            <br>
            <form method="POST" action="{{ url('checkproduct') }}" autocomplete="off">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="serial" placeholder="Enter Product Serial Number... " required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
    <br>
    @if(Auth::user()->isAdmin())
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="title-5">Users</h3>
                    <br>
                    <h3 class="title-1">{{ $users }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="title-5">Suppliers</h3>
                    <br>
                    <h3 class="title-1">{{ $suppliers }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="title-5">Categories</h3>
                    <br>
                    <h3 class="title-1">{{ $productcategories }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="title-5">Products</h3>
                    <br>
                    <h3 class="title-1">{{ $products }}</h3>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection

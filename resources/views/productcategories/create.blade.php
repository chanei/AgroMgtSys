@extends('layouts.app')
@section('pagetitle')
    Create Product Category
@endsection

@section('content')

@include('utilities.redirectmessage')

<div class="row">
    <div class="col-md-12">
        <div class="top-campaign">
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <h3 class="title-3 m-b-30">Create New Product Category</h3>
                </div>
                <div class="table-data__tool-right">
                    <a class="btn btn-danger au-btn--small" href="{{ url('productcategories') }}">
                        <i class="fa fa-ban"></i> Cancel
                    </a>
                </div>
            </div>
            <div>
                <form action="{{ url('productcategories') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label class=" form-control-label">Name</label>
                        <input type="text" name="name" placeholder="Enter Name.." class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Description</label>
                        <input type="text" name="description" placeholder="Enter Description.." class="form-control">
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

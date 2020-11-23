@extends('layouts.app')
@section('pagetitle')
    Create Supplier
@endsection

@section('content')

@include('utilities.redirectmessage')

<div class="row">
    <div class="col-md-12">
        <div class="top-campaign">
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <h3 class="title-3 m-b-30">Create New Supplier</h3>
                </div>
                <div class="table-data__tool-right">
                    <a class="btn btn-danger au-btn--small" href="{{ url('suppliers') }}">
                        <i class="fa fa-ban"></i> Cancel
                    </a>
                </div>
            </div>
            <div>
                <form action="{{ url('suppliers') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class=" form-control-label">Name</label>
                        <input type="text" name="name" placeholder="Enter Name.." class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Contact</label>
                        <input type="text" name="contact" placeholder="Enter Contact.." class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Address</label>
                        <input type="text" name="address" placeholder="Enter Address.." class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Registration Number</label>
                        <input type="text" name="registration_no" placeholder="Enter Reg. Number.." class="form-control">
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Upload copy of trading license</label>
                        <input type="file" name="trading_license" class="form-control">
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

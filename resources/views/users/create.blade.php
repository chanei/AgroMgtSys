@extends('layouts.app')
@section('pagetitle')
    Create User
@endsection

@section('content')

@include('utilities.redirectmessage')

<div class="row">
    <div class="col-md-12">
        <div class="top-campaign">
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <h3 class="title-3 m-b-30">Create New User</h3>
                </div>
                <div class="table-data__tool-right">
                    <a class="btn btn-danger au-btn--small" href="{{ url('users') }}">
                        <i class="fa fa-ban"></i> Cancel
                    </a>
                </div>
            </div>
            <div>
                <form action="" method="post" autocomplete="off">
                    <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Email</label>
                        <input type="email" id="nf-email" name="nf-email" placeholder="Enter Email.." class="form-control">
                        <span class="help-block">Please enter your email</span>
                    </div>
                    <div class="form-group">
                        <label for="nf-password" class=" form-control-label">Password</label>
                        <input type="password" id="nf-password" name="nf-password" placeholder="Enter Password.." class="form-control">
                        <span class="help-block">Please enter your password</span>
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

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
                <form action="{{ url('users') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label class="form-control-label">Name</label>
                        <input type="text" name="name" placeholder="Enter Name.." class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Username</label>
                        <input type="text" name="username" placeholder="Enter Username.." class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Email</label>
                        <input type="email" name="email" placeholder="Enter Email.." class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Phone Number</label>
                        <input type="text" name="phone_number" placeholder="Enter Phone Number.." class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Role</label>
                        <select name="role_id" class="form-control" required>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Password</label>
                        <input type="password" name="password" placeholder="Enter Password.." class="form-control" required>
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

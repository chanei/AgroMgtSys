@extends('layouts.app')
@section('pagetitle')
Check Product
@endsection

@section('content')

@include('utilities.redirectmessage')

<div class="row">
    <div class="col-lg-12">
        <div class="top-campaign">
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <h3 class="title-3 m-b-30">Check Product</h3>
                </div>
            </div>
            <div class="table-responsive">
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
    </div>
</div>
@endsection

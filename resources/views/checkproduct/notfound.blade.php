@extends('layouts.app')
@section('pagetitle')
Product
@endsection

@section('content')

@include('utilities.redirectmessage')

<div class="row">
    <div class="col-lg-12">
        <div class="top-campaign">
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <h3 class="title-3 m-b-30">Product "Serail {{ $serial }}" has not been found</h3>
                </div>
            </div>
            <div class="table-responsive">
                <div class="row">
                    <div class="col-md-12">
                        <p>This product has not been verified and registered for use.</p>
                        <br>
                        <a href="{{ url('reportproducts/create') }}">
                            <button class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Report product as counterfeit
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

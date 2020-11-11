@extends('layouts.app')
@section('pagetitle')
Reported Products
@endsection

@section('content')

@include('utilities.redirectmessage')

<div class="row">
    <div class="col-lg-12">
        <div class="top-campaign">
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <h3 class="title-3 m-b-30">Reported Products</h3>
                </div>
                <div class="table-data__tool-right">
                    <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="{{ url('reportproducts/create') }}">
                        <i class="zmdi zmdi-plus"></i>add item
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Product</th>
                            <th>Dealer</th>
                            <th>Reason</th>
                            {{-- <th></th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reportedproducts as $rp)
                        <tr>
                            <td>{{ $rp->name }}</td>
                            <td>{{ $rp->phone_number }}</td>
                            <td>{{ $rp->product_name }}</td>
                            <td>{{ $rp->product_dealer }}</td>
                            <td>{{ $rp->reason }}</td>
                            {{-- <td>
                                <div class="table-data-feature">
                                    <button class="item" data-toggle="modal" data-target="#delete_modal{{ $rp->id }}" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                </div>
                            </td>
                            @include('reportproducts.modals.delete') --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection

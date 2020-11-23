@extends('layouts.app')
@section('pagetitle')
Suppliers
@endsection

@section('content')

@include('utilities.redirectmessage')

<div class="row">
    <div class="col-lg-12">
        <div class="top-campaign">
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <h3 class="title-3 m-b-30">Suppliers</h3>
                </div>
                @if(Auth::user()->isAdmin())
                <div class="table-data__tool-right">
                    <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="{{ url('suppliers/create') }}">
                        <i class="zmdi zmdi-plus"></i>add supplier
                    </a>
                </div>
                @endif
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Reg. No.</th>
                            <th>Trading License</th>
                            @if(Auth::user()->isAdmin())
                            <th></th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($suppliers as $supplier)
                        <tr>
                            <td>{{ $supplier->name }}</td>
                            <td>{{ $supplier->contact }}</td>
                            <td>{{ $supplier->address }}</td>
                            <td>{{ $supplier->registration_no }}</td>
                            <td><a href="{{ asset('uploads/tradingLicenses/'.$supplier->trading_license) }}" target="_blank">view</a></td>
                            @if(Auth::user()->isAdmin())
                            <td>
                                <div class="table-data-feature">
                                    <a class="item" href="{{ action('SupplierController@edit', $supplier->id) }}" title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </a>
                                    <button class="item" data-toggle="modal" data-target="#delete_modal{{ $supplier->id }}" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                </div>
                            </td>
                            @include('suppliers.modals.delete')
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

@extends('layouts.app')
@section('pagetitle')
    Users
@endsection

@section('content')

@include('utilities.redirectmessage')

<div class="row">
    <div class="col-lg-12">
        <div class="top-campaign">
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <h3 class="title-3 m-b-30">Users</h3>
                </div>
                <div class="table-data__tool-right">
                    <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="{{ url('users/create') }}">
                        <i class="zmdi zmdi-plus"></i>add item
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>date</th>
                            <th>order ID</th>
                            <th>name</th>
                            <th>date</th>
                            <th>order ID</th>
                            <th>name</th>
                            <th>date</th>
                            <th>order ID</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2018</td>
                            <td>100398</td>
                            <td>100398</td>
                            <td>2018</td>
                            <td>100398</td>
                            <td>100398</td>
                            <td>2018</td>
                            <td>100398</td>
                            <td>
                                <div class="table-data-feature">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="View">
                                        <i class="zmdi zmdi-eye"></i>
                                    </button>
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </button>
                                    <button class="item" data-toggle="modal" data-target="#delete_modal" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                </div>
                            </td>
                            @include('users.modals.delete')
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection

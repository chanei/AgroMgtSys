@extends('layouts.app')
@section('pagetitle')
Support Tickets
@endsection

@section('content')

@include('utilities.redirectmessage')

<div class="row">
    <div class="col-lg-12">
        <div class="top-campaign">
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <h3 class="title-3 m-b-30">Support Tickets</h3>
                </div>
                <div class="table-data__tool-right">
                    <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="{{ url('supports/create') }}">
                        <i class="zmdi zmdi-plus"></i>new support ticket
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($supporttickets as $ticket)
                        <tr>
                            <td>{{ $ticket->user->name }}</td>
                            <td>{{ $ticket->subject }}</td>
                            <td>{{ $ticket->message }}</td>
                            <td>
                                @if($ticket->status == 'Pending')
                                <span class="badge badge-pill badge-warning" style="color: #ffffff">Pending</span>
                                @else
                                <span class="badge badge-pill badge-success">{{ $ticket->status }}</span>
                                @endif
                            </td>
                            <td>
                                <div class="table-data-feature">
                                    <a class="item" href="{{ action('SupportController@show', $ticket->id) }}" title="View">
                                        <i class="zmdi zmdi-eye"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection

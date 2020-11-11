@extends('layouts.app')
@section('pagetitle')
    Support Ticket
@endsection

@section('content')

@include('utilities.redirectmessage')

<div class="row">
    <div class="col-md-12">
        <div class="top-campaign">
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <h3 class="title-3 m-b-30">Support Ticket</h3>
                </div>
                <div class="table-data__tool-right">
                    <a class="btn btn-danger au-btn--small" href="{{ url('supports') }}">
                        <i class="fa fa-ban"></i> Cancel
                    </a>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Subject</label>
                        <br/>
                        <p>{{ $ticket->subject }}</p>
                        <hr>
                        <br/>
                        <label>Message</label>
                        <br/>
                        <p>{{ $ticket->message }}</p>
                        <hr>
                        <br/>
                        <label>Period</label>
                        <br/>
                        <p>{{ $ticket->created_at->diffForHumans() }}</p>
                        <hr>
                        <br />
                        @if($ticket->status == 'Pending')
                        <a class="btn btn-danger au-btn--small" href="{{ action('SupportController@updateStatus', $ticket->id) }}">
                            <i class="fa fa-check"></i> Mark as Solved
                        </a>
                        @endif
                    </div>
                    <div class="col-md-6">
                        @if($ticket->status == 'Pending')
                        <form action="{{ url('supportreplies') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $ticket->id }}" name="support_id">
                            <div class="form-group">
                                <label>Reply to ticket</label>
                                <textarea class="form-control" rows="6" name="reply"> </textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                            </div>
                        </form>
                        @else
                        <p style="color: green; text-align: center">Issue has been resolved</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    @forelse($ticketreplies as $reply)
    <div class="col-md-12">
        <div class="top-campaign">
            <span class="badge badge-pill badge-success">{{ $reply->user->name }}</span>
            <br />
            <br />
            <p>{{ $reply->reply }}</p>
        </div>
    </div>
    @empty
    <div class="col-md-12">
        <div class="top-campaign">
            <p>No replies</p>
        </div>
    </div>
    @endforelse
</div>

@endsection

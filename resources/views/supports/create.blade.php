@extends('layouts.app')
@section('pagetitle')
    Create Support Ticket
@endsection

@section('content')

@include('utilities.redirectmessage')

<div class="row">
    <div class="col-md-12">
        <div class="top-campaign">
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <h3 class="title-3 m-b-30">Create Support Ticket</h3>
                </div>
                <div class="table-data__tool-right">
                    <a class="btn btn-danger au-btn--small" href="{{ url('supports') }}">
                        <i class="fa fa-ban"></i> Cancel
                    </a>
                </div>
            </div>
            <div>
                <form action="{{ url('supports') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label class=" form-control-label">Subject</label>
                        <input type="text" name="subject" placeholder="Enter Subject.." class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">How can we help?</label>
                        <input type="text" name="message" placeholder="Enter Message.." class="form-control" required>
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

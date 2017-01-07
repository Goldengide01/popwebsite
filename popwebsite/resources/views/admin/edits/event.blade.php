@extends('layouts.app')
@section('content')
<div class="container" style="margin: 0px; padding: 0px; border-radius: 0px;">
    <h1 class="text-center">Welcome to Admin Page This is where you decide what is going to be on your page</h1>
    <form class="form-horizontal col-md-6 col-xs-12" method="post" action="{{ url('/admin/event/edit') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{ $event->id }}">
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Title</label>
            <div class="col-xs-10">
                <input type="text" name="title" class="form-control" value="{{$event->title}}">
            </div>
        </div>
        <div class="form-group">
            <label for="venue" class="col-sm-2 control-label">Venue</label>
            <div class="col-xs-10">
                <input type="text" name="venue" class="form-control" value="{{$event->venue}}">
            </div>
        </div>
        <div class="form-group">
            <label for="date_and_time" class="col-sm-2 control-label">Date and Time of EVent</label>
            <div class="input-group">
                <input type="text" name="date_and_time" class="form-control" value="{{$event->date_and_time}}">
                <div class="input-group-addon"><i class="icon-calendar"></i></div>
            </div>
        </div>
       <!--  <div class="form-group">
            <label for="ticket" class="col-sm-2 control-label">No of Attendance</label>
            <div class="col-xs-10">
                <input type="text" name="ticket" class="form-control" value="{{$event->ticket}}">
            </div>
        </div> -->
        <div class="form-group">
            <label for="photo" class="col-sm-2 control-label">Upload Event Poster</label>
            <div class="col-xs-10">
                <input type="file" name="photo" class="form-control">
            </div>
        </div>
        <!-- <div class="form-group">
            <label for="host" class="col-sm-2 control-label">Host</label>
            <div class="col-xs-10">
                <input type="text" name="host" class="form-control" value="{{$event->host}}">
            </div>
        </div> -->
        <!-- <div class="form-group">
            <label for="guests" class="col-sm-2 control-label">Guest</label>
            <div class="col-xs-10">
                <input type="text" name="guests" class="form-control" value="{{$event->guests}}">
            </div>
        </div> -->
        <div class="form-group">
            <label for="desc" class="col-sm-2 control-label">Event Description</label>
            <div class="col-xs-10">
                <textarea class="form-control" rows="5" name="desc" >{{$event->desc}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit form-control" class="btn btn-default">Update</button>
            @if (session('alert-success'))
            <span class="text-success"><i class="icon-spinner"></i> {{ session('alert-success')}}</span>
            @endif
            @if (session('alert-failure'))
            <span class="text-warning"><i class="icon-spinner"></i> {{ session('alert-failure')}}</span>
            @endif
            </div>
        </div>
    </form>
</div>
@stop
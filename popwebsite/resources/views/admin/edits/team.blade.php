@extends('layouts.app')
@section('content')
<div class="container" style="margin: 0px; padding: 0px; border-radius: 0px;">
    <h1 class="text-center">Welcome to Admin Page This is where you decide what is going to be on your page</h1>
    <form class="form-horizontal col-md-6 col-xs-12" method="post" action="{{ url('/admin/team/edit') }}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{ $contact->id }}">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-xs-10">
                <input type="text" name="name" class="form-control" value="{{$contact->name}}">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-xs-10">
                <input type="text" name="email" class="form-control" value="{{$contact->email}}">
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-sm-2 control-label">Phone Number</label>
            <div class="col-xs-10">
                <input type="text" name="phone" class="form-control" value="{{$contact->phone}}">
            </div>
        </div>
        <div class="form-group">
            <label for="WIP" class="col-sm-2 control-label">Address</label>
            <div class="col-xs-10">
                <textarea class="form-control" rows="5" name="address" >{{$contact->address}}</textarea>
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
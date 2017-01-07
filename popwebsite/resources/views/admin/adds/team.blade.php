@extends('layouts.app')
@section('content')
    <form class="form-horizontal col-xs-11" method="post" action="{{ url('/admin/team/add') }}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">Firstname</label>
            <div class="col-xs-10">
                <input type="text" name="firstname" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="lastname" class="col-sm-2 control-label">Lastname</label>
            <div class="col-xs-10">
                <input type="text" name="lastname" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="photo" class="col-sm-2 control-label">Upload Picture here</label>
            <div class="col-xs-10">
                <input type="file" name="photo" class="form-control">
                <span class="text-warning"> *Picture must be a square picture</span>
            </div>
        </div>
        <div class="form-group">
            <label for="office" class="col-sm-2 control-label">Duty</label>
            <div class="col-xs-10">
                <select name="duty" class="form-control">
                    <optgroup>Heads</optgroup>
                    <option>President</option>
                    <option>Choir Director</option>
                    <option>Usher Head</option>
                    <option>Asst. Choir Chord</option>
                    <option>General Secretary</option>
                    <optgroup>Subgroups</optgroup>
                    <option>Choir</option>
                    <option>Ushering</option>
                    <option>Follow Up</option>
                    <option>Welfare</option>
                    <option>Secretariat</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="date_of_birth" class="col-sm-2 control-label">Date of Birth</label>
            <div class="input-group">
                <input type="text" name="date_of_birth" class="form-control">
                <div class="input-group-addon"><i class="icon-calendar"></i></div>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-xs-10">
                <input type="email" name="email" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-sm-2 control-label">Phone</label>
            <div class="col-xs-10">
                <input type="number" name="phone" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="desc" class="col-sm-2 control-label">Event Description</label>
            <div class="col-xs-10">
                <textarea class="form-control" rows="5" name="desc" >...</textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit form-control" class="btn btn-default">Register</button>
            @if (session('alert-success'))
            <span class="text-success"><i class="icon-spinner"></i> {{ session('alert-success')}}</span>
            @endif
            @if (session('alert-failure'))
            <span class="text-warning"><i class="icon-spinner"></i> {{ session('alert-failure')}}</span>
            @endif
            </div>
        </div>
    </form>
@stop
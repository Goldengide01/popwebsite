@extends('layouts.app')
@section('extra_styles')
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/dataTables/css/dataTables.bootstrap.min.css')}}">
@endsection
@section('extra_scripts')
<script src="{{URL::asset('assets/dataTables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/dataTables/js/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript" class="init">
	$(document).ready(function() {
	    $('#example').DataTable();
	});
</script>
@endsection
@section('content')
<div class="container">
	<div class="fw-container">
        <div class="fw-body">
            <div class="content">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Duty</th>
                            <th>D.O.B.</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>About Him</th>
                            <th>Added On</th>
                            <th>Updated On</th>
                            <th>Action<!-- <br><span style="font-weight:bold;" class="text-info">edit view delete</span> --></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Duty</th>
                            <th>D.O.B.</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>About Him</th>
                            <th>Added On</th>
                            <th>Updated On</th>
                            <th>Action<!-- <br><span style="font-weight:bold;" class="text-info">edit view delete</span> --></th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach ($teams as $team)
                        <tr>
                            <td>{{$team->firstname}}</td>
                            <td>{{$team->lastname}} </td>
                            <td>{{$team->duty}}</td>
                            <td>{{$team->date_of_birth}}</td>
                            <td>{{$team->phone}}</td>
                            <td>{{$team->email}}</td>
                            <td>{{$team->about_me}}</td>
                            <td>{{$team->created_at}}</td>
                            <td>{{$team->updated_at}}</td>
                            <td>
                                <a class="text-primary" href="{{url('/admin/team/edit/'.$team->type.'/'.$team->id)}}"><i class="icon-eye-open"></i></a> 
                                <a class="text-warning" href="{{url('/admin/team/view/'.$team->type.'/'.$team->id)}}"><i class="icon-edit"> </i></a> 
                                <a class="text-danger" href="{{url('/admin/team/delete/'.$team->type.'/'.$team->id)}}"><i class="icon-remove"></i></a>
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
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
                            <th>Title</th>
                            <th>Venue</th>
                            <th>DateTime</th>
                            <th>Description</th>
                            <th>Added on</th>
                            <th>Update on</th>
                            <th>Action<!-- <br><span style="font-weight:bold;" class="text-info">edit view delete</span> --></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Venue</th>
                            <th>DateTime</th>
                            <th>Description</th>
                            <th>Added on</th>
                            <th>Update on</th>
                            <th>Action<!-- <br><span style="font-weight:bold;" class="text-info">edit view delete</span> --></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($events as $event)
                        <tr>
                            <td>{{$event->title}}</td>
                            <td>{{$event->type}} </td>
                            <td>{{$event->date_and_time}}</td>
                            <td>{{$event->desc}}</td>
                            <td>{{$event->created_at}}</td>
                            <td>{{$event->updated_at}}</td>
                            <td>
                                <a class="text-primary" href="{{url('/admin/event/edit/'.$event->type.'/'.$event->id)}}"><i class="icon-eye-open"></i></a> 
                                <a class="text-warning" href="{{url('/admin/event/view/'.$event->type.'/'.$event->id)}}"><i class="icon-edit"> </i></a> 
                                <a class="text-danger" href="{{url('/admin/event/delete/'.$event->type.'/'.$event->id)}}"><i class="icon-remove"></i></a>
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
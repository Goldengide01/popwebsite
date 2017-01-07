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
                            <th>Media Type</th>
                            <th>Venue Taken</th>
                            <th>Event Title</th>
                            <th>Added On</th>
                            <th>Updated On</th>
                            <th>Action<!-- <br><span style="font-weight:bold;" class="text-info">edit view delete</span> --></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Media Type</th>
                            <th>Venue Taken</th>
                            <th>Event Title</th>
                            <th>Added On</th>
                            <th>Updated On</th>
                            <th>Action<!-- <br><span style="font-weight:bold;" class="text-info">edit view delete</span> --></th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php $type = array('Image', 'Audio', 'Video'); ?>
                    @foreach ($medias as $media)
                        <tr>
                            <td>{{$media->title}}</td>
                            <td>{{$type[$media->type]}} </td>
                            <td>{{$media->desc}}</td>
                            <td>{{$media->event_name}}</td>
                            <td>{{$media->created_at}}</td>
                            <td>{{$media->updated_at}}</td>
                            <td>
                                <a class="text-primary" href="{{url('/admin/media/edit/'.$media->type.'/'.$media->id)}}"><i class="icon-eye-open"></i></a> 
                                <a class="text-warning" href="{{url('/admin/media/view/'.$media->type.'/'.$media->id)}}"><i class="icon-edit"> </i></a> 
                                <a class="text-danger" href="{{url('/admin/media/delete/'.$media->type.'/'.$media->id)}}"><i class="icon-remove"></i></a>
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
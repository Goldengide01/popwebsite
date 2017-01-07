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
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
	</div>
</div>
@endsection
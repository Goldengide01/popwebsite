<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>POP|Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset("assets/bootstrap/css/bootstrap.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset("assets/css/style.css") }}">
</head>
<body>
<div class="container" style="margin: 0px; padding: 0px; border-radius: 0px;">
    <h1 class="text-center">Welcome to Admin Page This is where you decide what is going to be on your page</h1>
    <form class="form-horizontal col-md-8 col-xs-12" method="post" action="{{ url('/admin/contact/update') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="mediaCode" value="2">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Title</label>
            <div class="col-xs-10">
                <input type="text" name="title" class="form-control" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-sm-2 control-label">Youtube Video Address here</label>
            <div class="col-xs-10">
                <input type="text" name="video" class="form-control" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-sm-2 control-label">Event name</label>
            <div class="col-xs-10">
                <input type="text" name="phone" class="form-control" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="WIP" class="col-sm-2 control-label">Venue</label>
            <div class="col-xs-10">
                <textarea class="form-control" rows="5" name="desc" ></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit form-control" class="btn btn-default">Add Picture</button>
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
 <script src="{{ URL::asset("assets/scripts/jquery.min.js") }}"></script>
 <script src="{{ URL::asset("assets/bootstrap/js/bootstrap.min.js") }}"></script>
 <script type="text/javascript">
</body>
</html>
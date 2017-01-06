<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CHURCH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset("assets/bootstrap/css/bootstrap.min.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset("assets/css/style.css") }}">
</head>
<body>
<div class="container" style="margin: 0px; padding: 0px; border-radius: 0px;">
    <h1 class="text-center">Welcome to Admin Page This is where you decide what is going to be on your page</h1>
    <form class="form-horizontal col-md-6 col-xs-12" id="0" >
        <div class="form-group">
            <label for="WIP" class="col-sm-2 control-label">{!! $about[0]->title !!}</label>
            <div class="col-xs-10">
                <textarea class="form-control" rows="5" name="wip" id="0">{!! $about[0]->desc !!}</textarea>
            </div>
      </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Update</button>
            <span class="text-success report"><i class="icon-spinner"></i>updated.....</span>
            </div>
        </div>
    </form>
    <form class="form-horizontal col-md-6 col-xs-12" id="1" >
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Our Vision</label>
            <div class="col-xs-10">
                <textarea class="form-control" rows="5"></textarea>
            </div>
      </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Update</button>
            </div>
        </div>
    </form>
    <form class="form-horizontal col-md-6 col-xs-12" id="2">
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Our Mission</label>
            <div class="col-xs-10">
                <textarea class="form-control" rows="5"></textarea>
            </div>
      </div>
        <div class="form-group" >
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Update</button>
            </div>
        </div>
    </form>
    <form class="form-horizontal col-md-6 col-xs-12" id="3" >
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Our Story</label>
            <div class="col-xs-10">
                <textarea class="form-control" rows="5"></textarea>
            </div>
      </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Update</button>
            </div>
        </div>
    </form>
</div>
 <script src="{{ URL::asset("assets/scripts/jquery.min.js") }}"></script>
 <script src="{{ URL::asset("assets/bootstrap/js/bootstrap.min.js") }}"></script>
 <script type="text/javascript">
 $(document).ready(function() {
     $('form').submit(function() {
        var getId = "#"+$(this).attr('id');
        var actual = getId + " textarea";
        actuali = actual.toString();
        url =  "{{ url('/admin/about/update') }}";
        var desc = $(actuali).val();
        var id = $(this).attr('id');
        alert(desc);
        // $.ajax({
        //     type: 'POST',
        //     url: '/admin/about/update',
        //     data: {
        //         desc: desc, id: id
        //     },
        //     success: function(data) {
        //         $('.report').addClass(text-success).html("updated....");
        //         alert('Load was performed.');
        //     }
        // });
        return false;
     });

 })
 </script>
</body>
</html>
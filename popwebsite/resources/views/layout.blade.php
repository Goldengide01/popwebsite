<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CHURCH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/lato/latofonts.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/lato/latostyle.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css') }}">
	@section('additional_styles')
	@show
</head>
<body class="theme1">
 <div class="container-fluid" style="margin: 0px; padding: 0px; border-radius: 0px;">
 	<div class="header">
 		<div class="menu-items">
 			<nav class="navbar navbar-default navbar-fixed-top"  style="background-color: #23156C; color: #fff; font-family: LatoWebBold; text-transform: uppercase;"><!-- style="margin-left: auto; margin-right: auto; width: 100%; background-color: #000;" -->
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-bar-x" aria-expanded="false">
			        <span class="sr-only">Navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <!-- <a class="navbar-brand" href="#">People of Power Ministry</a> -->
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="menu-bar-x">
			      <ul class="nav navbar-nav navbar-center menu-list">
			      <!-- @section('header_tabs') -->
                    <li class="active"><a href="#">HOME <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Connect <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Ministry</a></li>
                        <li><a href="#">Our Team</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MEDIA <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">MultiMedia</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Blog</a></li>
                      </ul>
                    </li>
			        <li><a href="#">BLOG</a></li>
			      <!-- @show -->
			      </ul>
			      <!-- <ul class="nav navbar-nav navbar-right">
			        <li><a href="#">Link</a></li>
			      </ul> -->
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>

 		</div>
 		<!-- <div class="" style="float: left; ">hjhj</div> -->
 	</div>
    @yield('content')
    @section('footer')
	<div class="footer">
        <p class="text-center" >Follow us on </p>
    </div>
 </div>
 @section('other_js_plugins')
 @show
 <script src="assets/scripts/jquery.min.js"></script>
 <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
    @show
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CHURCH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/scroller/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="assets/scroller/scroller.css">
</head>
<body>
<div class="container-fluid" style="margin: 0px; padding: 0px; border-radius: 0px;">
    <div class="wrapper style-2 normal">
        <div class="divided-section-taller normal" style="background-color: #fff;">
            <h2 class="text-center">Media</h2>
            <div class="col-xs-12 content mCustomScrollbar"  style="width: 100%;">
                <p class="text-center p-header"><a href="#"  id="videos"> Videos</a>|<a href="#" id="audios">Audio</a></p>
                <div id="video" class="col-xs-12">
                @foreach ($videos as $video)
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 video-layouts">
                        <iframe  src="{{$video->url}}" style="border:none; margin:0;width:100%;height:100%;"> </iframe>
                    </div>
                @endforeach
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 video-layouts">
                        <iframe  src="https://www.youtube.com/embed/XGSy3_Czz8k" style="border:none; margin:0;width:100%;height:100%;"> </iframe>
                    </div>
                    
                </div>
                <div id="audio" class="col-xs-12">
                @foreach ($audios as $audio)
                    <div class="col-xs-12" style="background-color: ;">
                        <audio controls style="width: 100%;">
                          <source src="horse.ogg" type="audio/ogg">
                          <source src="{{$audio->url}}" type="audio/mpeg">
                          Your browser does not support the audio element.
                        </audio>
                    </div>
                @endforeach
                    <div class="col-xs-12" style="background-color: ;">
                        <audio controls style="width: 100%;">
                          <source src="horse.ogg" type="audio/ogg">
                          <source src="horse.mp3" type="audio/mpeg">
                        </audio>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer navbar"><p class="text-center" >Home|Ministry|Meetings|Vision|Mission|Our Story|Contact|Our team|Audio |Video|Photos|Events|Meetings|Word of the day|</p></div>
</div>
 <script src="assets/scroller/jquery-1.11.0.min.js"></script>
 <script src="assets/bootstrap/js/bootstrap.min.js"></script>
 <script src="assets/scroller/jquery.mCustomScrollbar.concat.min.js"></script>
 <script>
        (function($){
            $(window).on("load",function(){
                $(".content").mCustomScrollbar();

                $("#audio").hide();
                $("#videos").click(function(){
                    $("#audio").hide();
                    $("#video").show();
                });
                $("#audios").click(function(){
                    $("#audio").show();
                    $("#video").hide();
                });
            });
        })(jQuery);
    </script>
</body>
</html>
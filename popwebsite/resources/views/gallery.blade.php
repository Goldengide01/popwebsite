    @extends('layout')
    @section('additional_styles')
    <link rel="stylesheet" type="text/css" href="{{URL::asset("assets/wookmark/css/main.css")}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset("assets/prettyphoto/css/prettyPhoto.css")}}">
    @endsection
    @section('content')
<div class="container-fluid" style="margin: 0px; padding: 0px; border-radius: 0px;">
    <div class="wrapper">
        <div role="main">
          <h2>Gallery</h2>
          <ul class="tiles-wrap animated gallery clearfix" id="wookmark1">
            <!-- These are our grid blocks -->
            @foreach ($gallery as $picture)
            <li><a href="{{$picture->url}}" title="{{$picture->title}}" rel="prettyPhoto[gallery1]" ><img src="{{$picture->url}}" width="200" height="283"><p>{{$picture->title}}</p></a></li>
            @endforeach
          </ul>
        </div>
    </div>
    @endsection
    @section('footer')
 <script src="assets/scripts/jquery.min.js"></script>
 <script src="assets/bootstrap/js/bootstrap.min.js"></script>
 <script src="assets/prettyPhoto/js/jquery.prettyPhoto.js"></script>
 <script src="assets/wookmark/js/wookmark.js"></script>
 <script type="text/javascript">
    window.onload = function () {
      var wookmark1 = new Wookmark('#wookmark1', {
          outerOffset: 10, // Optional, the distance to the containers border
          itemWidth: 210 // Optional, the width of a grid item
      });
    };
  </script>
  <script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
    $("area[rel^='prettyPhoto']").prettyPhoto();
    $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
    $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
        
    $("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
        custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
        changepicturecallback: function(){ initialize(); }
    });

    $("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
        custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
        changepicturecallback: function(){ _bsap.exec(); }
    });
});
</script>
</body>
</html>
@stop
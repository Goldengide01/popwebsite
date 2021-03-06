<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <!-- 
    	The codes are free, but we require linking to our web site.
    	Why to Link?
    	A true story: one girl didn't set a link and had no decent date for two years, and another guy set a link and got a top ranking in Google! 
    	Where to Put the Link?
    	home, about, credits... or in a good page that you want
    	THANK YOU MY FRIEND!
    -->
    <title>Floating menu - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{URL::asset("assets/bootstrap/css/bootstrap.min.css")}}">

    <style type="text/css">
        body{
    margin-top:20px;
    background:#eee;
    height:1500px;
}
.main-navigation .menu li a {
    display: block;
    font-size: 12px;
    color: #999;
    text-transform: uppercase;
    text-decoration: none;
    letter-spacing: .1em;
    padding-left: 20px;
    padding-right: 20px;
    -webkit-transition: color 0.3s;
    -o-transition: color 0.3s;
    transition: color 0.3s;
}
.floating-menu-btn {
    display: block;
    position: fixed;
    z-index: 100;
    top: 50px;
    right: 35px;
    width: 56px;
    height: 56px;
    border-radius: 50%;
}
.floating-menu-btn .floating-menu-toggle .bar {
    width: 22px;
    margin: 0 0 4px 0;
}
.mobile-menu-toggle .bar, .floating-menu-toggle .bar {
    display: block;
    will-change: transform, opacity;
    width: 32px;
    height: 2px;
    margin: 0 0 6px 0;
    background: #333;
    opacity: 1;
    -webkit-transform: translate(0) rotate(0deg);
    -moz-transform: translate(0) rotate(0deg);
    -ms-transform: translate(0) rotate(0deg);
    -o-transform: translate(0) rotate(0deg);
    transform: translate(0) rotate(0deg);
    -webkit-transition: all 0.2s ease-out;
    -o-transition: all 0.2s ease-out;
    transition: all 0.2s ease-out;
}
.floating-header {
    position: absolute;
    z-index: 100;
    display: block;
    width: 100%;
    padding: 35px
}

.floating-header .site-logo {
    max-width: 79px;
    padding: 0;
    margin: 0 !important
}

.floating-header+* {
    padding-top: 190px
}

@media screen and (max-width: 768px) {
    .floating-header {
        padding: 25px 15px
    }
    .floating-header+* {
        padding-top: 175px
    }
}

.floating-header .main-navigation-wrap {
    position: fixed;
    z-index: 110;
    display: table;
    width: 300px;
    height: 100%;
    top: 110px;
    left: 50%;
    margin-left: -150px;
    overflow: hidden;
    visibility: hidden
}

.floating-header .main-navigation {
    position: relative;
    display: table-cell;
    vertical-align: middle;
    top: auto;
    right: auto;
    padding: 0;
    text-align: center;
    top: -110px;
    overflow: hidden;
    opacity: 0;
    -webkit-transform: translateY(35px);
    -moz-transform: translateY(35px);
    -ms-transform: translateY(35px);
    -o-transform: translateY(35px);
    transform: translateY(35px);
    -webkit-transition: all 0.35s 0.2s;
    -o-transition: all 0.35s 0.2s;
    transition: all 0.35s 0.2s
}

.floating-header .main-navigation .menu {
    display: inline-block;
    width: 100%;
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    -webkit-transition: all 0.4s cubic-bezier(0.86, 0, 0.07, 1);
    -o-transition: all 0.4s cubic-bezier(0.86, 0, 0.07, 1);
    transition: all 0.4s cubic-bezier(0.86, 0, 0.07, 1)
}

.floating-header .main-navigation .menu.off-view {
    -webkit-transform: translate3d(-100%, 0, 0);
    -moz-transform: translate3d(-100%, 0, 0);
    -ms-transform: translate3d(-100%, 0, 0);
    -o-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0)
}

.floating-header .main-navigation .menu.in-view {
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
}

.floating-header .main-navigation .menu>li {
    position: static;
    border-bottom: none
}

.floating-header .main-navigation .menu>li>a {
    padding-top: 9px;
    padding-bottom: 9px
}

.floating-header .main-navigation .menu li {
    display: block
}

.floating-header .main-navigation .menu li a {
    display: block;
    font-size: 16px
}

.floating-header .main-navigation .menu li.menu-item-has-children>.sub-menu {
    position: absolute;
    display: block;
    width: 100%;
    height: auto;
    top: 0;
    left: auto;
    right: -100%;
    padding: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transform: translate3d(100%, 0, 0);
    -moz-transform: translate3d(100%, 0, 0);
    -ms-transform: translate3d(100%, 0, 0);
    -o-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    -webkit-transition: all 0.4s cubic-bezier(0.86, 0, 0.07, 1);
    -o-transition: all 0.4s cubic-bezier(0.86, 0, 0.07, 1);
    transition: all 0.4s cubic-bezier(0.86, 0, 0.07, 1)
}

.floating-header .main-navigation .menu li.menu-item-has-children>.sub-menu>li>a {
    padding-top: 9px;
    padding-bottom: 9px
}

.floating-header .main-navigation .menu li.menu-item-has-children>.sub-menu.in-view {
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
}

.floating-header .main-navigation .menu li.menu-item-has-children>.sub-menu.off-view {
    -webkit-transform: translate3d(-100%, 0, 0);
    -moz-transform: translate3d(-100%, 0, 0);
    -ms-transform: translate3d(-100%, 0, 0);
    -o-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0)
}

.floating-header .main-navigation .menu li.menu-item-has-children:hover .sub-menu {
    -webkit-animation: none;
    -o-animation: none;
    animation: none
}

.floating-header .main-navigation.is-visible {
    visibility: visible;
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0)
}

.ie .floating-header .main-navigation-wrap .main-navigation,
.edge .floating-header .main-navigation-wrap .main-navigation,
.firefox .floating-header .main-navigation-wrap .main-navigation {
    top: 0
}

.android .floating-header .main-navigation-wrap .main-navigation,
.ios .floating-header .main-navigation-wrap .main-navigation {
    -webkit-transition: all 0.25s 0s;
    -o-transition: all 0.25s 0s;
    transition: all 0.25s 0s
}
.floating-menu-btn {
    display: block;
    position: fixed;
    z-index: 100;
    top: 50px;
    right: 35px;
    width: 56px;
    height: 56px;
    border-radius: 50%
}

.floating-menu-btn:before {
    display: block;
    position: absolute;
    z-index: -1;
    content: "";
    width: 56px;
    height: 56px;
    background-color: #fff;
    border-radius: 50%;
    -webkit-transform-origin: center 30%;
    -moz-transform-origin: center 30%;
    -ms-transform-origin: center 30%;
    transform-origin: center 30%;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
    -webkit-transition: all 0.35s ease-out;
    -o-transition: all 0.35s ease-out;
    transition: all 0.35s ease-out;
    -webkit-box-shadow: 0px 12px 18px 0px rgba(0, 0, 0, 0.26);
    box-shadow: 0px 12px 18px 0px rgba(0, 0, 0, 0.26)
}

.floating-menu-btn .floating-menu-toggle-wrap {
    position: absolute;
    z-index: 1;
    width: 56px;
    height: 56px;
    border-radius: 50%;
    top: 28px;
    left: 27px;
    cursor: pointer
}

.floating-menu-btn .floating-menu-toggle {
    display: block;
    width: 22px;
    right: auto;
    left: 50%;
    margin-top: -6px;
    margin-left: -11px
}

.floating-menu-btn .floating-menu-toggle .bar {
    width: 22px;
    margin: 0 0 4px 0
}

.floating-menu-btn .floating-menu-toggle .bar:last-child {
    margin-bottom: 0
}

.floating-menu-btn.expanded .floating-menu-toggle {
    -webkit-transform: rotate(-180deg);
    -moz-transform: rotate(-180deg);
    -ms-transform: rotate(-180deg);
    -o-transform: rotate(-180deg);
    transform: rotate(-180deg)
}

.floating-menu-btn.expanded .floating-menu-toggle .bar:nth-child(1) {
    -webkit-transform: translate(-9px, 3px) rotate(-45deg) scale(0.5, 1);
    -moz-transform: translate(-9px, 3px) rotate(-45deg) scale(0.5, 1);
    -ms-transform: translate(-9px, 3px) rotate(-45deg) scale(0.5, 1);
    -o-transform: translate(-9px, 3px) rotate(-45deg) scale(0.5, 1);
    transform: translate(-9px, 3px) rotate(-45deg) scale(0.5, 1)
}

.floating-menu-btn.expanded .floating-menu-toggle .bar:nth-child(3) {
    -webkit-transform: translate(-9px, -3px) rotate(45deg) scale(0.5, 1);
    -moz-transform: translate(-9px, -3px) rotate(45deg) scale(0.5, 1);
    -ms-transform: translate(-9px, -3px) rotate(45deg) scale(0.5, 1);
    -o-transform: translate(-9px, -3px) rotate(45deg) scale(0.5, 1);
    transform: translate(-9px, -3px) rotate(45deg) scale(0.5, 1)
}

.floating-menu-btn.expanded:before {
    -webkit-transform: scale(80);
    -moz-transform: scale(80);
    -ms-transform: scale(80);
    -o-transform: scale(80);
    transform: scale(80)
}

@media screen and (max-width: 768px) {
    .floating-menu-btn {
        right: 15px
    }
}
    </style>
</head>
<body>
<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/font-awesome.min.css">
<header class="floating-header">
  <a href="#" class="site-logo" style="font-size:30px;color:#5bc0de;font-weight:bold">
    Bootdey.com
  </a>

  <div class="floating-menu-btn">
    <div class="floating-menu-toggle-wrap">
      <div class="floating-menu-toggle">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </div>
  </div>

  <div class="main-navigation-wrap">
    <nav class="main-navigation" data-back-btn-text="Back">
      <ul class="menu">
        <li class="delay-1"><a href="#">New Biodata</a></li>
        <li class="delay-2"><a href="#">Biodata List</a></li>
        <!-- <li class="delay-3"><a href="#">About Us</a></li> -->
        <!-- <li class="delay-4"><a href="#">Contacts</a></li> -->
        <!-- <li class="delay-5"><a href="#">Elements</a></li> -->
      </ul><!-- .menu -->
    </nav><!-- .main-navigation -->
  </div><!-- .main-navigation-wrap -->
</header>

<script src=" {{URL::asset("assets/bootstrap/js/bootstrap.min.js")}}"></script>
<script src="{{URL::asset("assets/scripts/jquery.min.js")}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
/* Floating Menu
    **************************************************************/

    var $floatingMenuToggle = $('.floating-menu-toggle-wrap'),
            $floatingMenu = $('.floating-header .main-navigation'),
            $floatingMenuItem = $('.floating-header .main-navigation .menu > li');
    if($floatingMenu.length) {
        $floatingMenuItem.each(function(index, element) {
            $(element).addClass('delay-' + index);
        });

        $floatingMenuToggle.click(function() {
          var clicks = $(this).data('clicks');
          if (clicks) {
                $floatingMenu.removeClass('is-visible');
                setTimeout(function(){
                    $floatingMenuToggle.parent().removeClass('expanded');
                }, 500);
          } else {
				$floatingMenuToggle.parent().addClass('expanded');
				$floatingMenu.addClass('is-visible');
		  }
		  $(this).data("clicks", !clicks);
		});

	}

	// Back Button
	var backBtnText = $floatingMenu.data( 'back-btn-text' ),
			subMenu = $( '.floating-header .main-navigation .sub-menu' );

	subMenu.each( function () {
		$( this ).prepend( '<li class="back-btn"><a href="#"><i class="fa fa-arrow-left" aria-hidden="true"></i>' + backBtnText + '</a></li>' );
	} );

	var hasChildLink = $( '.floating-header .menu-item-has-children > a' ),
		backBtn = $( '.floating-header .main-navigation .sub-menu .back-btn' );

	backBtn.on('click', function (e) {
		var self = this,
			parent = $( self ).parent(),
			siblingParent = $( self ).parent().parent().siblings().parent(),
			menu = $( self ).parents( '.menu' );

		parent.removeClass( 'in-view' );
		siblingParent.removeClass( 'off-view' );

		e.stopPropagation();
	});

	hasChildLink.on( 'click', function ( e ) {
		var self = this,
			parent = $( self ).parent().parent(),
			menu = $( self ).parents( '.menu' );

		parent.addClass( 'off-view' );
		$( self ).parent().find( '> .sub-menu' ).addClass( 'in-view' );

		e.preventDefault();
		return false;
	} );
    } );
	/******************************************************************/
</script>
</body>
</html>
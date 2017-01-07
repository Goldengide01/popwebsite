 @extends('layout')

   <!-- @section('menu')
       @@parent
   @stop -->

   @section('content')
	<div class="wrapper">
		<div class="style-1 divided-section">
			<p class="text-center p-header"> {!! $about[0]->title !!} </p>
			<p class="text-center p-normal">{!! $about[0]->desc !!}</p> 

		</div>
		<div class="space"></div>
		<div class="style-2 divided-section">
			<p class="text-center p-header"> OUR VISION </p>
			<p class="text-center p-normal">Answer is</p> 

		</div>
		<div class="space"></div>
		<div class="style-3 divided-section">
			<p class="text-center p-header"> OUR MISSION </p>
			<p class="text-center p-normal">Answer is</p> 

		</div>
		<div class="space"></div>
		<div class="style-4 divided-section">
			<p class="text-center p-header"> OUR STORY</p>
			<p class="text-center p-normal">Answer is</p> 

		</div>
		<div class="space"></div>
		<div class="style-1 divided-section">
			<p class="text-center p-header">OUR MEETINGS </p>
			<p class="text-center p-normal">Answer is</p> 

		</div>
	</div>
	@stop

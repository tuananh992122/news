@extends('news.layout.single')

@section('content')
<section class="row">
	<article class="post column">
	<h1 class="post-title" style="color: #0014ff">Liên hệ</h1>

	<div id="map" class="row flex-video widescreen"></div>

</article>
</section>
@endsection
@section('js')
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/gmap3.min.js"></script>
@endsection
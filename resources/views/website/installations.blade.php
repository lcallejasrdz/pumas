@extends('layout.principal')

@section('title', '| '.trans($active.'.title'))

@section('styles')
    {{-- WowSlider --}}
	{{ Html::style('assets/plugins/wowslider/engine1/style.css') }}

	<style>
       	/* Set the size of the div element that contains the map */
      	#map {
        	height: 400px;  /* The height is 400 pixels */
        	width: 100%;  /* The width is the width of the web page */
       	}
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1>{{ trans($active.'.title') }}</h1>
        </div>
    </div>
    @include('website.modules.installations')
    <div class="row">
    	<div class="col-xs-12">
    		<ul>
    			<li>Cancha de fútbol soccer con pasto sintético</li>
    			<li>Oficina</li>
    			<li>Baños para hombres y mujeres</li>
    			<li>Gradas techadas</li>
    			<li>Estacionamiento independiente a la cancha</li>
    			<li>Acceso por Chiluca, Lomas Verdes, Bellavista, México Nuevo y carretera Chamapa-Lechería</li>
    		</ul>
    	</div>
    </div>
    <div class="row">
    	<div class="col-xs-12">
    		<div id="map"></div>
    	</div>
    </div>
@endsection

@section('scripts')
    {{-- WowSlider --}}
	{{ Html::script("assets/plugins/wowslider/engine1/wowslider.js") }}
	{{ Html::script("assets/plugins/wowslider/engine1/script.js") }}

	<script>
		// Initialize and add the map
		function initMap() {
  			// The location of Uluru
  			var uluru = {lat: 19.5261857, lng: -99.2695107};
  			// The map, centered at Uluru
  			var map = new google.maps.Map(
      			document.getElementById('map'), {zoom: 18, center: uluru});

  			var contentString = '<div id="content">'+
      			'<div id="siteNotice">'+
		      	'</div>'+
		      	'<h1 id="firstHeading" class="firstHeading">Escuela de Fútbol Pumas Madín</h1>'+
		      	'<div id="bodyContent">'+
		      	'<p>Calle 2 s/n, Col. Nuevo Madín, Atizapán de Zaragoza, C.P. 52989</p>'+
		      	'</div>'+
		      	'</div>';

  			var infowindow = new google.maps.InfoWindow({
    			content: contentString
  			});

  			// The marker, positioned at Uluru
  			var marker = new google.maps.Marker({position: uluru, map: map, title: 'Escuela de Fútbol Pumas Madín'});
  			marker.addListener('click', function() {
    			infowindow.open(map, marker);
  			});
		}
    </script>
@endsection
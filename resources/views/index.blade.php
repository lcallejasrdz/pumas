@extends('layout.principal')

@section('title')

@section('styles')
    {{-- Slick CSS file --}}
    {{ Html::style('assets/plugins/slick/slick.css') }}
    {{ Html::style('assets/plugins/slick/slick-theme.css') }}
    <style type="text/css">
        .slider {
            width: 90%;
            margin: 25px auto;
        }
        .slick-slide {
            margin: 0px 10px;
        }
        .slick-slide img {
            width: 100%;
        }
        .slick-prev:before,
        .slick-next:before {
            color: black;
        }
        .slick-slide {
            transition: all ease-in-out .3s;
            opacity: .2;
        }
        .slick-active {
            opacity: .5;
        }
        .slick-current {
            opacity: 1;
        }
    </style>
@endsection

@section('content')
	{{-- SlideShow --}}
	<div class="row">
		<div class="col-xs-12 padding-0">
		    <div id="carousel-principal" class="carousel slide" data-ride="carousel">
		  		<!-- Indicators -->
		  		<ol class="carousel-indicators">
		    		<li data-target="#carousel-principal" data-slide-to="0" class="active"></li>
		    		<li data-target="#carousel-principal" data-slide-to="1"></li>
		    		<li data-target="#carousel-principal" data-slide-to="2"></li>
		  		</ol>

		  		<!-- Wrapper for slides -->
		  		<div class="carousel-inner" role="listbox">
		    		<div class="item active">
		      			<img src="{{ URL::to('/assets/images/index/slide1a.png') }}" alt="...">
		      			<div class="carousel-caption">
		      			</div>
		    		</div>
		    		{{-- <div class="item">
		      			<img src="{{ URL::to('/assets/images/index/slide1a.png') }}" alt="...">
		      			<div class="carousel-caption">
		      			</div>
		    		</div> --}}
		  		</div>

		  		<!-- Controls -->
				<a class="left carousel-control" href="#carousel-principal" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-principal" role="button" data-slide="next">
		    		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    		<span class="sr-only">Next</span>
		  		</a>
			</div>
		</div>
	</div>

	{{-- PROGRAMAS PARA JUGADORES --}}
	<div class="row color-blue">
		<div class="col-xs-12">
			<h2 class="text-center">BASES</h2>
		</div>
		<div class="col-md-5 img-module-container">
			<img src="{{ URL::to('/assets/images/index/flag.png') }}" alt="..." class="padding-bottom-0">
		</div>
		<div class="col-md-7">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
  						<h4 class="panel-title">
    						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      							DEL CLUB DEPORTIVO
    						</a>
  						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
  						<div class="panel-body">
    						<ol type="A">
								<li>Entrenamientos de lunes a jueves de 16:30 a 18:30</li>
								<li>Profesores certificados, capacitados y con experiencia</li>
								<li>Programa de entrenamiento (infantil de desarrollo – juvenil de formación)</li>
								<li>Contamos con material completo para poder desarrollar los entrenamientos y calentamientos previos a los partidos (tablas, conos, discos, lanzas, balones, casacas)</li>
								<li>Reuniones bimestrales con padres o tutores para informar desarrollo de los alumnos</li>
							</ol>
  						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingTwo">
  						<h4 class="panel-title">
    						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      							DE LOS ALUMNOS
    						</a>
  						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
  						<div class="panel-body">
    						<ol type="A">
								<li>Equipo o de acuerdo a su categoría y/o aptitud de juego</li>
								<li>Juegos en fin de semana dependiendo de la liga y/o torneo</li>
								<li>Uniformes oficiales</li>
								<li>Respetar a sus compañeros, cuerpo técnico, a sus adversarios, las instalaciones y a las porras</li>
							</ol>
  						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingThree">
  						<h4 class="panel-title">
    						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      							ADMINISTRATIVO
    						</a>
  						</h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
  						<div class="panel-body">
    						<ol type="A">
								<li>Inscripciones abiertas todo el año</li>
								<li>Registro del alumno ante Club Universidad con seguro federado</li>
								<li>Creación de expediente (personal, familiar, médico, deportivo)</li>
								<li>Entrega de reglamentos y plan de trabajo</li>
								<li>Visitas a estadios y partidos oficiales</li>
								<li>Torneos locales, regionales, estatales y extranjeros</li>
								<li>Publicación de estadísticas de los torneos</li>
								<li>Atención a padres y/o tutores</li>
								<li>Responsable de la Filial</li>
							</ol>
  						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- Bases --}}
	<div class="row bg-blue color-white padding-25">
		<div class="col-xs-12">
			<h2 class="text-center">PROGRAMAS</h2>
		</div>
		<div class="col-md-8">
			<div class="bases-content">
				<ul>
					<li>Contamos con categorías mixtas</li>
					<li>Infantil a partir de los 4 años y hasta los 12 (cognitivo y de desarrollo)</li>
					<li>Juvenil a partir de los 12 años un mes hasta los 18 con 11 meses (formativo)</li>
					<li>Psicología del Deporte</li>
					<li>Equipo y entrenamiento de alto rendimiento</li>
				</ul>
			</div>
		</div>
		<div class="col-md-4 img-module-container">
			<img src="{{ URL::to('/assets/images/index/player.png') }}" alt="...">
		</div>
	</div>

	{{-- SlideShow --}}
	<div class="row color-blue">
		<div class="col-xs-12">
			<h2 class="text-center">NUESTRAS INSTALACIONES</h2>
		</div>
		<div class="col-xs-12">
			{{-- Medium --}}
			<section class="center slider visible-md visible-lg visible-xl">
    			<div>
      				<img src="{{ URL::to('/assets/images/index/slide2a.png') }}" alt="...">
    			</div>
    			<div>
      				<img src="{{ URL::to('/assets/images/index/slide2b.png') }}" alt="...">
    			</div>
    			<div>
      				<img src="{{ URL::to('/assets/images/index/slide2c.png') }}" alt="...">
    			</div>
    			<div>
      				<img src="{{ URL::to('/assets/images/index/slide2a.png') }}" alt="...">
    			</div>
    			<div>
      				<img src="{{ URL::to('/assets/images/index/slide2b.png') }}" alt="...">
    			</div>
    			<div>
      				<img src="{{ URL::to('/assets/images/index/slide2c.png') }}" alt="...">
    			</div>
  			</section>

			{{-- Small --}}
			<div id="carousel-instalations" class="carousel slide hidden-md hidden-lg hidden-xl" data-ride="carousel">
		  		<!-- Indicators -->
		  		<ol class="carousel-indicators">
		    		<li data-target="#carousel-instalations" data-slide-to="0" class="active"></li>
		    		<li data-target="#carousel-instalations" data-slide-to="1"></li>
		    		<li data-target="#carousel-instalations" data-slide-to="2"></li>
		  		</ol>

		  		<!-- Wrapper for slides -->
		  		<div class="carousel-inner" role="listbox">
		    		<div class="item active">
		      			<img src="{{ URL::to('/assets/images/index/slide2a.png') }}" alt="...">
		      			<div class="carousel-caption">
		      			</div>
		    		</div>
		    		<div class="item">
		      			<img src="{{ URL::to('/assets/images/index/slide2b.png') }}" alt="...">
		      			<div class="carousel-caption">
		      			</div>
		    		</div>
		    		<div class="item">
		      			<img src="{{ URL::to('/assets/images/index/slide2c.png') }}" alt="...">
		      			<div class="carousel-caption">
		      			</div>
		    		</div>
		  		</div>

		  		<!-- Controls -->
				<a class="left carousel-control" href="#carousel-instalations" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-instalations" role="button" data-slide="next">
		    		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    		<span class="sr-only">Next</span>
		  		</a>
			</div>
		</div>
	</div>

	{{-- CONTACTO --}}
	<div class="row color-blue">
		<div class="col-md-6 img-module-container">
			<img src="{{ URL::to('/assets/images/index/contact.png') }}" alt="...">
		</div>
		<div class="col-md-6 padding-25">
			<h2 class="color-blue">LLENA EL FORMULARIO Y EN BREVE NOS PONDREMOS EN CONTACTO CONTIGO</h2>
			<form class="color-blue">
  				<div class="form-group">
    				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
  				</div>
  				<div class="form-group">
    				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Apellido">
  				</div>
  				<div class="form-group">
    				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Correo Electrónico">
  				</div>
  				<div class="form-group">
    				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Teléfono">
  				</div>
  				<div class="form-group">
  					<textarea class="form-control" rows="3" placeholder="Mensaje"></textarea>
  				</div>
  				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
@endsection

@section('scripts')
    {{-- Slick plugin --}}
    {{ Html::script("assets/plugins/slick/slick.js") }}
    <script type="text/javascript">
        $(document).on('ready', function() {
            $(".center").slick({
                dots: true,
                infinite: true,
                centerMode: true,
                slidesToShow: 3,
                slidesToScroll: 3
            });
        });
    </script>
@endsection
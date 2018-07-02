@extends('layout.principal')

@section('title')

@section('styles')
@endsection

@section('content')
	{{-- SlideShow --}}
	<div class="row">
		<div class="col-xs-12">
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
		    		<div class="item">
		      			<img src="{{ URL::to('/assets/images/index/slide1a.png') }}" alt="...">
		      			<div class="carousel-caption">
		      			</div>
		    		</div>
		    		<div class="item">
		      			<img src="{{ URL::to('/assets/images/index/slide1a.png') }}" alt="...">
		      			<div class="carousel-caption">
		      			</div>
		    		</div>
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
	<div class="row">
		<div class="col-xs-12">
			<h2 class="text-center">PROGRAMAS PARA JUGADORES</h2>
		</div>
		<div class="col-md-6 img-module-container">
			<img src="{{ URL::to('/assets/images/index/flag.png') }}" alt="...">
		</div>
		<div class="col-md-6">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
  						<h4 class="panel-title">
    						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      							Collapsible Group Item #1
    						</a>
  						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
  						<div class="panel-body">
    						<p class="text-justify">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
  						</div>
					</div>
					</div>
					<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingTwo">
  						<h4 class="panel-title">
    						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      							Collapsible Group Item #2
    						</a>
  						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
  						<div class="panel-body">
    						<p class="text-justify">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
  						</div>
					</div>
					</div>
					<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingThree">
  						<h4 class="panel-title">
    						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      							Collapsible Group Item #3
    						</a>
  						</h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
  						<div class="panel-body">
    						<p class="text-justify">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
  						</div>
					</div>
					</div>
			</div>
		</div>
	</div>

	{{-- Bases --}}
	<div class="row bg-blue color-white">
		<div class="col-xs-12">
			<h2 class="text-center">BASES</h2>
		</div>
		<div class="col-xs-12 col-md-8">
			<p class="text-justify">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
			<p class="text-justify">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
		</div>
		<div class="col-xs-12 col-md-4 img-module-container">
			<img src="{{ URL::to('/assets/images/index/player.png') }}" alt="...">
		</div>
	</div>

	{{-- SlideShow --}}
	<div class="row">
		<div class="col-xs-12">
			<h2 class="text-center">NUESTRAS INSTALACIONES</h2>
		</div>
		<div class="col-xs-12">
			<div id="carousel-instalations" class="carousel slide" data-ride="carousel">
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
	<div class="row">
		<div class="col-md-6 img-module-container">
			<img src="{{ URL::to('/assets/images/index/contact.png') }}" alt="...">
		</div>
		<div class="col-md-6 padding-25">
			<h2>LLENA EL FORMULARIO Y EN BREVE NOS PONDREMOS EN CONTACTO CONTIGO</h2>
			<form>
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
@endsection
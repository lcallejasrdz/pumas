@extends('layout.principal')

@section('title', '| '.trans($active.'.title'))

@section('styles')
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1>{{ trans($active.'.title') }}</h1>
        </div>
    </div>
	<div class="row">
		<div class="col-xs-12 col-sm-6 contact-card">
			<p class="text-center">Ing Ricardo Zumarán Peredo</p>
			<p class="text-center">Consejero</p>
			<p class="text-center">rzumaran@pumasmadin.com</p>
		</div>
		<div class="col-xs-12 col-sm-6 contact-card">
			<p class="text-center">Lic Juan Carlos Cano Calderón</p>
			<p class="text-center">Director Administrativo</p>
			<p class="text-center">jccano@pumasmadin.com</p>
		</div>
		<div class="col-xs-12 col-sm-6 contact-card">
			<p class="text-center">DT Carlos Alberto Castro Gutiérrez</p>
			<p class="text-center">Director Deportivo</p>
			<p class="text-center">ccastro@pumasmadin.com</p>
		</div>
		<div class="col-xs-12 col-sm-6 contact-card">
			<p class="text-center">Profesor Gian Carlo Wilhelm</p>
			<p class="text-center">Auxiliar Deportivo</p>
			<p class="text-center">gwilhelm@pumasmadin.com</p>
		</div>
		<div class="col-xs-12 col-sm-6 contact-card">
			<p class="text-center">Dirección Administrativa</p>
			<p class="text-center">dir.admin@pumasmadin.com</p>
		</div>
		<div class="col-xs-12 col-sm-6 contact-card">
			<p class="text-center">Dirección Deportiva</p>
			<p class="text-center">dir.deportiva@pumasmadin.com</p>
		</div>
		<div class="col-xs-12 col-sm-6 contact-card">
			<p class="text-center">Informes</p>
			<p class="text-center">info@pumasmadin.com</p>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<p class="text-center">También puedes encontrarnos en https://pumas.mx/ - Escuelas oficiales de PUMAS</p>
		</div>
	</div>
    @include('website.modules.contact')
@endsection

@section('scripts')
    @include('website.formvalidation.contact')
@endsection
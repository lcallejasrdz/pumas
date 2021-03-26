<div class="row footer">
	<div class="col-sm-2 text-center">
		<img src="{{ URL::to('/assets/images/logo_white.svg') }}" alt="{{ env('APP_NAME') }}">
	</div>
	<div class="col-sm-10">
		<p class="text-center">
			<a href="{{ URL::route('notice_of_privacy') }}">Aviso de Privacidad</a>
		</p>
		<p class="text-center text-uppercase">{{ env('APP_NAME') }}<br><a href="https://www.facebook.com/FilialPumasSanMateo/" target="_blank"><i class="fa fa-facebook-square fa-fw"></i></a><a href="https://www.instagram.com/pumassanmateo/" target="_blank"><i class="fa fa-instagram fa-fw"></i></a>{{-- <a href="#"><i class="fa fa-youtube-square fa-fw"></i></a> --}}</p>
	</div>
</div>
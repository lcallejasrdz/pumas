<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::route('home') }}">
                <img src="{{ URL::to('assets/images/logo.svg') }}" alt="{{ env('APP_NAME') }}" class="navbar-logo">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <p class="text-center">ESCUELA DE FÚTBOL PUMAS MADIN <i class="fa fa-facebook-square fa-fw"></i> <i class="fa fa-instagram fa-fw"></i> <i class="fa fa-youtube-square fa-fw"></i></p>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ url('lang', [\App::getLocale() == 'es' ? 'en' : 'es']) }}">
                        INICIO
                    </a>
                </li>
                <li>
                    <a href="{{ url('lang', [\App::getLocale() == 'es' ? 'en' : 'es']) }}">
                        NOSOTROS
                    </a>
                </li>
                <li>
                    <a href="{{ url('lang', [\App::getLocale() == 'es' ? 'en' : 'es']) }}">
                        INSTALACIONES
                    </a>
                </li>
                <li>
                    <a href="{{ url('lang', [\App::getLocale() == 'es' ? 'en' : 'es']) }}">
                        PROGRAMAS
                    </a>
                </li>
                <li>
                    <a href="{{ url('lang', [\App::getLocale() == 'es' ? 'en' : 'es']) }}">
                        BASES
                    </a>
                </li>
                <li>
                    <a href="{{ url('lang', [\App::getLocale() == 'es' ? 'en' : 'es']) }}">
                        CONTACTO
                    </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
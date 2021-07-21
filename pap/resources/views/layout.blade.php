<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('titulo-pagina')</title> 
	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="grid/simple-grid.min.css">
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/all.min.js"></script>
	<script type="text/javascript" src="js/fontawesome.min.js"></script>
	<script type="text/javascript" src="js/estilos.js"></script>

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="/"><img class="logo" src="{{asset('logo.png')}}"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="{{route('clientes.index')}}">Area Cliente <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item dropdown active">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Informações
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	          <a class="dropdown-item" href="somos">Somos</a>
	          <a class="dropdown-item" href="horario">Horários</a>
	          <a class="dropdown-item" href="contactos">Contactos</a>
	        </div>
	      </li>
	      @if(Gate::allows('admin'))
	      <li class="nav-item active">
	        <a class="nav-link" href="{{route('materiais')}}">Materiais <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="{{route('fornecedores')}}">Fornecedores <span class="sr-only">(current)</span></a>
	      </li>
	      @endif

	      		@guest
                    @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                           
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

	    </ul>
	  </div>
	</nav>


<!--conteudo-->

	<div class="container">
		<div class="row">
<div class="col-md-12">
<h1>@yield('header')</h1>
		</div>	
			<div class="col-md-12">
	@yield('conteudo')
			</div>
		</div>
	</div>	
	
</body>
</html>


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

<!--Cabeçalho-->	
	
<!--<nav class="navbar">
	<table class="table">
		<tr>
			<td>
				<a href="/"><img class="logo" src="logo.png"></a>
			</td>
			<td >
				<a id="link" href="{{route('clientes.index')}}">Area Cliente</a>
			</td>
			<td >
				<a id="link" href="{{route('perfil')}}">Perfil funcionário</a>
			</td>
			<td >
				<a id="link" href="{{route('login')}}">Iniciar Sessão</a>
			</td>
			<td >
				<a id="link" href="{{route('equipamentos')}}">Equipamentos</a>
			</td>
		</tr>
	</table>
</nav>-->
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
	      <li class="nav-item active">
	        <a class="nav-link" href="{{route('login')}}">Login</a>
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


<!--Rodapé

	<footer class="rodape">
		<div style="text-align: left">
			<ul>
				<a href="somos"> Quem somos </a> <br>
				<a href="horario"> Horario </a> <br>
				<a href="contactos"> Contactos </a> <br>
			</ul>
		</div>
	</footer>
-->	
	
</body>
</html>


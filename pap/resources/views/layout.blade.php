<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('titulo-pagina')</title> 
	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">
	<link rel="stylesheet" type="text/js" href="{{asset('js/estilos.js')}}">
	<link rel="stylesheet" type="text/css" href="grid/simple-grid.min.css">
</head>
<body>

<!--Cabeçalho-->	
	
<div class="navbar">
	<table class="table">
		<tr>
			<td>
				<a href="/"><img class="logo" src="logo.png"></a>
			</td>
			<td >
				<a id="link" href="{{route('clientes')}}">Area Cliente</a>
			</td>
			<td >
				<a id="link" href="{{route('login')}}">Iniciar Sessão</a>
			</td>
		</tr>
	</table>
</div>

<!--conteudo-->
<h1>@yield('header')</h1>
	
	@yield('conteudo')



<!--Rodapé-->

	<footer class="rodape">
		<div style="text-align: left">
			<ul>
				<a href="somos"> Quem somos </a> <br>
				<a href="horario"> Horario </a> <br>
				<a href="contactos"> Contactos </a> <br>
			</ul>
		</div>
	</footer>
	
</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('titulo-pagina')</title> 
	
	
</head>
<body>

<!--Cabeçalho-->
	
	
	<div style="background-color: black">
		<h3>index</h3>
	</div>
<h1 style="text-align: center">@yield('header')</h1>
	@yield('conteudo')

<!--Rodapé-->
<br>

	<footer style="position: relative;background-color:black;color: #FFF;width:100%;text-align: center;line-height: 40px;bottom: 0px;margin-top: 24%">Copyright: Marta Machado</footer>
	
</body>
@extends('layout')
@section('titulo-pagina')
Cliente
@endsection
@section('header')
Edite aqui o seu perfil
@endsection
@section('conteudo')
	<form action="{{route('clientes.edit',$clientes->id_cliente)}}" method="post">
		@csrf
		@method('patch')

		Nome:
			<input type="text" name="nome"><br>
		Telefone:
			<input type="text" name="telefone"><br>
		Email:
			<input type="text" name="email"><br>

		<br><br>
		<input type="submit" name="enviar">
	</form>
@endsection
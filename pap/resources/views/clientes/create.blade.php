@extends('layout')
@section('titulo-pagina')
Cliente
@endsection
@section('header')
Seja bem-vindo de volta!
@endsection
@section('conteudo')
	<form action="{{route('clientes.store')}}" method="post">
		@csrf
		@method('patch')

		Nome:<input type="text" name="nome" value="{{$cliente->nome}}"><br>
		@if($errors->has('nome'))
			Deverá ter no minimo 3 letra.
		@endif

		Telefone:<input type="text" name="telefone" value="{{$cliente->telefone}}"><br>
		@if($errors->has('telefone'))
			Deverá ter no minimo 9 letra.
		@endif
		
		<br><br>
		<input type="submit" name="enviar">
	</form>
@endsection
@extends('layout')
@section('titulo-pagina')
Cliente
@endsection
@section('header')
Seja bem-vindo de volta!
@endsection
@section('conteudo')
	<form action="{{route('equipamentos.store',['id'=>$clientes->id_cliente])}}" method="post">
		@csrf
		@method('patch')

		Cliente: {{$clientes->nome}}
				

		<br><br>

		Marca:
			<input type="text" name="marca"><br><br>
			@if($errors->has('marca'))
				Deverá ter no minimo 1 letra.
			@endif

		Descrição do equipamento:
			<input type="text" name="descricao"><br>
			@if($errors->has('descricao'))
				Deverá ter no minimo 1 letra.
			@endif
		
		<br><br>
		<input type="submit" name="enviar">
	</form>
@endsection
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

		Cliente:
			<select name="id_cliente">
				@foreach($clientes as $cliente)
						<option value="{{$cliente->id_cliente}}">{{$cliente->nome}}</option>
				@endforeach
			</select>

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
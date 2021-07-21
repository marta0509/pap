@extends('layout')
@section('titulo-pagina')
Cliente
@endsection
@section('header')
Edite aqui o seu perfil
@endsection
@section('conteudo')
	<form action="{{route('clientes.update',$clientes->id_cliente)}}" method="post">
		@csrf
		@method('patch')

		<label class="col-sm-2 col-form-label">Nome:</label>
		<input class="form-control" type="text" name="nome" value="{{$clientes->nome}}"><br>
		@if($errors->has('nome'))
			Deverá ter no minimo 3 letra.
		@endif

		<label class="col-sm-2 col-form-label">Telefone:</label>
		<input class="form-control" type="text" name="telefone" value="{{$clientes->telefone}}"><br>
		@if($errors->has('telefone'))
			Deverá ter no minimo 9 letra.
		@endif
		
		<label class="col-sm-2 col-form-label">Email:</label>
			<input class="form-control" type="text" name="email" value="{{$clientes->email}}"><br>

		<br><br>
		<input class="form-control" type="submit" name="enviar">
	</form>
@endsection
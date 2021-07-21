@extends('layout')
@section('titulo-pagina')
Fornecedores
@endsection
@section('header')
Fornecedores
@endsection
@section('conteudo')
	<form action="{{route('fornecedores.store')}}" method="post">
		@csrf

		<label class="col-sm-2 col-form-label">Nome:</label>
		<input class="form-control" type="text" name="nome"><br><br>
		@if($errors->has('nome'))
			Deverá ter no minimo 1 letra.
		@endif

		<label class="col-sm-2 col-form-label">Telefone:</label>
		<input class="form-control" type="text" name="telefone"><br><br>
		@if($errors->has('telefone'))
			Deverá ter no minimo 9 números.
		@endif

		<label class="col-sm-2 col-form-label">Email:</label>
		<input class="form-control" type="text" name="email"><br>
		@if($errors->has('email'))
			Deverá ter no minimo 1 letra.
		@endif
		
		
		<input class="form-control" type="submit" name="enviar">
	</form>
@endsection
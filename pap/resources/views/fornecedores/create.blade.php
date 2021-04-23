@extends('layout')
@section('titulo-pagina')
Fornecedores
@endsection
@section('header')
Fornecedores ativos
@endsection
@section('conteudo')
	<form action="{{route('fornecedores.store')}}" method="post">
		@csrf

		Nome:
			<input type="text" name="nome"><br><br>
			@if($errors->has('nome'))
				Deverá ter no minimo 1 letra.
			@endif

		Telefone:
			<input type="text" name="telefone"><br><br>
			@if($errors->has('telefone'))
				Deverá ter no minimo 9 números.
			@endif

		Email:
			<input type="text" name="email"><br>
			@if($errors->has('email'))
				Deverá ter no minimo 1 letra.
			@endif
		
		<br><br>
		<input type="submit" name="enviar">
	</form>
@endsection
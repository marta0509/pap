@extends('layout')
@section('titulo-pagina')
Materiais
@endsection
@section('header')

@endsection
@section('conteudo')
	<form action="{{route('materiais.store')}}" method="post">
		@csrf

		Designação:
			<input type="text" name="designacao"><br><br>
			@if($errors->has('designacao'))
				Deverá ter no minimo 1 letra.
			@endif

		Stock:
			<input type="text" name="stock"><br><br>
			

		Preço:
			<input type="text" name="preco"><br><br>

		Fornecedor:
			<input type="text" name="id_fornecedor"><br><br>
		
		<br><br>
		<input type="submit" name="enviar">
	</form>
@endsection
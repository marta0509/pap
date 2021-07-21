@extends('layout')
@section('titulo-pagina')
Materiais
@endsection
@section('header')

@endsection
@section('conteudo')
	<form action="{{route('materiais.store')}}" method="post">
		@csrf

		<label class="col-sm-2 col-form-label">Designação:</label>
		<input class="form-control" type="text" name="designacao">
		@if($errors->has('designacao'))
			Deverá ter no minimo 1 letra.
		@endif

		<label class="col-sm-2 col-form-label">Stock:</label>
		<input class="form-control" type="text" name="stock">
			

		<label class="col-sm-2 col-form-label">Preço:</label>
		<input class="form-control" type="text" name="preco">

		<label class="col-sm-2 col-form-label">Fornecedor:</label>
		<select class="form-control" name="id_fornecedor">
			@foreach($fornecedores as $fornecedor)
			<option value="{{$fornecedor->id_fornecedor}}">{{$fornecedor->nome}}</option>
			@endforeach
		</select>
		
		<br>

			<input class="form-control" type="submit" name="enviar">
		
	</form>
@endsection
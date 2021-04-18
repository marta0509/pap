@extends('layout')
@section('titulo-pagina')
Cliente
@endsection
@section('header')
Seja bem-vindo de volta!
@endsection
@section('conteudo')
	<form action="{{route('reparacoes.store')}}" method="post">
		@csrf

		Material:
			<select name="id_material">
				@foreach($materiais as $material)
						<option value="{{$material->id_material}}">{{$material->designacao}}</option>
				@endforeach
			</select>
		
		<br>
		Descrição da reparação:
			<input type="text" name="descricao"><br>
			@if($errors->has('descricao'))
				Deverá ter no minimo 1 letra.
			@endif

			Preço:
			<input type="text" name="marca"><br>
			
			Data:<input type="date" name="data">
		<br>
		
		<br><br>
		<input type="submit" name="enviar">
	</form>
@endsection
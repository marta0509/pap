@extends('layout')
@section('titulo-pagina')
Reparação
@endsection
@section('header')
Criar reparação
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
			<input type="text" name="descricao">

		<br>
		Preço a pagar pela reparação:
			<input type="text" name="preco">
		
		<br>
		Observações da reparação:
			<input type="text" name="observacoes">

		<br><br>
		<input type="submit" name="enviar">
	</form>
@endsection
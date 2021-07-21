@extends('layout')
@section('titulo-pagina')
Reparação
@endsection
@section('header')
Criar reparação
@endsection
@section('conteudo')
	<form action="{{route('reparacoes.store',['id'=>$equipamento->id_equipamento])}}" method="post">
		@csrf

		
		<label class="col-sm-2 col-form-label">Material:</label>
			<select class="form-control" name="id_material">
				@foreach($materiais as $material)
						<option value="{{$material->id_material}}">{{$material->designacao}}</option>
				@endforeach
			</select>
		
		<br>
		<label class="col-sm-2 col-form-label">Descrição:</label>
			<input class="form-control" type="text" name="descricao" value="{{old('descricao')}}">

		
		<label class="col-sm-2 col-form-label">Preço da reparação:</label>
			<input class="form-control" type="text" name="preco" value="{{old('preco')}}">
		
		
		<label class="col-sm-2 col-form-label">Observações:</label>
			<input class="form-control" type="text" name="observacoes" value="{{old('observacoes')}}">

	<br>
		<input class="form-control" type="submit" name="enviar">
	</form>
@endsection
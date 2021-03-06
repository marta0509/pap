@extends('layout')
@section('titulo-pagina')
Reparações
@endsection
@section('header')

@endsection
@section('conteudo')
<form action="{{route('reparacoes.update',['id'=>$reparacao->id_reparacao])}}" method="post">
	@csrf
	@method('patch')

	<label class="col-sm-2 col-form-label">Material:</label>
			<select class="form-control"name="id_material">
				@foreach($materiais as $material)
						<option class="form-control" value="{{$material->id_material}}">{{$material->designacao}}</option>
				@endforeach
			</select>

	<label class="col-sm-2 col-form-label">Descrição:</label>
	<input class="form-control" type="text" name="descricao" value="{{$reparacao->descricao}}"><br><br>
	@if($errors->has('descricao'))
		Deverá ter no minimo 1 caracter.
	@endif

	<label class="col-sm-2 col-form-label">Preço:</label>
	<input class="form-control" type="text" name="preco" value="{{$reparacao->preco}}"><br><br>
	@if($errors->has('preco'))
		Deverá ter no minimo 1 caracter.
	@endif

	<label class="col-sm-2 col-form-label">Observações:</label>
	<input class="form-control" type="text" name="observacoes" value="{{$reparacao->observacoes}}"><br><br>
	@if($errors->has('observacoes'))
		Deverá ter no minimo 1 caracter.
	@endif

	<input class="form-control" type="submit" name="enviar">
</form>

@endsection
@extends('layout')
@section('titulo-pagina')
Equipamentos
@endsection
@section('header')

@endsection
@section('conteudo')
<form action="{{route('equipamentos.update',['id'=>$equipamento->id_equipamento])}}" method="post">
	@csrf
	@method('patch')

	<label class="col-sm-2 col-form-label">Marca:</label>
	<input class="form-control" type="text" name="marca" value="{{$equipamento->marca}}"><br>
	@if($errors->has('marca'))
		Deverá ter no minimo 1 caracter.
	@endif

	<label class="col-sm-2 col-form-label">Descrição:</label>
	<input class="form-control" type="text" name="descricao" value="{{$equipamento->descricao}}"><br>
	@if($errors->has('descricao'))
		Deverá ter no minimo 1 caracter.
	@endif
	<input class="form-control" type="submit" name="enviar">
</form>
@endsection
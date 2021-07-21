@extends('layout')
@section('titulo-pagina')
Equipamentos
@endsection
@section('header')

@endsection
@section('conteudo')
<h3>Adicionar equipamento ao cliente</h3>
<h4>{{$cliente->nome}}</h4>
<form action="{{route('equipamentos.store',['id'=>$cliente->id_cliente])}}" method="post">
	@csrf
	
	<label class="col-sm-2 col-form-label">Marca:</label>
	<input class="form-control"  type="text" name="marca" value="{{old('marca')}}"><br>
	@if($errors->has('marca'))
		Deverá ter no mínimo 1 caratere(s).
	@endif
	<label class="col-sm-2 col-form-label">Descrição:</label>
	<input class="form-control" type="text" name="descricao" value="{{old('descricao')}}"><br>
	@if($errors->has('descricao'))
		DDeverá ter no mínimo 1 caratere(s).
	@endif


	<input class="form-control" type="submit" name="enviar">
</form>

@endsection
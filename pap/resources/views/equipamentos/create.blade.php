@extends('layout')
@section('titulo-pagina')
Equipamentos
@endsection
@section('header')

@endsection
@section('conteudo')
<form action="{{route('equipamentos.store')}}" method="post">
	@csrf
	
	Marca:<input type="text" name="marca" value="{{$equipamento->marca}}"><br>
	@if($errors->has('marca'))
		Deverá ter no minimo 1 letra.
	@endif
	Descrição:<input type="text" name="descricao" value="{{$equipamento->descricao}}"><br>
	<input type="submit" name="enviar">
</form>

@endsection
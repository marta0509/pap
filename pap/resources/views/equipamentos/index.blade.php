@extends('layout')
@section('titulo-pagina')
Cliente
@endsection
@section('header')
Seja bem-vindo de volta!
@endsection
@section('conteudo')
 
	@foreach($equipamentos as $equipamento)
		Id cliente:{{$equipamento->id_cliente}}<br>
		Nome:{{$equipamento->marca}}<br>
		Descrição:{{$equipamento->descricao}}

	<div style="text-align: right; margin-right: 150px">
		<a href="{{route('equipamentos.edit',['id'=>$equipamento->id_equipamento])}}">Editar</a>&nbsp&nbsp&nbsp
		<a href="{{route('equipamentos.delete',['id'=>$equipamento->id_equipamento])}}">Apagar</a>
	</div>
		<hr>
	@endforeach
<br>
<a href="{{route('equipamentos.create')}}">Adicionar</a>
@endsection
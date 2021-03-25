@extends('layout')
@section('titulo-pagina')
Cliente
@endsection
@section('header')
Seja bem-vindo de volta!
@endsection
@section('conteudo')
 
	@foreach($equipamentos as $equipamento)
		Nome:{{$equipamento->marca}}<br>
		Telefone:{{$equipamento->descricao}}<br>
		id cliente:{{$equipamento->id_cliente}}
	@endforeach

@endsection
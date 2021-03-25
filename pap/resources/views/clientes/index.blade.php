@extends('layout')
@section('titulo-pagina')
Cliente
@endsection
@section('header')
Seja bem-vindo de volta!
@endsection
@section('conteudo')
 
	Veja como está seu equipamento.<br>

	@foreach($clientes as $cliente)
		Nome:{{$cliente->nome}}<br>
		Telefone:{{$cliente->telefone}}<br>
		Email:{{$cliente->email}}<br>
		{{$cliente->equipamentos->id_equipamento}}
	@endforeach

	

@endsection
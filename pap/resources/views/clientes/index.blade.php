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
	@endforeach

	@foreach($equipamentos as $equipamento)
		Nome:{{$equipamento->marca}}<br>
		Telefone:{{$equipamento->designacao}}<br>
		nome do cliente:{{$equipamento->clientes-> nome}}
	@endforeach

@endsection
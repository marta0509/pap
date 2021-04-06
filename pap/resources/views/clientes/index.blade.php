@extends('layout')
@section('titulo-pagina')
Cliente
@endsection
@section('header')
Seja bem-vindo de volta!
@endsection
@section('conteudo')
 
	Veja como está seu equipamento.<br>

<br>


	@foreach($equipamentos as $equipamento)
		Nome cliente:{{$equipamento->cliente->nome}}<br>
		Telefone:{{$equipamento->cliente->telefone}}<br>
 		Equipamentos do cliente<br>
		Marca:{{$equipamento->marca}}<br>
		Descrição:{{$equipamento->descricao}}<br>
		<hr>
 	@endforeach

 @foreach($reparacao as $reparacao)
		
	Descrição:{{$reparacao->descricao}}<br>
	Preço:{{$reparacao->preco}}<br>
	
 @endforeach



@endsection
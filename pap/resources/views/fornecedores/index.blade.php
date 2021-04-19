@extends('layout')
@section('titulo-pagina')
Fornecedores
@endsection
@section('header')
Stock
@endsection
@section('conteudo')

{{$fornecedores}}

<br><br>
		@foreach($fornecedores as $fornecedor)
			<b>Nome:</b>{{$fornecedor->nome}}<br>
			<b>Telefone:</b>{{$fornecedor->telefone}}<br>	
			<b>Email:</b>{{$fornecedor->email}}<br>	
			<hr>
		@endforeach
	
@endsection
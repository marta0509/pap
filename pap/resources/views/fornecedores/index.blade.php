@extends('layout')
@section('titulo-pagina')
Fornecedores
@endsection
@section('header')
Stock
@endsection
@section('conteudo')

{{$fornecedores}}

@if(auth()->check())
		@if(Gate::allows('admin'))
<br><br>
			@foreach($fornecedores as $fornecedor)
				<b>Nome:</b>{{$fornecedor->nome}}<br>
				<b>Telefone:</b>{{$fornecedor->telefone}}<br>	
				<b>Email:</b>{{$fornecedor->email}}<br>	
				<hr>
			@endforeach
		@endif
@endif
@endsection
@extends('layout')
@section('titulo-pagina')
Cliente
@endsection
@section('header')

@endsection
@section('conteudo')

<br>

@foreach($clientes as $cliente)
<h5>
	<b>Nome cliente:</b>{{$cliente->nome}}<br></h5>
	<b>Telefone:</b>{{$cliente->telefone}}<br>	
	
	<strong><a href="{{route('clientes.show',['id'=>$cliente->id_cliente])}}">Detalhes</a></strong> <br>

	@if(Gate::allows('admin'))
	<strong><a href="{{route('clientes.delete',['id'=>$cliente->id_cliente])}}">Eliminar cliente</a></strong>
	@endif
	@if(Gate::allows('admin'))
	<strong><a href="{{route('clientes.edit',['id'=>$cliente->id_cliente])}}">Editar perfil</a></strong>
	@endif
	<hr>
@endforeach

<br><br>
<strong><a href="{{route('clientes.create')}}">Adicionar cliente</a></strong>
@endsection
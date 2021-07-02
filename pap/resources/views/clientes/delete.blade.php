@extends('layout')
@section('titulo-pagina')
Clientes
@endsection
@section('header')

@endsection
@section('conteudo')
<h2>Deseja eliminar este "{{$clientes->nome}}"?</h2>

<form method="post" action="{{route('clientes.destroy',['id'=>$clientes->id_cliente])}}">
	@csrf
	@method('delete')
	<input type="submit" name="Sim">
	
</form>

@endsection
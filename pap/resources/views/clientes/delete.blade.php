@extends('layout')
@section('titulo-pagina')
Clientes
@endsection
@section('header')

@endsection
@section('conteudo')
<h2>Deseja eliminar este "{{$equipamento->marca}}" do cliente {{$equipamento->id_cliente}}?</h2>

<form method="post" action="{{route('clientes.destroy',['id'=>$equipamento->id_equipamento])}}">
	@csrf
	@method('delete')
	<input type="submit" name="Sim">
	
</form>

@endsection
@extends('layout')
@section('titulo-pagina')
Fornecedores
@endsection
@section('header')

@endsection
@section('conteudo')
<h2>Deseja eliminar o fornecedor "{{$fornecedores->nome}}"?</h2>

<form method="post" action="{{route('fornecedores.destroy',['id'=>$fornecedores->id_fornecedor])}}">
	@csrf
	@method('delete')
	<input type="submit" name="Sim">
	
</form>

@endsection
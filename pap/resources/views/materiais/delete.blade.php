@extends('layout')
@section('titulo-pagina')
Material
@endsection
@section('header')

@endsection
@section('conteudo')
<h2>Deseja eliminar o material "{{$materiais->designacao}}"?</h2>

<form method="post" action="{{route('materiais.destroy',['id'=>$materiais->id_material])}}">
	@csrf
	@method('delete')
	<input class="form-control" type="submit" name="Sim">
	
</form>

@endsection
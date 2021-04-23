@extends('layout')
@section('titulo-pagina')
Fornecedores
@endsection
@section('header')

@endsection
@section('conteudo')
<form action="{{route('fornecedores.update',['id'=>$fornecedores->id_fornecedor])}}" method="post">
	@csrf
	@method('patch')

	Nome:<input type="text" name="nome" value="{{$fornecedores->nome}}"><br><br>
	@if($errors->has('nome'))
		Deverá ter no minimo 1 letra.
	@endif

	Telefone:<input type="text" name="telefone" value="{{$fornecedores->telefone}}"><br><br>
	@if($errors->has('telefone'))
		Deverá ter no minimo 1 letra.
	@endif

	Email:<input type="text" name="email" value="{{$fornecedores->email}}"><br><br>
	@if($errors->has('email'))
		Deverá ter no minimo 1 letra.
	@endif

	<input type="submit" name="enviar">
</form>

@endsection
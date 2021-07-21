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

	<label class="col-sm-2 col-form-label">Nome:</label>
	<input class="form-control" type="text" name="nome" value="{{$fornecedores->nome}}"><br><br>
	@if($errors->has('nome'))
		Deverá ter no minimo 1 letra.
	@endif

	<label class="col-sm-2 col-form-label">Telefone:</label>
	<input class="form-control" type="text" name="telefone" value="{{$fornecedores->telefone}}"><br><br>
	@if($errors->has('telefone'))
		Deverá ter no minimo 1 letra.
	@endif

	<label class="col-sm-2 col-form-label">Email:</label>
	<input class="form-control" type="text" name="email" value="{{$fornecedores->email}}"><br><br>
	@if($errors->has('email'))
		Deverá ter no minimo 1 letra.
	@endif

	<input class="form-control" type="submit" name="enviar">
</form>

@endsection
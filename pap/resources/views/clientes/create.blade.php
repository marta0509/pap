@extends('layout')
@section('titulo-pagina')
Cliente
@endsection
@section('header')
Adicione um cliente
@endsection
@section('conteudo')
	<form action="{{route('clientes.store')}}" method="post">
		@csrf
	
		<label class="col-sm-2 col-form-label">Nome:</label>
		<input class="form-control" type="text" name="nome" value="{{old('nome')}}"><br>
		@if($errors->has('nome'))
			Deverá ter no minimo 5 carateres.
		@endif
		<br>

		<label class="col-sm-2 col-form-label">Telefone:</label>
		<input class="form-control" type="text" name="telefone" value="{{old('telefone')}}"><br>
		@if($errors->has('telefone'))
			Deverá ter no minimo 9 carateres.
		@endif
		<br>
		
		<label class="col-sm-2 col-form-label">Email:</label>
		<input class="form-control" type="text" name="email" ><br>
		<br><br>

		<select class="form-control" name='id_user'>
			@foreach ($users as $user)
				<option class="form-control" value="{{$user->id}}">{{$user->name}}</option>
			@endforeach

		</select>
		<br>
		<input class="form-control" type="submit" name="enviar">
	</form>
@endsection
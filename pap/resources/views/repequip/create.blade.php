@extends('layout')
@section('titulo-pagina')
Reparação
@endsection
@section('header')
Criar reparação
@endsection
@section('conteudo')
	<form action="{{route('reparacoes.store')}}" method="post">
		@csrf

		Material:
			<select name="id_material">
				@foreach($materiais as $material)
						<option value="{{$material->id_material}}">{{$material->designacao}}</option>
				@endforeach
			</select>
		
		<br>
		Descrição da reparação:
			<select name="descricao">
				@foreach($reparacao as $reparacao)
						<option value="{{$reparacao->id_reparacao}}">{{$reparacao->descricao}}</option>
				@endforeach
			</select>

			Preço:
			<input type="numeric" name="preco"><br>
			
			Data:<input type="date" name="data">
		<br>
		
		Funcionario:
			<input type="numeric" name="id_funcionario">
		<br><br>
		<input type="submit" name="enviar">
	</form>
@endsection
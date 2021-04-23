@extends('layout')
@section('titulo-pagina')
Fornecedores
@endsection
@section('header')
Forncedores
@endsection
@section('conteudo')



@if(auth()->check())
		@if(Gate::allows('admin'))
<br><br>
			@foreach($fornecedores as $fornecedor)
				<b>Nome:</b>{{$fornecedor->nome}}<br>
				<b>Telefone:</b>{{$fornecedor->telefone}}<br>	
				<b>Email:</b>{{$fornecedor->email}}<br>	
				
				<div style="text-align: right; margin-right: 150px">
					<strong><a href="{{route('fornecedores.edit',['id'=>$fornecedor->id_fornecedor])}}">Editar Fornecedor</a></strong>
					<strong><a href="{{route('fornecedores.delete',['id'=>$fornecedor->id_fornecedor])}}">Eliminar Fornecedor</a></strong>
				</div>
				<hr>
			@endforeach

			<strong><a href="{{route('fornecedores.create')}}">Adicionar Fornecedores</a></strong>
		@endif
@endif
@endsection
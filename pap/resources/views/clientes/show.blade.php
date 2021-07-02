@extends('layout')
@section('titulo-pagina')
Cliente
@endsection
@section('header')
Seja bem-vindo de volta!
@endsection
@section('conteudo')

<h5>{{$cliente->nome}}</h5>
@foreach ($cliente->equipamentos as $equipamentos)
	<b>Marca do equipamento:</b>{{$equipamentos->marca}}<br>
	<b>Descrição do equipamento:</b>{{$equipamentos->descricao}}<br>
	
	<a href="{{route('reparacoes.create')}}">Criar Reparação</a>
		&nbsp&nbsp&nbsp
	<br><br><br>
	@if(count($equipamentos->reparacoes)>0)
		<h3>Reparações</h3>
	

	<br>

	@foreach ($equipamentos->reparacoes as $reparacoes)
	<b>Descrição da reparação:</b>{{$reparacoes->descricao}}<br>
	<b>Preço a pagar pela reparação:</b>{{$reparacoes->preco}}€<br>
	<b>Observações da reparação:</b>{{$reparacoes->observacoes}}<br>
	<div style="text-align: right; margin-right: 150px">
		
		<a href="{{route('equipamentos.edit',['id'=>$equipamentos->id_equipamento])}}">Editar</a>
		&nbsp&nbsp&nbsp
		<a href="{{route('equipamentos.delete',['id'=>$equipamentos->id_equipamento])}}">Apagar</a>
	</div>
	<hr>
	

	@endforeach
	@endif
<br>
@endforeach

@endsection
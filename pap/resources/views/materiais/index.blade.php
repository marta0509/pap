@extends('layout')
@section('titulo-pagina')
Materiais
@endsection
@section('header')
<h3>Em Stock</h3>
@endsection
@section('conteudo')

	@foreach($materiais as $material)
				<b>Id Material: </b>{{$material->id_material}}<br>
				<b>Designação: </b>{{$material->designacao}}<br>	
				<b>Stock: </b>{{$material->stock}} unidades<br>	
				<b>Preço da peça: </b>{{$material->preco}} €<br>	
				<b>Id Fornecedor: </b>{{$material->id_fornecedor}}<br>	

				<div style="text-align: right; margin-right: 150px">
					
					<a href="{{route('materiais.delete',['id'=>$material->id_material])}}">Apagar Material</a>
				</div>

				<hr>
	@endforeach

	<strong><a href="{{route('materiais.create')}}">Adicionar Material</a></strong>
				
@endsection
@extends('layout')
@section('titulo-pagina')
Materiais
@endsection
@section('header')
<h3>Em Stock</h3>
@endsection
@section('conteudo')
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Designação</th>
      <th scope="col">Stock (uni)</th>
      <th scope="col">Preço</th>
      <th scope="col">    </th>
    </tr>
  </thead>
  <tbody>
  	@foreach($materiais as $material)
<tr>

	<td>{{$material->id_material}}</td>
	<td>{{$material->designacao}}</td>
	<td>{{$material->stock}}</td>
	<td>{{$material->preco}} €</td>
	<td><a style="color: orange" href="{{route('materiais.delete',['id'=>$material->id_material])}}"><i class="fas fa-trash"></i></a></td>
	
 </tr>
    @endforeach 
  </tbody>
</table>				
					
<a style="color: orange" href="{{route('materiais.create')}}"><i class="fas fa-plus"></i></a>
				
@endsection
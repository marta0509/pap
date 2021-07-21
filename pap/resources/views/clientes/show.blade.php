@extends('layout')
@section('titulo-pagina')
Cliente
@endsection
@section('header')
@endsection
@section('conteudo')

<h3>Seja bem-vindo de volta,{{$cliente->nome}}</h3>
<br>
<h5>Lista de equipamento</h5>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Marca </th>
      <th scope="col">Descrição</th>
      @if(Gate::allows('admin'))
      <th scope="col">     </th>
   	  <th scope="col">     </th>
      @endif
   	  <th scope="col">     </th>
    </tr>
  </thead>
  <tbody>
  	@foreach ($cliente->equipamentos as $equipamentos)
<tr>

<td>{{$equipamentos->id_equipamento}}</td>
	<td>{{$equipamentos->marca}}</td>
	<td>{{$equipamentos->descricao}}</td>

	@if(Gate::allows('admin'))
	<td><a style="color: orange" href="{{route('equipamentos.edit',['id'=>$equipamentos->id_equipamento])}}"><i class="fas fa-pencil-alt"></i></a></td>

	<td><a style="color: orange" href="{{route('reparacoes.create',['id'=>$equipamentos->id_equipamento])}}"><i class="fas fa-plus"></i></a></td>
  @endif

	<td><a style="color: orange" href="{{route('reparacoes.show',['id'=>$equipamentos->id_equipamento])}}"><i class="fas fa-search"></i></a></td>
	
 </tr>
    @endforeach 
  </tbody>
</table>

@if(Gate::allows('admin'))
<a style="color: orange" href="{{route('equipamentos.create', ['id'=>$cliente->id_cliente])}}"><i class="fas fa-plus"></i></a>
@endif
@endsection
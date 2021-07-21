@extends('layout')
@section('titulo-pagina')
Cliente
@endsection
@section('header')

@endsection
@section('conteudo')

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Email</th>
      <th scope="col">    </th>
      @if(Gate::allows('admin'))
      <th scope="col">    </th>
      <th scope="col">    </th>
      @endif
    </tr>
  </thead>
  <tbody>
  	@foreach($clientes as $cliente)
<tr>
	<td>{{$cliente->id_cliente}}</td>
	<td>{{$cliente->nome}}</td>
	<td>{{$cliente->telefone}}</td>
	<td>{{$cliente->email}}</td>
	<td><a style="color: orange" href="{{route('clientes.show',['id'=>$cliente->id_cliente])}}"><i class="fas fa-search"></i></a></td>
	@if(Gate::allows('admin'))
	<td><a style="color: orange" href="{{route('clientes.edit',['id'=>$cliente->id_cliente])}}"><i class="fas fa-pencil-alt"></i></a></td>
	<td><a style="color: orange" href="{{route('clientes.delete',['id'=>$cliente->id_cliente])}}"><i class="fas fa-trash"></i></a></td>
	
	@endif
	
 </tr>
    @endforeach 
  </tbody>
</table>
@if(Gate::allows('admin'))
<a style="color: orange" href="{{route('clientes.create')}}"><i class="fas fa-plus"></i></a>
@endif
@endsection
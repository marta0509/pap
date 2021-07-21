@extends('layout')
@section('titulo-pagina')
Fornecedores
@endsection
@section('header')
Fornecedores
@endsection
@section('conteudo')

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Email</th>
      <th scope="col">   </th>
      <th scope="col">   </th>
      <th scope="col">   </th>
    </tr>
  </thead>
  <tbody>
  	@foreach($fornecedores as $fornecedor)
<tr>

	<td>{{$fornecedor->id_fornecedor}}</td>
	<td>{{$fornecedor->nome}}</td>
	<td>{{$fornecedor->telefone}}</td>
	<td>{{$fornecedor->email}}</td>
	<td><a style="color: orange" href="{{route('fornecedores.edit',['id'=>$fornecedor->id_fornecedor])}}"><i class="fas fa-pencil-alt"></i></a></td>
  <td><a style="color: orange" href="{{route('fornecedores.delete',['id'=>$fornecedor->id_fornecedor])}}"><i class="fas fa-trash"></i></a></td>
	
 </tr>
    @endforeach 
  </tbody>
</table>

<a style="color: orange" href="{{route('fornecedores.create')}}"><i class="fas fa-plus"></i></a>
@endsection
@extends('layout')
@section('titulo-pagina')
Cliente
@endsection
@section('header')
@endsection
@section('conteudo')

<h5>Reparação do equipamento,{{$equipamento->marca}}</h5>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">ID Material</th>
      <th scope="col">Descrição</th>
      <th scope="col">ID Equipamento</th>
      <th scope="col">Preço</th>
      <th scope="col">Observações</th>
      @if(Gate::allows('admin'))
      <th scope="col">    </th>
      @endif

    </tr>
  </thead>
  <tbody>
    @foreach($equipamento->reparacoes as $reparacao)
 <tr>
  <td>{{$reparacao->id_reparacao}}</td>
  <td>{{$reparacao->material->designacao}}</td>
	<td>{{$reparacao->descricao}}</td>
  <td>{{$reparacao->id_equipamento}}</td>
	<td>{{$reparacao->preco}}€</td>
	<td>{{$reparacao->observacoes}}</td>
  @if(Gate::allows('admin'))
  <td><a style="color: orange" href="{{route('reparacoes.edit',['id'=>$reparacao->id_reparacao])}}"><i class="fas fa-pencil-alt"></i></a></td>
  @endif

	</tr>
  @endforeach
  </tbody>
</table>

@if(Gate::allows('admin'))
<a style="color: orange" href="{{route('reparacoes.create',['id'=>$equipamento->id_equipamento])}}"><i class="fas fa-plus"></i></a>
@endif
@endsection
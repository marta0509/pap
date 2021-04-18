@extends('layout')
@section('titulo-pagina')
Cliente
@endsection
@section('header')
Seja bem-vindo de volta!
@endsection
@section('conteudo')
 
<br>

			@foreach($clientes as $cliente)
			<b>Nome cliente:</b>{{$cliente->nome}}<br>
			<b>Telefone:</b>{{$cliente->telefone}}<br>	
		
			<h2>Seus equipamentos em reparação</h2>
 				@foreach($equipamentos as $equipamento)
 					
					@if ($cliente->id_cliente == $equipamento->id_cliente)	
		 				<hr>
						<b>Marca:</b>{{$equipamento->marca}}<br>
						<b>Descrição do equipamento:</b>{{$equipamento->descricao}}<br>
							@foreach($repequip as $detalheReparacao)
		 						@if ($equipamento->id_equipamento == $detalheReparacao->id_equipamento)      
										<b>Descrição da reparção:</b>{{ $detalheReparacao->reparacao->descricao }}<br>
										<b>Preço da reparção:</b>{{ $detalheReparacao->reparacao->preco}}€<br>
										<b>Data da última atualização: </b>{{ $detalheReparacao->reparacao->data}}

										@if(auth()->check())
											@if(Gate::allows('normal') || Gate::allows('admin'))
		 										     
												<div style="text-align: right; margin-right: 150px">
													<a href="{{route('reparacoes.create')}}">Criar Reparação</a>
														&nbsp&nbsp&nbsp
													<a href="{{route('equipamentos.edit',['id'=>$equipamento->id_equipamento])}}">Editar</a>
														&nbsp&nbsp&nbsp
													<a href="{{route('equipamentos.delete',['id'=>$equipamento->id_equipamento])}}">Apagar</a>
												</div>
												
											@endif
										@endif
										<br>					
								@endif
							@endforeach
					@endif
				@endforeach
<hr><hr><hr>
			@endforeach
<br>			
<a href="{{route('clientes.create')}}">Adicionar</a>
@endsection
@extends('layout')
@section('titulo-pagina')
Cliente
@endsection
@section('header')
Seja bem-vindo de volta!
@endsection
@section('conteudo')
 
<br>
	@if(auth()->check())
		@if(Gate::allows('normal')|| Gate::allows('admin'))
	<br>

				@foreach($clientes as $cliente)
				<h5>
					<b>Nome cliente:</b>{{$cliente->nome}}<br>
					<b>Telefone:</b>{{$cliente->telefone}}<br>	
					@if(Gate::allows('admin'))
					<strong><a href="{{route('clientes.create',['id'=>$cliente->id_cliente])}}">Adicionar Equipamento</a></strong>
					@endif
					
				</h5>

				@if(count($equipamentos)>0)
				
				
							<h5>Seus equipamentos em reparação</h5>
				

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

									

											@if(Gate::allows('admin'))
		 										     
												<div style="text-align: right; margin-right: 150px">
													<a href="{{route('reparacoes.create')}}">Criar Reparação</a>
														&nbsp&nbsp&nbsp
													<a href="{{route('equipamentos.edit',['id'=>$equipamento->id_equipamento])}}">Editar</a>
														&nbsp&nbsp&nbsp
													<a href="{{route('equipamentos.delete',['id'=>$equipamento->id_equipamento])}}">Apagar</a>
												</div>
												
											
											<br>
											@endif
									@endif
									
								@endforeach

						@endif

					
						
					@endforeach
				@endif
					
		<hr><hr><hr>
				@endforeach
		<br>			
		
		@endif
	@endif
@endsection
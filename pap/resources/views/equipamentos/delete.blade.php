<h2>Deseja eliminar este "{{$equipamento->marca}}" do cliente {{$equipamento->id_cliente}}?</h2>

<form method="post" action="{{route('equipamentos.destroy',['id'=>$equipamento->id_equipamento])}}">
	@csrf
	@method('delete')
	<input type="submit" name="Sim">
	
</form>
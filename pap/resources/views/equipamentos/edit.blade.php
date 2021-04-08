<form action="{{route('equipamentos.update',['id'=>$equipamento->id_equipamento])}}" method="post">
	@csrf
	@method('patch')

	Marca:<input type="text" name="marca" value="{{$equipamento->marca}}"><br>
	@if($errors->has('marca'))
		Deverá ter no minimo 1 letra.
	@endif
	Descrição:<input type="text" name="descricao" value="{{$equipamento->descricao}}"><br>
	
	<input type="submit" name="enviar">
</form>
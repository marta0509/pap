@extends('layout')
@section('titulo-pagina')
Perfil dos funcionários
@endsection
@section('header')

@endsection
@section('conteudo')
<br>
<br>
<br>
<br>
<br>
<br>
	@if(auth()->check())
		<form>
			
			<select>
				
			</select>
			<br>
			Contrato:<input type="fille" name="contrato">
			<br>
			Salário:<input type="fille" name="contrato">
			<br>
			Horas:<input type="text" name="horas">
		</form>
	@endif

@endsection
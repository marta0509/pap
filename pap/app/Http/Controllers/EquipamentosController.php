<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipamento;

class EquipamentosController extends Controller
{
    //

    public function index()
    {
    	$equipamento=Equipamento::all();
       return view('equipamentos.index',['equipamentos'=>$equipamentos]);
    }

    public function show(Request $request)
    {
    	$idCliente=$request->id;
    	$equipamento=Equipamento::Where('id_cliente',$idCliente)->first();
    	return view ('equipamentos.show',['equipamentos'=>$equipamentos]);
    } 
}

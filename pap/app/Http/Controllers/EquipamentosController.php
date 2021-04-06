<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipamento;
use App\Models\Cliente;

class EquipamentosController extends Controller
{
    //

    public function index()
    {
        $equipamentos=Equipamento::all();
        $clientes=Cliente::all();
       return view('equipamentos.index',['equipamentos'=>$equipamentos,'clientes'=>$clientes]);
    }

    public function show(Request $request)
    {
        $idCliente=$request->id;
        $equipamentos=Equipamento::Where('id_cliente',$idCliente)->with(['Cliente','Equipamento','Reparacao'])->first();
        return view ('equipamentos.show',['equipamentos'=>$equipamentos,'clientes'=>$clientes]);
    } 
}
}

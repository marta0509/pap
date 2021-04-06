<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Reparacao;

class ReparacaoController extends Controller
{
   
    public function index()
    {
        $reparacao=Reparacao::all();
        $clientes=Cliente::all();
       return view('clientes.index',['clientes'=>$clientes, 'reparacao'=>$reparacao]);
    }

    public function show(Request $request)
    {
        $idCliente=$request->id;
        $clientes=Cliente::Where('id_cliente',$idCliente)->with('equipamentos'->first();
        return view ('clientes.index',['clientes'=>$clientes]);
    } 
}
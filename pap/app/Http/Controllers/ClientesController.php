<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
   
    public function index()
    {
    	$clientes=Cliente::all();
       return view('clientes.index',['clientes'=>$clientes]);
    }

    public function show(Request $request)
    {
    	$idCliente=$request->id;
    	$clientes=Cliente::Where('id_cliente',$idCliente)->first();
    	return view ('clientes.index',['clientes'=>$clientes]);
    } 
}
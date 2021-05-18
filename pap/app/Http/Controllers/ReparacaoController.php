<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Reparacao;
use App\Models\Material;

class ReparacaoController extends Controller
{
   
    public function index()
    {
        $equipamentos=Equipamento::all();
        $reparacoes=Reparacao::all();
        $materiais=Material::all();
        $reparacao_equipamento=ReparacaoEquipamento::with('reparacao')->get();
        $clientes=Cliente::all();
       return view('clientes.index',['clientes'=>$clientes, 'equipamentos'=>$equipamentos, 'reparacao'=>$reparacoes, 'repequip'=>$reparacao_equipamento, 'materiais'=>$materiais]);
    }

    public function show(Request $request)
    {
        $idCliente=$request->id;
        $clientes=Cliente::Where('id_cliente',$idCliente)->first();
        return view ('clientes.index',['clientes'=>$clientes]);
    } 

    public function create()
    {
       
        $materiais=Material::all();
        return view ('reparacao.create',['materiais'=>$materiais]);      
    }

    public function store(Request $request)
    {
        $novoReparacao=$request->validate([
            'id_material'=>['nullable','min:1','max:50'],
            'descricao'=>['nullable','min:1','max:150'],
        ]);
    
        $reparacao=Reparacao::create($novoReparacao);

        return redirect()->route('clientes.index',[
            'id'=>$reparacoes->id_reparacao]);
    }
}
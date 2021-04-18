<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Equipamento;
use App\Models\Reparacao;
use App\Models\ReparacaoEquipamento;

class ClientesController extends Controller
{
   
    public function index()
    {
        $equipamentos=Equipamento::all();
        $reparacoes=Reparacao::all();
        $reparacao_equipamento=ReparacaoEquipamento::with('reparacao')->get();
        $clientes=Cliente::all();
       return view('clientes.index',['clientes'=>$clientes, 'equipamentos'=>$equipamentos, 'reparacao'=>$reparacoes, 'repequip'=>$reparacao_equipamento]);
    }

    public function show(Request $request)
    {
        $idCliente=$request->id;
        $clientes=Cliente::Where('id_cliente',$idCliente)->first();
        return view ('clientes.index',['clientes'=>$clientes]);
    } 

    public function create()
    {
        $equipamentos=Equipamento::all();
        $clientes=Cliente::all();
        return view ('clientes.create',['clientes'=>$clientes, 'equipamentos'=>$equipamentos]);      
    }

    public function store(Request $request)
    {
        $novoEquipamento=$request->validate([
            'id_cliente'=>['required'],
            'marca'=>['required','min:1','max:50'],
            'descricao'=>['required','min:1','max:150'],
        ]);
    
        $equipamento=Equipamento::create($novoEquipamento);

        return redirect()->route('clientes.index',[
            'id'=>$equipamento->id_equipamento]);
    }

    public function delete (Request $request)
    {
        $idEquipamento=$request->id;
        $equipamento=Equipamento::where('id_equipamento',$idEquipamento)->first();
        return view ('equipamentos.delete',['equipamento'=>$equipamento]);
    }

    public function destroy (Request $request)
    {
        $idEquipamento=$request->id;
        $equipamento=Equipamento::findOrFail($idEquipamento);
        $equipamento->delete();

        return  redirect()->route('equipamentos.index')->with('mensagem','Equipamento eliminado');
    }
}
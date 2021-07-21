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

    public function create(Request $request)
    {
        $idC = $request->id;
        $cliente = Cliente::where('id_cliente', $idC)->first();
        return view ('equipamentos.create', ['cliente'=>$cliente]);
    }

    public function store(Request $request)
    {
        $idC = $request->id;
        $cliente = Cliente::where('id_cliente', $idC)->first();
        $novoEquipamento=$request->validate([
           
            'marca'=>['required','min:1','max:50'],
            'descricao'=>['required','min:1','max:150'],
        ]);
    
        $novoEquipamento['id_cliente']=$idC;
        $equipamento=Equipamento::create($novoEquipamento);

        return redirect()->route('clientes.show',[
            'id'=>$idC]);
    }

    public function edit (Request $request)
    {
        $idEquipamento=$request->id;
        $equipamento=Equipamento::where('id_equipamento',$idEquipamento)->first();

        return view('equipamentos.edit',['equipamento'=>$equipamento]);
    }

    public function update (Request $request)
    {
        $idEquipamento=$request->id;
        $equipamento=Equipamento::findOrFail($idEquipamento);

        $atualizarEquipamento=$request->validate([
            
            'marca'=>['required','min:1','max:50'],
            'descricao'=>['required','min:1','max:150'],
        ]);
         $atualizarEquipamento['id_cliente']=$equipamento->id_cliente;
        $equipamento->update($atualizarEquipamento);

        return redirect()->route('clientes.show',['id'=>$equipamento->id_cliente]);
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


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

    public function create()
    {
        return view ('equipamentos.create');
    }

    public function store(Request $request)
    {
        $novoEquipamento=$request->validate([
            'id_cliente'=>['required'],
            'marca'=>['required','min:1','max:50'],
            'descricao'=>['required','min:1','max:150'],
        ]);
    

        $equipamento=Equipamento::create($novoEquipamento);

        return redirect()->route('equipamentos.show',[
            'id'=>$equipamento->id_equipamento]);
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
            'id_cliente'=>['required'],
            'marca'=>['required','min:1','max:50'],
            'descricao'=>['required','min:1','max:150'],
        ]);

        $equipamento->update($atualizarEquipamento);

        return redirect()->route('equipamentos.show',['id'=>$equipamento->id_equipamento]);
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


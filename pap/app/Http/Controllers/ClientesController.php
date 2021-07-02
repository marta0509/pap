<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Equipamento;
use App\Models\Reparacao;
use App\Models\ReparacaoEquipamento;
use App\Models\Material;
use App\Models\User;

class ClientesController extends Controller
{
   
    public function old_index()
    {
        $utilizadores=User::all();
        $equipamentos=Equipamento::all();
        $reparacoes=Reparacao::all();
        $reparacao_equipamento=ReparacaoEquipamento::with('reparacao')->get();
        $clientes=Cliente::all();
        $materiais=Material::all();

       return view('clientes.index',['clientes'=>$clientes, 'equipamentos'=>$equipamentos, 'reparacao'=>$reparacoes, 'repequip'=>$reparacao_equipamento, 'utilizadores'=>$utilizadores, 'materiais'=>$materiais]);
    }

    public function index()
    {

            $clientes=Cliente::all();     
            return view('clientes.index',['clientes'=>$clientes]);

    }

    public function old_show(Request $request)
    {
        $idCliente=$request->id;
        $clientes=Cliente::Where('id_cliente',$idCliente)->first();
        return view ('clientes.index',['clientes'=>$clientes]);
    } 

    public function show(Request $request)
    {
        $idCliente=$request->id;
        $cliente=Cliente::where('id_cliente',$idCliente)->with(['equipamentos.reparacoes'])->first();
        //dd($cliente);
        return view ('clientes.show',['cliente'=>$cliente]);
    } 

    public function create(Request $request)
    {
        $idCliente=$request->id;
        $clientes=Cliente::Where('id_cliente',$idCliente)->first();
        
        return view ('clientes.create',['clientes'=>$clientes]);      
    }

    public function store(Request $request)
    {
        $novoCliente=$request->validate([
            'id_cliente'=>['required'],
            'marca'=>['required','min:1','max:50'],
            'descricao'=>['required','min:1','max:150'],
        ]);
    
        $equipamento=Equipamento::create($novoCliente);

        return redirect()->route('clientes.index',[
            'id'=>$equipamento->id_equipamento, 'clientes'=>$clientes, 'reparacao'=>$reparacoes, 'repequip'=>$reparacao_equipamento]);
    }

    public function edit (Request $request)
    {
        $idCliente=$request->id;
        $clientes=Cliente::Where('id_cliente',$idCliente)->first();
        return view ('clientes.edit',['clientes'=>$clientes]);
    }

    public function update (Request $request)
    {
        $idCliente=$request->id;
        $clientes=Cliente::Where('id_cliente',$idCliente)->first();
        $updateCliente = $request -> validate([
                    'nome'=>['required','min:3', 'max:100'],
                    'telefone'=>['required', 'max:9'],
                    'email'=>['nullable'],
                ]);
        return view ('clientes.index',['clientes'=>$clientes]);
    }

    public function delete (Request $request)
    {
        $idCliente=$request->id;
        $clientes=Cliente::where('id_cliente',$idCliente)->first();
        return view ('clientes.delete',['clientes'=>$clientes]);
    }

    public function destroy (Request $request)
    {
        $idCliente=$request->id;
        $cliente=Cliente::findOrFail($idCliente);
        $cliente->delete();

        return  redirect()->route('clientes.index')->with('mensagem','Cliente eliminado');
    }
}
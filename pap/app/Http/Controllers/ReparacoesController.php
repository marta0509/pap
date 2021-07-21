<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Equipamento;
use App\Models\Reparacao;
use App\Models\Material;

class ReparacoesController extends Controller
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
        //ver qual o cliente do equipamento
        $equipamento = Equipamento::where('id_equipamento', $request->id)->with('reparacoes.material')->first();
        $idCliente=$equipamento->id_cliente;
        $cliente=Cliente::Where('id_cliente',$idCliente)->first();
        return view ('reparacoes.show',['equipamento'=>$equipamento]);
    } 

    public function create(Request $request)
    {
        $idE = $request->id;
        $equipamento = Equipamento::where('id_equipamento', $idE)->first();
        $materiais=Material::all();
        return view ('reparacoes.create',['equipamento'=>$equipamento,'materiais'=>$materiais]);      
    }

    public function store(Request $request)
    {
        $idE = $request->id;
        $equipamento = Equipamento::where('id_equipamento', $idE)->first();
        $novoReparacao=$request->validate([
            'id_material'=>['nullable','min:1','max:50'],
            'descricao'=>['nullable','min:1','max:150'],
            'id_equipamento'=>['nullable','min:1','max:50'],
            'preco'=>['nullable','min:1','max:15'],
            'observacoes'=>['nullable','min:1','max:150'],
            
        ]);
    
        $novoReparacao['id_equipamento']=$idE;
        $reparacao=Reparacao::create($novoReparacao);

        return redirect()->route('reparacoes.show',[
            'id'=>$idE]);
    }

    public function edit (Request $request)
    {
        $idEquipamento=$request->id;
        $equipamento=Equipamento::where('id_equipamento',$idEquipamento)->first();

        return view('reparacoes.edit',['equipamento'=>$equipamento]);
    }

    public function update (Request $request)
    {
        $idReparacao=$request->id;
        $reparacao=Reparacao::findOrFail($idReparacao);

        $atualizarReparacao=$request->validate([
            'id_material'=>['nullable','min:1','max:50'],
            'descricao'=>['nullable','min:1','max:150'],
            'id_equipamento'=>['nullable','min:1','max:50'],
            'preco'=>['nullable','numeric'],
            'observacoes'=>['nullable','min:1','max:150'],
            
        ]);
         $atualizarReparacao['id_equipamento']=$equipamento->id_cliente;
        $reparacao->update($atualizarReparacao);

        return redirect()->route('reparacao',['id'=>$equipamento->id_cliente]);
    }
}
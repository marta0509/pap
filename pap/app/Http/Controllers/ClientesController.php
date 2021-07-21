<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Equipamento;
use App\Models\Reparacao;
use App\Models\ReparacaoEquipamento;
use App\Models\Material;
use App\Models\User;
use Gate;
use Auth;
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
        if (Auth::check()) 
        {
             if(Auth::user()->tipo_user=='admin') {
                $clientes=Cliente::all();  
            }
            
            else {
                $clientes=Cliente::where('id_user', Auth::user()->id)->get();
            }

            return view('clientes.index',['clientes'=>$clientes]);
        }
        else
        {
            return view('somos');
        }
              
    }

    public function show(Request $request)
    {
        $idCliente=$request->id;
        
        $cliente=Cliente::where('id_cliente',$idCliente)->with(['equipamentos.reparacoes']);
        
        $cliente=$cliente->first();
      
        return view ('clientes.show',['cliente'=>$cliente]);
    } 

    public function create(Request $request)
    {
      
        $users=User::all();
        
        return view ('clientes.create',['users'=>$users]);      
    }

    public function store(Request $request)
    {
        $novoCliente=$request->validate([
            'nome'=>['required', 'min:5','max:50'],
            'telefone'=>['required','min:9','max:13'],
            'email'=>['nullable','email','max:150'],
            'id_user'=>['nullable','numeric'],
        ]);
    
        $cliente=Cliente::create($novoCliente);

        return redirect()->route('clientes.show',[
            'id'=>$cliente->id_cliente]);
    }

    public function edit (Request $request)
    {
        $idCliente=$request->id;
        $clientes=Cliente::Where('id_cliente',$idCliente)->first();
           $users=User::all();
        return view ('clientes.edit',['clientes'=>$clientes,'users'=>$users]);
    }

    public function update (Request $request)
    {
        $idCliente=$request->id;
        $clientes=Cliente::Where('id_cliente',$idCliente)->first();
        $updateCliente = $request -> validate([
                    'nome'=>['required','min:3', 'max:100'],
                    'telefone'=>['required', 'max:9'],
                    'email'=>['nullable'],
                       'id_user'=>['nullable','numeric'],
                ]);
         $clientes->update($updateCliente);
        return view ('clientes.show',['cliente'=>$clientes]);
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
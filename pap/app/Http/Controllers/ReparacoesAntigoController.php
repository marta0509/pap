<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class ReparacoesController extends Controller
{
   
    public function index()
    {
        return view('clientes');
    }

    public function create()
    {
    	$material=Material::all();
         return view ('reparacoes.create',['materiais'=>$material]);      
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
}
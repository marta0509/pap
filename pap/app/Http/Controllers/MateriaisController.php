<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class MateriaisController extends Controller
{
   
    public function index()
    {
       $materiais=Material::all();
       return view('materiais.index',['materiais'=>$materiais]);
    }

    public function show(Request $request)
    {
        $idMaterial=$request->id;
        $fmateriais=Material::Where('id_material',$idMaterial)->first();
        return view ('materiais.index',['materiais'=>$materiais]);
    } 

    public function create()
    {
        $materiais=Material::all();
        return view ('materiais.create',['materiais'=>$materiais]);      
    }

    public function store(Request $request)
    {
        $novoMaterial=$request->validate([
            'designacao'=>['required','min:1',],
            'stock'=>['required'],
            'preco'=>['required'],
            'id_fornecedor'=>['required'],
        ]);
    
        $materiais=Material::create($novoMaterial);

        return redirect()->route('materiais.index',[
            'id'=>$fomaterial->id_material]);
    }

    public function delete (Request $request)
    {
        $idMaterial=$request->id;
        $material=Material::where('id_material',$idMaterial)->first();
        return view ('materiais.delete',['materiais'=>$material]);
    }

    public function destroy (Request $request)
    {
        $idMaterial=$request->id;
        $material=Material::findOrFail($idMaterial);
        $material->delete();

        return  redirect()->route('materiais.index')->with('mensagem','Material eliminado');
    }
}
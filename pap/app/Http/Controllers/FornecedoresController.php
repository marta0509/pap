<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedoresController extends Controller
{
    //

    public function index()
    {
        $fornecedores=Fornecedor::all();
        return view('fornecedores.index',['fornecedores'=>$fornecedores]);
    }

    public function show(Request $request)
    {
        $idFornecedor=$request->id;
        $fornecedores=Fornecedor::Where('id_fornecedor',$idFornecedor)->first();
        return view ('fornecedores',['fornecedores'=>$fornecedores]);
    } 

    public function create(Request $request)
    {
        $idFornecedor=$request->id;
        
        return view ('fornecedores.create');      
    }

    public function store(Request $request)
    {
        $novoFornecedor=$request->validate([

            'nome'=>['required','min:1',],
            'telefone'=>['required','min:1','max:9'],
            'email'=>['required','min:1'],
        ]);
    
        $fornecedores=Fornecedor::create($novoFornecedor);

        return redirect()->route('fornecedores',['fornecedores'=>$fornecedores]);
    }

    public function edit (Request $request)
    {
        $idFornecedor=$request->id;
        $fornecedor=Fornecedor::where('id_fornecedor',$idFornecedor)->first();

        return view('fornecedores.edit',['fornecedores'=>$fornecedor]);
    }

    public function update (Request $request)
    {
        $idFornecedor=$request->id;
        $fornecedor=Fornecedor::findOrFail($idFornecedor);

        $atualizarFornecedor=$request->validate([
            
            'nome'=>['required','min:1'],
            'telefone'=>['required','min:1','max:19'],
            'email'=>['required','min:1'],
        ]);

        $fornecedor->update($atualizarFornecedor);

        return redirect()->route('fornecedores',['id'=>$fornecedor->id_fornecedor]);
    }

    public function delete (Request $request)
    {
        $idFornecedor=$request->id;
        $fornecedor=Fornecedor::where('id_fornecedor',$idFornecedor)->first();
        return view ('fornecedores.delete',['fornecedores'=>$fornecedor]);
    }

    public function destroy (Request $request)
    {
        $idFornecedor=$request->id;
        $fornecedor=Fornecedor::findOrFail($idFornecedor);
        $fornecedor->delete();

        return  redirect()->route('fornecedores')->with('mensagem','Fornecedor eliminado');
    }
}
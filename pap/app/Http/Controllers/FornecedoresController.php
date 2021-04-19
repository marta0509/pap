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
}
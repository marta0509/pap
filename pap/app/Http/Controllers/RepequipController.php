<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepequipController extends Controller
{
    //

    public function create()
    {
        $reparacoes=Reparacao::all();
        $equipamentos=Equipamento::all();
        $clientes=Cliente::all();
        $materiais=Material::all();
        return view ('repequip.create',['clientes'=>$clientes, 'equipamentos'=>$equipamentos, 'reparacao'=>$reparacoes, 'materiais'=>$materiais]);      
    }
}

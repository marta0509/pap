<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reparacao extends Model
{
     use HasFactory;

    protected $primaryKey="id_reparacao";

    protected $table="reparacao";

    protected $fillable=[
        'id_material',
        'descricao',
        'preco'
    ];

    public function reparacao() 
    {
    	return $this->belongsToMany('App\Models\Reparacao','reparacao_equipamento','id_reparacao','id_equipamento')->withTimestamps();
    }
}
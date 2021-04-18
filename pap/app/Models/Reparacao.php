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
        'preco',
        'data'
    ];

    public function reparacao_equipamento() 
    {
        return $this->belongsToMany('App\Models\Reparacao','id_reparacao','id_equipamento')->withTimestamps();
    }
}
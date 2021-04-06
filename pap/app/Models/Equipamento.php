<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
     use HasFactory;

    protected $primaryKey="id_equipamento";

    protected $table="equipamentos";

    protected $fillable=[
        'id_cliente',
        'marca',
        'descricao'
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente','id_cliente');
    }

    public function equipamento()
    {
       return $this->belongsToMany('App\Models\Reparacao','reparacao_equipamento','id_equipamento','id_reparacao')->withTimestamps();
    }
}
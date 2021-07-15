<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
     use HasFactory;

    public $timestamps = false;

    protected $primaryKey="id_equipamento";

    protected $table="equipamentos";

    protected $fillable=[
        'id_cliente',
        'marca',
        'descricao'
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Models\User','id', 'id_cliente');
    }

    public function reparacoes() {
        return $this->hasMany('App\Models\Reparacao','id_equipamento');
    }

    public function reparacao_equipamento()
    {
       return $this->belongsToMany('App\Models\ReparacaoEquipamento','reparacao_equipamento','id_equipamento','id_reparacao')->withTimestamps();
    }
}
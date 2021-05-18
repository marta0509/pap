<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReparacaoEquipamento extends Model
{
    use HasFactory;

    protected $primaryKey="id_re";

    protected $table="reparacao_equipamento";

    protected $fillable=[
        'id_equipamento',
        'id_reparacao',
        'id_funconario',
        'data',
        'preco'
    ];

    public function reparacao()
    {
        return $this->belongsTo('App\Models\Reparacao','id_reparacao');
    }
    public function produto()
    {
        return $this->belongsTo('App\Models\Equipamento','id_equipamento');
    }
   
}
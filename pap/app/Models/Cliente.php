<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $primaryKey="id_cliente";

    protected $table="clientes";

    protected $fillable=[
        'nome',
        'telefone',
        'email'
    ];

    public function equipamento()
    {
        return $this->hasMany('App\Models\Equipamento','id_equipamento');
    }

   
}

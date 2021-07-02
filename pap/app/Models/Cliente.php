<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $primaryKey="id_cliente";

    protected $table="clientes";

    public $timestamps=false;

    protected $fillable=[
        'nome',
        'telefone',
        'email'
    ];

    public function equipamentos()
    {
        return $this->hasMany('App\Models\Equipamento','id_cliente');
    }

   
}

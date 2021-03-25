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
        'id_equipamento',
        'marca',
        'descricao'
    ];

    public function cliente()
    {
    	return $this->belongsTo('App\Models\Cliente','id_cliente');
    }
}
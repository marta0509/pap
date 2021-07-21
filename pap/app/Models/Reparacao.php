<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reparacao extends Model
{
     use HasFactory;

    protected $primaryKey="id_reparacao";

    protected $table="reparacao";

    public $timestamps = false;

    protected $fillable=[
        'id_material',
        'descricao',
        'id_equipamento',
        'preco',
        'observacoes'     
    ];

    public function reparacao_equipamento() 
    {
        return $this->belongsToMany('App\Models\Reparacao','id_reparacao','id_equipamento')->withTimestamps();
    }

    public function material() 
    {
         return $this->belongsTo('App\Models\Material','id_material');
        //return $this->belongsToMany('App\Models\Material','id_reparacao','id_material')->withTimestamps();
    }
}
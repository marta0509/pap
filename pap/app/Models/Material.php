<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $primaryKey="id_material";

    protected $table="materiais";
    public $timestamps = false;
    protected $fillable=[
        'designacao',
        'stock',
        'preco',
        'id_fornecedor'
    ];
   
   public function reparacao()
    {
        return $this->belongsTo('App\Models\Reparacao','id_reparacao');
    }
}
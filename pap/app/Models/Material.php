<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $primaryKey="id_material";

    protected $table="materiais";

    protected $fillable=[
        'designacao',
        'id_fornecedor'
    ];
   
}
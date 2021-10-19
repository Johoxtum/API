<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $primaryKey='id_cliente';
    protected $table = 'cliente';
    
    protected $fillable = [
        "nombre",
        "id_tipo_documento",
        "numero_cedula"
    ];
    
    
    
    public $timestamps=false;

      
    
}

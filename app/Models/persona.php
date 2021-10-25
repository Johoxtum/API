<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
    protected $primaryKey='id_persona';
    protected $table = 'persona';
    
    protected $fillable = [
        "nombres",
        "apellidos",
        "id_tipo_documento",
        "numero_documento", 

    ];
    
    
    
    public $timestamps=false;

}

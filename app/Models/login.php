<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    use HasFactory;
    protected $primaryKey='id_login';
    protected $table = 'login';
    
    protected $fillable = [
        "usuario",
        "contraseña"
       
    ];
    
}

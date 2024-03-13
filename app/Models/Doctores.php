<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Static_;

class Doctores extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'apellidos',
        'especialidad'
    ];

    public static function getList(){
        return Doctores::all();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pacientes extends Model
{
    use HasFactory;
    protected $table='pacientes_tabla';
    protected $fillable=[
        'nombres',
        'apellidos',
        'direccion',
        'edad',
        'doctores_id'
    ];
    public function doctores(): HasOne
    {
        return $this->hasOne(Doctores::class,'id','doctores_id');
    }
    public static function getList(){
        return pacientes::all();
    }
}

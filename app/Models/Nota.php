<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;
    protected $table = 'notas_venta';
    protected $guarded = ["id"];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'nombreTitular',
        'apellidoTitular',
        'montoNota',
        'valorNeto',
        'comision',
    ];
}

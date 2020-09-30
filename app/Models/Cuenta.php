<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    //use HasFactory;
    protected $table = 'cuenta_bancaria';
    protected $guarded = ["id"];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'banco_id',
        'tipocta_id',
        'identificacionTitular',
        'nombreTitular',
        'numero',
    ];
}

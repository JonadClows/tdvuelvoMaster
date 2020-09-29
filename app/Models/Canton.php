<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    protected $table = 'cantones';
    protected $primaryKey = "id_canton";
    protected $guarded = ["id_canton"];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_provincia',
        'name',
    ];
}

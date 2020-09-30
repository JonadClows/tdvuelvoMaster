<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function venderNota() {
        return view('venderNota');
    }
}

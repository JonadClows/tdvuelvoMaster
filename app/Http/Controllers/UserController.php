<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Provincia;

class UserController extends Controller
{
    public function updateUser(int $id) {
        $user = User::find($id);
        
        $user->fill([
            'cedula'         => request()->get('cedula'),
            'name'        => request()->get('name'),
            'identification'    => request()->get('identification'),
            'email'             => request()->get('email'),
            'telefono'             => request()->get('telefono'),
        ])->save();

        return redirect('home');
    }

    public function getUsers(){
        $users = User::where('id','=','1')->get();
        //$users = User::get();
    }

    public function getProvincia(){
        $users = Provincia::get();
    }
}

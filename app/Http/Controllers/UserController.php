<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Provincia;
use App\Models\Canton;
use App\Models\Cuenta;

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

        return redirect('miperfil');
    }

    public function getUsers(){
        $users = User::where('id','=','1')->get();
        //$users = User::get();
    }

    public function getDatosGeo(){
        $provincias = Provincia::get();
        //return $provincias;
        return view('registro', ['provincias' => $provincias]);
    }

    public function getCanton($id){
        $cantones = Canton::where('id_provincia','=',$id)->get();
        //$cantones = Canton::get();
        return $cantones;
    }

    public function profile() {
        $user = \Auth::user()->id;
        $cuentas = Cuenta::where('user_id','=',$user)->get();
        return view('perfil', ['cuentas' => $cuentas]);
    }

    public function infoProfile() {
        $user = \Auth::user();
        $userId = \Auth::user()->id;
        $nameCanton = '';
        $nameProvincia = '';

        $cuentas = Cuenta::where('user_id','=',$userId)->get();

        if( $user->id_ciudad != null && $user->id_ciudad != '' ) {
            //Canton
            $canton = Canton::where('id_canton','=',$user->id_ciudad)->get();
            //Provincia
            $provincia = Provincia::where('id_provincia','=',$canton[0]->id_provincia)->get();

            $nameCanton = $canton[0]->name;
            $nameProvincia = $provincia[0]->name;
        }
        
        return view('informacionPerfil', [
            'cuentas' => $cuentas,
            'nameCanton' => Str::lower( $nameCanton ),
            'nameProvincia' => Str::lower( $nameProvincia )
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Provincia;
use App\Models\Canton;
use App\Models\Cuenta;
use Illuminate\Support\Facades\Hash;

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
        $cantones = null;
        $provincia = null;
        $canton = null;
        $user = \Auth::user();
        if ($user) {
            $canton = Canton::where('id_canton', '=', $user->id_ciudad)->first();
            $provincia = Provincia::where('id_provincia', '=', $canton->id_provincia)->first();
            $cantones = Canton::where('id_provincia', '=', $provincia->id_provincia)->get();
        }
        //return $provincias;
        return view('registro', [
            'provincias' => $provincias, 
            'cantones' => $cantones,
            'provincia' => $provincia,
            'canton' => $canton,
        ]);
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


    /**
     * Get a validator for an incoming registration request.
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function updatePass() {
        
        $this->validate(request(), ['password' => 'required|min:6|confirmed',]);

        $user = User::find(\Auth::user()->id);
        
        $user->fill([
            'password' => Hash::make(request()->get('password')),
        ])->save();

        return redirect('miperfil');
    }

    public function updatePassByEmail($token) {
        
        $user = User::where('remember_token','=',$token)->first();
        //$user = User::find();
        if ($user->remember_token != null){
            return view('cambiarPassByEmail', ['user_id' => $user->id]);
        } else {
            return redirect('home');
        }
        
    }

    public function cambiarPassByEmail(Request $request) {

        $rules = [
            'password' => 'required|min:6',
        ];
        
        //$this->validate(request(), ['password' => 'required|min:6|confirmed',]);
        $request->validate($rules);

        //$user = User::find($id);
        $user = User::find($request->id);
        
        if ($user->id != null) {

            $user->fill([
                //'password' => Hash::make(request()->get('password')),
                'password' => Hash::make($request->password),
            ])->save();

            return response()->json([
                'success' => true,
                'message' => 'Su contraseña se actualizó correctamente.',
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Ocurrió un error al actualizar su contraseña, vuelva a intentar.',
            ]);
        }
    }

}


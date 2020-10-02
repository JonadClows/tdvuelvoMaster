<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\Contacto;
use App\Mail\ResetPass;
use App\Models\User;

class MailController extends Controller
{
    public function contactMail(Request $request) {
        $request->validate([
            'contactEmail' => 'required|email',
        ]);

        $ok = true;
        $message = '<h5>¡Gracias!</h5>Estaremos en contacto contigo en las próximas 24 horas.';

        try {
            // Envía el email
            Mail::to('info@tdvuelvo.com')
                ->send(new Contacto($request->contactEmail));
        }catch(\Exception $e) {
            $message = 'No se ha podido contactar con el servidor, por favor, intente más tarde.';
            $ok = false;
        }

        return response()->json([
            'success' => $ok,
            'message' => $message,
        ]);
    }

    public function resetPass(Request $request) {
        
        $request->validate([
            'contactEmail' => 'required|email',
        ]);
        $user = User::where('email','=',$request->contactEmail)->first();
        
        if ($user->email == null) {
            return response()->json([
                'success' => false,
                'message' => 'Su correo no se encuentra en nuestros registros, vuelva a intentarlo.',
            ]);
        } else {
            $ok = true;
            $message = 'Se envió un enlace a tu correo para reestablecer contraseña.';
            $token = $this->generaTokenSeguro(20);
            $user->remember_token= $token;
            $user->save();

            $enlace = 'https://tdvuelvo.com/restablecerPass/'. $token;
            try {
                // Envía el email
                //Mail::to('a4a1d95c08-04c020@inbox.mailtrap.io')//$request->contactEmail)
                Mail::to($request->contactEmail)
                    ->send(new ResetPass($enlace));
            }catch(\Exception $e) {
                $message = 'No se ha podido contactar con el servidor, por favor, intente más tarde.';
                $ok = false;
            }

            return response()->json([
                'success' => $ok,
                'message' => $message,
            ]);
        }
    }

    private function generaTokenSeguro($longitud)
    {
        return bin2hex(random_bytes(($longitud - ($longitud % 2)) / 2));
    }
}
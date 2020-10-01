<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contacto;

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
            Mail::to('jchernandez@grupo-link.com')
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
}

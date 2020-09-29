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

        // Envía el email
        Mail::to('jchernandez@grupo-link.com')
            ->send(new Contacto($request->contactEmail));

        // Una vez enviado el email redirecciona
        return redirect('/');
    }
}

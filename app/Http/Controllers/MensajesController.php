<?php

namespace App\Http\Controllers;

use App\Mail\MensajeRecibido;
use Illuminate\Support\Facades\Mail;

class MensajesController extends Controller
{

    public function __invoke()
    {
        $mensaje = request()->validate([
                'name'=> 'required',
                'email'=> 'required|email',
                'subject'=> 'required',
                'content'=> 'required|min:10'
                ]);


        Mail::to('rsangalli214@gmail.com')->send(new MensajeRecibido($mensaje)); 


        return back()->with('status','Recibimos tu mensaje te responderemos en menos de 24 horas.');
   }

}

<?php

namespace App\Http\Controllers;

use App\Mail\message;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function sendMessage(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'objet' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'message' => ['required', 'string'],
        ]);
        $rep = Mail::to("silasjmas@gmail.com")->send(new message($request->email, $request->nom, $request->objet, $request->message, $request->telephone));
        $rep = Mail::to("jmlokoy@jmlassociatesrdc.com")->send(new message($request->email, $request->nom, $request->objet, $request->message, $request->telephone));

        if ($rep) {
            return response()->json(['reponse' => true, 'msg' => "Votre message est envoyer avec succès!"]);
        } else {
            return response()->json(['reponse' => false, 'msg' => "Erreur d'enregistrement."]);
        }
    }

}

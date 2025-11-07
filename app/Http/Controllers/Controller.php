<?php

namespace App\Http\Controllers;

use App\Mail\message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{ 
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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

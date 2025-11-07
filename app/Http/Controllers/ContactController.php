<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactStoreRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(ContactStoreRequest $request)
    {
        // Si le champ honeypot 'website' est rempli, on bloque (déjà géré par la rule 'prohibited')
        $data = $request->only(['nom','email','sujet','message']);

        $contact = Contact::create([
            ...$data,
            'ip'         => $request->ip(),
            'user_agent' => substr((string)$request->userAgent(), 0, 255),
            'status'     => 'new',
        ]);
// Mail facultatif
\Mail::to(config('mail.from.address'))->send(new \App\Mail\ContactMessageReceived($contact));
        return response()->json([
            'ok'      => true,
            'message' => 'Merci, votre demande a bien été envoyée.',
            'data'    => ['id' => $contact->id],
        ], 201);
    }
}

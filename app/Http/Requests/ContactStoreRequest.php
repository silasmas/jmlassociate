<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nom'     => ['required','string','min:2','max:120'],
            'email'   => ['required','email','max:190'],
            'sujet'   => ['nullable','string','max:190'],
            'message' => ['required','string','min:10'],
            // honeypot anti-bot (champ caché qu’on ajoute au form)
            'website' => ['nullable','prohibited'],
        ];
    }

    public function messages(): array
    {
        return [
            'nom.required' => 'Le nom est obligatoire.',
            'email.email'  => "L'adresse e-mail n'est pas valide.",
            'message.min'  => 'Votre message doit contenir au moins :min caractères.',
        ];
    }
}

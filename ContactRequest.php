<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|regex:/^[a-zA-ZÀ-ÿ\s\'-]+$/|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Votre nom est requis',
            'name.regex' => 'Le nom ne peut contenir que des lettres et des espaces',
            'email.required' => 'L\'email est requis',
            'email.email' => 'Veuillez entrer une adresse email valide',
            'message.required' => 'Le message est requis',
            'message.min' => 'Le message doit contenir au moins 10 caractères',
        ];
    }
}

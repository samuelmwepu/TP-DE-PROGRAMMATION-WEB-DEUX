<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string|min:10',
            'technologies' => 'nullable|string',
            'image_url' => 'nullable|url',
            'project_url' => 'nullable|url',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Le titre du projet est requis',
            'description.required' => 'La description est requise',
            'description.min' => 'La description doit contenir au moins 10 caractères',
            'image_url.url' => 'Veuillez entrer une URL valide pour l\'image',
            'project_url.url' => 'Veuillez entrer une URL valide pour le projet',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3|max:255',
            'director' => 'required|min:3|max:255',
            'year' => 'required|numeric|min:1900|max:' . date('Y'),
            'plot' => 'required|min:5',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'genres' => 'required|array|min:1',          
            'genres.*' => 'exists:genres,id'              
        ];
    }
    
    public function messages(): array  // ← CORREZIONE: si chiama 'messages' non 'message'
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo richiede più di 3 caratteri',
            'title.max' => 'Il titolo non può superare i 255 caratteri',
            
            'director.required' => 'Il regista è obbligatorio',
            'director.min' => 'Il regista richiede più di 3 caratteri',
            'director.max' => 'Il regista non può superare i 255 caratteri',
            
            'year.required' => 'Il campo anno è obbligatorio',
            'year.numeric' => 'Il campo anno deve essere numerico',
            'year.min' => 'L\'anno deve essere successivo al 1900',
            'year.max' => 'L\'anno non può essere superiore a ' . date('Y'),
            
            'plot.required' => 'La trama è obbligatoria',
            'plot.min' => 'La trama deve avere almeno 5 caratteri',
            
            'img.required' => 'L\'immagine è obbligatoria',
            'img.image' => 'Il file deve essere di tipo immagine',
            'img.mimes' => 'Formati accettati: jpeg, png, jpg, gif',
            'img.max' => 'L\'immagine non può superare i 2MB',
            
            'genres.required' => 'Seleziona almeno un genere',     
            'genres.array' => 'Formato generi non valido',          
            'genres.min' => 'Seleziona almeno un genere',           
            'genres.*.exists' => 'Genere selezionato non valido'    
        ];
    }
}
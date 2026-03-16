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
            'title' => 'required|min:3',
            'director' =>'required',
            'year' => 'required|numeric',
            'plot' => 'required|min:5',
            'img' => 'required|image'
        ];
    }
    public function message(){
        return[
            'title.required'=>'il titolo è obbligatorio',
            'title.min'=>'il titolo richiede più di 3 caratteri',
            'director.required'=>'il regista è obbligatorio',
            'year.required'=>'Il campo anno è obbligatorio',
            'year.numeric'=>'Il campo anno deve essere numerico',
            'plot.required'=>'La trama è obbligatoria',
            'plot.min'=>'La trama deve avere almeno 5 caratteri',
            'img.required'=>'L\'immagine è obbligatoria',
            'img.image'=>'Il file deve essere di tipo immagine',

        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|min:3|max:100',
            'client_name'=>'required|min:3|max:50',
            'summary'=>'required',
            'cover_image'=>'nullable|image|max:3200'
        ];
    }

    public function messages(){

        return [
            'name.required' => 'Il nome è un campo obbligatorio',
            'name.min' => 'Il nome deve avere minimo :min caratteri',
            'name.max' => 'Il nome può avere al massimo :max caratteri',
            'client_name.required' => 'Il nome del cliente è un campo obbligatorio',
            'client_name.min' => 'Il il nome del cliente deve avere minimo :min caratteri',
            'client_name.min' => 'Il il nome del cliente può avere al massimo :max caratteri',
            'summary.required' => 'Il sommario è un campo obbligatorio',
            'cover_image.image' => 'Il file immagine non è corretto',
            'cover_image.max' => 'Il file immagine deve essere al massimo di 3MB',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class formupbt extends FormRequest
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
            'Nom_plat' =>[ 'required' ,'string', 'min:2'],
           'Prix_plat' =>['required', 'numeric'],
           'Categorie_plat'=>['string' , 'required' ],
           'img_plat'=>[ 'image' , 'max:2000'],




        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class searchrequest extends FormRequest
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
           'Nom_plat' =>['string', 'nullable'],
           'Prix_plat' =>['numeric','nullable'],
           'Prix_boisson' =>['numeric','nullable'],
           'Nom_boisson' =>['string','nullable']
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class dformutable extends FormRequest
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
            'Type_table'=>['string' , 'required'],
            'Prix_table' =>['required', 'numeric'],
            'img_table'=>['image' , 'max:20000'],

        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class reserrequest extends FormRequest
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


            // 'Nom_et_Prenom' => 'required|string|max:255',
            // 'email' => 'required|email|max:255',
            'numero' => 'numeric',
            'Type_reservation' => 'required|string',
            // 'nombre_personnes' => 'required|integer|min:1',
            'Date_reservation' => ['required', 'date', 'after_or_equal:today'],
            'Heure_reservation' => 'required|date_format:H:i', // Ajout du champ "heure"
            // Ajoutez d'autres règles de validation selon vos besoins

        ];
    }
}

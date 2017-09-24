<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationEmployeeRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
          'nombre_Empleado' => 'required|string|max:255',
          'telefono' => 'required|string|max:12',
          'usuario' => 'required|string|max:255',
          'contrasena' => 'required|string|max:255',
            //
        ];
    }
}

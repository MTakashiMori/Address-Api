<?php

namespace App\Http\Requests;

class PeopleRequest extends Request
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
            'name' => 'required',
            'telephone' => 'required|digits:8,9'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nome',
            'telephone' => 'Telefone'
        ];
    }
}

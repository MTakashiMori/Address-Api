<?php

namespace App\Http\Requests;

class AddressRequest extends Request
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
            'country' => 'required',
            'state'   => 'required',
            'city'    => 'required',
            'street'  => 'required',
            'house'   => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'country' => 'País',
            'state'   => 'Estado',
            'city'    => 'Cidade',
            'street'  => 'Rua',
            'house'   => 'Casa'
        ];
    }

    public function messages()
    {

        return [
            'required.country' => 'O campo País é obrigatório.',
            'required.state' => 'O campo Estado é obrigatório.',
            'required.city' => 'O campo Cidade é obrigatório.',
            'required.street' => 'O campo Rua é obrigatório.',
            'required.house' => 'O campo Casa é obrigatório.',
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
            'name' => 'min:8|max:40|required',
            'email'=> 'min:6|max:55|unique:users|required',
            'pass'=>'min:4|max:8|required',
            'cedula' => 'min:6|max:7|unique:datos|required'
        ];
    }
}

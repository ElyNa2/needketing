<?php

namespace App\Http\Requests\Admin\Admin;

use App\Http\Requests\Request;

class UpdateAdminRequest extends Request
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
            'email' => 'required|email',
            'password' => 'required|confirm',
            'username' => 'required',
            'name' => 'required'

        ];
    }
}
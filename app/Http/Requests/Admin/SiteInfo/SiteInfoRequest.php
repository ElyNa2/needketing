<?php

namespace App\Http\Requests\Admin\SiteInfo;

use App\Http\Requests\Request;

class SiteInfoRequest extends Request
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
            'about' => 'required|min:50',
            'terms' => 'required|min:50',
            'privacy' => 'required|min:50',
        ];
    }
}

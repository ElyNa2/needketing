<?php

namespace App\Http\Requests\Admin\Tag;

use App\Http\Requests\Request;

class StoreTagRequest extends Request
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
            'tag_name' => 'required|min:3',
            'published_at' => 'required | date'
        ];
    }
}

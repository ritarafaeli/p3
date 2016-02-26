<?php

namespace p3\Http\Requests;

use p3\Http\Requests\Request;

class RandomUserFormRequest extends Request
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
            'num' => 'required|integer|min:1|max:500', //specifies number of users to generate
            'birthday' => 'boolean',
            'profile' => 'boolean'
        ];
    }
}

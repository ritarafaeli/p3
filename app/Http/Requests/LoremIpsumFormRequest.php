<?php

namespace p3\Http\Requests;

use p3\Http\Requests\Request;

class LoremIpsumFormRequest extends Request
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
            'numParagraphs' => 'required|integer' //specifies number of paragraphs to generate
        ];
    }
}

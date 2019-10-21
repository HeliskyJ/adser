<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployee extends FormRequest
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
            'fullname' =>
            [
                'bail',
                'required',
                'string',
                'min:5',
                'max:60'
            ],
            'cui' =>
            [
                'bail',
                'required',
                'digits:13'
            ],
            'number_phone' =>
            [
                'bail',
                'nullable',
                'numeric',
                'digits_between:8,12'
            ],
            'description' =>
            [
                'bail',
                'string',
                'nullable',
                'max:100'
            ]
        ];
    }
}

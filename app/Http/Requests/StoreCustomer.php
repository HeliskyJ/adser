<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomer extends FormRequest
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
                'unique:customers',
                'digits:13'
            ],
            'number_phone' =>
            [
                'bail',
                'nullable',
                'numeric',
                'digits_between:8,12'
            ],
            'address' =>
            [
                'bail',
                'required',
                'max:60'
            ],
            'description' =>
            [
                'bail',
                'alpha_num',
                'nullable',
                'max:100'
            ]
        ];
    }
}

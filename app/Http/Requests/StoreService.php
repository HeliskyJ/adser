<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreService extends FormRequest
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
            'name'=>
            [
                'bail',
                'required',
                'string',
                'max:60'
            ],
            'price'=>
            [
                'bail',
                'required',
                'regex:^[0-9]\d{0,6}(\.\d{1,3})*(,\d+)?$'

            ],
            'description'=>
            [
                'bail',
                'nullable',
                'string',
                'max:100'
            ]
            
        ];
    }
}

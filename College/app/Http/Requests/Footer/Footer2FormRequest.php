<?php

namespace App\Http\Requests\Footer;

use Illuminate\Foundation\Http\FormRequest;

class Footer2FormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>[
                'nullable',
                'string',
                'max:255'
            ],
            'link'=>[
                'nullable',
                'string',
                'max:255'
            ],
            'status'=>[
                'nullable',
            ],
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class checkreq extends FormRequest
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
            'email'=>'email',
            'phone'=>'alpha_num|size:11'

        ];
    }
}

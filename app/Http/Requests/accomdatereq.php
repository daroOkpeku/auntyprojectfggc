<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class accomdatereq extends FormRequest
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
          'hostel'=>'required|string',
          'file'=>'required|image',
          'user_id'=>'required|regex:/^[0-9 ]*$/'
        ];
    }
}

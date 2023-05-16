<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class registerreq extends FormRequest
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
        // $table->string('name');
        // $table->string('lastname');
        // $table->string('email')->unique();
        // $table->string('phone')->unique();

        return [
            'name'=>'required|string',
            'lastname'=>'required|string',
           // 'verification_code'=>'string',
            //'user_type'=>'regex:/^[a-zA-Z ]*$/',
            // 'status'=>'required|regex:/^[0-9 ]*$/',
            'email'=>'required|email|unique:users',
            'phone'=>'required|unique:users,phone|size:11',
            'chapter'=>'required|string',
            'set'=>'required|string',
            'house'=>'required|string',
            't_shirttop'=>'required|string',
            'food_allergies'=>'required|string',
            'medical_conditions'=>'required|string',
            // 'termsandcondition'=>'required|regex:/^[0-9 ]*$/',
           // 'password'=> ['required', 'confirmed', 'string', Password::min(8)->letters()->numbers()->symbols()],

        ];
    }
}

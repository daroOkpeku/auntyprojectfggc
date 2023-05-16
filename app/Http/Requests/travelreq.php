<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class travelreq extends FormRequest
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
        "date_arrival"=>'required|date',
        'pickup'=>'required',
        'port_part'=>'required|string',
        'time_arrival'=>'required|date',
        'user_id'=>'required|numeric'
        ];
    }
}

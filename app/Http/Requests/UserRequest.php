<?php

namespace App\Http\Requests;

use App\Rules\MatchPassword;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            "actual_password"=>["sometimes","required", new MatchPassword,"min:2","max:16"],
            "password"=>"sometimes|required|confirmed|min:6|max:16",
        ];
    }
}

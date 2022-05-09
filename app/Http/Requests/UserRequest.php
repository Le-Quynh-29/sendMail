<?php

namespace App\Http\Requests;

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
            'name' => 'required|min:5|max:100|unique:users,name,'.$this->id.'id',
            'email' => 'required|email|max:255|unique:users,name,'.$this->id.'id',
            'password' => 'required|min:6|max:20|',
            're_password' => 'required|same:password|min:6|max:20|'
        ];
    }
}

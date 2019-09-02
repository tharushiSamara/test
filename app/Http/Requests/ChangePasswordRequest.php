<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


use App\Rules\PasswordConfirmation; //custom validation rules
use App\Rules\PasswordDistinct;

class ChangePasswordRequest extends FormRequest
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
            'password'=>['required',new PasswordConfirmation],                     //old password required and should same as current password
            'new_password'=>['required','min:8','confirmed',new PasswordDistinct],     //new_password is required and confirmed with new_password_confirmed
                                                                                   //should not be the same as current password
        ];
    }



    /**
     * Get the error messages from the defined validation rule.
     *
     * @return array
     */
    // public function messages()
    // {
    //     return [
    //         'password'=>'required',                         //old password required
    //         'new_password'=>'required|min:8|confirmed',     //new_password is required and confirmed with new_password_confirmed
    //     ];
    // }
}
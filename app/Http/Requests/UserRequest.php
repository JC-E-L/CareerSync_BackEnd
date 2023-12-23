<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        if (request()->routeIs('user.login')) {
            return [
                //
                'email' => 'required|string|email|max:255',
                'password' => 'required|max:6',
            ];
        }
        
        if(request()->routeIs('user.store'))
        return [
            'username' => 'required|string|max:255',
            'Fname' => 'required|string|max:255',
            'Lname' => 'required|string|max:255',
            'email' => 'required|email|unique:user,email',
            'password' => 'required|min:6|confirmed', 
        ];
        if(request()->routeIs('user.update'))
        return[
            'username' => 'required|string|max:255',
        ];
        else if(request()->routeIs('user.email'))
        return [
            'email' => 'required|email|unique:user,email'
        ];
        else if(request()->routeIs('user.password'))
        return [
            'password' => 'required|min:6|confirmed'
        ];

    }
}

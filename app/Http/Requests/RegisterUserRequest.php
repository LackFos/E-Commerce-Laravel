<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required|string|max:30',
            'email' => 'required|unique:users,email|email',
            'phone_number' =>
                'required|unique:users,phone_number|max_digits:13',
            'password' => 'required|min:8|string',
            'confirm_password' => 'required|same:password|string',
        ];
    }
}

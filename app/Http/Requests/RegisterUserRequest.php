<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $user = Auth::user();
        return $this->user()->id == $user->id;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'bail|required|string|max:30',
            'email' => 'bail|required|unique:users,email|email',
            'phone_number' =>
                'bail|required|unique:users,phone_number|max_digits:13',
            'password' => 'bail|required|min:8|string',
            'confirm_password' => 'bail|required|same:password|string',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateUserDetailRequest extends FormRequest
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
     * Handle a failed validation attempt.
     *
     * @param \Illuminate\Contracts\Validation\Validator $validator
     * @throws \Illuminate\Http\Exceptions\HttpResponseException
     */
    protected function failedValidation(Validator $validator)
    {
        $errorMessages = $validator->errors()->first();

        throw new HttpResponseException(
            Redirect::route('profile')->with('error', $errorMessages)
        );
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
            'email' => [
                'bail',
                'required',
                'email',
                Rule::unique('users')->ignore($this->user()->id),
            ],
            'phone_number' => [
                'bail',
                'required',
                'regex:/^\d{1,13}$/',
                Rule::unique('users', 'phone_number')->ignore(
                    $this->user()->id
                ),
            ],
            'image' => 'bail|nullable|image|max:5120',
        ];
    }
}

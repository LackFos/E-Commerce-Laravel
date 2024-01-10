<?php

namespace App\Http\Requests;

use App\Utils\Utils;
use App\Rules\UniqueBankNameAndNumber;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StorePaymentAccountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Utils::isAdmin();
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
            Redirect::back()->withInput()->with('error', $errorMessages)
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
            'bank_name' => 'bail|required',
            'bank_number' => ['bail', 'required', new UniqueBankNameAndNumber()],
            'bank_owner' => 'bail|required',
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Utils\Utils;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreProductRequest extends FormRequest
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
            'name' => 'bail|required|unique:products',
            'price' => 'bail|required|integer|min:1',
            'color' => 'nullable',
            'size' => 'nullable',
            'stock' => 'bail|required|integer',
            'image' => 'bail|nullable|image',
            'category_id' => 'bail|nullable|exists:categories,id',
            'flashsale' => 'bail|nullable|integer|min:0',
            'description' => 'nullable',
        ];
    }
}

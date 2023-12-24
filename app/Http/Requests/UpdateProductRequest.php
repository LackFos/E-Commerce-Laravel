<?php

namespace App\Http\Requests;

use App\Utils\Utils;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateProductRequest extends FormRequest
{
    private $product;

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
        $this->product = $this->route('product');
        return [
            'name' => ['bail', Rule::unique('products')->ignore($this->product->id)],
            'price' => 'bail|required|integer|min:1',
            'image' => 'bail|nullable|image',
            'stock' => 'bail|required|integer',
            'flashsale' => 'bail|nullable|integer',
            'category_id' => 'bail|exists:categories,id',
            'description' => 'bail',
            'color' => '',
            'size' => ''
        ];
    }
}

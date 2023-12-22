<?php

namespace App\Http\Requests;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UploadPaymentReceiptRequest extends FormRequest
{
    public $order, $user;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $this->user = Auth::user();
        $this->order = Order::where('id', $this->order_id)->first();

        // Explicit check for null
        if ($this->order === null) {
            return false;
        }

        return $this->order->user_id === $this->user->id;
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
            Redirect::back()->with('error', $errorMessages)
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
            'payment_receipt' => 'bail|required|image|max:5120',
        ];
    }
}

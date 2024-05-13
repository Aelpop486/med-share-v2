<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonationApiStoreRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'description' => 'required|string|max:255',
            'address_id'=>'required|exists:addresses,id',
            'city_id'=>'required|exists:cities,id',
            'images'=> 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ];
    }
}

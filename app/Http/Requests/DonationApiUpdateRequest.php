<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonationApiUpdateRequest extends FormRequest
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
            'description' => 'nullable|string|max:255',
            'address_id' => 'sometimes|nullable|exists:addresses,id',
            'city_id'=> 'sometimes|nullable|exists:cities,id',
            'images'=>'sometimes|nullable',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ];
    }
}

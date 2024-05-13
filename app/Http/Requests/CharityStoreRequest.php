<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CharityStoreRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:charits,email',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'required|numeric|unique:charits,phone',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
            'description' => 'nullable|string',
            'specialty_id' => 'nullable|exists:specialties,id',
            'website_link'=>'nullable|url',
        ];
    }
}

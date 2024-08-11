<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CharityUpdateRequest extends FormRequest
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
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|string|email|max:255',
            'phone' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
            'description' => 'nullable|string',
            'specialty_id' => 'nullable|exists:specialties,id',
            'isActive' => 'nullable|exists:charits,isActive',
            'website_link'=>'nullable|url',
        ];
    }
}

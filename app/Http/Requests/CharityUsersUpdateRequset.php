<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CharityUsersUpdateRequset extends FormRequest
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
            'role' => 'nullable',
            'isActive' => 'nullable',
        ];
    }
}

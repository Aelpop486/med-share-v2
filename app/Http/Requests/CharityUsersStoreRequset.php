<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CharityUsersStoreRequset extends FormRequest
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
            'email' => 'required|string|email|max:255|unique:charity_users',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'role' => 'required',
            'charity_id' => 'required|exists:charits,id',
            'isActive' => 'required',
        ];
    }
}

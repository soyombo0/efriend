<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['string', 'required', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:6'],
        ];
    }
}

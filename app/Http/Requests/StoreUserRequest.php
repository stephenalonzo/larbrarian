<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name'    => ['required', 'min:2'],
            'last_name'     => ['required', 'min:2'],
            'email'         => ['required', 'email', Rule::unique('users')],
            'password'      => ['required', 'string', 'confirmed', Rules\Password::defaults()]
        ];
    }
}

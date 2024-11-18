<?php

declare(strict_types=1);

namespace App\Http\Requests\Auth;

use App\Enums\Gender;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class RegistrationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'string', 'confirmed', Password::default()],
            'gender' => ['nullable', Rule::enum(Gender::class)]
        ];
    }
}

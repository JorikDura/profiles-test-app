<?php

declare(strict_types=1);

use App\Enums\Gender;

use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\postJson;

describe('auth', function () {
    it('register a new user', function () {
        $data = [
            'email' => fake()->email,
            'password' => $password = fake()->password(minLength: 8),
            'password_confirmation' => $password,
            'gender' => Gender::UNDEFINED
        ];

        postJson(
            uri: 'api/v1/registration',
            data: $data
        )->assertSuccessful()->assertSee(['token']);

        assertDatabaseHas(
            table: 'users',
            data: [
                'email' => $data['email'],
                'gender' => $data['gender']
            ]
        );
    });
});

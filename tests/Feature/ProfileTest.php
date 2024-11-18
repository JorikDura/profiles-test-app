<?php

declare(strict_types=1);

use App\Models\User;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\getJson;

describe('testing profiles', function () {
    beforeEach(function () {
        $this->user = User::factory()->create();
    });

    it('get user via id', function () {
        getJson("api/v1/profile/{$this->user->id}")
            ->assertSuccessful()
            ->assertSee([
                'id' => $this->user->id,
                'email' => $this->user->email,
                'gender' => $this->user->gender
            ]);
    });

    it('get self', function () {
        actingAs($this->user)
            ->getJson("api/v1/profile")
            ->assertSuccessful()
            ->assertSee([
                'id' => $this->user->id,
                'email' => $this->user->email,
                'gender' => $this->user->gender
            ]);
    });
});

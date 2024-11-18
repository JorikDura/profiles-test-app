<?php

declare(strict_types=1);

namespace App\Actions\Api\V1\Auth;

use App\Http\Requests\Auth\RegistrationRequest;
use App\Models\User;

final readonly class RegistrationAction
{
    public function __construct(
        private RegistrationRequest $request
    ) {
    }

    /**
     * Creates user
     * @return User
     */
    public function __invoke(): User
    {
        return User::create($this->request->validated());
    }
}

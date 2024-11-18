<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\V1\Auth;

use App\Actions\Api\V1\Auth\CreateTokenAction;
use App\Actions\Api\V1\Auth\RegistrationAction;
use App\Http\Controllers\Controller;
use App\Http\Resources\TokenResource;

class RegistrationController extends Controller
{
    /**
     * @param  RegistrationAction  $registrationAction
     * @param  CreateTokenAction  $createTokenAction
     * @return TokenResource
     */
    public function __invoke(
        RegistrationAction $registrationAction,
        CreateTokenAction $createTokenAction
    ): TokenResource {
        $user = $registrationAction();

        $token = $createTokenAction($user);

        return TokenResource::make($token);
    }
}

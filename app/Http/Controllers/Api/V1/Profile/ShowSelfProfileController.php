<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\V1\Profile;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;

class ShowSelfProfileController extends Controller
{
    /**
     * Returns current authorized user
     * @return UserResource
     */
    public function __invoke()
    {
        return UserResource::make(auth('sanctum')->user());
    }
}

<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\V1\Profile;

use App\Actions\Api\V1\Profile\ShowProfileAction;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;

class ShowProfileController extends Controller
{
    /**
     * @param  int  $userId
     * @param  ShowProfileAction  $action
     * @return UserResource
     */
    public function __invoke(int $userId, ShowProfileAction $action): UserResource
    {
        $user = $action($userId);

        return UserResource::make($user);
    }
}

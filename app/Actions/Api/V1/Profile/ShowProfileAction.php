<?php

declare(strict_types=1);

namespace App\Actions\Api\V1\Profile;

use App\Models\User;

final readonly class ShowProfileAction
{
    /**
     * Finds user via id
     * @param  int  $userId
     * @return User
     */
    public function __invoke(int $userId): User
    {
        return User::select([
            'id',
            'email',
            'gender',
            'created_at',
            'updated_at',
        ])->findOrFail($userId);
    }
}

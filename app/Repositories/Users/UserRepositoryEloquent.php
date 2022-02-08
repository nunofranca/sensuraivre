<?php

namespace App\Repositories\Users;

use App\Models\User;
use App\Repositories\BaseRepository;
class UserRepositoryEloquent extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }

}

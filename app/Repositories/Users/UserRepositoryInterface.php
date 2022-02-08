<?php

namespace App\Repositories\Users;

interface UserRepositoryInterface
{
    public function getAll();

    public function create(array $attributes);
}

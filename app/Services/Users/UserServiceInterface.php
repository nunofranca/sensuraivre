<?php

namespace App\Services\Users;

interface UserServiceInterface
{
    public function getAll();

    public function create(array $attributes);
}

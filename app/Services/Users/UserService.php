<?php

namespace App\Services\Users;

use App\Repositories\Users\UserRepositoryInterface;

class UserService implements UserServiceInterface
{

    private $userRepository;
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAll()
    {
        return $this->userRepository->getAll();
    }

    public function create(array $attributes)
    {
        return $this->userRepository->create($attributes);
    }
}

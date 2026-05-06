<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepositoryInterface;
use Framework\Request;

class AuthService
{
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function register(User $user, string $password): User
    {
        $this->userRepository->insert($user);
        return $user;
    }

    public function hashPassword(string $password): string
    {
        return hash('md5', $password);
    }

    public function verifyUser(User $user): bool
    {
        $storedUser = $this->userRepository->findByUsername($user->username);
        if ($storedUser->password == $user->password) {

        }
    }

    public function login(string $username, string $password): User
    {
        return $this->userRepository->findByUsername($username);
    }
}

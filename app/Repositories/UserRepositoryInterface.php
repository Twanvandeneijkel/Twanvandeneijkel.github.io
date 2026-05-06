<?php

namespace App\Repositories;

use App\Models\User;

interface UserRepositoryInterface
{
    /** @return User[] */
    public function all(): array;
    public function findById(int $id): ?object;
    public function delete(int $id): void;
    public function insert(object $entity): object;
    public function findByUsername(string $username): ?User;
}

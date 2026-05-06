<?php

namespace App\Repositories;

use App\Models\Blog;

interface BlogRepositoryInterface
{
    /** @return Blog[] */
    public function all(): array;
    public function findById(int $id): ?object;
    public function delete(int $id): void;
    public function insert(object $entity): object;
}

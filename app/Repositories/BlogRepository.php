<?php

namespace App\Repositories;

use App\Models\Blog;

class BlogRepository extends AbstractRepository implements BlogRepositoryInterface
{
    protected string $tableName = 'blogs';
    protected string $className = Blog::class;
}

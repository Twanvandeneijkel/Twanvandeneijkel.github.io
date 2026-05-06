<?php

namespace App\Repositories;

use App\Models\Exam;

class ExamRepository extends AbstractRepository implements ExamRepositoryInterface
{
    protected string $tableName = 'exams';
    protected string $className = Exam::class;
}

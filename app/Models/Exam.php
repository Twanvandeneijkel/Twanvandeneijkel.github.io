<?php

namespace App\Models;

class Exam
{
    public int $id;
    public int $course_id;
    public string $exam_type;
    public ?float $grade;
    public function __construct()
    {
        $this->id = 0;
        $this->course_id = 0;
        $this->exam_type = '';
        $this->grade = 1;
    }
}

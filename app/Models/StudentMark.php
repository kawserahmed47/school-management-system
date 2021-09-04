<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentMark extends Model
{
    use HasFactory;

    public static $snakeAttributes = false;

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function studentYear()
    {
        return $this->belongsTo(StudentYear::class, 'student_year_id', 'id');
    }

    public function studentClass()
    {
        return $this->belongsTo(StudentClass::class, 'student_class_id', 'id');
    }

    public function assignSubject()
    {
        return $this->belongsTo(AssignSubject::class, 'assign_subject_id', 'id');
    }

    public function examType()
    {
        return $this->belongsTo(ExamType::class, 'exam_type_id', 'id');
    }


    
}

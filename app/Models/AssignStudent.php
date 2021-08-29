<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignStudent extends Model
{
    use HasFactory;

    public static $snakeAttributes = false;

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function studentClass()
    {
        return $this->belongsTo(StudentClass::class, 'student_class_id', 'id');
    }


    public function studentGroup()
    {
        return $this->belongsTo(StudentGroup::class, 'student_group_id', 'id');
    }

    public function studentShift()
    {
        return $this->belongsTo(StudentShift::class, 'student_shift_id', 'id');
    }


    public function studentYear()
    {
        return $this->belongsTo(StudentYear::class, 'student_year_id', 'id');
    }


    


}

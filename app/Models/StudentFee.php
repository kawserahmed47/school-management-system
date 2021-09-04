<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentFee extends Model
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

    public function feeCategory()
    {
        return $this->belongsTo(FeeCategory::class, 'fee_category_id', 'id');
    }

    public function feeCategoryAmount()
    {
        return $this->belongsTo(FeeCategoryAmount::class, 'fee_category_amount_id', 'id');
    }

  
}

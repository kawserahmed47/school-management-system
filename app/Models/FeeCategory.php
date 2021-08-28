<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeCategory extends Model
{
    use HasFactory;
    public static $snakeAttributes = false;

    public function feeCategoryAmount()
    {
        return $this->belongsTo(FeeCategoryAmount::class, 'student_class_id', 'id');
    }
}

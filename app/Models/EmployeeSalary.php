<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeSalary extends Model
{
    use HasFactory;
    
    public static $snakeAttributes = false;

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }



}

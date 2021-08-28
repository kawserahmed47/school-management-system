<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class FeeCategoryAmountSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('fee_category_amounts')->delete();

        DB::table('fee_category_amounts')->insert([
            'id'=>1,
            'fee_category_id'=>1,
            'student_class_id'=>1,
            'amount' => 500,
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('fee_category_amounts')->insert([
            'id'=>2,
            'fee_category_id'=>1,
            'student_class_id'=>1,
            'amount' => 500,
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('fee_category_amounts')->insert([
            'id'=>3,
            'fee_category_id'=>1,
            'student_class_id'=>1,
            'amount' => 500,
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('fee_category_amounts')->insert([
            'id'=>4,
            'fee_category_id'=>1,
            'student_class_id'=>1,
            'amount' => 500,
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('fee_category_amounts')->insert([
            'id'=>5,
            'fee_category_id'=>1,
            'student_class_id'=>1,
            'amount' => 500,
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('fee_category_amounts')->insert([
            'id'=>6,
            'fee_category_id'=>1,
            'student_class_id'=>1,
            'amount' => 500,
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

      
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AssignSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assign_subjects')->delete();

        DB::table('assign_subjects')->insert([
            'id'=>1,
            'subject_id'=>1,
            'student_class_id'=>1,
            'full_mark' => 100,
            'pass_mark' => 33,

            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('assign_subjects')->insert([
            'id'=>2,
            'subject_id'=>1,
            'student_class_id'=>1,
            'full_mark' => 100,
            'pass_mark' => 33,
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('assign_subjects')->insert([
            'id'=>3,
            'subject_id'=>1,
            'student_class_id'=>1,
            'full_mark' => 100,
            'pass_mark' => 33,
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('assign_subjects')->insert([
            'id'=>4,
            'subject_id'=>1,
            'student_class_id'=>1,
            'full_mark' => 100,
            'pass_mark' => 33,
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('assign_subjects')->insert([
            'id'=>5,
            'subject_id'=>1,
            'student_class_id'=>1,
            'full_mark' => 100,
            'pass_mark' => 33,
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('assign_subjects')->insert([
            'id'=>6,
            'subject_id'=>1,
            'student_class_id'=>1,
            'full_mark' => 100,
            'pass_mark' => 33,
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

      
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ExamTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exam_types')->delete();

        DB::table('exam_types')->insert([
            'id'=>1,
            'name' => 'First Term Examination',
            'slug' => Str::slug('First Term Examination', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('exam_types')->insert([
            'id'=>2,
            'name' => 'Second Term Examination',
            'slug' => Str::slug('Second Term Examination', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('exam_types')->insert([
            'id'=>3,
            'name' => 'Final Examination',
            'slug' => Str::slug('Final Examination', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('exam_types')->insert([
            'id'=>4,
            'name' => 'Quiz',
            'slug' => Str::slug('Quiz', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('exam_types')->insert([
            'id'=>5,
            'name' => 'Class Test',
            'slug' => Str::slug('Class Test', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('exam_types')->insert([
            'id'=>6,
            'name' => 'Tutorial',
            'slug' => Str::slug('Tutorial', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

      
    }
}

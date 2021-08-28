<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentYearSeeder extends Seeder
{

    public function run()
    {
        DB::table('student_years')->delete();

        DB::table('student_years')->insert([
            'id'=>1,
            'name' => '2020',
            'slug' => Str::slug('2020', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('student_years')->insert([
            'id'=>2,
            'name' => '2021',
            'slug' => Str::slug('2021', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('student_years')->insert([
            'id'=>3,
            'name' => '2022',
            'slug' => Str::slug('2022', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('student_years')->insert([
            'id'=>4,
            'name' => '2023',
            'slug' => Str::slug('2023', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('student_years')->insert([
            'id'=>5,
            'name' => '2024',
            'slug' => Str::slug('2024', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('student_years')->insert([
            'id'=>6,
            'name' => '2025',
            'slug' => Str::slug('2025', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

      
    }
}

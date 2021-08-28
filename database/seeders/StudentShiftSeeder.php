<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_shifts')->delete();

        DB::table('student_shifts')->insert([
            'id'=>1,
            'name' => 'Morning',
            'slug' => Str::slug('Morning', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('student_shifts')->insert([
            'id'=>2,
            'name' => 'Day',
            'slug' => Str::slug('Day', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('student_shifts')->insert([
            'id'=>3,
            'name' => 'Evening',
            'slug' => Str::slug('Evening', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);


      
    }
}

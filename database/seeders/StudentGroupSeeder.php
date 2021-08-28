<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentGroupSeeder extends Seeder
{

    public function run()
    {
        DB::table('student_groups')->delete();

        DB::table('student_groups')->insert([
            'id'=>1,
            'name' => 'General',
            'slug' => Str::slug('general', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('student_groups')->insert([
            'id'=>2,
            'name' => 'Science',
            'slug' => Str::slug('science', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('student_groups')->insert([
            'id'=>3,
            'name' => 'Business',
            'slug' => Str::slug('business', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('student_groups')->insert([
            'id'=>4,
            'name' => 'Humanities',
            'slug' => Str::slug('Humanities', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('student_groups')->insert([
            'id'=>5,
            'name' => 'Commerce',
            'slug' => Str::slug('Commerce', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('student_groups')->insert([
            'id'=>6,
            'name' => 'Arts',
            'slug' => Str::slug('Arts', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

      
    }
}

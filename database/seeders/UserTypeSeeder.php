<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserTypeSeeder extends Seeder
{

    public function run()
    {
        DB::table('user_types')->delete();

        DB::table('user_types')->insert([
            'id'=>1,
            'name' => 'Developer',
            'slug' => Str::slug('Developer', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('user_types')->insert([
            'id'=>2,
            'name' => 'Teacher',
            'slug' => Str::slug('Teacher', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('user_types')->insert([
            'id'=>3,
            'name' => 'Student',
            'slug' => Str::slug('Student', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('user_types')->insert([
            'id'=>4,
            'name' => 'Employee',
            'slug' => Str::slug('Employee', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('user_types')->insert([
            'id'=>5,
            'name' => 'Staff',
            'slug' => Str::slug('Staff', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('user_types')->insert([
            'id'=>6,
            'name' => 'Governing Body',
            'slug' => Str::slug('Governing Body', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);


    }
}

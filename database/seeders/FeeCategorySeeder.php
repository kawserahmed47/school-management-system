<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FeeCategorySeeder extends Seeder
{

    public function run()
    {
        DB::table('fee_categories')->delete();

        DB::table('fee_categories')->insert([
            'id'=>1,
            'name' => 'Tuition Fee',
            'slug' => Str::slug('Tuition Fee', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('fee_categories')->insert([
            'id'=>2,
            'name' => 'Registration Fee',
            'slug' => Str::slug('Registration Fee', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('fee_categories')->insert([
            'id'=>3,
            'name' => 'Session Charge',
            'slug' => Str::slug('Session Charge', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('fee_categories')->insert([
            'id'=>4,
            'name' => 'Library Fee',
            'slug' => Str::slug('Library Fee', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('fee_categories')->insert([
            'id'=>5,
            'name' => 'Late Fee',
            'slug' => Str::slug('Late Fee', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('fee_categories')->insert([
            'id'=>6,
            'name' => 'Examination Fee',
            'slug' => Str::slug('Examination Fee', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

      
    }
}

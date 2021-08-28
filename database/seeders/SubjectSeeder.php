<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->delete();

        DB::table('subjects')->insert([
            'id'=>1,
            'name' => 'Bengali',
            'slug' => Str::slug('Bengali', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subjects')->insert([
            'id'=>2,
            'name' => 'English',
            'slug' => Str::slug('English', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subjects')->insert([
            'id'=>3,
            'name' => 'Math',
            'slug' => Str::slug('Math', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);


      
    }
}

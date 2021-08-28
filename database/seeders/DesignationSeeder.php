<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designations')->delete();

        DB::table('designations')->insert([
            'id'=>1,
            'name' => 'Principal',
            'slug' => Str::slug('Principal', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('designations')->insert([
            'id'=>2,
            'name' => 'Head Master',
            'slug' => Str::slug('Head Master', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('designations')->insert([
            'id'=>3,
            'name' => 'Assistant Principal',
            'slug' => Str::slug('Assistant Principal', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('designations')->insert([
            'id'=>4,
            'name' => 'Teacher',
            'slug' => Str::slug('Teacher', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);


      
    }
}

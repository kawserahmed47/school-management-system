<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('roles')->delete();

        DB::table('roles')->insert([
            'id'=>1,
            'name' => 'Super Admin',
            'slug' => Str::slug('Super Admin', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'id'=>2,
            'name' => 'Admin',
            'slug' => Str::slug('Admin', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'id'=>3,
            'name' => 'Editor',
            'slug' => Str::slug('Editor', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'id'=>4,
            'name' => 'Moderator',
            'slug' => Str::slug('Moderator', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'id'=>5,
            'name' => 'Guest',
            'slug' => Str::slug('Guest', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

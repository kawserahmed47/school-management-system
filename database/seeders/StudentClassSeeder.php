<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentClassSeeder extends Seeder
{
    public function run()
    {
        DB::table('student_classes')->delete();

        DB::table('student_classes')->insert([
            'id'=>1,
            'name' => 'One - 1',
            'slug' => Str::slug('One', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('student_classes')->insert([
            'id'=>2,
            'name' => 'Two - 2',
            'slug' => Str::slug('Two', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('student_classes')->insert([
            'id'=>3,
            'name' => 'Three - 3',
            'slug' => Str::slug('Three', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('student_classes')->insert([
            'id'=>4,
            'name' => 'Four - 4',
            'slug' => Str::slug('Four', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('student_classes')->insert([
            'id'=>5,
            'name' => 'Five - 5 ',
            'slug' => Str::slug('Five', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('student_classes')->insert([
            'id'=>6,
            'name' => 'Six - 6',
            'slug' => Str::slug('Six', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('student_classes')->insert([
            'id'=>7,
            'name' => 'Seven - 7 ',
            'slug' => Str::slug('Seven', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('student_classes')->insert([
            'id'=>8,
            'name' => 'Eight - 8',
            'slug' => Str::slug('Eight', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('student_classes')->insert([
            'id'=>9,
            'name' => 'Nine - 9',
            'slug' => Str::slug('Nine', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);


        DB::table('student_classes')->insert([
            'id'=>10,
            'name' => 'Ten - 10',
            'slug' => Str::slug('Ten', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('student_classes')->insert([
            'id'=>11,
            'name' => 'Eleven - 11',
            'slug' => Str::slug('Eleven', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('student_classes')->insert([
            'id'=>12,
            'name' => 'Twelve - 12',
            'slug' => Str::slug('Twelve', "-"),
            'created_by'=> 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

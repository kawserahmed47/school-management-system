<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call([UserTypeSeeder::class]);
        $this->call([RoleSeeder::class]);
        $this->call([UsersTableSeeder::class]);
        // $this->call([StudentClassSeeder::class]);
        // $this->call([StudentYearSeeder::class]);
        // $this->call([StudentGroupSeeder::class]);
        // $this->call([StudentShiftSeeder::class]);
        // $this->call([FeeCategorySeeder::class]);
        // $this->call([FeeCategoryAmountSeeder::class]);
        // $this->call([ExamTypeSeeder::class]);
        // $this->call([SubjectSeeder::class]);
        // $this->call([DesignationSeeder::class]);
        // $this->call([AssignSubjectSeeder::class]);


    }
}

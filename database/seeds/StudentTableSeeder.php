<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' => 'mark',
            'reg_no' => 1000,
            'task_id' => 1,
        ]);
         DB::table('students')->insert([
            'name' => 'mary',
            'reg_no' => 1050,
            'task_id' => 1,
        ]);
         DB::table('students')->insert([
            'name' => 'ahmed',
            'reg_no' => 1223,
            'task_id' => 2,
        ]);
         DB::table('students')->insert([
            'name' => 'musa',
            'reg_no' => 15000,
            'task_id' => 2,
        ]);
    }
}

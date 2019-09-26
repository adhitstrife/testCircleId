<?php

use Illuminate\Database\Seeder;

class departmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'departmentName' => 'IT Center',
        ]);

        DB::table('departments')->insert([
            'departmentName' => 'Human Resource',
        ]);
        
    }
}

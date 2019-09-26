<?php

use Illuminate\Database\Seeder;

class positionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            'department_id' => 1,
            'positionName' => 'Pegawai'
        ]);

        DB::table('positions')->insert([
            'department_id' => 1,
            'positionName' => 'Accounting'
        ]);

        DB::table('positions')->insert([
            'department_id' => 2,
            'positionName' => 'Pegawai'
        ]);

        DB::table('positions')->insert([
            'department_id' => 2,
            'positionName' => 'Staff'
        ]);
    }
}

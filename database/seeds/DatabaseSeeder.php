<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(employeeSeeder::class);
        $this->call(positionSeed::class);
        $this->call(departmentSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}

<?php

use Illuminate\Database\Seeder;

class employeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'nip' => 230692,
            'nama' => Str::random(10),
            'position_id' => '1',
            'email' => Str::random(10).'@gmail.com',
            'tempatLahir' => 'gorontallo',
            'tanggalLahir' => '1992-6-23 00:00:00',
            'telepon' => '087714143440',
        ]);

        DB::table('employees')->insert([
            'nip' => 230693,
            'nama' => Str::random(10),
            'position_id' => '1',
            'email' => Str::random(10).'@gmail.com',
            'tempatLahir' => 'palu',
            'tanggalLahir' => '1992-6-23 00:00:00',
            'telepon' => '087714143440',
        ]);

        DB::table('employees')->insert([
            'nip' => 230694,
            'nama' => Str::random(10),
            'position_id' => '2',
            'email' => Str::random(10).'@gmail.com',
            'tempatLahir' => 'makassar',
            'tanggalLahir' => '1992-6-23 00:00:00',
            'telepon' => '087714143440',
        ]);

        DB::table('employees')->insert([
            'nip' => 230695,
            'nama' => Str::random(10),
            'position_id' => '2',
            'email' => Str::random(10).'@gmail.com',
            'tempatLahir' => 'makassar',
            'tanggalLahir' => '1992-6-23 00:00:00',
            'telepon' => '087714143440',
        ]);
    }
}

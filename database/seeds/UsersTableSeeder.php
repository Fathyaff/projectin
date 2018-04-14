<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 50;
        $arrRole = array('Mahasiswa' , 'Project Owner');
        $arrUniv = array('Universitas Indonesia' , 'Universitas Gajah Mada', 'Institut Teknologi Bandung');

        for ($i=0; $i < $limit; $i++) { 
            $firstName = $faker->unique->firstName;
            $lastName = $faker->unique->lastName;
            $role = $arrRole[$faker->numberBetween(0, sizeof($arrRole)-1)];
            $univ = '';
            if ($role == 'Mahasiswa') {
                $univ = $arrUniv[$faker->numberBetween(0, sizeof($arrUniv)-1)];
            }

            DB::table('users')->insert([
                'nama' => $firstName . ' ' . $lastName,
                'email' => strtolower($firstName) . '.' . strtolower($lastName) . '@google.com',
                'role' => $role,
                'univ' => $univ
            ]);
        }
    }
}

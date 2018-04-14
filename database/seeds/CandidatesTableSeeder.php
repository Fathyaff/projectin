<?php

use Illuminate\Database\Seeder;

class CandidatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 100;
        $foreignMhs = DB::table('users AS u')
            ->where('role', 'Mahasiswa')
            ->get();
        $foreignProject = DB::table('projects AS p')
            ->get();
        $arrayStatus = array('Applied' , 'Accepted', 'Rejected');

        for ($i=0; $i < $limit; $i++) { 
            DB::table('candidates')->insert([
                'id_project' => $foreignProject[$i]->id,
                'id_user' => $foreignMhs[$i%sizeof($foreignMhs)]->id,
                'status' => $arrayStatus[$faker->numberBetween(0, sizeof($arrayStatus)-1)]
            ]);
        }
    }
}

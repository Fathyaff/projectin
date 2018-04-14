<?php

use Illuminate\Database\Seeder;

class ListFiturTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 250;
        $foreignProject = DB::table('projects AS p')
            ->get();
        $arrayFitur = array('Authentication' , 'Google Analytics Integration', 'Navigation', 'Security', 'Social Media Integration', 'Mobile-Ready Version');

        for ($i=0; $i < $limit; $i++) { 
            DB::table('list_fitur')->insert([
                'id_project' => $foreignProject[$i%sizeof($foreignProject)]->id,
                'nama_fitur' => $arrayFitur[$i%sizeof($arrayFitur)]
            ]);
        }
    }
}

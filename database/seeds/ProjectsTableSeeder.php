<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
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
        $foreignPo = DB::table('users AS u')
            ->where('role', 'Project Owner')
            ->get();
            
        $minHarga = $faker->numberBetween(3, 7);
        for ($i=0; $i < $limit; $i++) { 
            DB::table('projects')->insert([
                'id_po' => $foreignPo[$faker->numberBetween(0, sizeof($foreignPo)-1)]->id,
                'nama' => $faker->sentence($nbWords = 3, $variableNbWords = true),
                'min_harga' => strval($minHarga) . '000000',
                'max_harga' => strval($minHarga+$faker->numberBetween(1, 3)) . '000000',
                'duration' => $faker->numberBetween(3, 7),
                'desain' => $faker->numberBetween(0, 1),
                'deskripsi' => $faker->paragraph($nbWords = 4, $variableNbWords = true)
            ]);
        }
    }
}

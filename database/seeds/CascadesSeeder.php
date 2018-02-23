<?php

use Illuminate\Database\Seeder;

class CascadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('cascades')->count() == 0) {
            DB::table('cascades')->insert([
                'nom' => 'Cascade Arpenaz',
                'nombre_voies' => 4,
                'altitude_minimum' => 60,
                'hauteur' => 20,
                'niveau_engagement' => 'c',
                'lat' => 45.976205,
                'lng' => 6.641729,
                'pays_id' => 1,
                'type_glace_id' => 1,
                'type_fin_vie_id' => 1,
                'structure_id' => 1,
                'orientation_id' => 1,
                'niveau_id' => 1
            ]);


            DB::table('cascades')->insert([
                'nom' => 'Cascade Berard',
                'nombre_voies' => 4,
                'altitude_minimum' => 60,
                'hauteur' => 20,
                'niveau_engagement' => 'c',
                'lat' => 46.020083,
                'lng' => 6.911840,
                'pays_id' => 1,
                'type_glace_id' => 2,
                'type_fin_vie_id' => 2,
                'structure_id' => 2,
                'orientation_id' => 2,
                'niveau_id' => 2
            ]);


            DB::table('cascades')->insert([
                'nom' => 'Cascade de Cubservies',
                'nombre_voies' => 4,
                'altitude_minimum' => 60,
                'hauteur' => 20,
                'niveau_engagement' => 'a',
                'lat' => 43.3977437,
                'lng' => 2.3700837,
                'pays_id' => 1,
                'type_glace_id' => 1,
                'type_fin_vie_id' => 1,
                'structure_id' => 1,
                'orientation_id' => 1,
                'niveau_id' => 1
            ]);


            DB::table('cascades')->insert([
                'nom' => 'Cascade D\'auzet',
                'nombre_voies' => 4,
                'altitude_minimum' => 60,
                'hauteur' => 20,
                'niveau_engagement' => 'a',
                'lat' => 44.2736218,
                'lng' => 6.2978054,
                'pays_id' => 1,
                'type_glace_id' => 1,
                'type_fin_vie_id' => 1,
                'structure_id' => 1,
                'orientation_id' => 1,
                'niveau_id' => 1
            ]);


            DB::table('cascades')->insert([
                'nom' => 'Cascade Druise',
                'nombre_voies' => 4,
                'altitude_minimum' => 60,
                'hauteur' => 20,
                'niveau_engagement' => 'b',
                'lat' => 44.8286097,
                'lng' => 5.1832991,
                'pays_id' => 1,
                'type_glace_id' => 1,
                'type_fin_vie_id' => 1,
                'structure_id' => 1,
                'orientation_id' => 1,
                'niveau_id' => 1
            ]);

            
            DB::table('cascades')->insert([
                'nom' => 'Cascade Du Dard',
                'nombre_voies' => 4,
                'altitude_minimum' => 60,
                'hauteur' => 20,
                'niveau_engagement' => 'b',
                'lat' => 45.9037258,
                'lng' => 6.8629427,
                'pays_id' => 1,
                'type_glace_id' => 1,
                'type_fin_vie_id' => 1,
                'structure_id' => 1,
                'orientation_id' => 1,
                'niveau_id' => 1
            ]);
        }
    }
}

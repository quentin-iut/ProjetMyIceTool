<?php

use Illuminate\Database\Seeder;

class NiveauxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('niveaux')->count() == 0) {
            DB::table('niveaux')->insert([
                'libelle' => 'debutant'
            ]);
            DB::table('niveaux')->insert([
                'libelle' => 'intermédiare'
            ]);
            DB::table('niveaux')->insert([
                'libelle' => 'expert'
            ]);
        }
    }
}

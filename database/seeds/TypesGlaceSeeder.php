<?php

use Illuminate\Database\Seeder;

class TypeGlacesSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        if(DB::table('type_glaces')->count() == 0) {
            DB::table('type_glaces')->insert([
                'libelle' => 'glace transparente'
            ]);
            DB::table('type_glaces')->insert([
                'libelle' => 'glace bleu'
            ]);
            DB::table('type_glaces')->insert([
                'libelle' => 'glace blanche'
            ]);
            DB::table('type_glaces')->insert([
                'libelle' => 'glace de sérac'
            ]);
            DB::table('type_glaces')->insert([
                'libelle' => 'glace noire'
            ]);
            DB::table('type_glaces')->insert([
                'libelle' => 'glace de goulotte'
            ]);
            DB::table('type_glaces')->insert([
                'libelle' => 'glace polystyrène'
            ]);
        }
    }
}

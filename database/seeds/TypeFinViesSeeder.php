<?php

use Illuminate\Database\Seeder;

class TypeFinViesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('type_fin_vies')->count() == 0) {
            DB::table('type_fin_vies')->insert([
                'libelle' => 'par éffondrement'
            ]);
            DB::table('type_fin_vies')->insert([
                'libelle' => 'par dislocation'
            ]);
            DB::table('type_fin_vies')->insert([
                'libelle' => 'par fin progressive'
            ]);
        }
    }
}

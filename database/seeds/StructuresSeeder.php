<?php

use Illuminate\Database\Seeder;

class StructuresSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        if(DB::table('structures')->count() == 0) {
            DB::table('structures')->insert([
                'libelle' => 'à gros débit'
            ]);
            DB::table('structures')->insert([
                'libelle' => 'à ruissellement'
            ]);
        }
       
    }
}

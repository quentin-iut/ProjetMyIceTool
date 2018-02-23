<?php

use Illuminate\Database\Seeder;

class LanguesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('langues')->count() == 0) {
            DB::table('langues')->insert([
                'libelle' => 'Français'
            ]);
            DB::table('langues')->insert([
                'libelle' => 'English'
            ]);
        }
    }
}

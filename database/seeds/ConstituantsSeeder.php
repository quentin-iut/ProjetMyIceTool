<?php

use Illuminate\Database\Seeder;

class ConstituantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('constituants')->count() == 0) {
            DB::table('constituants')->insert([
                'libelle' => 'salactites'
            ]);
            DB::table('constituants')->insert([
                'libelle' => 'rideaux'
            ]);
            DB::table('constituants')->insert([
                'libelle' => 'colonnes'
            ]);
            DB::table('constituants')->insert([
                'libelle' => 'boules et choix-fleurs'
            ]);
            DB::table('constituants')->insert([
                'libelle' => 'tube creux'
            ]);
            DB::table('constituants')->insert([
                'libelle' => 'cloches'
            ]);
            DB::table('constituants')->insert([
                'libelle' => 'méduses'
            ]);
            DB::table('constituants')->insert([
                'libelle' => 'flûtes'
            ]);
            DB::table('constituants')->insert([
                'libelle' => 'cigares'
            ]);
            DB::table('constituants')->insert([
                'libelle' => 'cônes'
            ]);
        }
    }
}

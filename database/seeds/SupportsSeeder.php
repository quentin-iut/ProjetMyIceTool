<?php

use Illuminate\Database\Seeder;

class SupportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('supports')->count() == 0) {
            DB::table('supports')->insert([
                'libelle' => 'dalles rocheuses'
            ]);
            DB::table('supports')->insert([
                'libelle' => 'pentes d\'herbes'
            ]);
        }
    }
}

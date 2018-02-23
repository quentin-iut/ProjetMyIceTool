<?php

use Illuminate\Database\Seeder;

class ZonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('zones')->count() == 0) {
            DB::table('zones')->insert([
                'nom' => 'zone n°1',
                'latNE' => 46.18363372751014,
                'lngNE' => 7.1685791015625,
                'latSW' => 45.79050946752472,
                'lngSW' => 6.4599609375
            ]);
        }
    }
}

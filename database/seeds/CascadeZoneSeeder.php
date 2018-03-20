<?php

use Illuminate\Database\Seeder;

class CascadeZoneSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        if(DB::table('cascade_zone')->count() == 0) {
            DB::table('cascade_zone')->insert([
                'cascade_id' => 1,
                'zone_id' => 1
            ]);
            DB::table('cascade_zone')->insert([
                'cascade_id' => 2,
                'zone_id' => 2
            ]);
            DB::table('cascade_zone')->insert([
                'cascade_id' => 3,
                'zone_id' => 6
            ]);
        }
    }
}

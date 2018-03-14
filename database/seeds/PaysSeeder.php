<?php

use Illuminate\Database\Seeder;

class PaysSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        if(DB::table('pays')->count() == 0) {
            DB::table('pays')->insert([
                'code' => 'FRA',
                'resume' => 'La France',
                'lat' => 48.864716,
                'lng' => 2.349014
            ]);
        }
    }
}

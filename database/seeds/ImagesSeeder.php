<?php

use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        if(DB::table('images')->count() == 0) {
            DB::table('images')->insert([
                'libelle' => 'cascade',
                'date' => date('Y-m-d'),
                'url' => '/img/photo_1.jpg',
                'cascade_id' => 1
            ]);
            DB::table('images')->insert([
                'libelle' => 'cascade',
                'date' => date('Y-m-d'),
                'url' => '/img/photo_2.jpg',
                'cascade_id' => 1
            ]);
            DB::table('images')->insert([
                'libelle' => 'cascade',
                'date' => date('Y-m-d'),
                'url' => '/img/photo_3.jpg',
                'cascade_id' => 1
            ]);
            DB::table('images')->insert([
                'libelle' => 'cascade',
                'date' => date('Y-m-d'),
                'url' => '/img/photo_1.jpg',
                'cascade_id' => 1
            ]);

            DB::table('images')->insert([
                'libelle' => 'cascade',
                'date' => date('Y-m-d'),
                'url' => '/img/photo_2.jpg',
                'cascade_id' => 1
            ]);

            DB::table('images')->insert([
                'libelle' => 'cascade',
                'date' => date('Y-m-d'),
                'url' => '/img/photo_3.jpg',
                'cascade_id' => 1
            ]);

            DB::table('images')->insert([
                'libelle' => 'cascade',
                'date' => date('Y-m-d'),
                'url' => '/img/photo_1.jpg',
                'cascade_id' => 1
            ]);
        }
    }
}

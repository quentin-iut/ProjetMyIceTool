<?php

use Illuminate\Database\Seeder;

class CascadeConstituantSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        if(DB::table('cascade_constituant')->count() == 0) {
            DB::table('cascade_constituant')->insert([
                'cascade_id' => 1,
                'constituant_id' => 1,
                'poids' => 1
            ]);
            DB::table('cascade_constituant')->insert([
                'cascade_id' => 1,
                'constituant_id' => 2,
                'poids' => 0.2
            ]);
            DB::table('cascade_constituant')->insert([
                'cascade_id' => 1,
                'constituant_id' => 3,
                'poids' => 0.5
            ]);


            DB::table('cascade_constituant')->insert([
                'cascade_id' => 2,
                'constituant_id' => 4,
                'poids' => 1
            ]);
            DB::table('cascade_constituant')->insert([
                'cascade_id' => 2,
                'constituant_id' => 5,
                'poids' => 1
            ]);
            DB::table('cascade_constituant')->insert([
                'cascade_id' => 2,
                'constituant_id' => 6,
                'poids' => 1
            ]);


            DB::table('cascade_constituant')->insert([
                'cascade_id' => 3,
                'constituant_id' => 7,
                'poids' => 1
            ]);
            DB::table('cascade_constituant')->insert([
                'cascade_id' => 3,
                'constituant_id' => 8,
                'poids' => 1
            ]);
            DB::table('cascade_constituant')->insert([
                'cascade_id' => 3,
                'constituant_id' => 9,
                'poids' => 1
            ]);


            DB::table('cascade_constituant')->insert([
                'cascade_id' => 4,
                'constituant_id' => 10,
                'poids' => 1
            ]);
            DB::table('cascade_constituant')->insert([
                'cascade_id' => 4,
                'constituant_id' => 1,
                'poids' => 1
            ]);
            DB::table('cascade_constituant')->insert([
                'cascade_id' => 4,
                'constituant_id' => 2,
                'poids' => 1
            ]);


            DB::table('cascade_constituant')->insert([
                'cascade_id' => 5,
                'constituant_id' => 3,
                'poids' => 1
            ]);
            DB::table('cascade_constituant')->insert([
                'cascade_id' => 5,
                'constituant_id' => 4,
                'poids' => 1
            ]);
            DB::table('cascade_constituant')->insert([
                'cascade_id' => 5,
                'constituant_id' => 5,
                'poids' => 1
            ]);

            DB::table('cascade_constituant')->insert([
                'cascade_id' => 6,
                'constituant_id' => 6,
                'poids' => 1
            ]);
            DB::table('cascade_constituant')->insert([
                'cascade_id' => 6,
                'constituant_id' => 7,
                'poids' => 1
            ]);
            DB::table('cascade_constituant')->insert([
                'cascade_id' => 6,
                'constituant_id' => 8,
                'poids' => 1
            ]);
        }
    }
}

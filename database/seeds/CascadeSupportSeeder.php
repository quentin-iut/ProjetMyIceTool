<?php

use Illuminate\Database\Seeder;

class CascadeSupportSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        if(DB::table('cascade_support')->count() == 0) {
            DB::table('cascade_support')->insert([
                'cascade_id' => 1,
                'support_id' => 1
            ]);
            DB::table('cascade_support')->insert([
                'cascade_id' => 1,
                'support_id' => 2
            ]);


            DB::table('cascade_support')->insert([
                'cascade_id' => 2,
                'support_id' => 1
            ]);
            DB::table('cascade_support')->insert([
                'cascade_id' => 2,
                'support_id' => 2
            ]);


            DB::table('cascade_support')->insert([
                'cascade_id' => 3,
                'support_id' => 1
            ]);
            DB::table('cascade_support')->insert([
                'cascade_id' => 3,
                'support_id' => 2
            ]);


            DB::table('cascade_support')->insert([
                'cascade_id' => 4,
                'support_id' => 1
            ]);
            DB::table('cascade_support')->insert([
                'cascade_id' => 4,
                'support_id' => 2
            ]);


            DB::table('cascade_support')->insert([
                'cascade_id' => 5,
                'support_id' => 1
            ]);
            DB::table('cascade_support')->insert([
                'cascade_id' => 5,
                'support_id' => 2
            ]);


            DB::table('cascade_support')->insert([
                'cascade_id' => 6,
                'support_id' => 1
            ]);
            DB::table('cascade_support')->insert([
                'cascade_id' => 6,
                'support_id' => 2
            ]);

        }
    }
}

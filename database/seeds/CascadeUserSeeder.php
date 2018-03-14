<?php

use Illuminate\Database\Seeder;

class CascadeUserSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        if(DB::table('cascade_user')->count() == 0) {
            DB::table('cascade_user')->insert([
                'user_id' => 1,
                'cascade_id' => 1
            ]);
            DB::table('cascade_user')->insert([
                'user_id' => 1,
                'cascade_id' => 2
            ]);
            DB::table('cascade_user')->insert([
                'user_id' => 1,
                'cascade_id' => 3
            ]);
        }
    }
}

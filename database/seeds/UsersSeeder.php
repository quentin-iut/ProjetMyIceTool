<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        if(DB::table('users')->count() == 0) {
            DB::table('users')->insert([
                'nom' => 'Bezes',
                'prenom' => 'Yannick',
                'email' => 'yannick.bezes@gmail.com',
                'password' => bcrypt('yannick'),
                'telephone' => '0676785366',
                'abonne' => 0,
                'alert' => 0,
                'isAdmin' => 0,
                'cascade_id' => 1,
                'niveau_id' => 1,
                'langue_id' => 1
            ]);

            DB::table('users')->insert([
                'nom' => 'Laravel',
                'prenom' => 'Admin',
                'email' => 'laravel.admin@gmail.com',
                'password' => bcrypt('laravel'),
                'telephone' => '0622369856',
                'abonne' => 0,
                'isAdmin' => 1,
                'alert' => 0,
                'cascade_id' => 1,
                'niveau_id' => 1,
                'langue_id' => 1
            ]);
        }
    }
}

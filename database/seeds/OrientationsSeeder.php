<?php

use Illuminate\Database\Seeder;

class OrientationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('orientations')->count() == 0) {
            DB::table('orientations')->insert([
                'libelle' => 'N'
            ]);
            DB::table('orientations')->insert([
                'libelle' => 'NNE'
            ]);
            DB::table('orientations')->insert([
                'libelle' => 'NE'
            ]);
            DB::table('orientations')->insert([
                'libelle' => 'ENE'
            ]);
            DB::table('orientations')->insert([
                'libelle' => 'E'
            ]);
            DB::table('orientations')->insert([
                'libelle' => 'ESE'
            ]);
            DB::table('orientations')->insert([
                'libelle' => 'SE'
            ]);
            DB::table('orientations')->insert([
                'libelle' => 'SSE'
            ]);
            DB::table('orientations')->insert([
                'libelle' => 'S'
            ]);
            DB::table('orientations')->insert([
                'libelle' => 'SSO'
            ]);
            DB::table('orientations')->insert([
                'libelle' => 'SO'
            ]);
            DB::table('orientations')->insert([
                'libelle' => 'OSO'
            ]);
            DB::table('orientations')->insert([
                'libelle' => 'O'
            ]);
            DB::table('orientations')->insert([
                'libelle' => 'ONO'
            ]);
            DB::table('orientations')->insert([
                'libelle' => 'NO'
            ]);
            DB::table('orientations')->insert([
                'libelle' => 'NNO'
            ]);
        }
    }
}

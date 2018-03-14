<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->call(ComentairesSeeder::class);
        $this->call(ConstituantsSeeder::class);
        $this->call(ImagesSeeder::class);
        $this->call(LanguesSeeder::class);
        $this->call(NiveauxSeeder::class);
        $this->call(OrientationsSeeder::class);
        $this->call(PartenairesSeeder::class);
        $this->call(PaysSeeder::class);
        $this->call(PhotosSeeder::class);
        $this->call(RelevesSeeder::class);
        $this->call(StructuresSeeder::class);
        $this->call(SupportsSeeder::class);
        $this->call(TypeFinViesSeeder::class);
        $this->call(TypeGlacesSeeder::class);
        
        $this->call(UsersSeeder::class);
        $this->call(CascadesSeeder::class);
        $this->call(ZonesSeeder::class);

        $this->call(CascadeConstituantSeeder::class);
        $this->call(CascadeSupportSeeder::class);
        $this->call(CascadeZoneSeeder::class);
        $this->call(CascadeUserSeeder::class);
    }
}

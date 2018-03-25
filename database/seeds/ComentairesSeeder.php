<?php

use Illuminate\Database\Seeder;

class ComentairesSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        if(DB::table('commentaires')->count() == 0) {
            DB::table('commentaires')->insert([
                'libelle' => 'Super cascade, je reviendrai ici sans hésiter !',
                'date' => '2018-02-21',
                'user_id' => 1,
                'cascade_id' => 1
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Je recommande ;)',
                'date' => '2018-02-24',
                'user_id' => 1,
                'cascade_id' => 1
            ]);
            DB::table('commentaires')->insert([
                'libelle' => "La meilleure cascade que j'ai jamais vu! Le paysage est juste exceptionnel et un cadre vraiment paisible et silencieux.",
                'date' => '2018-02-26',
                'user_id' => 1,
                'cascade_id' => 1
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Cascade vraiment belle à toute saison!',
                'date' => '2018-02-28',
                'user_id' => 1,
                'cascade_id' => 1
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Une belle sortie en famille, nous nous somme régalés!',
                'date' => '2018-03-02',
                'user_id' => 1,
                'cascade_id' => 1
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Cette cascade est vraiment fun à grimper!',
                'date' => '2018-03-10',
                'user_id' => 1,
                'cascade_id' => 1
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Magnifique ^^ ',
                'date' => '2018-03-14',
                'user_id' => 1,
                'cascade_id' => 1
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Journée ensoleillée, que de bons moments passés ici!',
                'date' => '2018-03-14',
                'user_id' => 1,
                'cascade_id' => 1
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Sortie avec les étudiants de la Licence MIW, tous ont validé ce cadre magique !',
                'date' => '2018-03-15',
                'user_id' => 1,
                'cascade_id' => 1
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Un lieu chouette à escalader',
                'date' => '2018-03-17',
                'user_id' => 1,
                'cascade_id' => 1
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Vous ne regretterez pas ce que vous offre cette cascade...Splendide ! :)',
                'date' => '2018-03-17',
                'user_id' => 1,
                'cascade_id' => 1
            ]);


            DB::table('commentaires')->insert([
                'libelle' => 'Super cascade, je reviendrai ici sans hésiter !',
                'date' => '2018-02-21',
                'user_id' => 1,
                'cascade_id' => 2
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Je recommande ;)',
                'date' => '2018-02-24',
                'user_id' => 1,
                'cascade_id' => 2
            ]);
            DB::table('commentaires')->insert([
                'libelle' => "La meilleure cascade que j'ai jamais vu! Le paysage est juste exceptionnel et un cadre vraiment paisible et silencieux.",
                'date' => '2018-02-26',
                'user_id' => 1,
                'cascade_id' => 2
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Cascade vraiment belle à toute saison!',
                'date' => '2018-02-28',
                'user_id' => 1,
                'cascade_id' => 2
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Une belle sortie en famille, nous nous somme régalés!',
                'date' => '2018-03-02',
                'user_id' => 1,
                'cascade_id' => 2
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Cette cascade est vraiment fun à grimper!',
                'date' => '2018-03-10',
                'user_id' => 1,
                'cascade_id' => 2
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Magnifique ^^ ',
                'date' => '2018-03-14',
                'user_id' => 1,
                'cascade_id' => 2
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Journée ensoleillée, que de bons moments passés ici!',
                'date' => '2018-03-14',
                'user_id' => 1,
                'cascade_id' => 2
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Sortie avec les étudiants de la Licence MIW, tous ont validé ce cadre magique !',
                'date' => '2018-03-15',
                'user_id' => 1,
                'cascade_id' => 2
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Un lieu chouette à escalader',
                'date' => '2018-03-17',
                'user_id' => 1,
                'cascade_id' => 2
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Vous ne regretterez pas ce que vous offre cette cascade...Splendide ! :)',
                'date' => '2018-03-17',
                'user_id' => 1,
                'cascade_id' => 2
            ]);

            DB::table('commentaires')->insert([
                'libelle' => 'Super cascade, je reviendrai ici sans hésiter !',
                'date' => '2018-02-21',
                'user_id' => 1,
                'cascade_id' => 3
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Je recommande ;)',
                'date' => '2018-02-24',
                'user_id' => 1,
                'cascade_id' => 3
            ]);
            DB::table('commentaires')->insert([
                'libelle' => "La meilleure cascade que j'ai jamais vu! Le paysage est juste exceptionnel et un cadre vraiment paisible et silencieux.",
                'date' => '2018-02-26',
                'user_id' => 1,
                'cascade_id' => 3
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Cascade vraiment belle à toute saison!',
                'date' => '2018-02-28',
                'user_id' => 1,
                'cascade_id' => 3
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Une belle sortie en famille, nous nous somme régalés!',
                'date' => '2018-03-02',
                'user_id' => 1,
                'cascade_id' => 3
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Cette cascade est vraiment fun à grimper!',
                'date' => '2018-03-10',
                'user_id' => 1,
                'cascade_id' => 3
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Magnifique ^^ ',
                'date' => '2018-03-14',
                'user_id' => 1,
                'cascade_id' => 3
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Journée ensoleillée, que de bons moments passés ici!',
                'date' => '2018-03-14',
                'user_id' => 1,
                'cascade_id' => 3
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Sortie avec les étudiants de la Licence MIW, tous ont validé ce cadre magique !',
                'date' => '2018-03-15',
                'user_id' => 1,
                'cascade_id' => 3
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Un lieu chouette à escalader',
                'date' => '2018-03-17',
                'user_id' => 1,
                'cascade_id' => 3
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Vous ne regretterez pas ce que vous offre cette cascade...Splendide ! :)',
                'date' => '2018-03-17',
                'user_id' => 1,
                'cascade_id' => 3
            ]);

            DB::table('commentaires')->insert([
                'libelle' => 'Super cascade, je reviendrai ici sans hésiter !',
                'date' => '2018-02-21',
                'user_id' => 1,
                'cascade_id' => 4
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Je recommande ;)',
                'date' => '2018-02-24',
                'user_id' => 1,
                'cascade_id' => 4
            ]);
            DB::table('commentaires')->insert([
                'libelle' => "La meilleure cascade que j'ai jamais vu! Le paysage est juste exceptionnel et un cadre vraiment paisible et silencieux.",
                'date' => '2018-02-26',
                'user_id' => 1,
                'cascade_id' => 4
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Cascade vraiment belle à toute saison!',
                'date' => '2018-02-28',
                'user_id' => 1,
                'cascade_id' => 4
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Une belle sortie en famille, nous nous somme régalés!',
                'date' => '2018-03-02',
                'user_id' => 1,
                'cascade_id' => 4
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Cette cascade est vraiment fun à grimper!',
                'date' => '2018-03-10',
                'user_id' => 1,
                'cascade_id' => 4
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Magnifique ^^ ',
                'date' => '2018-03-14',
                'user_id' => 1,
                'cascade_id' => 4
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Journée ensoleillée, que de bons moments passés ici!',
                'date' => '2018-03-14',
                'user_id' => 1,
                'cascade_id' => 4
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Sortie avec les étudiants de la Licence MIW, tous ont validé ce cadre magique !',
                'date' => '2018-03-15',
                'user_id' => 1,
                'cascade_id' => 4
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Un lieu chouette à escalader',
                'date' => '2018-03-17',
                'user_id' => 1,
                'cascade_id' => 4
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Vous ne regretterez pas ce que vous offre cette cascade...Splendide ! :)',
                'date' => '2018-03-17',
                'user_id' => 1,
                'cascade_id' => 4
            ]);


            DB::table('commentaires')->insert([
                'libelle' => 'Super cascade, je reviendrai ici sans hésiter !',
                'date' => '2018-02-21',
                'user_id' => 1,
                'cascade_id' => 5
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Je recommande ;)',
                'date' => '2018-02-24',
                'user_id' => 1,
                'cascade_id' => 5
            ]);
            DB::table('commentaires')->insert([
                'libelle' => "La meilleure cascade que j'ai jamais vu! Le paysage est juste exceptionnel et un cadre vraiment paisible et silencieux.",
                'date' => '2018-02-26',
                'user_id' => 1,
                'cascade_id' => 5
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Cascade vraiment belle à toute saison!',
                'date' => '2018-02-28',
                'user_id' => 1,
                'cascade_id' => 5
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Une belle sortie en famille, nous nous somme régalés!',
                'date' => '2018-03-02',
                'user_id' => 1,
                'cascade_id' => 5
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Cette cascade est vraiment fun à grimper!',
                'date' => '2018-03-10',
                'user_id' => 1,
                'cascade_id' => 5
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Magnifique ^^ ',
                'date' => '2018-03-14',
                'user_id' => 1,
                'cascade_id' => 5
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Journée ensoleillée, que de bons moments passés ici!',
                'date' => '2018-03-14',
                'user_id' => 1,
                'cascade_id' => 5
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Sortie avec les étudiants de la Licence MIW, tous ont validé ce cadre magique !',
                'date' => '2018-03-15',
                'user_id' => 1,
                'cascade_id' => 5
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Un lieu chouette à escalader',
                'date' => '2018-03-17',
                'user_id' => 1,
                'cascade_id' => 5
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Vous ne regretterez pas ce que vous offre cette cascade...Splendide ! :)',
                'date' => '2018-03-17',
                'user_id' => 1,
                'cascade_id' => 5
            ]);



            DB::table('commentaires')->insert([
                'libelle' => 'Super cascade, je reviendrai ici sans hésiter !',
                'date' => '2018-02-21',
                'user_id' => 1,
                'cascade_id' => 6
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Je recommande ;)',
                'date' => '2018-02-24',
                'user_id' => 1,
                'cascade_id' => 6
            ]);
            DB::table('commentaires')->insert([
                'libelle' => "La meilleure cascade que j'ai jamais vu! Le paysage est juste exceptionnel et un cadre vraiment paisible et silencieux.",
                'date' => '2018-02-26',
                'user_id' => 1,
                'cascade_id' => 6
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Cascade vraiment belle à toute saison!',
                'date' => '2018-02-28',
                'user_id' => 1,
                'cascade_id' => 6
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Une belle sortie en famille, nous nous somme régalés!',
                'date' => '2018-03-02',
                'user_id' => 1,
                'cascade_id' => 6
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Cette cascade est vraiment fun à grimper!',
                'date' => '2018-03-10',
                'user_id' => 1,
                'cascade_id' => 6
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Magnifique ^^ ',
                'date' => '2018-03-14',
                'user_id' => 1,
                'cascade_id' => 6
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Journée ensoleillée, que de bons moments passés ici!',
                'date' => '2018-03-14',
                'user_id' => 1,
                'cascade_id' => 6
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Sortie avec les étudiants de la Licence MIW, tous ont validé ce cadre magique !',
                'date' => '2018-03-15',
                'user_id' => 1,
                'cascade_id' => 6
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Un lieu chouette à escalader',
                'date' => '2018-03-17',
                'user_id' => 1,
                'cascade_id' => 6
            ]);
            DB::table('commentaires')->insert([
                'libelle' => 'Vous ne regretterez pas ce que vous offre cette cascade...Splendide ! :)',
                'date' => '2018-03-17',
                'user_id' => 1,
                'cascade_id' => 6
            ]);
        }
    }
}

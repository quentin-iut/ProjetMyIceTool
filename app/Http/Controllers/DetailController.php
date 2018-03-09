<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\User;
use App\Pays;
use App\Niveau;
use Auth;
use Illuminate\Support\Facades\DB;


class DetailController extends Controller
{
    public function getDetails(){
        $currentUser = User::where('id', Auth::user()->id)->first();

        $listePays = Pays::all();
        $listeNiveaux = Niveau::all();
        $listeFavoris  = $currentUser->cascades;
        return view('details', ['currentUser' => $currentUser, 'listePays' => $listePays, 'listeniveaux' => $listeNiveaux, 'listeFavoris' => $listeFavoris]);
    }

    public function updateUser(){
        $currentUser = Auth::user();
        $news = isset(($_POST['newsletters']))?true:false;
        DB::table('users')
            ->where('id', $currentUser->id)
            ->update([
                        'nom'          => $_POST["nom"],
                        'prenom'       => $_POST["prenom"],
                        'email'        => $_POST["email"],
                        'telephone'    => $_POST["tel"],
                        'alert'        => $news,
                        'niveau_id'    => $_POST["niveau"],
                        'langue_id'    => $_POST["pays"]
                    ]);

        return $this->getDetails();
    }
}

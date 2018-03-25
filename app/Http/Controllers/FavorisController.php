<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\PaysController;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\UserController;

class FavorisController extends Controller {
    public function getFavoris() {
        $currentUser = Auth::user();
        $listeFavoris = $currentUser->cascades;
        return view('favoris', ['currentUser' => $currentUser, 'listeFavoris' => $listeFavoris]);
    }

    public function retirerFavoris($cascade_id) {
        $currentUser = Auth::user();
        DB::table('cascade_user')
            ->where('user_id', $currentUser->id)
            ->where('cascade_id', $cascade_id)
            ->delete();
        return $this->getFavoris();
    }
}

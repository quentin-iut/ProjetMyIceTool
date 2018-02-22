<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{

    // public function getUsers() {
    //     header("Access-Control-Allow-Origin: *");
    //     return User::all();
    // }

    public function getUser($user_id) {
        // header("Access-Control-Allow-Origin: *");
        if(!Auth::check() || Auth::user()->id != $user_id) return response()->json(['error' => 'Not authorized.'],403);

        return User::findOrFail($user_id);
    }

    public function getUserDetails($user_id) {
        $u = $this->getUser($user_id);

        if(!method_exists($u, 'getData')) {
            $u->favoris = $u->cascades;
            $u->langue = $u->langue;
            $u->niveau = $u->niveau;
        }
        return $u;
    }

    public function getUserFavoris($user_id) {
        // header("Access-Control-Allow-Origin: *");

        $u =  $this->getUser($user_id);
        if(!method_exists($u, 'getData')) {
            $u->cascades;
        }
        return $u;
    }

    public function getUserLangue($user_id) {
        // header("Access-Control-Allow-Origin: *");

        $u =  $this->getUser($user_id);
        if(!method_exists($u, 'getData')) {
            $u->langue;
        }
        return $u;
    }

    public function getUserNiveau($user_id) {
        // header("Access-Control-Allow-Origin: *");

        $u =  $this->getUser($user_id);
        if(!method_exists($u, 'getData')) {
            $u->niveau;
        }
        return $u;
    }

    public function check(Request $req) {
        $u = User::where('email','=', $req->input('email'))
                ->where('password', '=' , bcrypt($req->input('password')))
                ->get();
        if(count($u) > 1) {
            return true;
        } else {
            return false;
        }
    }
}

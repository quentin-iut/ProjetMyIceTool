<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Langue;

class LangueController extends Controller
{
    public function getLangues() {
        // header("Access-Control-Allow-Origin: *");
        return Langue::all();
    }

    public function getLangue($langue_id) {
        // header("Access-Control-Allow-Origin: *");
        return Langue::findOrFail($langue_id);
    }

    public function getLangueUsers($langue_id) {
        return self::getLangue($langue_id)->users;
    }
}

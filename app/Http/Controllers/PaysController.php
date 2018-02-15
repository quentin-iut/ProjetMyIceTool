<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pays;

class PaysController extends Controller
{
    public function getAllPays() {
        header("Access-Control-Allow-Origin: *");
        return Pays::all();
    }

    public function getPays($pays_id) {
        header("Access-Control-Allow-Origin: *");
        return Pays::findOrFail($pays_id);
    }

    public function getPaysCascades($pays_id) {
        return self::getPays($pays_id)->cascades;
    }
}

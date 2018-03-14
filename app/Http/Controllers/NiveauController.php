<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Niveau;

class NiveauController extends Controller {
    public function getNiveaux() {
        return Niveau::all();
    }

    public function getNiveau($niveau_id) {
        return Niveau::findOrFail($niveau_id);
    }

    public function getNiveauCascades($niveau_id) {
        return $this->getNiveau($niveau_id)->cascades;
    }

    public function getNiveauUsers($niveau_id) {
        return $this->getNiveau($niveau_id)->users;
    }
}

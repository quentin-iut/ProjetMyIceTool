<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pays;

class PaysController extends Controller {
    public function getAllPays() {
        return Pays::all();
    }

    public function getPays($pays_id) {
        return Pays::findOrFail($pays_id);
    }

    public function getPaysCascades($pays_id) {
        return $this->getPays($pays_id)->cascades;
    }
}

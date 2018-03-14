<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Releve;

class ReleveController extends Controller {
    public function getReleves() {
        return Releve::all();
    }

    public function getReleve($releve_id) {
        return Releve::findOrFail($releve_id);
    }

    public function getReleveZone($releve_id) {
        return $this->getReleve($releve_id)->zone;
    }
}

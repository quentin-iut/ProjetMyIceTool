<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Constituant;

class ConstituantController extends Controller {
    public function getConstituants() {
        return Constituant::all();
    }

    public function getConstituant($constituant_id) {
        return Constituant::findOrFail($constituant_id);
    }

    public function getConstituantCascades($constituant_id) {
        return $this->getConstituant($constituant_id)->cascades;
    }
}

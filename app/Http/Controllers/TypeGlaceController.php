<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeGlace;

class TypeGlaceController extends Controller {
    public function getTypeGlaces() {
        return TypeGlace::all();
    }

    public function getTypeGlace($typeGlace_id) {
        return TypeGlace::findOrFail($typeGlace_id);
    }

    public function getTypeGlaceCascades($typeGlace_id) {
        return $this->getTypeGlace($typeGlace_id)->cascades;
    }
}

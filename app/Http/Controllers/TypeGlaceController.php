<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeGlace;

class TypeGlaceController extends Controller
{
    public function getTypeGlaces() {
        // header("Access-Control-Allow-Origin: *");
        return TypeGlace::all();
    }

    public function getTypeGlace($typeGlace_id) {
        // header("Access-Control-Allow-Origin: *");
        return TypeGlace::findOrFail($typeGlace_id);
    }

    public function getTypeGlaceCascades($typeGlace_id) {
        return $this->getTypeGlace($typeGlace_id)->cascades;
    }
}

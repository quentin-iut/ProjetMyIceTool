<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Structure;

class StructureController extends Controller {
    public function getStructures() {
        return Structure::all();
    }

    public function getStructure($structure_id) {
        return Structure::findOrFail($structure_id);
    }

    public function getStructureCascades($structure_id) {
        return self::getStructure($structure_id)->cascades;
    }
}

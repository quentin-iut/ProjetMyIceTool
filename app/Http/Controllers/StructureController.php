<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Structure;

class StructureController extends Controller
{
    public function getStructures() {
        // header("Access-Control-Allow-Origin: *");
        return Structure::all();
    }

    public function getStructure($structure_id) {
        // header("Access-Control-Allow-Origin: *");
        return Structure::findOrFail($structure_id);
    }

    public function getStructureCascades($structure_id) {
        return self::getStructure($structure_id)->cascades;
    }
}

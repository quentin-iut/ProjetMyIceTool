<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orientation;

class OrientationController extends Controller
{
    public function getOrientations() {
        header("Access-Control-Allow-Origin: *");
        return Orientation::all();
    }

    public function getOrientation($orientation_id) {
        header("Access-Control-Allow-Origin: *");
        return Orientation::findOrFail($orientation_id);
    }

    public function getOrientationCascades($orientation_id) {
        return $this->getOrientation($orientation_id)->cascades;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orientation;

class OrientationController extends Controller {
    public function getOrientations() {
        return Orientation::all();
    }

    public function getOrientation($orientation_id) {
        return Orientation::findOrFail($orientation_id);
    }

    public function getOrientationCascades($orientation_id) {
        return $this->getOrientation($orientation_id)->cascades;
    }
}

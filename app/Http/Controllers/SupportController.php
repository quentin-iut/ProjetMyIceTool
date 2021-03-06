<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Support;

class SupportController extends Controller {
    public function getSupports() {
        return Support::all();
    }

    public function getSupport($support_id) {
        return Support::findOrFail($support_id);
    }

    public function getSupportCascades($support_id) {
        return $this->getSupport($support_id)->cascades;
    }
}

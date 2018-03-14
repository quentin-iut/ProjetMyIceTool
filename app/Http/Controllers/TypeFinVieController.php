<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeFinVie;

class TypeFinVieController extends Controller {
    public function getTypeFinVies() {
        return TypeFinVie::all();
    }

    public function getTypeFinVie($typeFinVie_id) {
        return TypeFinVie::findOrFail($typeFinVie_id);
    }

    public function getTypeFinVieCascades($typeFinVie_id) {
        return $this->getTypeFinVie($typeFinVie_id)->cascades;
    }
}

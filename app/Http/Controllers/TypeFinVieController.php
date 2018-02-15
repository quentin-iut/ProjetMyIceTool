<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeFinVie;

class TypeFinVieController extends Controller
{
    public function getTypeFinVies() {
        header("Access-Control-Allow-Origin: *");
        return TypeFinVie::all();
    }

    public function getTypeFinVie($typeFinVie_id) {
        header("Access-Control-Allow-Origin: *");
        return TypeFinVie::findOrFail($typeFinVie_id);
    }

    public function getTypeFinVieCascades($typeFinVie_id) {
        return self::getTypeFinVie($typeFinVie_id)->cascades;
    }
}

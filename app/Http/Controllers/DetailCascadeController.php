<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\CascadeController;

class DetailCascadeController extends Controller
{
    public function afficherDetails($cascade_id){
        $infosCascade = app()->make(CascadeController::class)->callAction('getCascadeDetails', [$cascade_id]);
        // dd($infosCascade);
        return view('detailCascade', [ 'infosCascade' => $infosCascade]);
    }
}

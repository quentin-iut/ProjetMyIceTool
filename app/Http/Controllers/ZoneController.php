<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zone;
use DB;
use App\Releve;

class ZoneController extends Controller {
    public function getZones() {
        return Zone::all();
    }

    public function getZone($zone_id) {
        return Zone::findOrFail($zone_id);
    }

    public function getZoneCascades($zone_id) {
        return $this->getZone($zone_id)->cascades;
    }

    public function getZoneReleves($zone_id) {
        $z = $this->getZone($zone_id);
        if($z) {
            return $this->getZone($zone_id)->releves;
        }
        return response()->json(['status' => 'failed', 'message' => "Zone doesn't exist"]);
    }


    public function update(Request $req, $zone_id) {
        $z = $this->getZone($zone_id);

        $z->nom = $req->input('nom');
        $z->latNE = $req->input('latNE');
        $z->lngNE = $req->input('lngNE');
        $z->latSW = $req->input('latSW');
        $z->lngSW = $req->input('lngSW');
        $z->save();

        return $z;
    }

    public function insert(Request $req) {
        $z = New Zone();

        $z->latNE = $req->input('latNE');
        $z->lngNE = $req->input('lngNE');
        $z->latSW = $req->input('latSW');
        $z->lngSW = $req->input('lngSW');
        $z->save();

        $z = $this->getZone($z->id);
        return $z;
    }

    public function delete(Request $req) {
        Zone::destroy($req->all()[0]);
    }

    public function getDangerosite($zone_id) {
        $r = Releve::where('zone_id', $zone_id)->orderBy('date', 'DESC')->first();

        if($r) {
            return response()->json([ 'niveau_danger' => $r->niveau_danger]);
        }
        return response()->json(['niveau_danger' => 0]);
    }
}

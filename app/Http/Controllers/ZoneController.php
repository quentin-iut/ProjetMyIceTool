<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zone;
use DB;

class ZoneController extends Controller
{
    public function getZones() {
        header("Access-Control-Allow-Origin: *");
        return Zone::all();
    }

    public function getZone($zone_id) {
        header("Access-Control-Allow-Origin: *");
        return Zone::findOrFail($zone_id);
    }

    public function getMaxId() {
        header("Access-Control-Allow-Origin: *");
        return Zone::find(DB::table('zones')->max('id'));
    }

    public function getZoneCascades($zone_id) {
        return self::getZone($zone_id)->cascades;
    }

    public function getZoneReleves($zone_id) {
        return self::getZone($zone_id)->releves;
    }
}

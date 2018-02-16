<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cascade;
use DB;

class CascadeController extends Controller
{
    public function getCascades() {
        header("Access-Control-Allow-Origin: *");
        return Cascade::all();
        // return Cascade::where('nom', 'like', '%auzet%')->get();
    }

    public function getCascade($cascade_id) {
        header("Access-Control-Allow-Origin: *");
        return Cascade::findOrFail($cascade_id);
    }

    public function getCascadeDetails($cascade_id) {
        $c = $this->getCascade($cascade_id);

        $c->load('constituants');
        
        // $c->commentaires = $c->commentaires;
        // $c->constituants = $c->constituants;
        $c->images = $c->images;
        $c->niveau = $c->niveau;
        $c->orientation = $c->orientation;
        $c->pays = $c->pays;
        $c->structure = $c->structure;
        $c->supports = $c->supports;
        $c->typeFinVie = $c->typeFinVie;
        $c->typeGlace = $c->typeGlace;
        $c->zones = $c->zones;

        return $c;
    }

    public function getMaxId() {
        header("Access-Control-Allow-Origin: *");
        return Cascade::find(DB::table('cascades')->max('id'));
    }

    public function getCascadeCommentaires($cascade_id) {
        return $this->getCascade($cascade_id)->commentaires;
    }

    public function getCascadeConstituants($cascade_id) {
        return $this->getCascade($cascade_id)->constituants;
    }

    public function getCascadeImages($cascade_id) {
        return $this->getCascade($cascade_id)->images;
    }

    public function getCascadeNiveau($cascade_id) {
        return $this->getCascade($cascade_id)->niveau;
    }

    public function getCascadeOrientation($cascade_id) {
        return $this->getCascade($cascade_id)->orientation;
    }

    public function getCascadePays($cascade_id) {
        return $this->getCascade($cascade_id)->pays;
    }

    public function getCascadeStructure($cascade_id) {
        return $this->getCascade($cascade_id)->structure;
    }

    public function getCascadeSupports($cascade_id) {
        return $this->getCascade($cascade_id)->supports;
    }

    public function getCascadeTypeFinVie($cascade_id) {
        return $this->getCascade($cascade_id)->typeFinVie;
    }

    public function getCascadeTypeGlace($cascade_id) {
        return $this->getCascade($cascade_id)->typeGlace;
    }

    public function getCascadeUsers($cascade_id) {
        return $this->getCascade($cascade_id)->users;
    }

    public function getCascadeZones($cascade_id) {
        return $this->getCascade($cascade_id)->zones;
    }

    public function updateConstituants(Request $req, $cascade_id) {
        $c = $this->getCascade($cascade_id);

        // $c->constituants()->sync($req->all()['body']);
        return response()->json([ 'success' => $req->all()]);
    }
}

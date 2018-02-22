<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cascade;
use DB;

class CascadeController extends Controller
{
    public function getCascades() {
        return Cascade::all();
        // return Cascade::where('nom', 'like', '%auzet%')->get();
    }

    public function getCascade($cascade_id) {
        return Cascade::findOrFail($cascade_id);
    }

    public function getCascadeDetails($cascade_id) {
        $c = $this->getCascade($cascade_id);

        $c->load(
            'constituants',
            'images',
            'niveau',
            'orientation',
            'pays',
            'structure',
            'supports',
            'typeFinVie',
            'typeGlace',
            'zones'

        );

        return $c;
    }

    public function getMaxId() {
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
        $constituantsReq = $req->all();

        // $constituants;
        // foreach($constituantsReq as $constituant) {
        //     $constituant->id;
        // }
        

        // $c->constituants()->sync($req->all()['body']);
        return $constituantsReq;
    }

    public function updateSupports(Request $req, $cascade_id) {
        $c = $this->getCascade($cascade_id);
        $supports = $req->all();
        
        $c->supports()->sync($req->all());
        return $c->supports;
    }

    public function update(Request $req, $cascade_id) {
        $c = $this->getCascade($cascade_id);
        $c->nom = $req->input('nom');
        $c->nombre_voies = $req->input('nombre_voies');
        $c->altitude_minimum = $req->input('altitude_minimum');
        $c->hauteur = $req->input('hauteur');
        $c->niveau_engagement = $req->input('niveau_engagement');
        $c->lat = $req->input('lat');
        $c->lng = $req->input('lng');
        $c->type_fin_vie_id = $req->input('type_fin_vie_id');
        $c->type_glace_id = $req->input('type_glace_id');
        $c->structure_id = $req->input('structure_id');
        $c->orientation_id = $req->input('orientation_id');
        $c->niveau_id = $req->input('niveau_id');
        $c->save();

        return $c;
    }

    public function insert(Request $req) {
        $c = New Cascade();
        $c->lat = $req->input('lat');
        $c->lng = $req->input('lng');
        $c->save();

        $c = $this->getCascade($c->id);
        return $c;
    }
}

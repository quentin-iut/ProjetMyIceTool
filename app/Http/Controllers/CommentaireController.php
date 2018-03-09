<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commentaire;
use App\Photo;


class CommentaireController extends Controller
{
    public function getCommentaires() {
        // header("Access-Control-Allow-Origin: *");
        return Commentaire::all();
    }

    public function getCommentaire($commentaire_id) {
        // header("Access-Control-Allow-Origin: *");
        return Commentaire::findOrFail($commentaire_id);
    }

    public function getCommmentaireCascade($commentaire_id) {
        return $this->getCommentaire($commentaire_id)->cascade;
    }

    public function getCommentairePhotos($commentaire_id) {
        return $this->getCommentaire($commentaire_id)->photos;
    }

    public function getUserCommentaire($commentaire_id) {
        return $this->getCommentaire($commentaire_id)->user;
    }

    public function insertImages(Request $req, $commentaire_id) {
        $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
        if($req->hash_file('photo')) {
            $file = $req->file('photo');
            
            $path = $file->putFile('/uploads');
            $i = new Photo();
            $i->commentaire_id = $commentaire_id;
            $i->url = $root . 'uploads/' . $name;
            $i->save();
            
            return response()->json(['success' => 'true']);
        }

        return response()->json(['success' => 'false']);
    }
}

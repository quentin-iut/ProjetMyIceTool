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
        
        $files = $req->file('image');
        foreach ($files as $file) {
            $name = $file->store('images');
            $name = explode('/', $name)[1];

            $path = $file->move(public_path("/uploads"), $name);
            $i = new Photo();
            $i->commentaire_id = $commentaire_id;
            $i->url = $root . 'uploads/' . $name;
            $i->save();
        }
        return response()->json(['success' => 'true']);
    }
}

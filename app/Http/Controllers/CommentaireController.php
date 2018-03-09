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

    public function insertPhoto(Request $req, $commentaire_id) {
        $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

        if ($req->hasFile('photo')) {
            $file = $req->file('photo');
            $name = uniqid('img_').'.'.$file->getClientOriginalExtension();
            $path = $file->move('uploads', $name);
            $p = new Photo();
            $p->commentaire_id = $commentaire_id;
            $p->url = $root . $name;
            $p->save();

            return ["success" => true];
        }
        return ["success" => false];
    }
}

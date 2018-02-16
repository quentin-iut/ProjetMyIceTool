<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commentaire;

class CommentaireController extends Controller
{
    public function getCommentaires() {
        header("Access-Control-Allow-Origin: *");
        return Commentaire::all();
    }

    public function getCommentaire($commentaire_id) {
        header("Access-Control-Allow-Origin: *");
        return Commentaire::findOrFail($commentaire_id);
    }

    public function getCommmentaireCascade($commentaire_id) {
        return $this->getCommentaire($commentaire_id)->cascade;
    }

    public function getCommentairePhotos($commentaire_id) {
        return $this->getCommentaire($commentaire_id)->photos;
    }
}

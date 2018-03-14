<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotoController extends Controller {
    public function getPhotos() {
        return Photo::all();
    }

    public function getPhoto($photo_id) {
        return Photo::findOrFail($photo_id);
    }

    public function getPhotoCommentaire($photo_id) {
        return $this->getPhoto($photo_id)->commentaire;
    }
}

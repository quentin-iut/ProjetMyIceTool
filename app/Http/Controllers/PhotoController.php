<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotoController extends Controller
{
    public function getPhotos() {
        header("Access-Control-Allow-Origin: *");
        return Photo::all();
    }

    public function getPhoto($photo_id) {
        header("Access-Control-Allow-Origin: *");
        return Photo::findOrFail($photo_id);
    }

    public function getPhotoCommentaire($photo_id) {
        return self::getPhoto($photo_id)->commentaire;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller {
    public function getImages() {
        return Image::all();
    }

    public function getImage($image_id) {
        return Image::findOrFail($image_id);
    }

    public function getImageCascade($image_id) {
        return $this->getImage($image_id)->cascade;
    }
}

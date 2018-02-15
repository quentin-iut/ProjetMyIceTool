<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller
{
    public function getImages() {
        header("Access-Control-Allow-Origin: *");
        return Image::all();
    }

    public function getImage($image_id) {
        header("Access-Control-Allow-Origin: *");
        return Image::findOrFail($image_id);
    }

    public function getImageCascade($image_id) {
        return self::getImage($image_id)->cascade;
    }
}

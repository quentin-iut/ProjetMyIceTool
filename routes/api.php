<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|  Routes
|--------------------------------------------------------------------------
|
| Here is where you can register  routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "" middleware group. Enjoy building your !
|
*/

Route::middleware('auth:')->get('/user', function (Request $request) {
    return $request->user();
});


/* ----- Api ----- */

// Cascade
Route::get('/cascades', 'CascadeController@getCascades')->name('Cascades');
Route::get('/cascades/{cascade_id}', 'CascadeController@getCascade')->name('Cascade');
Route::get('/cascades/{cascade_id}/details', 'CascadeController@getCascadeDetails')->name('CascadeDatails');
// Route::get('/cascades/{cascade_id}/commentaires', 'CascadeController@getCascadeCommentaires')->name('CascadeCommentaires');
Route::get('/cascades/{cascade_id}/constituants', 'CascadeController@getCascadeConstituants')->name('CascadeConstituants');
// Route::get('/cascades/{cascade_id}/images', 'CascadeController@getCascadeImages')->name('CascadeImages');
// Route::get('/cascades/{cascade_id}/niveau', 'CascadeController@getCascadeNiveau')->name('CascadeNiveau');
// Route::get('/cascades/{cascade_id}/orientation', 'CascadeController@getCascadeOrientation')->name('CascadeOrientation');
// Route::get('/cascades/{cascade_id}/pays', 'CascadeController@getCascadePays')->name('CascadePays');
// Route::get('/cascades/{cascade_id}/structure', 'CascadeController@getCascadeStructure')->name('CascadeStructure');
// Route::get('/cascades/{cascade_id}/supports', 'CascadeController@getCascadeSupports')->name('CascadeSupports');
// Route::get('/cascades/{cascade_id}/typeFinVie', 'CascadeController@getCascadeTypeFinVie')->name('CascadeTypeFinVie');
// Route::get('/cascades/{cascade_id}/typeGlace', 'CascadeController@getCascadeTypeGlace')->name('CascadeTypeGlace');
// Route::get('/cascades/{cascade_id}/users', 'CascadeController@getCascadeUsers')->name('CascadeUsers');
// Route::get('/cascades/{cascade_id}/zones', 'CascadeController@getCascadeZones')->name('CascadeZones');
Route::get('/cascades/max', 'CascadeController@getMaxId')->name('CascadeMaxId');
Route::post('/cascades/{cascade_id}/constituants/update', 'CascadeController@updateConstituants')->name('CascadeUpdateConstituants');

// // Commentaire
// Route::get('/commentaires', 'CommentaireController@getCommentaires')->name('Commentaires');
// Route::get('/commentaires/{commentaire_id}', 'CommentaireController@getCommentaire')->name('Commentaire');
// Route::get('/commentaires/{commentaire_id}/cascade', 'CommentaireController@getCommentaireCascade')->name('CommentaireCascade');
// Route::get('/commentaires/{commentaire_id}/photos', 'CommentaireController@getCommentairePhotos')->name('CommentairePhotos');

// // Constituant
Route::get('/constituants', 'ConstituantController@getConstituants')->name('Constituants');
// Route::get('/constituants/{constituant_id}', 'ConstituantController@getConstituant')->name('Constituant');
// Route::get('/constituants/{constituant_id}/cascades', 'ConstituantController@getConstituantCascades')->name('ConstituantCascades');

// // Image
// Route::get('/images', 'ImageController@getImages')->name('Images');
// Route::get('/images/{image_id}', 'ImageController@getImage')->name('Image');
// Route::get('/images/{image_id}/cascade', 'ImageController@getImageCascade')->name('ImageCascade');

// // Langue
// Route::get('/langues', 'LangueController@getLangues')->name('Langues');
// Route::get('/langues/{langue_id}', 'LangueController@getLangue')->name('Langue');
// Route::get('/langues/{langue_id}/users', 'LangueController@getLangueUsers')->name('LangueUsers');

// // Niveau
// Route::get('/niveaux', 'NiveauController@getNiveaux')->name('Niveaux');
// Route::get('/niveaux/{niveau_id}', 'NiveauController@getNiveau')->name('Niveau');
// Route::get('/niveaux/{niveau_id}/users', 'NiveauController@getNiveauUsers')->name('NiveauUsers');
// Route::get('/niveaux/{niveau_id}/cascades', 'NiveauController@getNiveauCascades')->name('NiveauCascades');

// // Orientation
// Route::get('/orientations', 'OrientationController@getOrientations')->name('Orientations');
// Route::get('/orientations/{orientation_id}', 'OrientationController@getOrientation')->name('Orientation');
// Route::get('/orientations/{orientation_id}/cascades', 'OrientationController@getOrientationCascades')->name('OrientationCascades');

// // Pays
// Route::get('/pays', 'PaysController@getAllPays')->name('AllPays');
// Route::get('/pays/{pays_id}', 'PaysController@getPays')->name('Pays');
// Route::get('/pays/{pays_id}/cascades', 'PaysController@getPaysCascades')->name('PaysCascades');

// // Photo
// Route::get('/photos', 'PhotoController@getPhotos')->name('Photos');
// Route::get('/photos/{photo_id}', 'PhotoController@getPhoto')->name('Photo');
// Route::get('/photos/{photo_id}/commentaire', 'PhotoController@getPhotoCommentaire')->name('PhotoCommentaire');

// // Releve
// Route::get('/releves', 'ReleveController@getReleves')->name('Releves');
// Route::get('/releves/{releve_id}', 'ReleveController@getReleve')->name('Releve');
// Route::get('/releves/{releve_id}/zone', 'ReleveController@getReleveZone')->name('ReleveZone');

// // Strucure
// Route::get('/structures', 'StructureController@getStructures')->name('Structures');
// Route::get('/structures/{structure_id}', 'StructureController@getStructure')->name('Structure');
// Route::get('/structures/{structure_id}/cascades', 'StructureController@getStructureCascades')->name('StructureCascades');

// // Support
Route::get('/supports', 'SupportController@getSupports')->name('Supports');
// Route::get('/supports/{support_id}', 'SupportController@getSupport')->name('Support');
// Route::get('/supports/{support_id}/cascades', 'SupportController@getSupportCascades')->name('SupportCascades');

// // TypeFinVie
// Route::get('/typeFinVies', 'TypeFinVieController@getTypeFinVies')->name('TypeFinVies');
// Route::get('/typeFinVies/{typeFinVie_id}', 'TypeFinVieController@getTypeFinVie')->name('TypeFinVie');
// Route::get('/typeFinVies/{typeFinVie_id}/cascades', 'TypeFinVieController@getTypeFinVieCascades')->name('TypeFinVieCascades');

// // TypeGlace
// Route::get('/typeGlaces', 'TypeGlaceController@getTypeGlaces')->name('TypeGlaces');
// Route::get('/typeGlaces/{typeGlace_id}', 'TypeGlaceController@getTypeGlace')->name('TypeGlace');
// Route::get('/typeGlaces/{typeGlace_id}/cascades', 'TypeGlaceController@getTypeGlaceCascades')->name('TypeGlaceCascades');

// // User
// Route::get('//users', 'UserController@getUsers')->name('Users');
Route::get('/users/{user_id}', 'UserController@getUser')->name('User');
Route::get('/users/{user_id}/details', 'UserController@getUserDetails')->name('UserDetails');
Route::get('/users/{user_id}/favoris', 'UserController@getUserFavoris')->name('UserFavoris');
Route::get('/users/{user_id}/langue', 'UserController@getUserLangue')->name('UserLangue');
Route::get('/users/{user_id}/niveau', 'UserController@getUserNiveau')->name('UserNiveau');

// Zone
Route::get('/zones', 'ZoneController@getZones')->name('Zones');
Route::get('/zones/{zone_id}', 'ZoneController@getZone')->name('Zone');
Route::get('/zones/{zone_id}/cascades', 'ZoneController@getZoneCascades')->name('ZoneCascades');
Route::get('/zones/{zone_id}/releves', 'ZoneController@getZoneReleves')->name('ZoneReleves');
Route::get('/zones/max', 'ZoneController@getMaxId')->name('ZoneMaxId');

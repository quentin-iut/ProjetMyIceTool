<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

/* ----- API ----- */

// Cascade
Route::get('api/cascades', 'CascadeController@getCascades')->name('Cascades');
Route::get('api/cascade/{cascade_id}', 'CascadeController@getCascade')->name('Cascade');
Route::get('api/cascade/{cascade_id}/details', 'CascadeController@getCascadeDetails')->name('CascadeDatails');
// Route::get('api/cascade/{cascade_id}/commentaires', 'CascadeController@getCascadeCommentaires')->name('CascadeCommentaires');
// Route::get('api/cascade/{cascade_id}/constituants', 'CascadeController@getCascadeConstituants')->name('CascadeConstituants');
// Route::get('api/cascade/{cascade_id}/images', 'CascadeController@getCascadeImages')->name('CascadeImages');
// Route::get('api/cascade/{cascade_id}/niveau', 'CascadeController@getCascadeNiveau')->name('CascadeNiveau');
// Route::get('api/cascade/{cascade_id}/orientation', 'CascadeController@getCascadeOrientation')->name('CascadeOrientation');
// Route::get('api/cascade/{cascade_id}/pays', 'CascadeController@getCascadePays')->name('CascadePays');
// Route::get('api/cascade/{cascade_id}/structure', 'CascadeController@getCascadeStructure')->name('CascadeStructure');
// Route::get('api/cascade/{cascade_id}/supports', 'CascadeController@getCascadeSupports')->name('CascadeSupports');
// Route::get('api/cascade/{cascade_id}/typeFinVie', 'CascadeController@getCascadeTypeFinVie')->name('CascadeTypeFinVie');
// Route::get('api/cascade/{cascade_id}/typeGlace', 'CascadeController@getCascadeTypeGlace')->name('CascadeTypeGlace');
// Route::get('api/cascade/{cascade_id}/users', 'CascadeController@getCascadeUsers')->name('CascadeUsers');
// Route::get('api/cascade/{cascade_id}/zones', 'CascadeController@getCascadeZones')->name('CascadeZones');
Route::get('api/cascades/max', 'CascadeController@getMaxId')->name('CascadeMaxId');
Route::post('api/cascade/{cascade_id}/constituants/update', 'CascadeController@updateConstituants')->name('CascadeUpdateConstituants');

// // Commentaire
// Route::get('api/commentaires', 'CommentaireController@getCommentaires')->name('Commentaires');
// Route::get('api/commentaire/{commentaire_id}', 'CommentaireController@getCommentaire')->name('Commentaire');
// Route::get('api/commentaire/{commentaire_id}/cascade', 'CommentaireController@getCommentaireCascade')->name('CommentaireCascade');
// Route::get('api/commentaire/{commentaire_id}/photos', 'CommentaireController@getCommentairePhotos')->name('CommentairePhotos');

// // Constituant
Route::get('api/constituants', 'ConstituantController@getConstituants')->name('Constituants');
// Route::get('api/constituant/{constituant_id}', 'ConstituantController@getConstituant')->name('Constituant');
// Route::get('api/constituant/{constituant_id}/cascades', 'ConstituantController@getConstituantCascades')->name('ConstituantCascades');

// // Image
// Route::get('api/images', 'ImageController@getImages')->name('Images');
// Route::get('api/image/{image_id}', 'ImageController@getImage')->name('Image');
// Route::get('api/image/{image_id}/cascade', 'ImageController@getImageCascade')->name('ImageCascade');

// // Langue
// Route::get('api/langues', 'LangueController@getLangues')->name('Langues');
// Route::get('api/langue/{langue_id}', 'LangueController@getLangue')->name('Langue');
// Route::get('api/langue/{langue_id}/users', 'LangueController@getLangueUsers')->name('LangueUsers');

// // Niveau
// Route::get('api/niveaux', 'NiveauController@getNiveaux')->name('Niveaux');
// Route::get('api/niveau/{niveau_id}', 'NiveauController@getNiveau')->name('Niveau');
// Route::get('api/niveau/{niveau_id}/users', 'NiveauController@getNiveauUsers')->name('NiveauUsers');
// Route::get('api/niveau/{niveau_id}/cascades', 'NiveauController@getNiveauCascades')->name('NiveauCascades');

// // Orientation
// Route::get('api/orientations', 'OrientationController@getOrientations')->name('Orientations');
// Route::get('api/orientation/{orientation_id}', 'OrientationController@getOrientation')->name('Orientation');
// Route::get('api/orientation/{orientation_id}/cascades', 'OrientationController@getOrientationCascades')->name('OrientationCascades');

// // Pays
// Route::get('api/pays', 'PaysController@getAllPays')->name('AllPays');
// Route::get('api/pays/{pays_id}', 'PaysController@getPays')->name('Pays');
// Route::get('api/pays/{pays_id}/cascades', 'PaysController@getPaysCascades')->name('PaysCascades');

// // Photo
// Route::get('api/photos', 'PhotoController@getPhotos')->name('Photos');
// Route::get('api/photo/{photo_id}', 'PhotoController@getPhoto')->name('Photo');
// Route::get('api/photo/{photo_id}/commentaire', 'PhotoController@getPhotoCommentaire')->name('PhotoCommentaire');

// // Releve
// Route::get('api/releves', 'ReleveController@getReleves')->name('Releves');
// Route::get('api/releve/{releve_id}', 'ReleveController@getReleve')->name('Releve');
// Route::get('api/releve/{releve_id}/zone', 'ReleveController@getReleveZone')->name('ReleveZone');

// // Strucure
// Route::get('api/structures', 'StructureController@getStructures')->name('Structures');
// Route::get('api/structure/{structure_id}', 'StructureController@getStructure')->name('Structure');
// Route::get('api/structure/{structure_id}/cascades', 'StructureController@getStructureCascades')->name('StructureCascades');

// // Support
Route::get('api/supports', 'SupportController@getSupports')->name('Supports');
// Route::get('api/support/{support_id}', 'SupportController@getSupport')->name('Support');
// Route::get('api/support/{support_id}/cascades', 'SupportController@getSupportCascades')->name('SupportCascades');

// // TypeFinVie
// Route::get('api/typeFinVies', 'TypeFinVieController@getTypeFinVies')->name('TypeFinVies');
// Route::get('api/typeFinVie/{typeFinVie_id}', 'TypeFinVieController@getTypeFinVie')->name('TypeFinVie');
// Route::get('api/typeFinVie/{typeFinVie_id}/cascades', 'TypeFinVieController@getTypeFinVieCascades')->name('TypeFinVieCascades');

// // TypeGlace
// Route::get('api/typeGlaces', 'TypeGlaceController@getTypeGlaces')->name('TypeGlaces');
// Route::get('api/typeGlace/{typeGlace_id}', 'TypeGlaceController@getTypeGlace')->name('TypeGlace');
// Route::get('api/typeGlace/{typeGlace_id}/cascades', 'TypeGlaceController@getTypeGlaceCascades')->name('TypeGlaceCascades');

// // User
// Route::get('/api/users', 'UserController@getUsers')->name('Users');
Route::get('api/user/{user_id}', 'UserController@getUser')->name('User');
Route::get('api/user/{user_id}/details', 'UserController@getUserDetails')->name('UserDetails');
Route::get('api/user/{user_id}/favoris', 'UserController@getUserFavoris')->name('UserFavoris');
Route::get('api/user/{user_id}/langue', 'UserController@getUserLangue')->name('UserLangue');
Route::get('api/user/{user_id}/niveau', 'UserController@getUserNiveau')->name('UserNiveau');

// Zone
Route::get('api/zones', 'ZoneController@getZones')->name('Zones');
Route::get('api/zone/{zone_id}', 'ZoneController@getZone')->name('Zone');
Route::get('api/zone/{zone_id}/cascades', 'ZoneController@getZoneCascades')->name('ZoneCascades');
Route::get('api/zone/{zone_id}/releves', 'ZoneController@getZoneReleves')->name('ZoneReleves');
Route::get('api/zones/max', 'ZoneController@getMaxId')->name('ZoneMaxId');

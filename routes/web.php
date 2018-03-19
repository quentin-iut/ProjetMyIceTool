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
})->name('home');

Auth::routes();

// Page conditions
Route::get('/conditions',  function () {
    return view('conditions');
})->name('conditions');

// Page politique de confidentialité
Route::get('/confidentialite',  function () {
    return view('confidentialite');
})->name('confidentialite');

// Page mentions legales
Route::get('/mentions',  function () {
    return view('mentions');
})->name('mentions');



// Page perso
Route::get('/user/details', 'DetailController@getDetails')->name('details');
Route::post('/user/details','DetailController@updateUser')->name('enreModif');

// Page Favoris
Route::get('/user/favoris','FavorisController@getFavoris')->name('favoris');
Route::get('/user/retirerFavoris/{id_cascade}','FavorisController@retirerFavoris')->name('retirerFavoris');
Route::get('/user/detailsCascade/{id_cascade}','DetailCascadeController@afficherDetails')->name('detailsCascade');


/* ----- Api ----- */

// Cascade
Route::get('/api/cascades', 'CascadeController@getCascades')->name('Cascades');
Route::get('/api/cascades/{cascade_id}', 'CascadeController@getCascade')->name('Cascade');
Route::get('/api/cascades/{cascade_id}/details', 'CascadeController@getCascadeDetails')->name('CascadeDatails');
Route::get('/api/cascades/{cascade_id}/commentaires', 'CascadeController@getCascadeCommentaires')->name('CascadeCommentaires');
Route::get('/api/cascades/{cascade_id}/constituants', 'CascadeController@getCascadeConstituants')->name('CascadeConstituants');
// Route::get('/api/cascades/{cascade_id}/images', 'CascadeController@getCascadeImages')->name('CascadeImages');
// Route::get('/api/cascades/{cascade_id}/niveau', 'CascadeController@getCascadeNiveau')->name('CascadeNiveau');
// Route::get('/api/cascades/{cascade_id}/orientation', 'CascadeController@getCascadeOrientation')->name('CascadeOrientation');
// Route::get('/api/cascades/{cascade_id}/pays', 'CascadeController@getCascadePays')->name('CascadePays');
// Route::get('/api/cascades/{cascade_id}/structure', 'CascadeController@getCascadeStructure')->name('CascadeStructure');
// Route::get('/api/cascades/{cascade_id}/supports', 'CascadeController@getCascadeSupports')->name('CascadeSupports');
// Route::get('/api/cascades/{cascade_id}/typeFinVie', 'CascadeController@getCascadeTypeFinVie')->name('CascadeTypeFinVie');
// Route::get('/api/cascades/{cascade_id}/typeGlace', 'CascadeController@getCascadeTypeGlace')->name('CascadeTypeGlace');
// Route::get('/api/cascades/{cascade_id}/users', 'CascadeController@getCascadeUsers')->name('CascadeUsers');
// Route::get('/api/cascades/{cascade_id}/zones', 'CascadeController@getCascadeZones')->name('CascadeZones');
Route::post('/api/cascades/{cascade_id}/constituants/update', 'CascadeController@updateConstituants')->name('CascadeUpdateConstituants');
Route::post('/api/cascades/{cascade_id}/supports/update', 'CascadeController@updateSupports')->name('CascadeUpdateSupports');
Route::post('/api/cascades/{cascade_id}/update', 'CascadeController@update')->name('CascadeUpdate');
Route::post('/api/cascades/{cascade_id}/commentaire', 'CascadeController@insertComment')->name('CascadeInsertComment');
Route::post('/api/cascades','CascadeController@insert')->name('CascadeInsert');
Route::post('/api/cascades/delete', 'CascadeController@delete')->name('CascadeDelete');
Route::post('/api/cascades/name', 'CascadeController@getCascadesByName')->name('CascadesByName');
// // Commentaire
// Route::get('/api/commentaires', 'CommentaireController@getCommentaires')->name('Commentaires');
// Route::get('/api/commentaires/{commentaire_id}', 'CommentaireController@getCommentaire')->name('Commentaire');
// Route::get('/api/commentaires/{commentaire_id}/cascade', 'CommentaireController@getCommentaireCascade')->name('CommentaireCascade');
Route::get('/api/commentaires/{commentaire_id}/details', 'CommentaireController@getCommentaireDetails')->name('CommenatairesDetails');
Route::get('/api/commentaires/{commentaire_id}/photos', 'CommentaireController@getCommentairePhotos')->name('CommentairePhotos');
Route::get('/api/commentaires/{commentaire_id}/user', 'CommentaireController@getUserCommentaire')->name('CommentaireUser');
Route::post('/api/commentaires/{commentaire_id}/photo', 'CommentaireController@insertPhoto')->name('CommentairePhoto');

// // Constituant
Route::get('/api/constituants', 'ConstituantController@getConstituants')->name('Constituants');
// Route::get('/api/constituants/{constituant_id}', 'ConstituantController@getConstituant')->name('Constituant');
// Route::get('/api/constituants/{constituant_id}/cascades', 'ConstituantController@getConstituantCascades')->name('ConstituantCascades');

// Image
// Route::get('/api/images', 'ImageController@getImages')->name('Images');
// Route::get('/api/images/{image_id}', 'ImageController@getImage')->name('Image');
// Route::get('/api/images/{image_id}/cascade', 'ImageController@getImageCascade')->name('ImageCascade');

// Langue
Route::get('/api/langues', 'LangueController@getLangues')->name('Langues');
// Route::get('/api/langues/{langue_id}', 'LangueController@getLangue')->name('Langue');
// Route::get('/api/langues/{langue_id}/users', 'LangueController@getLangueUsers')->name('LangueUsers');

// Niveau
Route::get('/api/niveaux', 'NiveauController@getNiveaux')->name('Niveaux');
// Route::get('/api/niveaux/{niveau_id}', 'NiveauController@getNiveau')->name('Niveau');
// Route::get('/api/niveaux/{niveau_id}/users', 'NiveauController@getNiveauUsers')->name('NiveauUsers');
// Route::get('/api/niveaux/{niveau_id}/cascades', 'NiveauController@getNiveauCascades')->name('NiveauCascades');

// Orientation
Route::get('/api/orientations', 'OrientationController@getOrientations')->name('Orientations');
// Route::get('/api/orientations/{orientation_id}', 'OrientationController@getOrientation')->name('Orientation');
// Route::get('/api/orientations/{orientation_id}/cascades', 'OrientationController@getOrientationCascades')->name('OrientationCascades');

// // Pays
// Route::get('/api/pays', 'PaysController@getAllPays')->name('AllPays');
// Route::get('/api/pays/{pays_id}', 'PaysController@getPays')->name('Pays');
// Route::get('/api/pays/{pays_id}/cascades', 'PaysController@getPaysCascades')->name('PaysCascades');

// // Photo
// Route::get('/api/photos', 'PhotoController@getPhotos')->name('Photos');
// Route::get('/api/photos/{photo_id}', 'PhotoController@getPhoto')->name('Photo');
// Route::get('/api/photos/{photo_id}/commentaire', 'PhotoController@getPhotoCommentaire')->name('PhotoCommentaire');

// // Releve
// Route::get('/api/releves', 'ReleveController@getReleves')->name('Releves');
// Route::get('/api/releves/{releve_id}', 'ReleveController@getReleve')->name('Releve');
// Route::get('/api/releves/{releve_id}/zone', 'ReleveController@getReleveZone')->name('ReleveZone');

// Strucure
Route::get('/api/structures', 'StructureController@getStructures')->name('Structures');
// Route::get('/api/structures/{structure_id}', 'StructureController@getStructure')->name('Structure');
// Route::get('/api/structures/{structure_id}/cascades', 'StructureController@getStructureCascades')->name('StructureCascades');

// // Support
Route::get('/api/supports', 'SupportController@getSupports')->name('Supports');
// Route::get('/api/supports/{support_id}', 'SupportController@getSupport')->name('Support');
// Route::get('/api/supports/{support_id}/cascades', 'SupportController@getSupportCascades')->name('SupportCascades');

// TypeFinVie
Route::get('/api/type_fin_vies', 'TypeFinVieController@getTypeFinVies')->name('TypeFinVies');
// Route::get('/api/typeFinVies/{typeFinVie_id}', 'TypeFinVieController@getTypeFinVie')->name('TypeFinVie');
// Route::get('/api/typeFinVies/{typeFinVie_id}/cascades', 'TypeFinVieController@getTypeFinVieCascades')->name('TypeFinVieCascades');

// TypeGlace
Route::get('/api/type_glaces', 'TypeGlaceController@getTypeGlaces')->name('TypeGlaces');
// Route::get('/api/typeGlaces/{typeGlace_id}', 'TypeGlaceController@getTypeGlace')->name('TypeGlace');
// Route::get('/api/typeGlaces/{typeGlace_id}/cascades', 'TypeGlaceController@getTypeGlaceCascades')->name('TypeGlaceCascades');

// // User
// Route::get('/api/users', 'UserController@getUsers')->name('Users');
Route::get('/api/users/{user_id}', 'UserController@getUser')->name('User');
Route::get('/api/users/{user_id}/details', 'UserController@getUserDetails')->name('UserDetails');
Route::get('/api/users/{user_id}/favoris', 'UserController@getUserFavoris')->name('UserFavoris');
Route::get('/api/users/{user_id}/langue', 'UserController@getUserLangue')->name('UserLangue');
Route::get('/api/users/{user_id}/niveau', 'UserController@getUserNiveau')->name('UserNiveau');

Route::post('api/login', 'UserController@check')->name('CheckUser');

// Zone
Route::get('/api/zones', 'ZoneController@getZones')->name('Zones');
Route::get('/api/zones/{zone_id}', 'ZoneController@getZone')->name('Zone');
Route::get('/api/zones/{zone_id}/cascades', 'ZoneController@getZoneCascades')->name('ZoneCascades');
Route::get('/api/zones/{zone_id}/releves', 'ZoneController@getZoneReleves')->name('ZoneReleves');

Route::post('/api/zones/{zone_id}/update', 'ZoneController@update')->name('ZoneUpdate');
Route::post('/api/zones','ZoneController@insert')->name('ZoneInsert');
Route::post('api/zones/delete', 'ZoneController@delete')->name('ZoneDelete');

// OAuth Routes
Route::get('/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

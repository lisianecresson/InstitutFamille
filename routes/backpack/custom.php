<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes

	// Backpack\CRUD: Define the resources for the entities you want to CRUD.
    // crud des livres
    CRUD::resource('livre', 'LivreCrudController');
    // crud des memoires d'étudiant
    CRUD::resource('memoire', 'MemoireCrudController');
    // crud des DVD
    CRUD::resource('dvd', 'DvdCrudController');
    // crud des VOD
    CRUD::resource('vod', 'VodCrudController');
    // crud des formateurs
    CRUD::resource('formateur', 'FormateurCrudController');
    // crud des cours en ligne
    CRUD::resource('coursenligne', 'CoursEnLigneCrudController');
    // crud des lieux
    CRUD::resource('lieu', 'LieuCrudController');
    // crud des conferences
    CRUD::resource('conference', 'ConferenceCrudController');
    // crud des types de formation
    CRUD::resource('typeformation', 'TypeFormationCrudController');
  // crud des formations
    CRUD::resource('formation', 'FormationCrudController');
    // crud des formations
    CRUD::resource('formationlieu', 'FormationLieuCrudController');
}); // this should be the absolute last line of this file

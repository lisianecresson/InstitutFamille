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



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
/*
* Route des formations
*/
    // detail d'une formation
    Route::get('nos-formations/{slugFormation}',[
        'as'=>'formation',
        'uses'=>'FormationController@detailsFormation'
    ]);
/*
*
* Route des evenements
*
*/
    // detail d'un evenement
    Route::get('les-evenements/{slugEvenement}',[
        'as'=>'evenement',
        'uses'=>'EvenementController@detailsEvenement'
    ]);

/*
*
* Route des evenements
*
*/
    // detail d'un evenement
    Route::get('les-formateurs/{slugFormateur}',[
        'as'=>'formateur',
        'uses'=>'FormateurController@detailsFormateur'
    ]);

/*
* Route de la boutique
*/

Route::get('notre-boutique/livres',[
        'as'=>'livres',
        'uses'=>'BoutiqueController@listeLivres'
    ]);
Route::get('notre-boutique/dvd',[
        'as'=>'dvds',
        'uses'=>'BoutiqueController@listeDvds'
    ]);
Route::get('notre-boutique/vod',[
        'as'=>'vods',
        'uses'=>'BoutiqueController@listeVods'
    ]);
Route::get('notre-boutique/memoires',[
        'as'=>'memoires',
        'uses'=>'BoutiqueController@listeMemoires'
    ]);


/*
*
* Route des articles
*
*/
    // detail d'un livre
    Route::get('notre-boutique/livre/{slugLivre}',[
        'as'=>'livre',
        'uses'=>'BoutiqueController@detailsLivre'
    ]);
    // detail d'un dvd
    Route::get('notre-boutique/dvd/{slugDvd}',[
        'as'=>'dvd',
        'uses'=>'BoutiqueController@detailsDvd'
    ]);
    // detail d'un vod
    Route::get('notre-boutique/vod/{slugVod}',[
        'as'=>'vod',
        'uses'=>'BoutiqueController@detailsVod'
    ]);
    // detail d'un memoire
    Route::get('notre-boutique/memoire/{slugMemoire}',[
        'as'=>'memoire',
        'uses'=>'BoutiqueController@detailsMemoire'
    ]);

/*
* Routes des pages
*/
Route::get('/', ['as'=>'accueil', 'uses' => 'PageController@accueil']);
Route::get('{page}/{subs?}', ['as'=>'page', 'uses' => 'PageController@index'])
    ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);



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
        'as'=>'nos-formations',
        'uses'=>'FormationController@detailFormation'
    ]);
/*
*
* Route des evenements
*
*/
    // detail d'un evenement
    Route::get('les-evenements/{slugEvenement}',[
        'as'=>'les-evenements',
        'uses'=>'EvenementController@detailEvenement'
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
/*
* Routes des pages
*/
Route::get('/', ['as'=>'accueil', 'uses' => 'PageController@accueil']);
Route::get('{page}/{subs?}', ['as'=>'page', 'uses' => 'PageController@index'])
    ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);



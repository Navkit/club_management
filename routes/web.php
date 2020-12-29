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


Route::get('/form',function (){
    return view('template.form');
});

Route::get('/table',function (){
    return view('template.table');
});

Route::get('/blank',function (){
    return view('template.blank');
});

// Auth Routes
Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin');
Route::get('logout', 'AuthController@logout');
//Games Routes
Route::middleware('checkLogin')->group(function () {

    Route::get('/', 'AuthController@dashboard');
Route::get('games','GamesController@index');
Route::get('newgame','GamesController@create');
Route::get('editgame/{id}','GamesController@edit');
Route::get('deletegame/{id}','GamesController@destroy');
Route::post('gamesave','GamesController@store');
Route::post('gameupdate','GamesController@update');
Route::get('viewplayers/{id}','GamesController@viewPlayers');
//GamePlayerDelete Route
Route::get("deleteplayergame/{pid}/{gid}","GamesController@deletePlayerGame");
//Cards Routes
Route::get('cards','CardsController@index');
Route::get('newcard','CardsController@create');
Route::get('editcard/{id}','CardsController@edit');
Route::post('editcard/{id}','CardsController@update');
Route::get('showcard/{id}','CardsController@show');
Route::get('cardplayers/{id}','CardsController@showPlayers');
Route::get('cardpartners/{id}','CardsController@showPartners');
Route::get('deletecard/{id}','CardsController@destroy');
Route::post('cardsave','CardsController@store');
Route::post('cardupdate','CardsController@update');
//Players Routes
Route::get('players','PlayersController@index');
Route::get('newplayer','PlayersController@create');
Route::get('editplayer/{id}','PlayersController@edit');
Route::get('deleteplayer/{id}','PlayersController@destroy');
Route::post('playersave','PlayersController@store');
Route::post('playerupdate','PlayersController@update');
Route::get('showplayer/{id}','PlayersController@show');
Route::post('playergamesstore','PlayersController@playerGamesStore');
//Partners Routes
Route::get('partners','PartnersController@index');
Route::get('newpartner','PartnersController@create');
Route::get('editpartner/{id}','PartnersController@edit');
Route::get('deletepartner/{id}','PartnersController@destroy');
Route::post('partnersave','PartnersController@store');
Route::post('partnerupdate','PartnersController@update');
//Customers Routes
Route::get('customers','CustomerController@index');
Route::get('newcustomer','CustomerController@create');
Route::get('editcustomer/{id}','CustomerController@edit');
Route::get('deletecustomer/{id}','CustomerController@destroy');
Route::post('customersave','CustomerController@store');
Route::post('customerupdate','CustomerController@update');
});

<?php

/*
|--------------------------------------------------------------------------
| La table de routage
|--------------------------------------------------------------------------
|
| On peut définir une route en passant une fonction anonyme ou
| une chaine de caractère pointant vers une fonction à executer
| à l'intérieur d'un contrôleur
|
*/

Route::get('/', function()
{
	return View::make('home');
});
Route::get('/login', function()
{
    return Redirect::to('/');
});
Route::get('/caccauette/inscription', 'CaccauetteController@inscriptionIndex');
/*
Route::get('/api/articles/latest', 'ArticleController@getLatest');
Route::get('/api/articles/top', 'ArticleController@getTop');
Route::get('/api/article/:id', 'ArticleController@getArticle');
Route::post('/api/article/new', 'ArticleController@createArticle');
Route::post('/api/article/:id', 'ArticleController@updateArticle');*/
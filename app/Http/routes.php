<?php
use App\Article;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', function () {
  	$articles = Article::all();
  	return view('articles', ['articles' => $articles]);
});

Route::get('article/{article}', function (Article $article) {
	//$article = Article::find($id);
	return view('article', ['article' => $article]);
});


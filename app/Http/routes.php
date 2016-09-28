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

Route::get('article/{article}', function (Article $article) {
	//$article = Article::find($id);
	return view('article', ['article' => $article]);
});

Route::get('/articles', 'ArticleController@all');
Route::get('/add', 'ArticleController@add');
Route::post('/addArticle', 'ArticleController@addArticle');
Route::get('edit/{article}', function (Article $article) {
	return view('edit', ['article' => $article]);
});
Route::post('/editArticle/{article}', 'ArticleController@editArticle');

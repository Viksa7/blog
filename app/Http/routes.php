<?php
use App\Article;
use App\User;

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
Route::get('/home', 'HomeController@index');
Route::group(['middleware' => 'auth'], function () {
	Route::get('/articles', 'ArticleController@all');
	Route::get('article/{article}', function (Article $article) {
		return view('article', ['article' => $article]);
	});
	Route::post('/editArticle/{article}', 'ArticleController@editArticle');
	Route::get('/add', 'ArticleController@add');
	Route::post('/addArticle', 'ArticleController@addArticle');
	Route::get('edit/{article}', function (Article $article) {
		return view('edit', ['article' => $article]);
	});
});

Route::get('/test', function () {
	$article = Article::find(1);
    return $article->user;

    $user = User::find(1);
    return $user->articles;
});
Route::auth();

////////////////////////////
Route::resource('tests', 'TestController');
Route::get('/ajax','AjaxController@index');

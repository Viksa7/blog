<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Article;
use DB;
use App\Comment;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    /**public function index()
    {

        return view('home');
    }
    */
    public function index(Request $request) {
        $article = DB::select('SELECT articles.id, articles.title, COUNT(comments.id) AS total FROM articles LEFT JOIN comments ON comments.article_id = articles.id GROUP BY articles.id, articles.title ORDER BY COUNT(comments.id) DESC LIMIT 3');
        return view('home', ['articles' => $article]);
    }
}

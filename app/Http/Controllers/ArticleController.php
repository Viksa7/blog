<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;

class ArticleController extends Controller
{
    public $arr = [
        'title' => 'required|unique:articles|max:255',
        'body' => 'required|max:255',
        'name' => 'required',
    ];

    public function all() {
        $articles = Article::paginate(5);
  	    return view('articles', ['articles' => $articles]);
    }

    public function add() {
    	return view('add');
    }

    public function addArticle(Request $request) {
        $this->validate($request, $this->arr);

        $article = new Article;

        $article->name = $request->input('name');
		$article->title = $request->input('title');
		$article->body = $request->input('body');
		$article->author = $request->input('author');

        $article->save();

        //dd($request->input('name1', 'default'));
    	//dd($request->all());
    	return redirect('/article/' . $article->id);
	}

    public function editArticle(Article $article, Request $request) {
        //dd($article->name);
        //dd($request->all());
        //$article = Article::find($id);
        $this->validate($request, $this->arr);

        $article->name = $request->input('name');
        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->author = $request->input('author');
        
        $article->save();

        return redirect('/article/' . $article->id);
    }
}

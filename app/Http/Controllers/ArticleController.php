<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;
use App\Comment;
use Auth;

class ArticleController extends Controller
{
    public $arr = [
        'title' => 'required|unique:articles|max:255',
        'body' => 'required|max:255',
        'name' => 'required',
    ];

    public function article(Article $article) {
        return view('article', ['article' => $article, 'comments' => $article->comments]);
    }

    public function all(Request $request) {
        $search = $request->input('search');
        $articles = Article::where('title', 'LIKE', '%' . $search . '%')->orderBy('id')->paginate(5); 
  	    return view('articles', ['articles' => $articles, 'search' => $search]);
    }

    public function search(Request $request) {
        $search = $request->input('search');
        $articles = Article::where('title', 'LIKE', '%' . $search . '%')->orderBy('id')->paginate(5); 
        return view('search', ['articles' => $articles, 'search' => $search]);
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
        
    	return redirect('/article/' . $article->id);
	}

    public function editArticle(Article $article, Request $request) {
        $this->validate($request, $this->arr);

        $article->name = $request->input('name');
        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->author = $request->input('author');
        
        $user = Auth::user();
        $user->articles()->save($article);

        return redirect('/article/' . $article->id);
    }
}

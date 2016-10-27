<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Comment;
use App\Article;
use Auth;

class CommentController extends Controller
{
    public function addComment($id, Request $request) {
        $comment = new Comment;
        $comment->body = $request->input('body');


        $comment->article_id = $id;
        $comment->user_id = Auth::user()->id;
        
        //$user = Auth::user();
        //$user->comments()->save($comment);
        
        //$article = Article::find($id);
        //$article->comments()->save($comment);
        
        $comment->save();

        return redirect('/article/' . $id);
    }

    public function all(Request $request) {
        $search = $request->input('search');
        $articles = Article::where('title', 'LIKE', '%' . $search . '%')->orderBy('id')->paginate(5); 
        return view('articles', ['articles' => $articles, 'search' => $search]);
    }
}

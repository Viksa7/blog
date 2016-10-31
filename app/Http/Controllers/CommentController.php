<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Comment;
use App\Article;
use Auth;

class CommentController extends Controller
{
    public $arr = [
        'body' => 'required|max:255',
    ];

    public function addComment($id, Request $request) {
        $comment = new Comment;
        $comment->body = $request->input('body');

        $comment->article_id = $id;
        $comment->user_id = Auth::user()->id;
        
        $comment->save();

        return redirect('/article/' . $id)->with('status', 'Comment added!');
    }

}

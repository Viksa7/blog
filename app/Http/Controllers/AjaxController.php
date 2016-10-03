<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;

class AjaxController extends Controller {
   public function index(Request $request){
     	$search = $request->input('search');
        $articles = Article::where('title', 'LIKE', '%' . $search . '%')->orderBy('id')->paginate(5); 
  	    return view('ajax', ['articles' => $articles, 'search' => $search]);
      	//return response()->json(array('msg'=> $msg), 200);
   }
}

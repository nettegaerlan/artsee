<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use \App\Article;
Use \App\Categrory;

class GeneralController extends Controller
{
    public function showAccessDeniedPage() {
    	return view("access_denied");
    }


    public function showArticles() {
    	$articles = Article::all();
    	return view("catalog", compact('articles'));
    	return $articles;
    }


    public function showProfilePage() {
    	return view("profile");
    }

    public function viewArticle($id){
    	$article = Article::find($id);
    	return view("article_view",compact("article"));
    }
}

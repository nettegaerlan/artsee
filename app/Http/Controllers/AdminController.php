<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Article;
use \App\Category;
use Session;
use Auth;
use DB;

class AdminController extends Controller
{
		public function showArticles() {
    	return view("catalog");
    }

    public function showDashboardPage() {
        $articles = Article::all();
        $categories = Category::all();
        return view('dashboard',compact('articles','categories'));
    }



    public function showNewArticleForm(){
    	return view('add_article_form');
    }

    public function saveArticle(Request $request){
    	$rules = array(
    		"title" => "required",
    		"content" => "required",
    		"category" => "required",
    		"image_cover" => "required|image|mimes:jpeg,png,jpg,gif,svg,|max:2048",	
    	);


    	$this->validate($request,$rules);

    	$article = new Article;
    	$article->title = $request->title;
    	$article->content = $request->content;
    	$image = $request->file("image_cover");
    	$image_name = time().".".$image->getClientOriginalExtension();
    	$destination = "images/";
    	$image->move($destination.$image_name);
    	$article->image_cover = $destination.$image_name;
    		$article->category_id = $request->category;


    	$article->save();

    	Session::flash('message','Article Add Successfully');
    	return redirect('catalog');
    }

   public function showEditForm($id){
        $article = Article::find($id);
        
        return view("/edit_article",compact("article"));
     }

     public function editArticle($id, Request $request){
        $article = Article::find($id);

        $rules = array(
            "title"=>"required",
            "content"=>"required",
            "category"=>"required",
            'image_cover'=>"required|image|mimes:jpeg,png,jpg,gif,svg|max:2048"
        );

        $this->validate($request, $rules);

        $article->title = $request->title;
        $article->content = $request->content;
        if($request->file("image_cover")!=null){
            $image= $request->file("image_cover");
            $image_name = time().".".$image->getClientOriginalExtension();
            $destination = "images/";
            $image->move($destination, $image_name);
            $article->image_cover = $destination.$image_name;
        }
        $article->save();
        Session::flash("message","Article Edited Successfully!");
            return redirect("/catalog");
     }

    public function deleteArticle($id){
        $article = Article::find($id);
        $article->delete();
        return redirect("/dashboard");

    }
}

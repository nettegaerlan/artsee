<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Article;
use Auth;
use DB;

class UserController extends Controller
{
    public function addReview($id, Request $request){
        $article = Article::find($id);//finds the book to be reviewed
        $user = Auth::user();//gets the currently logged in user, meaning there needs to be as user logge in before a review can be made.

        $article->reviewedBy()->attach($user->id, ["review"=>$request->review]);
        //INSERT INTO reviews (book_id, user_id , review)
        //VALUES($article->id, $user->id, $request->review)
        //look for the book call  the methos that links to books and users attach the user_id and the pivot content it automatically saves  the item.

        //OR

        // $user->reviewed()->attach($id, ["review"=>$request->review]);
        return redirect("/catalog/article/$id");

    }

    public function editReview($id, Request $request ){
        DB::table("reviews")->where("id", $id)->update(["review"=>$request->review]);
        return redirect()->back();
    }


      /*  public function deleteReview($id){
           // DB::table
            Auth::user()->reviewed()->wherePivot("id", $id)->detach();
            return redirect()->back();
        }*/
        
    public function deleteReview($articleid, $reviewid){
        $article = Article::find($articleid);
        $article->reviewedBy()->wherePivot("id", $reviewid)->detach();

        return redirect()->back();
    }

	public function savedCollection($id){
	    $user_id = Auth::user()->id;
	    $article_id = $id;
	    $article = Article::find($id);

	    //TODO: 
	    //set up the relation between user and book via the book_user_table

	    $article->ownedBy()->attach($user_id); 
	    return redirect("/catalog/article/$id");
	}
    
    public function showCollection(){
        return view('saved_articles');
    }

     public function showProfile() {
       return view('profile');
    }

    public function editUserProfile($id, Request $request){
       $user = User::find($id);
        $rules = array(
            "firstname"=>"required",
            "lastname"=>"required",
            "username"=>"required",

            "email"=>"required",
            "password"=>"required",
            'profile_image'=>"required|image|mimes:jpeg,png,jpg,gif,svg|max:2048"
        );

        $this->validate($request, $rules);

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        if($request->file("profile_image")!=null){
            $image= $request->file("profile_image");
            $image_name = time().".".$image->getClientOriginalExtension();
            $destination = "images/";
            $image->move($destination, $image_name);
            $article->image_cover = $destination.$image_name;
        }
        $article->save();
        Session::flash("message","Profile Edited Successfully!");
            return redirect("/profile");
     }

}

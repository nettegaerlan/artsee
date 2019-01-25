<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public function category(){
    	return $this->belongsTo('\App\Category');
    }

    public function get_short_created_at()
  	{
	    $date = $this->get_attribute('created_at');
	   	if (is_string($date)){
	   		$dateObject = DateTime::createFromFormat('Y-m-d H:i:s', $date);
	   		return $dateObject->format('m-d-Y');
	   	}
    	return $date;
	}

     public function reviewedBy(){
        return $this->belongsToMany("\App\User","reviews")//table
        ->withPivot("id","review")->withTimestamps();//column name
        //by adding a second argument to belongsToMany, we override the convention of the table it's going to look at.

        //$this->belongsToMany("\App\User");
        //this assumes that laravel looks for a table call_user
    }

    public function ownedBy(){
        return $this->belongsToMany("\App\User")->withTimestamps();
    }

}

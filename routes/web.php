<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');

/*================ GUESTS ================*/
Route::get('/denied','GeneralController@showAccessDeniedPage');
Route::get('/catalog','GeneralController@showArticles');
Route::get('/catalog/article/{id}','GeneralController@viewArticle');



/*================ USERS ================*/
Route::middleware("user")->group(function() {
	Route::get('/profile','UserController@showProfile');
	Route::post('/catalog/{id}/addReview','UserController@addReview');
	Route::patch('/catalog/editreview/{id}','UserController@editReview');

	Route::get('/catalog/deletereview/{articleid}/{reviewid}','UserController@deleteReview');
	Route::get('/catalog/unsave_articles/{id}/{userid}','UserController@unsaveCollection');

	Route::get('/catalog/saved_article/{id}','UserController@savedCollection');
	Route::get('/saved_articles','UserController@showCollection');
	Route::patch('/edit_profile/{id}','UserController@editUserProfile');




});







/*================ ADMIN ================*/
Route::middleware("admin")->group(function() {
	Route::get('/dashboard', 'AdminController@showDashboardPage');
	Route::get("/admin/new_book","AdminController@showNewArticleForm");
	Route::post("/admin/saveArticle","AdminController@saveArticle");

	Route::get('/admin/delete/{id}','AdminController@deleteArticle');


	Route::get("/edit/{id}", "AdminController@showEditForm");
	Route::patch("/edit/{id}", "AdminController@editArticle");




});




/*================ AUTH ================*/
Route::middleware("auth")->group(function() {
	
});





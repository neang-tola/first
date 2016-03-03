<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' =>['web']], function () {
	Route::get('inter-backend', ['as' => 'internal.login', 'uses' => 'Auth\AuthController@internalLogin']);
	Route::post('inter-login', ['as' => 'internal.checklogin', 'uses' => 'Auth\AuthController@internalCheckUser']);
	Route::get('inter-logout', ['as' => 'internal.logout', 'uses' => 'Auth\AuthController@internalLogout']);
});
/* Backend Internal User */
Route::group(['prefix' => 'internal-bkn', 'middleware' => ['web','auth.admin']], function () {
    Route::get('/dashboard', ['as' => 'admin.dashboard', 'uses' => 'BackendController@getDashboard']);

    Route::get('/manage-menu', ['as' => 'admin.menu.list', 'uses' => 'BackendMenuController@index']);
    Route::get('/create-menu', ['as' => 'admin.menu.create', 'uses' => 'BackendMenuController@create']);
    Route::post('/insert-menu', ['as' => 'admin.menu.insert', 'uses' => 'BackendMenuController@store']);
    Route::get('/edit-menu', ['as' => 'admin.menu.edit', 'uses' => 'BackendMenuController@edit']);
    Route::post('/update-menu', ['as' => 'admin.menu.update', 'uses' => 'BackendMenuController@update']);
    Route::post('/search-menu', ['as' => 'admin.menu.search', 'uses' => 'BackendMenuController@search']);
    Route::get('/delete-menu', ['as' => 'admin.menu.delete', 'uses' => 'BackendMenuController@distroy']);

    Route::get('/manage-article', ['as' => 'admin.article.list', 'uses' => 'BackendArticleController@index']);
    Route::get('/create-article', ['as' => 'admin.article.create', 'uses' => 'BackendArticleController@create']);
    Route::post('/insert-article', ['as' => 'admin.article.insert', 'uses' => 'BackendArticleController@store']);
    Route::get('/edit-article', ['as' => 'admin.article.edit', 'uses' => 'BackendArticleController@edit']);
    Route::post('/update-article', ['as' => 'admin.article.update', 'uses' => 'BackendArticleController@update']);
    Route::post('/search-article', ['as' => 'admin.article.search', 'uses' => 'BackendArticleController@search']);
    Route::get('/delete-article', ['as' => 'admin.article.delete', 'uses' => 'BackendArticleController@distroy']);

    Route::get('/manage-contact', ['as' => 'admin.contact.list', 'uses' => 'BackendArticleController@contact']);
    Route::post('/update-contact', ['as' => 'admin.contact.update', 'uses' => 'BackendArticleController@contactUpdate']);

    Route::get('/manage-category', ['as' => 'admin.category.list', 'uses' => 'BackendCategoryController@index']);
    Route::get('/create-category', ['as' => 'admin.category.create', 'uses' => 'BackendCategoryController@create']);
    Route::post('/insert-category', ['as' => 'admin.category.insert', 'uses' => 'BackendCategoryController@store']);
    Route::get('/edit-category', ['as' => 'admin.category.edit', 'uses' => 'BackendCategoryController@edit']);
    Route::post('/update-category', ['as' => 'admin.category.update', 'uses' => 'BackendCategoryController@update']);
    Route::post('/search-category', ['as' => 'admin.category.search', 'uses' => 'BackendCategoryController@search']);
    Route::get('/delete-category', ['as' => 'admin.category.delete', 'uses' => 'BackendCategoryController@distroy']);

	Route::get('/manage-slideshow', ['as' => 'admin.slideshow.list', 'uses' => 'BackendSlideshowController@index']);
    Route::post('/insert-slideshow', ['as' => 'admin.slideshow.insert', 'uses' => 'BackendSlideshowController@store']);

	Route::get('/manage-gallery', ['as' => 'admin.gallery.list', 'uses' => 'BackendGalleryController@index']);
    Route::get('/create-gallery', ['as' => 'admin.gallery.create', 'uses' => 'BackendGalleryController@create']);
    Route::post('/insert-gallery', ['as' => 'admin.gallery.insert', 'uses' => 'BackendGalleryController@store']);
    Route::get('/edit-gallery', ['as' => 'admin.gallery.edit', 'uses' => 'BackendGalleryController@edit']);
    Route::post('/update-gallery', ['as' => 'admin.gallery.update', 'uses' => 'BackendGalleryController@update']);
    Route::post('/search-gallery', ['as' => 'admin.gallery.search', 'uses' => 'BackendGalleryController@search']);
    Route::get('/delete-gallery', ['as' => 'admin.gallery.delete', 'uses' => 'BackendGalleryController@distroy']);
});

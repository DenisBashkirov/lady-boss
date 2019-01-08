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

Route::get('/', ['uses'=>'PagesController@home', 'as'=>'home']);
Route::get('/services', ['uses'=>'PagesController@categories', 'as'=>'categories']);
Route::get('/services/{category}', ['uses'=>'PagesController@category', 'as'=>'category']);
Route::get('/programs/{category}', ['uses'=>'PagesController@programs', 'as'=>'programs']);
Route::get('/certificates', ['uses'=>'PagesController@certificates', 'as'=>'certificates']);
Route::get('/testimonials', ['uses'=>'PagesController@testimonials', 'as'=>'testimonials']);
Route::get('/gallery', ['uses'=>'PagesController@gallery', 'as'=>'gallery']);
Route::get('/payment_conditions', ['uses'=>'PagesController@payment_conditions', 'as'=>'payment_conditions']);

Route::post('/thanks/testimonial', ['uses'=>'PagesController@thanks', 'as'=>'thanks.testimonial']);

Route::get('/testimonial/{id}/publish', ['uses'=>'TestimonialsController@publish', 'as'=>'testimonial.publish']);


Route::group(['middleware' => 'auth'], function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', ['uses' => 'Admin\PagesController@index', 'as' => 'dashboard']);
        Route::resource('/testimonials', 'Admin\TestimonialsController');
        Route::resource('/gallery', 'Admin\GalleryItemsController');
        Route::resource('/users', 'Admin\UsersController')->middleware('check_rights:manage-users');
        Route::resource('/categories', 'Admin\CategoriesController')->middleware('check_rights:manage-categories');
    });
});
Auth::routes();

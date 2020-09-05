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
use Wink\WinkPost;

Route::get('/', 'BlogController@index')->name('home');

//blog List
Route::get('/entertainment', 'EntertainmentController@index')->name('entertainment');
Route::get('/fashion', 'FashionController@index')->name('fashion');
Route::get('/food', 'FoodController@index')->name('food');
Route::get('/music', 'MusicController@index')->name('music');
Route::get('/politics', 'PoliticController@index')->name('politics');
Route::get('/sport', 'SportController@index')->name('sport');
Route::get('/technology', 'TechnologyController@index')->name('technology');
Route::get('/travel', 'TravelController@index')->name('travel');

// Route::get('contact-us','ContactUsController@index');
Route::post('contact-us','ContactUsController@handleForm');


Route::get('/articles', 'BlogController@index')->name('articles');
Route::get('/about', 'BlogController@about')->name('about');
Route::get('/contact', 'BlogController@contact')->name('contact');
Route::get('/articles/{slug}', 'BlogController@findPostBySlug')->name('blog.post');
Route::get('/fresh', 'BlogController@updateIndexedArticles')->name('index.json');

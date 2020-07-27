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

Route::get('/', 'LandingpageController@index')->name('landingpage');

Route::get('/about', 'LandingpageController@about')->name('about.us');
Route::get('/why_choose_us', 'LandingpageController@whyUs')->name('why.us');

Route::get('/Project_cargo', 'LandingpageController@cargo')->name('project.cargo');
Route::get('/OEM-Agency', 'LandingpageController@agency')->name('oem.agency');
Route::get('/Consultancy', 'LandingpageController@consultancy')->name('consultancy');

//routes for contact us
Route::get('/Contact-us', 'LandingpageController@contact')->name('contact.us');
Route::post('/contact-store', 'LandingpageController@storeContact')->name('store.contact');

//for news subscription
Route::post('/store-subscription', 'LandingpageController@storeSubscription')->name('store.subscription');

//for comment
Route::post('/store-comment/{postId}', 'LandingpageController@comment')->name('comment');
Route::post('/store-comment/{postId}/{commentId}', 'LandingpageController@commentRef')->name('ref.comment.now');


//routes for services
Route::get('/services', 'ServicesController@index')->name('services');
Route::get('/Local_&_International_Freight_Forwarding', 'ServicesController@forwarding')->name('forwarding');
Route::get('/Procurement_and_supply_chain_management', 'ServicesController@procurements')->name('procurement');
Route::get('/Equipment_&_Machinery_Sourcing', 'ServicesController@sourcing')->name('sourcing');
Route::get('/Information_Technology_Services', 'ServicesController@technology')->name('technology');

//these are the routes for the blog
Route::get('/{slug}/single', 'BlogsController@show')->name('blogs.show');
Route::get('/blogs', 'BlogsController@index')->name('blogs.index');
Route::get('/search-post', 'BlogsController@search')->name('search.posts');
Route::get('/file/download/{id}', 'BlogsController@download')->name('downloadFile');

//route for featured project
Route::get('/{name}/{id}/project', 'LandingpageController@projects')->name('project.show');

//routes for Quote
Route::post('/store-quote', 'QuoteController@store')->name('quote.store');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

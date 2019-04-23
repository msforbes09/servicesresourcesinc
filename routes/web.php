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
Route::get('/', 'MainController@index')->name('main');

Auth::routes();

Route::get('pagenotfound', 'AuthController@page404')->name('page404');

Route::get('admin/login', 'AuthController@index')->name('admin.login');

//Route::get('/test', 'TestController@index')->name('test');
//Route::get('/test2', 'TestController@test2')->name('test2');


Route::group(['middleware' => 'auth'], function () {
	Route::get('admin/hero', 'HeroController@index')->name('hero.index');
	Route::get('admin/hero/{id}/edit', 'HeroController@edit')->name('hero.edit');
	Route::post('admin/hero/{id}', 'HeroController@postUpdate')->name('hero.update');

	Route::get('admin/card', 'CardController@index')->name('card.index');
	Route::get('admin/card/{id}/edit', 'CardController@edit')->name('card.edit');
	Route::post('admin/card/{id}', 'CardController@postUpdate')->name('card.update');

	Route::get('admin/about', 'AboutController@index')->name('about.index');
	Route::get('admin/about/{id}/edit', 'AboutController@edit')->name('about.edit');
	Route::post('admin/about/{id}', 'AboutController@postUpdate')->name('about.update');

	Route::get('admin/feature', 'FeatureController@index')->name('feature.index');
	Route::get('admin/feature/{id}/edit', 'FeatureController@edit')->name('feature.edit');
	Route::post('admin/feature/{id}', 'FeatureController@postUpdate')->name('feature.update');

	Route::get('admin/job', 'JobController@index')->name('job.index');
	Route::get('admin/job/{id}/edit', 'JobController@edit')->name('job.edit');
	Route::post('admin/job/{id}', 'JobController@postUpdate')->name('job.update');

	Route::get('admin/service', 'ServiceController@index')->name('service.index');
	Route::get('admin/service/{id}/edit', 'ServiceController@edit')->name('service.edit');
	Route::post('admin/service/{id}', 'ServiceController@postUpdate')->name('service.update');

	Route::get('admin/image', 'ImageController@index')->name('image.index');
	Route::get('admin/image/{id}/edit', 'ImageController@edit')->name('image.edit');
	Route::post('admin/image/{id}', 'ImageController@postUpdate')->name('image.update');

	Route::resource('admin/branch', 'BranchController');
});






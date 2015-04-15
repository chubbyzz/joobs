<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
 */

Route::get('/', ["as" => "root", "uses" => "JobsController@index"]);

Route::controller("/users", "UserController", [
	"getLogin" => "users.login",
	"postLogin" => "users.login.post",
	"getRegister" => "users.register",
	"postRegister" => "users.register.post",
	"getChoice" => "users.choice",
	"getActive" => "users.active",
]);

Route::controller("/company", "CompanyController", [
	"getRegister" => "company.register",
]);

Route::controller("/person", "PersonController", [
	"getRegister" => "person.register",
]);

/*
- Rotas que so podem ser usadas por pessoas que estiverem logadas
 */
Route::resource('jobs', 'JobsController', ['only' => ['index', 'show']]);

Route::group(['before' => 'auth'], function () {
	Route::get('jobs/applay/{slug}', ['as' => 'jobs.applay', 'uses' => 'JobsController@applay']);
});

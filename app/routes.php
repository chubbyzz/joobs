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

Route::get('/', ["as" => "root", function()
{
	return View::make('hello');
}], "root");

Route::controller("/users", "UserController", [
    "getLogin" => "users.login",
    "postLogin" => "users.login.post",
    "getRegister" => "users.register",
    "postRegister" => "users.register.post",
    "getChoice" => "users.choice",
    "getActive" => "users.active",
]);

Route::group(['before' => 'auth'], function(){
    Route::get('/test', function()
    {
       dd('teste');
    });

});
Route::controller("/company", "CompanyController", [
    "getRegister" => "company.register"
]);

Route::controller("/person", "PersonController", [
    "getRegister" => "person.register"
]);


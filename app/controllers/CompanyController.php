<?php

class CompanyController extends \BaseController {

	public function  create(){
        return View::make('company.create');
	}

    public function  store(){
        $user = new User(Input::get("user"));
        $company = new Company(Input::get("company"));

        if ($user->validate() && $company->validate()) {
            $company->save();
            $company->user()->save($user);
        }else{
            $errors = implode($user->errors()->all() , '<br>') . implode($company->errors()->all() , '<br>');
            new Notification(["message" => $errors, "type" => "danger"]);
            return Redirect::back();
        }

    }
}
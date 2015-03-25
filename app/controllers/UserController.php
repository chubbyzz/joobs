<?php

class UserController extends \BaseController {

	public function getLogin() {
		return View::make("users.login");
	}
	public function postLogin() {
		if(User::login(Input::only(["email","password"], Input::get("remember")))){

			return Redirect::route("root");
		}else{
			return Redirect::back();
		}
	}

	public function getRegister() {
		return View::make("users.register");

	}
	public function postRegister() {
		$user = new User(Input::get());
		$user->saveOrShowErrors();
		return Redirect::back();
	}

	public function getChoice()
	{
		return View::make("users.choice");
	}

    public function getActive($id, $code){
        try{
            $user = User::findOrFail($id);
            $user->active($code);
			return Redirect::route("users.login");
        }
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e)
        {
            new Notification(["message" => "Usuário não encontrado", "type" => "danger"]);
			return Redirect::route("users.login");
        }
    }

	public function getMail(){
		return View::make("emails.users.active")->with(['id' => 1, 'code' => 0]);
	}
}

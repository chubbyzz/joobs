<?php

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;

class User extends BaseModel implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;
	public $autoPurgeRedundantAttributes = true;

	const SUCCESS_MESSAGE = false;

	public static $rules = array(
	    'email'                 => 'required|email|unique:users',
	    'password'              => 'required|between:4,60|confirmed',
	    'password_confirmation' 		=> 'required|between:4,60',
	);

    public static $relationsData = [
        'owner' => [self::MORPH_TO, "owner"]
    ];

	protected $fillable = array('email', 'password', 'password_confirmation');

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    public function beforeSave(){
        if($this->isDirty('password')){
            $this->password = Hash::make($this->password);
        }
        return true;
    }

    public function afterSave(){
		new Notification(["message" => "<p>Accesse o e-mail <b>" . $this->email . "</b> para aitvar a sua conta.</p>" , "type" => "success"]);
        $this->sendActiveMail();
    }

    public function sendActiveMail(){
        try{
            $sentryUser = Sentry::findUserById($this->id);
            Mail::send('emails.users.active', ["code" => $sentryUser->getActivationCode(), "id" => $this->id ], function($msg){
                $msg->to($this->email)->subject("Ative sua conta");
            });
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {

            new Notification(["message" => "Usuário não encontrado", "type" => "danger"]);
            return false;
        }
    }
    
	public static function login($credentials, $remember = false){
		try
		{
			$user = Sentry::authenticate($credentials, $remember);
			new Notification(["message" => "Bem vindo." , "type" => "success"]);
			return $user;
		}
		catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
			new Notification(["message" => "E-mail é obrigatorio.", "type" => "danger"]);
			return false;
		}
		catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		{
			new Notification(["message" => 'Senha é obrigatorio.', "type" => "danger"]);
			return false;
		}
		catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
		{
			new Notification(["message" => 'Usuário ou senha incorretos, tente novament.', "type" => "danger"]);
			return false;
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
			new Notification(["message" => 'Usuário ou senha incorretos, tente novament.', "type" => "warning"]);
			return false;
		}
		catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
		{
			new Notification(["message" => 'Usuário não esta ativo.', "type" => "warning"]);
			return false;
		}
		catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
		{
			new Notification(["message" => 'Usuário esta suspenso.', "type" => "danger"]);
			return false;
		}
		catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
		{
			new Notification(["message" => 'Usuário esta banido.', "type" => "danger"]);
			return false;
		}
	}

    public function active($code){
        try
        {
            $sentryUser = Sentry::findUserById($this->id);
            if ($sentryUser->attemptActivation($code))
            {
                new Notification(["message" => "Usuário foi ativado com successo", "type" => "success"]);
                return true;
            }
            else
            {
                new Notification(["message" => "Código invalido", "type" => "danger"]);
                return false;
            }
        }
        catch (Cartalyst\Sentry\Users\UserAlreadyActivatedException $e)
        {
            new Notification(["message" => "Usuário já está ativo", "type" => "warning"]);
            return false;
        }
		catch(\Cartalyst\Sentry\Users\UserNotFoundException $e){
			new Notification(["message" => "Usuário não encontrado", "type" => "danger"]);
			return false;
		}

    }

}

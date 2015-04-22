<?php

class BaseModel extends Ardent {

	protected $defaultDates = ["created_at", "updated_at", "deleted_at"];
	protected $customDates = [];
	protected $created_at;

	const SUCCESS_MESSAGE = true;

	public function formatDateTime($field, $format = "date") {
		if (is_a($this->getAttribute($field), "Carbon\Carbon")) {
			if ($format == "date time") {
				$format = Config::get("app.locale_type_date")[App::getLocale()];
			} else if ($format == "date") {
				$format = substr(Config::get("app.locale_type_date")[App::getLocale()], 0, 5);
			}
			return $this->getAttribute($field)->format($format);
		} else {
			throw new Exception("field is not a Carbon object", 1);

		}
	}

	public function dateTime($field) {
		return $this->formatDateTime($field, "date time");
	}

	public function date($field) {
		return $this->formatDateTime($field);
	}

	public function saveOrShowErrors(array $rules = Array(), array $customMessages = Array(), array $options = Array(), Closure $beforeSave = NULL, Closure $afterSave = NULL)
	{
		if($this->save($rules, $customMessages, $options, $beforeSave ,$afterSave )){
			if(static::SUCCESS_MESSAGE){
				new Notification(["message" => "Salvo com sucesso", "type" => "success"]);
			}
			return true;
		}else{
			$errors = "<p>".implode("</p><p>", $this->errors()->all())."</p>" ;
			new Notification(["message" => $errors, "type" => "danger"]);
			return false;
		}
	}



	public static $customMessages = [
		"accepted"             => "O campo :attribute deve ser aceito.",
		"active_url"           => "O campo :attribute não contém um URL válido.",
		"after"                => "O campo :attribute deverá conter uma data posterior a :date.",
		"alpha"                => "O campo :attribute deverá conter apenas letras.",
		"alpha_dash"           => "O campo :attribute deverá conter apenas letras, números e traços.",
		"alpha_num"            => "O campo :attribute deverá conter apenas letras e números .",
		"array"                => "O campo :attribute precisa ser um conjunto.",
		"before"               => "O campo :attribute deverá conter uma data anterior a :date.",
		"between"              => "O campo :attribute deverá ter um valor entre :min - :max caracteres.",
		"boolean"              => "O campo :attribute deverá ter o valor verdadeiro ou falso.",
		"confirmed"            => "A confirmação para o campo :attribute não coincide.",
		"date"                 => "O campo :attribute não contém uma data válida.",
		"date_format"          => "A data indicada para o campo :attribute não respeita o formato :format.",
		"different"            => "Os campos :attribute e :other deverão conter valores diferentes.",
		"digits"               => "O campo :attribute deverá conter :digits dígitos.",
		"digits_between"       => "O campo :attribute deverá conter entre :min a :max dígitos.",
		"email"                => "O campo :attribute não contém um endereço de email válido.",
		"exists"               => "O valor selecionado para o campo :attribute é inválido.",
		"image"                => "O campo :attribute deverá conter uma imagem.",
		"in"                   => "O campo :attribute não contém um valor válido.",
		"integer"              => "O campo :attribute deverá conter um número inteiro.",
		"ip"                   => "O campo :attribute deverá conter um IP válido.",
		"max"                  => "O campo :attribute não deverá conter um valor superior a :max.",
		"mimes"                => "O campo :attribute deverá conter um arquivo do tipo: :values.",
		"min"                  => "O campo :attribute deverá ter um valor superior ou igual a :min.",
		"not_in"               => "O campo :attribute contém um valor inválido.",
		"numeric"              => "O campo :attribute deverá conter um valor numérico.",
		"regex"                => "O formato do valor para o campo :attribute é inválido.",
		"required"             => "É obrigatória a indicação de um valor para o campo :attribute.",
		"required_if"          => "É obrigatória a indicação de um valor para o campo :attribute quando o valor do campo :other é igual a :value.",
		"required_with"        => "É obrigatória a indicação de um valor para o campo :attribute quando :values está presente.",
		"required_with_all"    => "É obrigatória a indicação de um valor para o campo :attribute quando um dos :values está presente.",
		"required_without"     => "É obrigatória a indicação de um valor para o campo :attribute quanto :values não está presente.",
		"required_without_all" => "É obrigatória a indicação de um valor para o campo :attribute quando nenhum dos :values está presente.",
		"same"                 => "Os campos :attribute e :other deverão conter valores iguais.",
		"size"                 => "O campo :attribute deverá conter o valor :size.",
		"timezone"             => "O campo :attribute deverá ter um fuso horário válido.",
		"unique"               => "O valor indicado para o campo :attribute já se encontra registrado.",
		"url"                  => "O formato do URL indicado para o campo :attribute é inválido.",
		"alpha_num_spaces"     => "O :attribute deve conter apenas letras, números e espaços.",
		"alpha_spaces"         => "O :attribute deve conter apenas letras e espaços.",
		"min_words"            => "O :attribute deve conter no mínimo :min_words palavras",
	];
}

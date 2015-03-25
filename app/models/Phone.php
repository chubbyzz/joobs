<?php

class Phone extends \BaseModel {
	protected $fillable = ["kind", "phone", "phoneble_type", "phoneble_id",];

	protected static $rules = [
		"kind" => "required",
		"phone" => "required|integer",
		"phoneble_type" => "required",
		"phoneble_id" => "required",
	];


	public static $relationsData = [
		'owner' => [self::MORPH_TO, "phoneabble"]
	];
}
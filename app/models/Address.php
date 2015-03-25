<?php

class Address extends \BaseModel {
	protected $fillable = ["country", "state", "city", "street", "number"];

	protected static $rules = [
		"country" => "required|min:3",
		"state" => "required|size:2",
		"city" => "required|min:3",
		"street" => "required|min:3",
		"number" => "required|integer",
	];

	public static $relationsData = [
		'owner' => [self::MORPH_TO, "addressabble"]
	];
}
<?php

class Tool extends \BaseModel {
	protected $fillable = ["name","toolable_id","toolable_type","icon",];

	public static $rules = [
		"name" => "required",
		"icon" => "required",
	];

	public static $relationsData = [
		'owner' => [self::MORPH_TO, "toolabble"]
	];
}
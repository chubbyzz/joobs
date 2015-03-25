<?php

class Experience extends \BaseModel {
	protected $fillable = [];

	public static $rule = [
		"company" => "required|min:3|max:255",
		"start" => "required|date",
		"end" => "date",
		"description" => "min:3",
		"candidate_id" => "required|integer",
	];


	public static $relationsData = [
		'candidate' => [self::BELONGS_TO, "Candidate"]
	];
}
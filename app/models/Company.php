<?php

class Company extends BaseModel {
	protected $fillable = [
		'name',
		'description',
		'midia',
		'phone',
		'map',
	];
	public static $rules = [
		'name' => 'required|max:255',
		'midia' => 'required|max:255',
		'phone' => 'required|max:255',
	];
	public static $relationsData = [
		'user' => [self::MORPH_ONE, 'User', 'name' => 'owner'],
	];
}
<?php

use Nicolaslopezj\Searchable\SearchableTrait;

class Job extends \Eloquent {
	use SearchableTrait;

	protected $searchable = [
//		'title', 'location', 'requirements', 'type'
		'columns' => [
			'jobs.title' => 10,
			'jobs.location' => 8,
			'jobs.requirements' => 5,
			'jobs.type' => 10,
		]
	];

	protected $fillable = ['title', 'description', 'location', 'number', 'salary', 'requirements', 'benefits', 'type', 'form'];

	public static $rule = [
		"title" => "required|min:3|max:255|unique",
		"description" => "required|min:3",
		"location" => "required|min:3",
		"number" => "integer",
		"salary" => "numeric",
		"requirements" => "min:3",
		"benefits" => "min:3",
		"type" => "in:clt:pj",
		"form" => "in:remote:attendance",
	];

	public function getFormAttribute($form) {
		return trans('job.' . $form);
	}

	public function setTitleAttribute($title) {
		$this->attributes['slug'] = Str::slug($title, '-');
		$this->attributes['title'] = $title;
	}

	public function salaryToString() {
		$salary = $this->salary;

		if (is_null($salary)) {
			return 'N/A';
		} else if ($salary == 0) {
			return 'Não remunerado';
		} else {
			return $salary;
		}
	}
	public function numberToString() {
		$number = $this->number;
		return $number == 0 ? 'N/A' : $number;
	}
}

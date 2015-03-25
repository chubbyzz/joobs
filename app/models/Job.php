<?php

class Job extends \Eloquent {
    protected $fillable = ['title','description','location','number','salary','requirements','benefits','type','form'];

    public static $rule = [
        "title" => "required|min:3|max:255",
        "description" => "required|min:3",
        "location" => "required|min:3",
        "number" => "integer",
        "salary" => "numeric",
        "requirements" => "min:3",
        "benefits" => "min:3",
        "type" => "in:clt:pj",
        "form" => "in:remote:attendance",
    ];

//    public static $relationsData = [
//    ];
}
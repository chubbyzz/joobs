<?php

class Candidate extends BaseModel{

    protected $fillable = ['name', 'last_name', 'birthdate'];

    protected static $rules = [
        "name" => "required|max:100|min:3",
        "last_name" => "required|max:255|min:3",
        "birthdate" => "required|date",
    ];

    public static $relationsData = [
        'courses' => [self::HAS_MANY, "Scholarity"],
        'experiences' => [self::HAS_MANY, "Experience"],
        'tools' => [self::MORPH_MANY, "Tool", "toolabble"],
        'address' => [self::MORPH_ONE, "Tool", "addressabble"],
        'phone' => [self::MORPH_ONE, "Tool", "phoneabble"],
    ];
}
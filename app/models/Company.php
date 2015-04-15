<?php

class Company extends user
{
    protected $fillable = [
        'name',
        'description',
        'midia',
        'phone',
        'map'
    ];
    protected $rules = [
        'name' => 'required|max:200',
        'description' => 'required',
        'midia' => 'required|max:200',
        'phone' => 'required|max:200',
        'map' => 'required|max:200'
    ];
    public static $relationsData = [
        'user' => [self::MORPH_ONE, 'User', 'name' => 'owner']
    ];
}
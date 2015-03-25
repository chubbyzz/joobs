<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ToolTableSeeder extends Seeder {

	public function run()
	{
		$data = [
			["name" => "amazonwebservices", "icon" => "amazonwebservices"],
			["name" => "android", "icon" => "android"],
			["name" => "angularjs", "icon" => "angularjs"],
			["name" => "appcelerator", "icon" => "appcelerator"],
			["name" => "apple", "icon" => "apple"],
			["name" => "atom", "icon" => "atom"],
			["name" => "backbonejs", "icon" => "backbonejs"],
			["name" => "bootstrap", "icon" => "bootstrap"],
			["name" => "bower", "icon" => "bower"],
			["name" => "chrome", "icon" => "chrome"],
			["name" => "codeigniter", "icon" => "codeigniter"],
			["name" => "coffeescript", "icon" => "coffeescript"],
			["name" => "css3", "icon" => "css3"],
			["name" => "debian", "icon" => "debian"],
			["name" => "dot.net dot-net", "icon" => "dot.net dot-net"],
			["name" => "drupal", "icon" => "drupal"],
			["name" => "firefox", "icon" => "firefox"],
			["name" => "foundation", "icon" => "foundation"],
			["name" => "git", "icon" => "git"],
			["name" => "grunt", "icon" => "grunt"],
			["name" => "gulp", "icon" => "gulp"],
			["name" => "html5", "icon" => "html5"],
			["name" => "illustrator", "icon" => "illustrator"],
			["name" => "inkscape", "icon" => "inkscape"],
			["name" => "java", "icon" => "java"],
			["name" => "javascript", "icon" => "javascript"],
			["name" => "jquery", "icon" => "jquery"],
			["name" => "krakenjs", "icon" => "krakenjs"],
			["name" => "laravel", "icon" => "laravel"],
			["name" => "less", "icon" => "less"],
			["name" => "linux", "icon" => "linux"],
			["name" => "mongodb", "icon" => "mongodb"],
			["name" => "moodle", "icon" => "moodle"],
			["name" => "mysql", "icon" => "mysql"],
			["name" => "nodejs", "icon" => "nodejs"],
			["name" => "oracle", "icon" => "oracle"],
			["name" => "photoshop", "icon" => "photoshop"],
			["name" => "php", "icon" => "php"],
			["name" => "postgresql", "icon" => "postgresql"],
			["name" => "python", "icon" => "python"],
			["name" => "rails", "icon" => "rails"],
			["name" => "react", "icon" => "react"],
			["name" => "ruby", "icon" => "ruby"],
			["name" => "sass", "icon" => "sass"],
			["name" => "symfony", "icon" => "symfony"],
			["name" => "travis", "icon" => "travis"],
			["name" => "trello", "icon" => "trello"],
			["name" => "ubuntu", "icon" => "ubuntu"],
			["name" => "vim", "icon" => "vim"],
			["name" => "windows 8", "icon" => "windows8"],
			["name" => "wordpress", "icon" => "wordpress"],
			["name" => "yii", "icon" => "yii"],
			["name" => "zend", "icon" => "zend"],
			];
		foreach($data as $tool)
		{
			Tool::create($tool);
		}
	}

}
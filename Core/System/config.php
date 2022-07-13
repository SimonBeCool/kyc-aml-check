<?php
class Config{
	private $config = null;
	function read($main, $sub){
		$config = [
			'mysql' => [
				'host' => 'localhost',
				'pass' => 'mysql',
				'user' => 'root',
				'data' => 'animelab_'
			],
			'routing' => [
				'template' => './AppView/Template/',
				'plugins' => './Core/Plugins/',
                'core' => './Core/System/'
			],
			'app' => [
				'404' => '',
				'css' => './AppView/css/',
				'js' => './AppView/js/',
				'images' => './AppView/images/',
				'title' => 'Document-Check | The nice way to proof files.',
				'description' => 'Document-Check is a platform to proof files easy and fast.',
			],
		];
		return $config[$main][$sub];
	}
}

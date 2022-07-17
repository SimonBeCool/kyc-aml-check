<?php
/*

    @author : Simon Bucher
    @nameof : KYC-CHECK-AML

*/

class Config{
	private $config = null;
	function read($main, $sub){
		$config = [
			'mysql' => [
				'host' => '46.140.10.35',
				'pass' => '49254975711780304925#',
				'user' => 'kyc',
				'data' => 'kyc_'
			],
			'routing' => [
				'template' => './AppView/Template/',
				'plugins' => './Core/Plugins/',
                'core' => './Core/System/'
			],
			'app' => [
				'404' => '',
				'css' => './AppView/Public/css/',
				'js' => './AppView/Public/js/',
				'images' => './AppView/Public/images/',
				'title' => 'KYC-AML-CHECK | The nice way to proof files.',
				'description' => 'KYC-AML-CHECK is a platform to proof files easy and fast.',
				'language' => 'en',
			],
		];
		return $config[$main][$sub];
	}
}

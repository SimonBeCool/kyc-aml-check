<?php
/*

    @author : Simon Bucher
    @nameof : KYC-CHECK-AML

*/

class Language{
	private $lang = null;
	function read($categorie, $sentence){
		$lang = [
			'signup' => [
				'de' => 'REGISTRIERE DICH AUF KYC-ALM-CHECK',
				'en' => 'SIGN UP ON KYC-ALM-CHECK',
			],
            'signin' => [
				'de' => 'ANMELDEN',
				'en' => 'SIGN IN',
			],
            'copyright' => [
				'de' => '© KYC-AML_CHECK 2022 von Simon Bucher',
				'en' => '© KYC-AML_CHECK 2022 by Simon Bucher',
			],
		];
		return $lang[$categorie][$sentence];
	}
}

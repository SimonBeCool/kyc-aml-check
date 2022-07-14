<?php
/*

    @author : Simon Bucher
    @nameof : KYC-CHECK-AML

*/

class Language{
	private $lang = null;
	function read($categorie, $sentence){
		$lang = [
            /* TEXT'S */
            'email' => [
				'de' => 'GEBE DEINE E-MAIL ADRESSE EIN',
				'en' => 'INPUT YOU&apos;RE-MAIL ADRESS',
			],
            'password' => [
				'de' => 'GEBE DEIN PASSWORT EIN',
				'en' => 'INPUT YOU&apos;RE PASSWORD',
			],
            'signin-area' => [
				'de' => 'ANMELDE BEREICH',
				'en' => 'SIGN-IN AREA',
			],
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
            'welcome' => [
                'de' => 'Willkommen {USERNAME}!',
				'en' => 'Welcome {USERNAME}!',
            ],
            'welcome-sub' => [
                'de' => 'Sie haben sich in KYC-AML-CHECK eingeloggt.',
                'en' => 'You&apos;ve logged in to KYC-AML-CHECK.',
            ],

            /* MENU */
            'menu-profile' => [
                'de' => 'IHR PROFIL',
                'en' => 'YOU&apos;RE PROFILE',
            ],
            'menu-home' => [
                'de' => 'STARTSEITE',
                'en' => 'HOME',
            ],
		];
		return $lang[$categorie][$sentence];
	}
}

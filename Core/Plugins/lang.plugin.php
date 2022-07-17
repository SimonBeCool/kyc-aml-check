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
			/* DASHBOARD */
			'welcome' => [
                'de' => 'Willkommen',
				'en' => 'Welcome',
            ],
            'welcome-sub' => [
                'de' => 'Sie haben sich in KYC-AML-CHECK eingeloggt.',
                'en' => 'You&apos;ve logged in to KYC-AML-CHECK.',
            ],
			'total-investors' => [
                'de' => 'INVESTOREN INSGESAMT',
                'en' => 'TOTAL INVESTORS',
            ],
            'total-issues' => [
                'de' => 'RÜCKGÄNGE INSGESAMT',
                'en' => 'TOTAL ISSUES',
            ],
			'total-projects' => [
                'de' => 'PROJEKTE INSGESAMT',
                'en' => 'TOTAL PROJECTS',
            ],
            'recent-subscriptions' => [
                'de' => 'LETZTE INVESTITIONEN',
                'en' => 'RECENT SUBSCRIPTIONS',
            ],
			'view-investors' => [
                'de' => 'alle investoren',
                'en' => 'view investors',
            ],
            'view-issues' => [
                'de' => 'alle rückgänge',
                'en' => 'view issues',
            ],
			'view-projects' => [
                'de' => 'alle projekte',
                'en' => 'view projects',
            ],

			/* YOUR PROFILE */
			'profile-text' => [
                'de' => 'DEIN PROFIL',
				'en' => 'YOUR PROFILE',
            ],
            'profile-text-sub' => [
                'de' => 'Das sind alle gesammelten Daten über Sie.',
                'en' => 'That&apos;s all data about you.',
            ],
			'account-info' => [
                'de' => 'DEINE ACCOUNT DATEN',
				'en' => 'YOUR ACCOUNT CREDENTIALS',
            ],
			'account-settings' => [
                'de' => 'DEINE ACCOUNT EINSTELLUNGEN',
				'en' => 'YOUR ACCOUNT SETTINGS',
            ],
			'firstname' => [
                'de' => 'VORNAME',
				'en' => 'FIRST NAME',
            ],
            'lastname' => [
                'de' => 'NACHNAME',
                'en' => 'LAST NAME',
            ],
			'emailadress' => [
                'de' => 'E-MAIL ADRESSE',
				'en' => 'E-MAIL ADRESS',
            ],
			'nationality' => [
                'de' => 'NATIONALITÄT',
				'en' => 'NATIONALITY',
            ],
			'lifecountry' => [
                'de' => 'DERZEITIGES LAND',
				'en' => 'LIFE COUNTRY',
            ],
			'zip' => [
                'de' => 'POSTLEITZAHL',
				'en' => 'POST CODE / ZIP',
            ],
			'city' => [
                'de' => 'STADT',
				'en' => 'CITY',
            ],
			'adress' => [
                'de' => 'WOHN ADRESSE',
				'en' => 'HOUSE ADRESS',
            ],
			'birthday' => [
                'de' => 'GEBURTSTAG',
				'en' => 'BIRTHDAY',
            ],
			'age' => [
                'de' => 'ALTER',
				'en' => 'AGE',
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
            'menu-logout' => [
                'de' => 'AUSLOGGEN',
                'en' => 'LOGOUT',
            ],
		];
		return $lang[$categorie][$sentence];
	}
}

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
				'de' => 'GEBEN SIE IHRE E-MAIL ADRESSE EIN',
				'en' => 'INPUT YOUR E-MAIL ADRESS',
			],
            'password' => [
				'de' => 'GEBEN SIE IHR PASSWORT EIN',
				'en' => 'INPUT YOURE PASSWORD',
			],
            'password-wdh' => [
				'de' => 'GEBEN SIE IHR PASSWORT ERNEUT EIN',
				'en' => 'REPEAT YOUR PASSWORD INPUT',
			],
            'investor-type' => [
				'de' => 'Was für ein Investor sind Sie ?',
				'en' => 'Which investor type are you ?',
			],
            'nationality-type' => [
				'de' => 'Welche Nationalität haben Sie ?',
				'en' => 'Which nationality do you have ?',
			],
            'country-type' => [
				'de' => 'In welchem Land leben Sie gerade?',
				'en' => 'In which country do you life ?',
			],
            'firstname-input' => [
				'de' => 'Geben Sie Ihren Vornamen an.',
				'en' => 'Input your firstname',
			],
            'lastname-input' => [
				'de' => 'Geben Sie Ihren Nachname an.',
				'en' => 'Input your lastname',
			],
            'born-input' => [
				'de' => 'Wann sind Sie geboren',
				'en' => 'When you are born ?',
			],
            'city-input' => [
				'de' => 'Wie heißt ihr Wohnort',
				'en' => 'In which city do you life ?',
			],
            'zip-code' => [
				'de' => 'Geben Sie Ihre Postleitzahl an.',
				'en' => 'Input your ZIP Code',
			],
            'adress-input' => [
				'de' => 'Wie heißt Ihre Straße und Hausnummer ?.',
				'en' => 'Input your Street-name and house-number',
			],
            'register-btn' => [
				'de' => 'Ich möchte meinen Account erstellen.',
				'en' => 'I want proceed the registration.',
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
